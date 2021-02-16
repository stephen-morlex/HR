<?php

namespace App\Http\Livewire\Meetings;

use App\Models\MeetingType as ModelsMeetingType;
use Livewire\Component;
use Livewire\WithPagination;

class MeetingType extends Component
{

    use WithPagination;
    public $meeting_type_id, $name;
    public $totalMeetingTypes;

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
        $this->totalMeetingTypes = ModelsMeetingType::all();
        return view('livewire.meetings.meeting-type', [
            'meetingTypes' => \App\Models\MeetingType::search($this->search)
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

        $this->meeting_type_id = $id;
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
        $this->meeting_type_id = '';
    }

    protected $rules = [
        'name' => 'required|min:3',
    ];

    public function store()
    {

        $this->validate();
        ModelsMeetingType::updateOrCreate(['id' => $this->meeting_type_id], [
            'name' => $this->name,
        ]);
        session()->flash(
            'message',
            $this->meeting_type_id ? 'Meeting Type Update Successfully.' : 'Meeting Type Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $meeting = ModelsMeetingType::findOrFail($id);
        $this->meeting_type_id = $id;
        $this->name = $meeting->name;
        $this->openModal();
    }

    public function delete()
    {
        ModelsMeetingType::destroy($this->meeting_type_id);
        session()->flash('message', 'Meeting Type Deleted Successfully.');
        $this->closeDeleteModal();
    }

    // Department Export

    public function export()
    {
        // return Excel::download(new AwardExport, 'award.xlsx');
    }
}
