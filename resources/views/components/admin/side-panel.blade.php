@if (Auth::user()['role'] == 'admin')
    <nav class="bg-danger w-100 sticky-top" style="height: 100vh">
        <div>
            <div class="d-flex align-items-center" style="background-color: firebrick; height: 59px;">
                <div class="container-fluid">
                    <a href="{{ env('APP_URL') }}" class="text-decoration-none fw-700 text-white fs-20">Job4u Admin</a>
                </div>
            </div>
            <div class="container-fluid">
                <div class="my-2">
                    <a href="{{ env('APP_URL') }}/dashboard"
                        class="text-decoration-none text-white hoverable">Dashboard</a>
                </div>
                @php
                    $currentUrl = explode('/dashboard', Request::url());
                @endphp
                @if (count($currentUrl) >= 2)
                    <div @if ($currentUrl[1] == '/manage-user' || $currentUrl[1] == '/manage-job-post' || $currentUrl[1] == '/manage-job-applicants' || $currentUrl[1] == '/manage-job-newsletters' || $currentUrl[1] == '/manage-contact')
                        x-data="{ active: 1 }"
                    @elseif(
                        $currentUrl[1] == '/create-blog-post' ||
                        $currentUrl[1] == '/manage-blog-post'
                        )
                        x-data="{ active: 2 }"
                    @elseif (
                        $currentUrl[1] == '/create-faq' ||
                        $currentUrl[1] == '/manage-faq'
                        )
                        x-data="{ active: 3 }"
                    @elseif (
                        $currentUrl[1] == '/create-new-page' ||
                        $currentUrl[1] == '/manage-pages'
                        )
                        x-data="{ active: 4 }"
                    @elseif (
                        $currentUrl[1] == '/add-learning-portal' ||
                        $currentUrl[1] == '/manage-learning-portal'
                        )
                        x-data="{ active: 5 }"
                    @else
                        x-data="{ active: 0 }"
                @endif
                >
                <div class="my-2">
                    <a type="button" @click="active = 1" class="text-decoration-none text-white hoverable">
                        <span>Manage Content</span>
                        <svg x-show="active !== 1" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.41 0L6 4.58L10.59 0L12 1.41L6 7.41L0 1.41L1.41 0Z" fill="white" />
                        </svg>
                        <svg x-cloak x-show="active === 1" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.59 7.41L6 2.83L1.41 7.41L0 6L6 3.8147e-06L12 6L10.59 7.41Z" fill="white" />
                        </svg>
                    </a>
                    <div x-cloak x-show="active === 1" class="bg-white rounded-2 mt-2 p-1 px-2">
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-user"
                                class="text-decoration-none text-black hoverable">Manage User</a></div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-job-post"
                                class="text-decoration-none text-black hoverable">Manage Job Post</a></div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-job-newsletters"
                                class="text-decoration-none text-black hoverable">Manage Newsletters</a>
                        </div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-contact"
                                class="text-decoration-none text-black hoverable">Manage Contact</a></div>
                    </div>
                </div>
                <div class="my-2">
                    <a type="button" @click="active = 2" class="text-decoration-none text-white hoverable">
                        <span>Blog</span>
                        <svg x-show="active !== 2" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.41 0L6 4.58L10.59 0L12 1.41L6 7.41L0 1.41L1.41 0Z" fill="white" />
                        </svg>
                        <svg x-cloak x-show="active === 2" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.59 7.41L6 2.83L1.41 7.41L0 6L6 3.8147e-06L12 6L10.59 7.41Z" fill="white" />
                        </svg>
                    </a>
                    <div x-cloak x-show="active === 2" class="bg-white rounded-2 mt-2 p-1 px-2">
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/create-blog-post"
                                class="text-decoration-none text-black hoverable">Create Blog Post</a></div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-blog-post"
                                class="text-decoration-none text-black hoverable">Manage Blog Post</a></div>
                    </div>
                </div>
                <div class="my-2">
                    <a type="button" @click="active = 6" class="text-decoration-none text-white hoverable">
                        <span>Job Applicants</span>
                        <svg x-show="active !== 6" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.41 0L6 4.58L10.59 0L12 1.41L6 7.41L0 1.41L1.41 0Z" fill="white" />
                        </svg>
                        <svg x-cloak x-show="active === 6" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.59 7.41L6 2.83L1.41 7.41L0 6L6 3.8147e-06L12 6L10.59 7.41Z" fill="white" />
                        </svg>
                    </a>
                    <div x-cloak x-show="active === 6" class="bg-white rounded-2 mt-2 p-1 px-2">
                        @php
                            $jobapplicants = \App\Models\ApplyForJob::select('job_id', 'name')
                                ->distinct()
                                ->get();
                        @endphp
                        @if (count($jobapplicants) != 0)
                            @foreach ($jobapplicants as $jobapplicant)
                                <div class="my-2"><a
                                        href="{{ env('APP_URL') }}/dashboard/job/{{ $jobapplicant->job_id }}"
                                        class="text-decoration-none text-black hoverable">
                                        <span>{{ \App\Models\Job::where('id', $jobapplicant->job_id)->first()->title }}</span>
                                        <small class="d-block">(Posted By {{ $jobapplicant->name }})</small>
                                    </a></div>
                            @endforeach
                        @else
                            <div class="my-2"><a class="text-decoration-none text-black hoverable">No
                                    Applicants Found</a></div>
                        @endif
                    </div>
                </div>
                <div class="my-2">
                    <a type="button" @click="active = 3" class="text-decoration-none text-white hoverable">
                        <span>FAQ</span>
                        <svg x-show="active !== 3" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.41 0L6 4.58L10.59 0L12 1.41L6 7.41L0 1.41L1.41 0Z" fill="white" />
                        </svg>
                        <svg x-cloak x-show="active === 3" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.59 7.41L6 2.83L1.41 7.41L0 6L6 3.8147e-06L12 6L10.59 7.41Z" fill="white" />
                        </svg>
                    </a>
                    <div x-cloak x-show="active === 3" class="bg-white rounded-2 mt-2 p-1 px-2">
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/create-faq"
                                class="text-decoration-none text-black hoverable">Create FAQ</a></div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-faq"
                                class="text-decoration-none text-black hoverable">Manage FAQ</a></div>
                    </div>
                </div>
                <div class="my-2">
                    <a type="button" @click="active = 4" class="text-decoration-none text-white hoverable">
                        <span>Other Page</span>
                        <svg x-show="active !== 4" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.41 0L6 4.58L10.59 0L12 1.41L6 7.41L0 1.41L1.41 0Z" fill="white" />
                        </svg>
                        <svg x-cloak x-show="active === 4" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.59 7.41L6 2.83L1.41 7.41L0 6L6 3.8147e-06L12 6L10.59 7.41Z" fill="white" />
                        </svg>
                    </a>
                    <div x-cloak x-show="active === 4" class="bg-white rounded-2 mt-2 p-1 px-2">
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/create-new-page"
                                class="text-decoration-none text-black hoverable">Create New Page</a></div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-pages"
                                class="text-decoration-none text-black hoverable">Manage Pages</a></div>
                    </div>
                </div>
                <div class="my-2">
                    <a type="button" @click="active = 5" class="text-decoration-none text-white hoverable">
                        <span>Learning Portal</span>
                        <svg x-show="active !== 5" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.41 0L6 4.58L10.59 0L12 1.41L6 7.41L0 1.41L1.41 0Z" fill="white" />
                        </svg>
                        <svg x-cloak x-show="active === 5" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.59 7.41L6 2.83L1.41 7.41L0 6L6 3.8147e-06L12 6L10.59 7.41Z" fill="white" />
                        </svg>
                    </a>
                    <div x-cloak x-show="active === 5" class="bg-white rounded-2 mt-2 p-1 px-2">
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/add-learning-portal"
                                class="text-decoration-none text-black hoverable">Add Learning Portal</a>
                        </div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-learning-portal"
                                class="text-decoration-none text-black hoverable">Manage Learning Portal</a>
                        </div>
                    </div>
                </div>
            </div>
