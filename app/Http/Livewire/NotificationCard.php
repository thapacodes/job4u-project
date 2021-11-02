<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class NotificationCard extends Component
{
    public $search;
    use WithPagination;

    protected $queryString = [
        'search' => ['except'=> ''],
    ];

    public function updatedSearch() {
        $this->resetPage();
    }

    public function delete($id) {
        DB::table('notifications')->where('id', $id)->delete();
        session()->flash('page-message', 'Notification Removed');
        $this->mount();
        $this->render();
    }

    public function approved($id) {
        $status = Notification::where('id', $id)->first()->status;
        if ($status != 'read') {
            DB::table('notifications')->where('id', $id)->update(['status' => 'read']);
        }
        else {
            DB::table('notifications')->where('id', $id)->update(['status' => null]);
        }
        $this->mount();
        $this->render();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.notification-card', [
            'pageArray' => Notification::where('message', 'like', $search)->orderBy('id', 'DESC')->paginate(10),
        ]);
    }
}
