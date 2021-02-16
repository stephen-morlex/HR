<?php

namespace App\Http\Livewire\Branches;

use App\Exports\BranchExport;
use App\Models\Branch;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Branches extends Component
{
    use WithPagination;
    public $branch_id, $name;
    public $totalBranches;

    public $isOpen = 0;
    public $deleteModal = 0;


    public $perPage = 5;
    public $sortField;
    public $sortAsc = true;
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
        $this->totalBranches = Branch::all();
        return view('livewire.branches.branches', [
            'branches' => \App\Models\Branch::search($this->search)
                // ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
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
        $this->branch_id = $id;
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
        $this->branch_id = '';
    }

    protected $rules = [
        'name' => 'required|min:3',
    ];

    public function store()

    {
        $this->validate();
        Branch::updateOrCreate(['id' => $this->branch_id], [
            'name' => $this->name,
        ]);
        session()->flash(
            'message',
            $this->branch_id ? 'Branch Updated Successfully.' : 'Branch Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $branch = Branch::findOrFail($id);
        $this->branch_id = $id;
        $this->name = $branch->name;
        $this->openModal();
    }

    public function delete()
    {
        Branch::destroy($this->branch_id);
        session()->flash('message', 'Branch Deleted Successfully.');
        $this->closeDeleteModal();
    }

    // Export Branch

    public function export()
    {
        return Excel::download(new BranchExport, 'branch.xlsx');
    }
}
