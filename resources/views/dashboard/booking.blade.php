@extends('layouts.app')

@section('title', 'Booking')

@section('sub-title', 'booking')

{{-- Menambahkan tampilan breadcrumb --}}
@include('layouts.breadcrumb')

@section('content')

<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Booking Hotel</h2>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
        </div>
        <div class="row mb_30 justify-content-center">
            @foreach ($rooms as $room)
            <div class="col-lg-4 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{ asset('storage/' . $room->image_path) }}" class="img-fluid" alt="{{ $room->name }}">
                        <a href="{{ route('booking-room', $room->slug_room) }}" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <a href="#"><h4 class="sec_h4">{{ $room->name }}</h4></a>
                    <h5>{{ convertRupiah($room->price) }}<small>/night</small></h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
