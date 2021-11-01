<div>
    @php
        $user_id = Auth::user()['id'];
        $name = Auth::user()['name'];
        $email = Auth::user()['email'];
        $contact = Auth::user()['contact'];
        $role = Auth::user()['role'];
        $skill = Auth::user()['skill'];
        $education = Auth::user()['education'];
        $address = Auth::user()['address'];
        $about = Auth::user()['about'];
    @endphp
    <livewire:change-profile-picture :user_id="$user_id" />
    <br>
    <br>
    <livewire:settings-general-section :user_id="$user_id" :name="$name" :email="$email" :role="$role"
        :contact="$contact" :skill="$skill" :education="$education" :about="$about" :address="$address" />
    <br>
    <br>
    <livewire:settings-password-section :user_id="$user_id" />
</div>
