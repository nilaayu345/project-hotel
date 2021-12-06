@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h6>Away from monotonous life</h6>
                <h2>Relax Your Mind</h2>
                <p>Royal Hotel can make your holiday very colorful and memorable<br> Hayam Wuruk Street No.60 Tuban, Jawa Timur, Indonesia.</p>
                <a href="#" class="btn theme_btn button_hover">Get Started</a>
            </div>
        </div>
    </div>
</section>
<!--================Banner Area =================-->

<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Hotel Accomodation</h2>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/room1.jpg" alt="">
                        <a href="#" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <a href="#"><h4 class="sec_h4">Double Deluxe Room</h4></a>
                    <h5>Rp. 3.606.480<small>/night</small></h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/room2.jpg" alt="">
                        <a href="#" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <a href="#"><h4 class="sec_h4">Single Deluxe Room</h4></a>
                    <h5>Rp. 2.885.660<small>/night</small></h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/room3.jpg" alt="">
                        <a href="#" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <a href="#"><h4 class="sec_h4">Honeymoon Suit</h4></a>
                    <h5>Rp. 10.540.756<small>/night</small></h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="image/room4.jpg" alt="">
                        <a href="#" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <a href="#"><h4 class="sec_h4">Economy Double</h4></a>
                    <h5>Rp. 2.885.660<small>/night</small></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->

<!--================ Facilities Area  =================-->
<section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
    </div>
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w">Royal Facilities</h2>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                    <p>Restaurant at the Royal Hotel provides a variety of asian food, as well as western food.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                    <p>Royal Hotel provides a private pool or a public swimming pool that can be used anytime.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                    <p>Bar here is often visited by young people to old people just for fun.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Facilities Area  =================-->
@endsection