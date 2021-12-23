@extends('layouts.app')

@section('title', 'Contact Us')

@section('sub-title', 'Contact Us')

{{-- Menambahkan tampilan breadcrumb --}}
@include('layouts.breadcrumb')

@section('content')
<!--================Contact Area =================-->
<section class="contact_area section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>California, United States</h6>
                        <p>Santa monica bullevard</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#">00 (440) 9865 562</a></h6>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#">support@colorlib.com</a></h6>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->
@endsection
