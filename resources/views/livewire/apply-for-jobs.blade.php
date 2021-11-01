<div  class="mt-3 bg-light p-2">
    <div>
        @if (session()->has('message'))

            <div class="alert alert-danger rounded-0">

                {{ session('message') }}

            </div>

        @endif
        @if ($userid == 'none')
            <p class="mb-4">
                You must Login first to apply for this job
            </p>
            <div>
                <a href="{{ env('APP_URL') }}/login" class="btn btn-danger rounded-0">Login First</a>
            </div>
        @else
            <p class="mb-3">
                Before Sending a job application we recommend you to
                complete your profile first. Make sure you do not leave
                any field empty. And be sure to check everything.
            </p>
            <a href="{{ env('APP_URL') }}/dashboard/settings" class="btn btn-danger rounded-0">Update Profile</a>
        @endif
    </div>
    <div class="mt-4">
        <button type="button" class="btn btn-secondary rounded-0" @click="open = false">Close</button>
        @if ($userid != 'none')
            <button type="button" class="btn btn-danger rounded-0" wire:click="apply">Apply</button>
        @endif
    </div>
</div>
