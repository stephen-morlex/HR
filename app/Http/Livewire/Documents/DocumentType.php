<?php

namespace App\Http\Livewire\Documents;

use App\Models\DocumentType as ModelsDocumentType;
use Livewire\Component;
use Livewire\WithPagination;

class DocumentType extends Component
{
    use WithPagination;
    public $doc_type_id, $name;
    public $totalDocumentTypes;

    public $isOpen = 0;
    public $deleteModal = 0;

    //Sortable variables
    public $perPage = 5;
    public $sortField = "created_at";
    public $sortAsc = false;
    public $search = '';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function render()
    {
        $this->totalDocumentTypes = ModelsDocumentType::all();
        return view('livewire.documents.document-type', [
            'documentTypes' => \App\Models\DocumentType::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
    }
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function confrimDeleteModal($id)
    {

        $this->doc_type_id = $id;
        $this->confrimDelete();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()

    {
        $this->isOpen = false;
    }
    public function confrimDelete()
    {
        $this->deleteModal = true;
    }
    public function closeDeleteModal()
    {
        $this->deleteModal = false;
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->doc_type_id = '';
    }

    protected $rules = [
        'name' => 'required|min:3',
    ];

    public function store()
    {

        $this->validate();
        ModelsDocumentType::updateOrCreate(['id' => $this->doc_type_id], [
            'name' => $this->name,
        ]);
        session()->flash(
            'message',
            $this->doc_type_id ? 'Document Type Update Successfully.' : 'Document Type Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $award = ModelsDocumentType::findOrFail($id);
        $this->doc_type_id = $id;
        $this->name = $award->name;
        $this->openModal();
    }

    public function delete()
    {
        ModelsDocumentType::destroy($this->doc_type_id);
        session()->flash('message', 'Document Type Deleted Successfully.');
        $this->closeDeleteModal();
    }

    // Department Export

    public function export()
    {
        // return Excel::download(new AwardExport, 'award.xlsx');
    }
}
