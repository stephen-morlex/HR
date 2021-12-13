<?php

namespace App\Http\Livewire\Employees;

use App\Http\Livewire\Branches\Branches;
use App\Models\Branch;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee as ModelsEmployee;
use App\Models\Status;
use Livewire\Component;
use Livewire\WithPagination;

class Employee extends Component
{

    use WithPagination;

    // PERSONNAL INFORMATION VARIABLES 
    public $employee_id, $name, $email, $gender, $phone, $address;

    // COMPANY INFORMATION VARIABLES 
    public $branch_id, $designation_id, $department_id, $emp_number, $join, $status_id;

    // ACCOUNT INFORMATION VARIABLES 
    public $acc_name, $acc_no, $bank_name, $bank_location, $bank_branch, $tax_payer;

    // TOTAL NUMBER OF EMPLOYEES
    public $totalLeaveTypes;

    // MODLES DEFUALTS
    public $isOpen = 0;
    public $deleteModal = 0;
    public $createModel = 0;

    // MULTISTEP VAIRABLE DEFAULT
    public $currentStep = 1;

    // DATA COLLECTION
    public $branches = [], $departments = [], $designations = [], $status = [];

    //SORTABLE VARIABLES
    public $perPage = 5;
    public $sortField = "created_at";
    public $sortAsc = false;
    public $search = '';

    public function firstStep()
    {
        $validateData = $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required|min:3',
        ]);
        $this->currentStep = 2;
    }

    public function secondStep()
    {
        $validateData = $this->validate([
            'emp_number' => 'required|numeric',
            'branch_id' => 'required|numeric',
            'department_id' => 'required|numeric',
            'designation_id' => 'required|numeric',
            'status_id' => 'required|numeric',
            'join' => 'required|date'
        ]);
        $this->currentStep = 3;
    }
    public function thirdStep()
    {
        $validateData = $this->validate([
            'acc_name' => 'required|min:3',
            'bank_name' => 'required|min:3',
            'bank_location' => 'required|min:3',
            'bank_branch' => 'required|min:3',
            'tax_payer' => 'required|min:3|numeric',
            'acc_no' => 'required|numeric'
        ]);
        $this->currentStep = 4;
    }
    public function Fouthstep()
    {

        $this->store();
        $this->currentStep = 1;
    }

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
        $this->branches    = Branch::select('name', 'id')->get();
        $this->status    = Status::select('name', 'id')->get();
        $this->departments    = Department::select('name', 'id')->get();
        $this->designations   = Designation::select('name', 'id')->get();
        return view('livewire.employees.employee', [
            'employees' => \App\Models\Employee::search($this->search)
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
        $this->employee_id = $id;
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
        $this->days = '';
        $this->employee_id = '';
    }

    public function store()
    {

        // $this->validate();
        $employee = ModelsEmployee::updateOrCreate(['id' => $this->employee_id], [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'gender' => $this->email,
            'address' => $this->address,
            'join' => $this->join,
            'emp_number' => $this->emp_number,
            'branch_id' => $this->branch_id,
            'department_id' => $this->department_id,
            'designation_id' => $this->designation_id,
            'status_id' => $this->status_id,
            'acc_name' => $this->acc_name,
            'acc_no' => $this->acc_no,
            'bank_name' => $this->bank_name,
            'bank_branch' => $this->bank_branch,
            'bank_location' => $this->bank_location,
            'tax_payer' => $this->tax_payer,
        ]);
        // dd($employee);
        session()->flash(
            'message',
            $this->employee_id ? 'Employee Update Successfully.' : 'Employee Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
        $this->currentStep = 1;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function edit($id)
    {
        $leavetype = Employee::findOrFail($id);
        $this->employee_id = $id;
        $this->name = $leavetype->name;
        $this->days = $leavetype->days;
        $this->openModal();
    }

    public function delete()
    {
        LeaveType::destroy($this->employee_id);
        session()->flash('message', 'Level Type Deleted Successfully.');
        $this->closeDeleteModal();
    }

    // Department Export

    public function export()
    {
        return Excel::download(new LeaveTypeExport, 'leave-type.xlsx');
    }
}
