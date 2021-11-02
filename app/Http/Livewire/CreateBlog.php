<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Blog;

class CreateBlog extends Component
{
    use WithFileUploads;
    public $title;
    public $category;
    public $file;
    public $description = 'Write some description';
    protected $rules = [
        'title' => 'required|unique:blogs,title|min:6|max:255',
        'category' => 'required|min:6|max:255',
        'file' => 'required|image|max:1024', // 1MB Max
        'description' => 'required|min:2|max:4294967200',
    ];

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function submit() {
        $this->validate();

        $slug = preg_replace('/\s+/', '-', $this->title);

        $path = $this->file->store('pictures/blog', 'custom');
        $path = route('home').'/uploads'.'/'.$path;
        
        Blog::create([
            'thumbnail' => $path,
            'title' => $this->title,
            'category' => $this->category,
            'description' => $this->description,
            'slug' => $slug,
            'status' => null,
        ]);

        session()->flash('page-message', 'Blog post successfully added.');
    }

    public function render()
    {
        return view('livewire.create-blog');
    }
}
