<?php

namespace App\Http\Livewire\Leaves;

use App\Exports\LeaveTypeExport;
use App\Models\LeaveType;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Leaves extends Component
{
    use WithPagination;
    public $leave_type_id, $name, $days;
    public $totalLeaveTypes;

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
        $this->totalLeaveTypes = LeaveType::all();
        return view('livewire.leaves.leaves', [
            'leaveTypes' => \App\Models\LeaveType::search($this->search)
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
        $this->leave_type_id = $id;
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
        $this->leave_type_id = '';
    }

    protected $rules = [
        'name' => 'required|min:3',
        'days' => 'required|numeric'
    ];

    public function store()
    {

        $this->validate();
        LeaveType::updateOrCreate(['id' => $this->leave_type_id], [
            'name' => $this->name,
            'days' => $this->days,
        ]);
        session()->flash(
            'message',
            $this->leave_type_id ? 'Leave Type Update Successfully.' : 'Leave Type Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $leavetype = LeaveType::findOrFail($id);
        $this->leave_type_id = $id;
        $this->name = $leavetype->name;
        $this->days = $leavetype->days;
        $this->openModal();
    }

    public function delete()
    {
        LeaveType::destroy($this->leave_type_id);
        session()->flash('message', 'Level Type Deleted Successfully.');
        $this->closeDeleteModal();
    }

    // Department Export

    public function export()
    {
        return Excel::download(new LeaveTypeExport, 'leave-type.xlsx');
    }
}
