@extends('layouts.app')

@section('title', 'Booking details')

@section('sub-title', 'booking details')

{{-- Menambahkan tampilan breadcrumb --}}
@include('layouts.breadcrumb')

@push('css')
   <style>
      .room-name {
         font-size: 15px;
         color: black;
      }
      .room-price {
         font-size: 20px;
         color: black;
      }

      .text-black {
         color: black;
      }
   </style>
@endpush

@section('content')
<section class="accomodation_area section_gap">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <h4 class="text-center mb-3 text-black">DAFTAR BOOKING KAMAR</h4>

            <div class="border">
               <!-- Title -->
               <div class="row p-3">
                  <div class="col-md-4">
                     <img src="{{ asset('storage/' . $room->image_path) }}" class="img-fluid" alt="">
                  </div>

                  <div class="col-md-8">
                     <div class="mt-4">
                        <h3 class="text-black">NAMA KAMAR</h3>
                        <small>Tanggal Booking</small>
                     </div>
                  </div>
               </div>

               <!-- Transaction Detail -->
               <div class="ml-3 mr-3 mb-3 pl-3 pr-3 text-black">
               <h4>Booking Detail</h4>
                  <div class="row">
                     <div class="col-md-4 border p-2">
                        Tipe Kamar
                     </div>
                     <div class="col-md-8 border font-weight-bold p-2">
                        Nama Kamar
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4 border p-2">
                        Jumlah Kamar
                     </div>
                     <div class="col-md-8 border font-weight-bold p-2">
                        2 Kamar
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4 border p-2">
                        Harga
                     </div>
                     <div class="col-md-8 border font-weight-bold p-2">
                        Rp. 100.000 /Kamar
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4 border p-2">
                        Total
                     </div>
                     <div class="col-md-8 border font-weight-bold p-2">
                        Rp. 200.000
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4 border p-2">
                        Fasilitas
                     </div>
                     <div class="col-md-8 border p-2">
                        <ul class="unordered-list">
                           @foreach ($room->facility as $facility)
                              <li>{{ $facility->facility_name }}</li>
                              <div class="pb-2"></div>
                           @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
            </div>

         </div>
         <div class="col-lg-4">
            <div class="card">
               <div class="card-body">
                  <div class="text-center pb-3 pt-2">Reservation</div>

                  <div class="border">
                     <div class="font-weight-bold text-center room-price p-2">{{ convertRupiah($room->price) }} 
                        <span class="font-weight-light" style="font-size: 10px">/mlm</span></div>
                  </div>

                  <div class="mt-2">
                     <label>Check In</label>
                     <div class="row">
                        <div class='col-md-12'>
                           <div class="form-group">
                              <div class='input-group date' id='datetimepicker1'>
                                 <input type='text' class="form-control" name="check_in" placeholder="Check in"/>
                                 <span class="input-group-addon">
                                 <span class="fa fa-calendar"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="mt-auto">
                     <label>Check Out</label>
                     <div class="row">
                        <div class='col-md-12'>
                           <div class="form-group">
                              <div class='input-group date' id='datetimepicker2'>
                                 <input type='text' class="form-control" name="check_out" placeholder="Check out"/>
                                 <span class="input-group-addon">
                                 <span class="fa fa-calendar"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="mt-1">
                     <button type="submit" class="btn btn-success btn-sm btn-block mt-2">Booked!</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection

@push('js')
   <script type="text/javascript">
      $(function () {
         $('#datetimepicker1').datetimepicker();
         $('#datetimepicker2').datetimepicker();
      });
   </script>
@endpush