@endif
</div>
</div>
</nav>
@elseif (Auth::user()['role'] == 'employeer')
<nav class="bg-danger w-100 sticky-top" style="height: 100vh">
    <div>
        <div class="d-flex align-items-center" style="background-color: firebrick; height: 59px;">
            <div class="container-fluid">
                <a href="{{ env('APP_URL') }}" class="text-decoration-none fw-700 text-white fs-20">Job4u Admin</a>
            </div>
        </div>
        <div class="container-fluid">
            <div class="my-2">
                <a href="{{ env('APP_URL') }}/dashboard"
                    class="text-decoration-none text-white hoverable">Dashboard</a>
            </div>
            @php
                $currentUrl = explode('/dashboard', Request::url());
            @endphp
            @if (count($currentUrl) >= 2)
                <div x-data="{ active: 0 }">
                    <div class="my-2">
                        <a type="button" @click="active = 6" class="text-decoration-none text-white hoverable">
                            <span>Job Applicants</span>
                            <svg x-show="active !== 6" width="12" height="8" viewBox="0 0 12 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.41 0L6 4.58L10.59 0L12 1.41L6 7.41L0 1.41L1.41 0Z" fill="white" />
                            </svg>
                            <svg x-cloak x-show="active === 6" width="12" height="8" viewBox="0 0 12 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.59 7.41L6 2.83L1.41 7.41L0 6L6 3.8147e-06L12 6L10.59 7.41Z" fill="white" />
                            </svg>
                        </a>
                        <div x-cloak x-show="active === 6" class="bg-white rounded-2 mt-2 p-1 px-2">
                            @php
                                $jobapplicants = \App\Models\ApplyForJob::select('job_id', 'name')
                                    ->distinct()
                                    ->get();
                            @endphp
                            @if (count($jobapplicants) != 0)
                                @foreach ($jobapplicants as $jobapplicant)
                                    @if ($jobapplicant->job_id == Auth::user()['id'])
                                        <div class="my-2"><a
                                                href="{{ env('APP_URL') }}/dashboard/job/{{ $jobapplicant->job_id }}"
                                                class="text-decoration-none text-black hoverable">
                                                <span>{{ \App\Models\Job::where('id', $jobapplicant->job_id)->first()->title }}</span>
                                                <small class="d-block">(Posted By
                                                    {{ $jobapplicant->name }})</small>
                                            </a></div>
                                    @else
                                        <div class="my-2"><a
                                                class="text-decoration-none text-black hoverable">No Applicants
                                                Found</a></div>
                                    @endif
                                @endforeach
                            @else
                                <div class="my-2"><a class="text-decoration-none text-black hoverable">No
                                        Applicants Found</a></div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</nav>
@elseif (Auth::user()['role'] == 'job-seeker')
<nav class="bg-danger w-100 sticky-top" style="height: 100vh">
    <div>
        <div class="d-flex align-items-center" style="background-color: firebrick; height: 59px;">
            <div class="container-fluid">
                <a href="{{ env('APP_URL') }}" class="text-decoration-none fw-700 text-white fs-20">Job4u Admin</a>
            </div>
        </div>
        <div class="container-fluid">
            <div class="my-2">
                <a href="{{ env('APP_URL') }}/dashboard"
                    class="text-decoration-none text-white hoverable">Dashboard</a>
            </div>
            <div class="my-2">
                <a href="{{ env('APP_URL') }}/notification"
                    class="text-decoration-none text-white hoverable">Notification</a>
            </div>
        </div>
    </div>
</nav>
@endif
