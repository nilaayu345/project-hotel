@extends('layouts.app')

@section('title', 'Login Area')

@push('css')
   <style>
      body {
         background: #d2d6de;
         font-family: 'Source Sans Pro', 'Helvetica Neue', Arial, sans-serif,  Open Sans;
         font-size: 14px;
         line-height: 1.42857;
         height: 350px;
         padding: 0;
         margin: 0;
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale;
         font-weight: 400;
         overflow-x: hidden;
         overflow-y: auto;
      }

.login-box, .register-box {
    width: 360px;
    margin: 11% auto;
}.login-page, .register-page {
    background: #d2d6de;
}
   </style>
@endpush

@section('content')
<div class="row text-center justify-content-center">
   <div class="login-box">
         <!-- /.login-logo -->
         <div class="login-logo">
            {{-- <a class="navbar-brand logo_h" href="index.html"><img src="image/Logo.png" alt="" width="200px"></a> --}}
            <h3>Logo Hotel</h3>
         </div>
         <div class="card">
            <div class="card-body login-card-body">
               <h3>Login Area</h3>
               <p class="login-box-msg">
                     {{-- @if (session()->has('login.failed'))
                        <div class="alert alert-danger alert-dismissible text-left">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                 {{ session('login.failed') }}
                        </div>
                     @endif --}}
               </p>
               
               <form action="{{ route('login') }}" method="POST">
                     @csrf
                     <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Masukan email" autofocus="on" autocomplete="off" required>
                     </div>
                     <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Masukan password" required>                        
                     </div>
                     <div class="row mb-3">
                        <!-- /.col -->
                        <div class="col-12">
                           <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                     </div>
               </form>
               <!-- /.social-auth-links -->
               
               <div class="login mb-0">
                     {{-- Belum punya akun ? Klik <a href="{{ route('registration') }}" title="Klik untuk registrasi">Disini</a> --}}
               </div>
            </div>
   <!-- /.login-card-body -->
         </div>
   </div>
</div>
@endsection