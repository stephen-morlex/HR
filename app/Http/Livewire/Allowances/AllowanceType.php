<?php

namespace App\Http\Livewire\Allowances;

use App\Exports\AllowanceTypeExport;
use App\Models\AllowanceType as ModelsAllowanceType;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class AllowanceType extends Component
{

    use WithPagination;
    public $allowance_id, $name;
    public $totalAllowanceTypes;

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
        $this->totalAllowanceTypes = ModelsAllowanceType::all();
        return view('livewire.allowances.allowance-type', [
            'allowanceTypes' => \App\Models\AllowanceType::search($this->search)
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
        $this->allowance_id = $id;
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
        $this->allowance_id = '';
    }

    protected $rules = [
        'name' => 'required|min:3',
    ];

    public function store()
    {

        $this->validate();
        ModelsAllowanceType::updateOrCreate(['id' => $this->allowance_id], [
            'name' => $this->name,
        ]);
        session()->flash(
            'message',
            $this->allowance_id ? 'Award Allowance Type Successfully.' : 'Allowance Type Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $award = ModelsAllowanceType::findOrFail($id);
        $this->allowance_id = $id;
        $this->name = $award->name;
        $this->openModal();
    }

    public function delete()
    {
        ModelsAllowanceType::destroy($this->allowance_id);
        session()->flash('message', 'Allowance Type Deleted Successfully.');
        $this->closeDeleteModal();
    }

    // Department Export

    public function export()
    {
        return Excel::download(new AllowanceTypeExport, 'allowance-types.xlsx');
    }
}
