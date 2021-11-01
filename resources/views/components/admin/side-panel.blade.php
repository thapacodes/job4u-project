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
                    <a href="{{ env('APP_URL') }}/dashboard" class="text-decoration-none text-white hoverable">Dashboard</a>
                </div>
                <div x-data="{ open: false }" class="my-2">
                    <a @click="open = ! open" class="text-decoration-none text-white hoverable" href="#">
                        <span>Manage Content</span>
                        <svg :class="open ? 'd-none' : ''" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.41 0L6 4.58L10.59 0L12 1.41L6 7.41L0 1.41L1.41 0Z" fill="white" />
                        </svg>
                        <svg x-cloak :class="open ? '' : 'd-none'" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.59 7.41L6 2.83L1.41 7.41L0 6L6 3.8147e-06L12 6L10.59 7.41Z" fill="white" />
                        </svg>
                    </a>
                    <div x-cloak x-show="open" x-transition class="bg-white rounded-2 mt-2 p-1 px-2">
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-user" class="text-decoration-none text-black hoverable">Manage User</a></div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-job-post" class="text-decoration-none text-black hoverable">Manage Job Post</a></div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-job-applicants" class="text-decoration-none text-black hoverable">Manage Job Applicants</a></div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-job-newsletters" class="text-decoration-none text-black hoverable">Manage Newsletters</a></div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-contact" class="text-decoration-none text-black hoverable">Manage Contact</a></div>
                    </div>
                </div>
                <div x-data="{ open: false }" class="my-2">
                    <a @click="open = ! open" class="text-decoration-none text-white hoverable" href="#">
                        <span>Blog</span>
                        <svg :class="open ? 'd-none' : ''" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.41 0L6 4.58L10.59 0L12 1.41L6 7.41L0 1.41L1.41 0Z" fill="white" />
                        </svg>
                        <svg x-cloak :class="open ? '' : 'd-none'" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.59 7.41L6 2.83L1.41 7.41L0 6L6 3.8147e-06L12 6L10.59 7.41Z" fill="white" />
                        </svg>
                    </a>
                    <div x-cloak x-show="open" x-transition class="bg-white rounded-2 mt-2 p-1 px-2">
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/create-blog-post" class="text-decoration-none text-black hoverable">Create Blog Post</a></div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-blog-post" class="text-decoration-none text-black hoverable">Manage Blog Post</a></div>
                    </div>
                </div>
                <div x-data="{ open: false }" class="my-2">
                    <a @click="open = ! open" class="text-decoration-none text-white hoverable" href="#">
                        <span>FAQ</span>
                        <svg :class="open ? 'd-none' : ''" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.41 0L6 4.58L10.59 0L12 1.41L6 7.41L0 1.41L1.41 0Z" fill="white" />
                        </svg>
                        <svg x-cloak :class="open ? '' : 'd-none'" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.59 7.41L6 2.83L1.41 7.41L0 6L6 3.8147e-06L12 6L10.59 7.41Z" fill="white" />
                        </svg>
                    </a>
                    <div x-cloak x-show="open" x-transition class="bg-white rounded-2 mt-2 p-1 px-2">
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/create-faq" class="text-decoration-none text-black hoverable">Create FAQ</a></div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-faq" class="text-decoration-none text-black hoverable">Manage FAQ</a></div>
                    </div>
                </div>
                <div x-data="{ open: false }" class="my-2">
                    <a @click="open = ! open" class="text-decoration-none text-white hoverable" href="#">
                        <span>Other Page</span>
                        <svg :class="open ? 'd-none' : ''" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.41 0L6 4.58L10.59 0L12 1.41L6 7.41L0 1.41L1.41 0Z" fill="white" />
                        </svg>
                        <svg x-cloak :class="open ? '' : 'd-none'" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.59 7.41L6 2.83L1.41 7.41L0 6L6 3.8147e-06L12 6L10.59 7.41Z" fill="white" />
                        </svg>
                    </a>
                    <div x-cloak x-show="open" x-transition class="bg-white rounded-2 mt-2 p-1 px-2">
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/create-new-page" class="text-decoration-none text-black hoverable">Create New Page</a></div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-pages" class="text-decoration-none text-black hoverable">Manage Pages</a></div>
                    </div>
                </div>
                <div x-data="{ open: false }" class="my-2">
                    <a @click="open = ! open" class="text-decoration-none text-white hoverable" href="#">
                        <span>Learning Portal</span>
                        <svg :class="open ? 'd-none' : ''" width="12" height="8" viewBox="0 0 12 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.41 0L6 4.58L10.59 0L12 1.41L6 7.41L0 1.41L1.41 0Z" fill="white" />
                        </svg>
                        <svg x-cloak :class="open ? '' : 'd-none'" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.59 7.41L6 2.83L1.41 7.41L0 6L6 3.8147e-06L12 6L10.59 7.41Z" fill="white" />
                        </svg>
                    </a>
                    <div x-cloak x-show="open" x-transition class="bg-white rounded-2 mt-2 p-1 px-2">
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/add-learning-portal" class="text-decoration-none text-black hoverable">Add Learning Portal</a></div>
                        <div class="my-2"><a href="{{ env('APP_URL') }}/dashboard/manage-learning-portal" class="text-decoration-none text-black hoverable">Manage Learning Portal</a></div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@elseif (Auth::user()['role'] == 'employeer')
@elseif (Auth::user()['role'] == 'job-seeker')
@endif
