<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class RelatedBlogPost extends Component
{
    public $category;
    public function render()
    {
        $search = '%'.$this->category.'%';
        return view('livewire.related-blog-post', [
            'pageArray' => Blog::where('category', 'like', $search)->limit(4)->get()
        ]);
    }
}
