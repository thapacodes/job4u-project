<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ApplyForJob;
use App\Models\Notification;
use App\Models\Job;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ManageJobApplicants extends Component
{
    public $search;
    public $user_id;
    public $jobid;
    public $what_search = 'name';

    use WithPagination;

    protected $queryString = [
        'search' => ['except'=> ''],
    ];

    public function updatedSearch() {
        $this->resetPage();
    }

    public function delete($id) {
        DB::table('apply_for_jobs')->where('id', $id)->delete();
        session()->flash('page-message', 'Applicant Remove For the Job');
        $title = Job::where('id', $this->jobid)->first()->title;
        Notification::create([
            'message' => 'We are sorry to inform you that application for the title <strong>'.$title.'</strong> has been rejected.',
            'notification_for' => $this->user_id,
            'status' => null,
        ]);
        $this->mount();
        $this->render();
    }

    public function approved($id) {
        $status = ApplyForJob::where('id', $id)->get()[0]['status'];
        $title = Job::where('id', $this->jobid)->first()->title;
        $uploadedBy = Job::where('id', $this->jobid)->first()->uploaded_by;
        $company_url = Company::where('id', $uploadedBy)->first()->url;
        if ($status != 'approve') {
            DB::table('apply_for_jobs')->where('id', $id)->update(['status' => 'approve']);
            session()->flash('approve-message', 'Applicant Approved');
            Notification::create([
                'message' => 'Your application has for the title <strong>'.$title.'</strong> been accepted. To know further please contact us at our <a href="'.$company_url.'">company website.</a>',
                'notification_for' => $this->user_id,
                'status' => null,
            ]);
        }
        else {
            DB::table('apply_for_jobs')->where('id', $id)->update(['status' => null]);
            session()->flash('approve-message', 'Applicant Rejected');
            Notification::create([
                'message' => 'Your application for title <strong>'.$title.'</strong> is in review',
                'notification_for' => $this->user_id,
                'status' => null,
            ]);
        }
        $this->mount();
        $this->render();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.manage-job-applicants', [
            'pageArray' => ApplyForJob::where($this->what_search, 'like', $search)->paginate(10),
        ]);
    }
}
