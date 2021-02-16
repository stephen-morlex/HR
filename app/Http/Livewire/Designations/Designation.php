<?php

namespace App\Http\Livewire\Designations;

use App\Exports\DesignationExport;
use App\Models\Department;
use App\Models\Designation as ModelsDesignation;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Designation extends Component
{
    use WithPagination;
    public $desig_id, $name, $department_id;
    public $totalDesignations;
    public $departments = [];

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
        $this->totalDesignations = ModelsDesignation::all();
        $this->departments = Department::select('name', 'id')->get();
        return view('livewire.designations.designation', [
            'designations' => \App\Models\Designation::search($this->search)
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
        $this->desig_id = $id;
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
        $this->department_id = '';
        $this->desig_id = '';
    }

    protected $rules = [
        'name' => 'required|min:3',
        'department_id' => 'required'
    ];

    public function store()
    {

        $this->validate();
        ModelsDesignation::updateOrCreate(['id' => $this->desig_id], [
            'name' => $this->name,
            'department_id' => $this->department_id,
        ]);
        session()->flash(
            'message',
            $this->desig_id ? 'Department Updated Successfully.' : 'Designation Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $designation = ModelsDesignation::findOrFail($id);
        $this->desig_id = $id;
        $this->name = $designation->name;
        $this->department_id = $designation->department_id;
        $this->openModal();
    }

    public function delete()
    {
        ModelsDesignation::destroy($this->department_id);
        session()->flash('message', 'Designation Deleted Successfully.');
        $this->closeDeleteModal();
    }

    // Department Export

    public function export()
    {
        return Excel::download(new DesignationExport, 'designation.xlsx');
    }
}
