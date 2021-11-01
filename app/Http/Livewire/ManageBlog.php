<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ManageBlog extends Component
{
    public $search;
    public $what_search = 'title';

    use WithPagination;

    protected $queryString = [
        'search' => ['except'=> ''],
    ];

    public function updatedSearch() {
        $this->resetPage();
    }

    public function delete($id) {
        DB::table('blogs')->where('id', $id)->delete();
        session()->flash('page-message', 'Blog post successfully deleted.');
        $this->mount();
        $this->render();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.manage-blog', [
            'pageArray' => Blog::where($this->what_search, 'like', $search)->paginate(10),
        ]);
    }
}
