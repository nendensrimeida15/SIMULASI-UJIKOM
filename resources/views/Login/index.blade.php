<<<<<<< HEAD
@extends('layout-auth.index')
=======
@extends('Layouts-login.index')
@section('title', 'Login')
>>>>>>> 1f2ac1a95ec0b2a3465757d822118dcd76596763
@section('login')

<div class="my-auto page page-h">
    <div class="main-signin-wrapper">
        <div class="main-card-signin d-md-flex">
        <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
            <div class="my-auto authentication-pages">
                <div>
<<<<<<< HEAD
                    <img src="../assets/img/brand/logo-white.png" class=" m-0 mb-4" alt="logo">
                    <h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
                    <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="index.html" class="btn btn-success">Learn More</a>
=======
                    <img src="" class=" m-0 mb-4" alt="">
                    <h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
                    <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="" class="btn btn-success">Learn More</a>
>>>>>>> 1f2ac1a95ec0b2a3465757d822118dcd76596763
                </div>
            </div>
        </div>
        <div class="sign-up-body wd-md-50p">
            <div class="main-signin-header">
<<<<<<< HEAD
                <h2>Welcome back!</h2>
                <h4>Please sign in to continue</h4>
                <form action="index.html">
                    <div class="form-group">
                        <label>Email</label><input class="form-control" placeholder="Enter your email" type="text" value="info@spruko.com">
                    </div>
                    <div class="form-group">
                        <label>Password</label> <input class="form-control" placeholder="Enter your password" type="password" value="sprukodemo">
                    </div><button class="btn btn-primary btn-block">Sign In</button>
                </form>
            </div>
            <div class="main-signin-footer mt-3 mg-t-5">
                <p><a href="">Forgot password?</a></p>
                <p>Don't have an account? <a href="page-signup.html">Create an Account</a></p>
=======
                <h2>SIGN IN</h2>
                <h4>Please sign in to continue</h4>
                <form action="#" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input id="email " name="Email" type="email" class="form-control" placeholder="Enter your email" value="">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input id="password " name="Password" type="password" class="form-control" placeholder="Enter your password" value="">
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary btn-block">Sign In</button>
                </form>
            </div>
            <div class="main-signin-footer mt-3 mg-t-5">
                <p>Don't have an account? <a href="#">Create an Account</a></p>
>>>>>>> 1f2ac1a95ec0b2a3465757d822118dcd76596763
            </div>
        </div>
    </div>
    </div>
</div>
<<<<<<< HEAD

@endsection
=======
@endsection
>>>>>>> 1f2ac1a95ec0b2a3465757d822118dcd76596763
