<?php

namespace App\Http\Livewire\Departments;

use App\Exports\DepartmentExport;
use App\Models\Branch;
use App\Models\Department as ModelsDepartment;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Department extends Component
{
    use WithPagination;
    public $dep_id, $name, $branch_id, $item;
    public $totalDep;
    public $branches = [], $totalDepartments;

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
        $this->totalDepartments = ModelsDepartment::all();
        $this->branches = Branch::select('name', 'id')->get();
        return view('livewire.departments.department', [
            'departments' => \App\Models\Department::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
        // dd($departments);
    }


    public function updateDepartmentOrder($list)
    {
        foreach ($list as $item) {
            ModelsDepartment::find($item['value'])->update(['order' => $item['order']]);
        }
    }
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function confrimDeleteModal($id)
    {
        // $this->name = $branch->name;
        $this->dep_id = $id;
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
        $this->dep_id = '';
    }

    protected $rules = [
        'name' => 'required|min:3',
        'branch_id' => 'required'
    ];

    public function store()
    {

        $this->validate();
        ModelsDepartment::updateOrCreate(['id' => $this->dep_id], [
            'name' => $this->name,
            'branch_id' => $this->branch_id,
        ]);
        session()->flash(
            'message',
            $this->dep_id ? 'Department Department Successfully.' : 'Department Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $department = ModelsDepartment::findOrFail($id);
        $this->dep_id = $id;
        $this->name = $department->name;
        $this->branch_id = $department->branch_id;
        $this->openModal();
    }

    public function delete()
    {
        ModelsDepartment::destroy($this->dep_id);
        session()->flash('message', 'Department Deleted Successfully.');
        $this->closeDeleteModal();
    }

    // Department Export

    public function export()
    {
        return Excel::download(new DepartmentExport, 'department.xlsx');
    }
}
