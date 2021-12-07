@extends('layouts.app')

@section('title', "Edit Pengguna")

@section('content')
   <div class="container section_gap">
      <div class="mb-5 text-center">
         <h2 class="title_color">Edit Pengguna</h2>
      </div>

      <div class="row text-center justify-content-center">
         <div class="col-md-5">
            <div class="card">
               <div class="card-body login-card-body">
                  <p class="login-box-msg">
                     @if (session()->has('error.alert'))
                        <div class="alert alert-danger alert-dismissible text-left">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ session('error.alert') }}
                        </div>
                     @endif
                  </p>
                  
                  <form action="{{ route('registration') }}" method="POST">
                     @csrf
                     <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" autofocus="on" autocomplete="off" required value="{{ $user->email }}" readonly>
                     </div>
                     <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nama" autofocus="on" autocomplete="off" required value="{{ $user->name }}">
                     </div>
                     <div class="input-group mb-3">
                        <input type="text" name="phone" class="form-control" placeholder="Phone" autofocus="on" autocomplete="off" required value="{{ $user->phone }}">
                     </div>
                     <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="">
                           <small class="text-danger d-block float-left">* Kosongkan kalau tidak mengubah password</small>
                        </div>
                     </div>
                     <div class="row mt-5 mb-3">
                        <div class="col-md-12">
                           <button type="submit" class="btn btn-success btn-block" style="cursor: pointer">Simpan Perubahan</button>
                           <a class="btn btn-warning btn-block" href="{{ route('admin.pengguna.index') }}">Kembali</a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      
   </div>
@endsection