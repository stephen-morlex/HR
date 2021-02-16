<?php

namespace App\Http\Livewire\Awards;

use App\Exports\AwardExport;
use App\Models\Award;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Awards extends Component
{
    use WithPagination;
    public $award_id, $name;
    public $totalAwards;

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
        $this->totalAwards = Award::all();
        return view('livewire.awards.awards', [
            'awards' => \App\Models\Award::search($this->search)
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
        $this->award_id = $id;
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
        $this->award_id = '';
    }

    protected $rules = [
        'name' => 'required|min:3',
    ];

    public function store()
    {

        $this->validate();
        Award::updateOrCreate(['id' => $this->award_id], [
            'name' => $this->name,
        ]);
        session()->flash(
            'message',
            $this->award_id ? 'Award Update Successfully.' : 'Award Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $award = Award::findOrFail($id);
        $this->award_id = $id;
        $this->name = $award->name;
        $this->openModal();
    }

    public function delete()
    {
        Award::destroy($this->award_id);
        session()->flash('message', 'Award Deleted Successfully.');
        $this->closeDeleteModal();
    }

    // Department Export

    public function export()
    {
        return Excel::download(new AwardExport, 'award.xlsx');
    }
}
