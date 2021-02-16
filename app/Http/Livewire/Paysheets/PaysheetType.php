<?php

namespace App\Http\Livewire\Paysheets;

use App\Models\PaysheetType as ModelsPaysheetType;
use Livewire\Component;
use Livewire\WithPagination;

class PaysheetType extends Component
{

    use WithPagination;
    public $paysheet_type_id, $name;
    public $totalPaysheetTypes;

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
        $this->totalPaysheetTypes = ModelsPaysheetType::all();
        return view('livewire.paysheets.paysheet-type', [
            'paysheetTypes' => \App\Models\PaysheetType::search($this->search)
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
        // $this->name = $branch->name;
        $this->paysheet_type_id = $id;
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
        $this->paysheet_type_id = '';
    }

    protected $rules = [
        'name' => 'required|min:3',
    ];

    public function store()
    {

        $this->validate();
        ModelsPaysheetType::updateOrCreate(['id' => $this->paysheet_type_id], [
            'name' => $this->name,
        ]);
        session()->flash(
            'message',
            $this->paysheet_type_id ? 'Paysheet Type Update Successfully.' : 'Paysheet Type Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $award = ModelsPaysheetType::findOrFail($id);
        $this->paysheet_type_id = $id;
        $this->name = $award->name;
        $this->openModal();
    }

    public function delete()
    {
        ModelsPaysheetType::destroy($this->paysheet_type_id);
        session()->flash('message', 'Paysheet Type Deleted Successfully.');
        $this->closeDeleteModal();
    }

    // Department Export

    public function export()
    {
        // return Excel::download(new AwardExport, 'award.xlsx');
    }
}
