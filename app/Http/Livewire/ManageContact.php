<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ManageContact extends Component
{
    public $search;
    public $what_search = 'name';

    use WithPagination;

    protected $queryString = [
        'search' => ['except'=> ''],
    ];

    public function updatedSearch() {
        $this->resetPage();
    }

    public function delete($id) {
        DB::table('contacts')->where('id', $id)->delete();
        session()->flash('page-message', 'Contact deleted.');
        $this->mount();
        $this->render();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.manage-contact', [
            'pageArray' => Contact::where($this->what_search, 'like', $search)->paginate(10),
        ]);
    }
}
