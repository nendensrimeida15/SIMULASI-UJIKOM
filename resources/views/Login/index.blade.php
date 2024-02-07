@extends('Layouts-login.index')
@section('title', 'Login')
@section('login')

<div class="my-auto page page-h">
    <div class="main-signin-wrapper">
        <div class="main-card-signin d-md-flex">
        <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
            <div class="my-auto authentication-pages">
                <div>
                    <img src="" class=" m-0 mb-4" alt="">
                    <h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
                    <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="" class="btn btn-success">Learn More</a>
                </div>
            </div>
        </div>
        <div class="sign-up-body wd-md-50p">
            <div class="main-signin-header">
                <h2>SIGN IN</h2>
                <h4>Please sign in to continue</h4>
                <form action="{{ route('post') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input id="email " name="email" type="email" class="form-control" placeholder="Enter your email" value="{{ Session::get('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input id="password " name="password" type="password" class="form-control" placeholder="Enter your password" value="{{ Session::get('password') }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </form>
            </div>
            <div class="main-signin-footer mt-3 mg-t-5">
                <p>Don't have an account? <a href="#">Create an Account</a></p>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
