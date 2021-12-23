@extends('layouts.app')

@section('title', 'About Us')

@section('sub-title', 'about')

{{-- Menambahkan tampilan breadcrumb --}}
@include('layouts.breadcrumb')

@section('content')
<!--================ About History Area  =================-->
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <h2 class="title title_color">Royal Hotel</h2>
                    <p>Royal Hotel adalah hotel bintang 5 yang ada di Kota Tuban, tepatnya di jalan Hayam Wuruk No.60. Royal Hotel ini memiliki fasilitas yang lengkap, dan banyak dikunjungi wisatawan. Bapak presiden Indonesia, Joko Widodo pernah mengunjungi Royal Hotel ini.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="image/about_bg.jpg" alt="img">
            </div>
        </div>
    </div>
</section>
<!--================ About History Area  =================-->
@endsection
