<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Undocumented function
     *
     * @param [type] $slug
     * @return void
     */
    public function bookingRoom($slug) {
        $room = Room::where('slug_room', '=', $slug)->first();

        

        return view('customer.booking.booking_details', compact('room'));
        // return view('customer.booking.booking', compact('room'));
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function bookingRoomSave($slug, Request $request) {
        $room = Room::where('slug_room', '=', $slug)->first();
        $room->room_booked = $request->get('room_booked');
        $room->timestamp_booked = Carbon::now('Asia/Jakarta')->toDateTimeString();

        dd($room, $request->all());
    }

    public function bookingRoomDetail(Request $request) {
        $booking = Transaction::with(['users', 'rooms'])->first();

        dd($booking);
        
        // dd($booking, $booking->rooms->name, $booking->users->name);
    }
}
