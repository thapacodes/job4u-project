<footer class="mt-5">
    <div class="bg-black py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <a class="text-white text-decoration-none display-6 fw-700" href="{{ env('APP_URL') }}">Job4u</a>
                    <p class="m-0 my-3 text-white">
                        We strongly encourage employers to embrace diversity, equity, and inclusion as fundamental
                        values when hiring through Job4u.
                    </p>
                    <a href="{{ env('APP_URL') }}/contact"
                        class="text-danger text-decoration-none fw-500 d-flex align-items-center fs-20">
                        <span class="me-2">Get in touch</span>
                        <svg width="20" height="20" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.437 27.211L23.3775 8.3929L0.824861 11.9924L4.55446 17.9161L18.3047 11.5969L6.69049 21.298L10.437 27.211Z"
                                fill="#DC3545" />
                        </svg>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="text-end">
                        @php
                            $job_count = count(\App\Models\Job::all()->pluck('id'));

                        @endphp
                        <h2 class="display-5 fw-700 text-white">{{ $job_count }}</h2>
                        <p class="fs-20 text-white fs-500 m-0 mt-2 mb-3">jobs posted</p>
                        <a class="btn btn-lg btn-danger rounded-0" href="{{ env('APP_URL') }}/post-a-job">Post a job for
                            free</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-secondary py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 my-2 my-lg-0"><a href="{{ env('APP_URL') }}/all-companies"
                        class="text-decoration-none text-white">All Companies</a></div>
                <div class="col-lg-2 my-2 my-lg-0"><a href="{{ env('APP_URL') }}/job4u-faq"
                        class="text-decoration-none text-white">Job4u FAQ</a></div>
                <div class="col-lg-2 my-2 my-lg-0"><a href="{{ env('APP_URL') }}/learning-portal"
                        class="text-decoration-none text-white">Learning Portal</a></div>
                <div class="col-lg-2 my-2 my-lg-0"><a href="{{ env('APP_URL') }}/newsletter"
                        class="text-decoration-none text-white">Newsletter</a></div>
                <div class="col-lg-2 my-2 my-lg-0"><a href="{{ env('APP_URL') }}/blog"
                        class="text-decoration-none text-white">Blog</a></div>
            </div>
        </div>
    </div>
    <div class="bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 my-2 my-lg-0">Copyright &copy; 2021</div>
                <div class="col-lg-1 my-2 my-lg-0"><a href="{{ env('APP_URL') }}/terms"
                        class="text-decoration-none text-black">Terms</a></div>
                <div class="col-lg-1 my-2 my-lg-0"><a href="{{ env('APP_URL') }}/privacy"
                        class="text-decoration-none text-black">Privacy</a></div>
                <div class="col-lg-3 my-2 my-lg-0"><a href="{{ env('APP_URL') }}/all-companies"
                        class="text-decoration-none text-black">Why choose Job4u ?</a></div>
                <div class="col-lg-4 my-2 my-lg-0 text-end">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="text-decoration-none">
                            <svg width="18" height="18" viewBox="0 0 171 170" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M171 85.5135C171 38.2902 132.716 0 85.5 0C38.2842 0 0 38.2902 0 85.5135C0 128.194 31.2609 163.571 72.1406 169.992V110.24H50.4259V85.5135H72.1406V66.6738C72.1406 45.2458 84.9084 33.3999 104.436 33.3999C113.791 33.3999 123.578 35.072 123.578 35.072V56.1182H112.791C102.176 56.1182 98.8556 62.7073 98.8556 69.4797V85.5135H122.567L118.78 110.24H98.8594V170C139.739 163.583 171 128.205 171 85.5135V85.5135Z"
                                    fill="black" />
                            </svg>
                        </a>
                        <a href="#" class="text-decoration-none mx-3">
                            <svg width="20" height="20" viewBox="0 0 174 131" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M172.882 28.925C172.882 13.5738 161.632 1.22468 147.73 1.22468C128.901 0.341135 109.697 0 90.072 0H83.9541C64.3766 0 45.139 0.341136 26.3093 1.22809C12.4419 1.22809 1.19167 13.6455 1.19167 28.9966C0.341953 41.1377 -0.0183263 53.2821 0.00206688 65.4266C-0.0319218 77.571 0.353283 89.7269 1.15768 101.894C1.15768 117.245 12.4079 129.697 26.2753 129.697C46.0567 130.618 66.3479 131.027 86.979 130.993C107.644 131.061 127.879 130.629 147.683 129.697C161.584 129.697 172.834 117.245 172.834 101.894C173.65 89.7155 174.024 77.571 173.99 65.3925C174.067 53.248 173.698 41.0922 172.882 28.925ZM70.3586 98.8921V31.8587L119.642 65.3584L70.3586 98.8921Z"
                                    fill="black" />
                            </svg>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <svg width="20" height="20" viewBox="0 0 186 149" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M186 17.655C179.023 20.6906 171.641 22.6906 164.087 23.5917C172.025 18.9369 177.995 11.542 180.877 2.79381C173.372 7.18848 165.174 10.272 156.635 11.9123C153.04 8.13889 148.715 5.13707 143.925 3.08926C139.135 1.04145 133.979 -0.00957372 128.77 6.57089e-05C107.682 6.57089e-05 90.6169 16.8401 90.6169 37.5992C90.6019 40.4867 90.9324 43.3656 91.6011 46.1744C76.4797 45.4646 61.6727 41.6019 48.1274 34.8336C34.5822 28.0652 22.597 18.5403 12.9386 6.86801C9.55023 12.5879 7.75826 19.1141 7.75 25.7646C7.75 38.802 14.5429 50.3262 24.8 57.0778C18.7229 56.9333 12.7704 55.3227 7.44775 52.3827V52.8483C7.44775 71.0853 20.6227 86.2568 38.0602 89.7102C34.7812 90.5855 31.4021 91.029 28.0085 91.0295C25.6005 91.0337 23.198 90.7997 20.8359 90.331C25.6835 105.27 39.7924 116.134 56.5053 116.445C42.9248 126.925 26.2516 132.589 9.10625 132.548C6.06289 132.543 3.02237 132.362 0 132.004C17.4421 143.157 37.7171 149.056 58.4118 149C128.689 149 167.082 91.6891 167.082 41.9838C167.082 40.3541 167.04 38.7244 166.962 37.1335C174.414 31.8257 180.861 25.2295 186 17.655V17.655Z"
                                    fill="black" />
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
