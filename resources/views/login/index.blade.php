@extends('Layouts-auth.index')
@section('title', 'Login')
@section('login')

<div class="my-auto page page-h">
    <div class="main-signin-wrapper">
        <div class="main-card-signin d-md-flex">
        <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
            <div class="my-auto authentication-pages">
                <div>
                    <img src="" class=" m-0 mb-4" alt="">
                    <h5 class="mb-4">Kenapa sih kita harus membaca buku?</h5>
                    <p class="mb-5">Membaca buku sangat baik sebagai latihan otak dan pikiran. Membaca dapat membantu menjaga otak agar selalu menjalankan fungsinya secara sempurna. Saat membaca, otak dituntut untuk berpikir, menganalisis berbagai masalah, mencari jalan keluar dan solusi hingga menemukan hal-hal baru.</p>
                    <a href="" class="btn btn-success">Learn More</a>
                </div>
            </div>
        </div>
        <div class="sign-up-body wd-md-50p">
            <div class="main-signin-header">
                <h2>PERPUSTAKAAN</h2>
                <h4>Please sign in to continue</h4>
                <form action="/data-pengguna" method="get">
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
                <p>Don't have an account? <a href="{{route('registar')}}">Create an Account</a></p>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
