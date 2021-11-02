<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Company;
use Illuminate\Support\Str;

class UpdateCompanyProfile extends Component
{
    use WithFileUploads;
    public $name;
    public $hq;
    public $file;
    public $url;
    public $user_id;
    public $description = 'Write some description';

    protected $rules = [
        'name' => 'nullable|max:255',
        'hq' => 'nullable|max:255',
        'file' => 'nullable|image|max:1024', // 1MB Max
        'url' => 'nullable|max:255',
        'description' => 'nullable|max:4294967200',
    ];

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function submit() {
        $this->validate();

        $slug = preg_replace('/\s+/', '-', $this->name).'-'.Str::random(10);

        $company_id = Company::where('uploaded_by', $this->user_id)->first
        ();
        if ($company_id != null) {
            $company = Company::find($company_id->id);

            if ($_FILES['file']['size'] != 0) {
                $path = $this->file->store('pictures/job', 'custom');
                $path = route('home').'/uploads'.'/'.$path;
                $company->logo = $path;
            }

            $company->name = is_null($this->name) ? $company->name : $this->name;
            $company->slug = is_null($this->name) ? $company->slug : $slug;
            $company->hq = is_null($this->hq) ? $company->hq : $this->hq;
            $company->url = is_null($this->url) ? $company->url : $this->url;
            $company->description = is_null($this->description) ? $company->description : $this->description;

            

            $company->save();

            session()->flash('page-message', 'Company Profile Successfully Updated.');
        }
        else {
            session()->flash('page-message', 'You can not update company details for this user');
        }
    }

    public function render()
    {
        return view('livewire.update-company-profile');
    }
}
