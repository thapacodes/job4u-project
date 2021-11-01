@extends('layouts.web')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded-0">
                <div class="card-header fw-600 fs-20">Verify Your Email Address</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            A fresh verification link has been sent to your email address.
                        </div>
                    @endif
                        <p class="p-0 m-0">
                            Before proceeding, please check your email for a verification link. If you did not receive the email
                        </p>,
                    <form class="m-0 p-0" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger rounded-0">click here to request another</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection