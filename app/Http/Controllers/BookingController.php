<?php

namespace App\Http\Controllers;

use App\Models\Room;
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

        // dd($room->facility);
        return view('customer.booking.booking', compact('room'));
    }
}
