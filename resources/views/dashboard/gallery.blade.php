@extends('layouts.app')

@section('title', 'About Us')

@section('sub-title', 'about')

{{-- Menambahkan tampilan breadcrumb --}}
@include('layouts.breadcrumb')

@section('content')
<section class="gallery_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Royal Hotel Gallery</h2>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="row imageGallery1" id="gallery">
            <div class="col-md-4 gallery_item">
                <div class="gallery_img">
                    <img src="image/gallery/01.jpg" alt="">
                    <div class="hover">
                        <a class="light" href="image/gallery/01.jpg"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gallery_item">
                <div class="gallery_img">
                    <img src="image/gallery/02.jpg" alt="">
                    <div class="hover">
                        <a class="light" href="image/gallery/02.jpg"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gallery_item">
                <div class="gallery_img">
                    <img src="image/gallery/03.jpg" alt="">
                    <div class="hover">
                        <a class="light" href="image/gallery/03.jpg"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gallery_item">
                <div class="gallery_img">
                    <img src="image/gallery/04.jpg" alt="">
                    <div class="hover">
                        <a class="light" href="image/gallery/04.jpg"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 gallery_item">
                <div class="gallery_img">
                    <img src="image/gallery/06.jpg" alt="">
                    <div class="hover">
                        <a class="light" href="image/gallery/05.jpg"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gallery_item">
                <div class="gallery_img">
                    <img src="image/gallery/05.jpg" alt="">
                    <div class="hover">
                        <a class="light" href="image/gallery/06.jpg"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gallery_item">
                <div class="gallery_img">
                    <img src="image/gallery/01-1.jpg" alt="">
                    <div class="hover">
                        <a class="light" href="image/gallery/01-1.jpg"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gallery_item">
                <div class="gallery_img">
                    <img src="image/gallery/02-1.jpg" alt="">
                    <div class="hover">
                        <a class="light" href="image/gallery/02-1.jpg"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gallery_item">
                <div class="gallery_img">
                    <img src="image/gallery/03-1.jpg" alt="">
                    <div class="hover">
                        <a class="light" href="image/gallery/03-1.jpg"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection