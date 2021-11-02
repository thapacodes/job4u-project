<nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand fs-30 fw-700" href="{{ env('APP_URL') }}">Job4u</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <div class="me-auto"></div>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown my-2 my-md-0">
                    <a class="nav-link dropdown-toggle text-black fw-500 fs-45" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Community
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ env('APP_URL') }}/blog">Blog Post</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Youtube
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Twitter
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown my-2 my-md-0">
                    <a class="nav-link dropdown-toggle text-black fw-500 fs-45" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Job Seekers
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ env('APP_URL') }}/job">Browse Jobs</a></li>
                </li>
                <li><a class="dropdown-item" href="{{ env('APP_URL') }}/all-companies">All Companies</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ env('APP_URL') }}/learning-portal">Learning Portal</a>
                </li>
            </ul>
            </li>
            <li class="nav-item dropdown my-2 my-md-0">
                <a class="nav-link dropdown-toggle text-black fw-500 fs-45" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Employers
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ env('APP_URL') }}/post-a-job">Post a Job</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ env('APP_URL') }}/why-choose-job4u">Why Choose Job4u
                            ?</a></li>
                    <li><a class="dropdown-item" href="{{ env('APP_URL') }}/job4u-faq">Job4u FAQ</a></li>
                </ul>
            </li>
            <li class="nav-item mb-3 mb-md-0">
                <a class="nav-link text-black fw-500 fs-15 mx-2 me-3" href="{{ env('APP_URL') }}/search">
                    <svg class="search-icon" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5 11H11.71L11.43 10.73C12.41 9.59 13 8.11 13 6.5C13 2.91 10.09 0 6.5 0C2.91 0 0 2.91 0 6.5C0 10.09 2.91 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11V11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z"
                            fill="black" />
                    </svg>
                </a>
            </li>
            <li class="nav-item"">
                @if (Auth::user())
                <div class="dropdown">
                    <button class="btn btn-danger rounded-0 dropdown-toggle d-flex align-items-center" type="button"
                        id="admin-user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        @if (Auth::user()['avater'] == null || Auth::user()['avater'] == '')
                            <svg class="me-2" width="14" height="14" viewBox="0 0 22 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.3714 5.76904C15.1766 8.39549 13.1856 10.5381 10.9998 10.5381C8.81394 10.5381 6.81939 8.39598 6.62813 5.76904C6.42942 3.03678 8.36685 1 10.9998 1C13.6327 1 15.5701 3.08645 15.3714 5.76904Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M10.9998 13.7174C6.67781 13.7174 2.29129 16.1019 1.47956 20.6027C1.3817 21.1452 1.6887 21.6658 2.25652 21.6658H19.743C20.3113 21.6658 20.6183 21.1452 20.5204 20.6027C19.7082 16.1019 15.3217 13.7174 10.9998 13.7174Z"
                                    stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                            </svg>
                        @else
                            <img width="14" height="14" class="rounded-circle" src="{{ Auth::user()['avater'] }}"
                                alt="profile image" aria-placeholder="profile image" />
                        @endif
                        <span>{{ explode(' ', Auth::user()['name'])[0] }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark rounded-0" aria-labelledby="admin-user-dropdown">
                        @if (Auth::user()['role'] == 'admin')
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard">Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ env('APP_URL') }}/dashboard/change-password">Change
                                    Password</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ env('APP_URL') }}/dashboard/update-profile-picture">Update
                                    Profile Picture</a></li>
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard/update-profile">Update
                                    Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="dropdown-item">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @elseif (Auth::user()['role'] == 'employeer')
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/post-a-job">Post a Job</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ env('APP_URL') }}/dashboard/update-company-profile">Update
                                    Company Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ env('APP_URL') }}/dashboard/change-password">Change
                                    Password</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ env('APP_URL') }}/dashboard/update-profile-picture">Update
                                    Profile Picture</a></li>
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard/update-resume">Update
                                    Resume</a></li>
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard/update-profile">Update
                                    Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="dropdown-item">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @elseif (Auth::user()['role'] == 'job-seeker')
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard">Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ env('APP_URL') }}/dashboard/change-password">Change
                                    Password</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ env('APP_URL') }}/dashboard/update-profile-picture">Update
                                    Profile Picture</a></li>
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard/update-resume">Update
                                    Resume</a></li>
                            <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard/update-profile">Update
                                    Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="dropdown-item">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endif
                    </ul>

                </div>
            @else
                <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle rounded-0" type="button" id="dropdownMenuButton2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="{{ env('APP_URL') }}/login">Login</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ env('APP_URL') }}/register">Register</a></li>
                    </ul>
                </div>
                @endif
            </li>
            </ul>
        </div>
    </div>
</nav>
