<?php

namespace App\Http\Livewire\Trainings;

use App\Models\TrainingType as ModelsTrainingType;
use Livewire\Component;
use Livewire\WithPagination;

class TrainingType extends Component
{
    use WithPagination;
    public $training_type_id, $name;
    public $totalTrainingTypes;

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
        $this->totalTrainingTypes = ModelsTrainingType::all();
        return view('livewire.trainings.training-type', [
            'trainingTypes' => \App\Models\TrainingType::search($this->search)
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
        $this->training_type_id = $id;
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
        $this->training_type_id = '';
    }

    protected $rules = [
        'name' => 'required|min:3',
    ];

    public function store()
    {

        $this->validate();
        ModelsTrainingType::updateOrCreate(['id' => $this->training_type_id], [
            'name' => $this->name,
        ]);
        session()->flash(
            'message',
            $this->training_type_id ? 'Training Type Update Successfully.' : 'Training Type Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $leavetype = ModelsTrainingType::findOrFail($id);
        $this->training_type_id = $id;
        $this->name = $leavetype->name;
        $this->openModal();
    }

    public function delete()
    {
        ModelsTrainingType::destroy($this->training_type_id);
        session()->flash('message', 'Training Type Deleted Successfully.');
        $this->closeDeleteModal();
    }

    // Department Export

    public function export()
    {
        // return Excel::download(new LeaveTypeExport, 'leave-type.xlsx');
    }
}
