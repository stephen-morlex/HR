<?php

namespace App\Http\Livewire\Policies;

use App\Models\Branch;
use App\Models\Document;
use App\Models\Policy;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Pocilicies extends Component
{
    use WithPagination, WithFileUploads;
    public $policy_id, $name, $branch_id, $description, $attachment;
    public $totalPolicies;
    public $branches = [];

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
        $this->totalPolicies = Policy::all();
        $this->branches = Branch::select('name', 'id')->get();
        return view('livewire.policies.pocilicies', [
            'policies' => \App\Models\Policy::search($this->search)
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
        $this->policy_id = $id;
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
        $this->attachment = '';
        $this->description = '';
        $this->policy_id = '';
    }

    protected $rules = [
        'name' => 'required|min:3',
        'description' => 'required|min:5',
        'attachment' => 'required|file||max:1024',
        'branch_id' => 'required'
    ];

    public function store()
    {
        $this->validate();
        $policy = Policy::updateOrCreate(['id' => $this->policy_id], [
            'name' => $this->name,
            'description' => $this->description,
            'branch_id' => $this->branch_id,
        ]);

        $title = md5($this->attachment . microtime()) . '.' . $this->attachment->extension();
        $this->attachment->store('attachments', $title);
        $attach = new Document([
            'name' => $this->name,
        ]);
        $policy->document()->save($attach);

        // dd($policy);
        session()->flash(
            'message',
            $this->policy_id ? 'Company Policy Updated Successfully.' : 'Company Policy Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $policy = Policy::findOrFail($id);
        $this->policy_id = $id;
        $this->name = $policy->name;
        $this->branch_id = $policy->branch_id;
        $this->attachment = $policy->attachment;
        $this->description = $policy->description;

        $this->openModal();
    }

    public function delete()
    {
        Policy::destroy($this->policy_id);
        session()->flash('message', 'Company Policy Deleted Successfully.');
        $this->closeDeleteModal();
    }

    // Department Export

    public function export()
    {
        // return Excel::download(new DesignationExport, 'designation.xlsx');
    }
}
