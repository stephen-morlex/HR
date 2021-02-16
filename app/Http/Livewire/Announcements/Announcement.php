<?php

namespace App\Http\Livewire\Announcements;

use App\Exports\AnnouncementExport;
use App\Models\Announcement as ModelsAnnouncement;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Announcement extends Component
{
    use WithPagination;
    public $announcement_id, $name, $start_date, $end_date, $description;
    public $totalAnnouncement;

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
        $this->totalAnnouncement = ModelsAnnouncement::all();
        return view('livewire.announcements.announcement', [
            'announcements' => \App\Models\Announcement::search($this->search)
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

        $this->announcement_id = $id;
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
        $this->start_date = '';
        $this->end_date = '';
        $this->description = '';
        $this->announcement_id = '';
    }

    protected $rules = [
        'name' => 'required|min:3',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'description' => 'required|min:5',
    ];

    public function store()
    {

        $this->validate();
        ModelsAnnouncement::updateOrCreate(['id' => $this->announcement_id], [
            'name' => $this->name,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'description' => $this->description,
        ]);
        session()->flash(
            'message',
            $this->announcement_id ? 'Announcement Update Successfully.' : 'Announcement Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $annoucement = ModelsAnnouncement::findOrFail($id);
        $this->announcement_id = $id;
        $this->name = $annoucement->name;
        $this->start_date = $annoucement->start_date;
        $this->end_date = $annoucement->end_date;
        $this->description = $annoucement->description;
        $this->openModal();
    }

    public function delete()
    {
        ModelsAnnouncement::destroy($this->announcement_id);
        session()->flash('message', 'Announcement Deleted Successfully.');
        $this->closeDeleteModal();
    }

    // Announcement Export

    public function export()
    {
        return Excel::download(new AnnouncementExport, 'announcement.xlsx');
    }
}
