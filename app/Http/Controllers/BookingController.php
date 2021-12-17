<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return view('customer.booking.booking', compact('room'));
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param [String] $slug
     * @return void
     */
    public function bookingRoomDetail(Request $request, $slug) {
        $room = Room::where('slug_room', '=', $slug)->first(); // mencari data room berdasarkan slug
        $room->room_booked = $request->get('room_booked'); // jumlah kamar di pilih/pesan
        $room->timestamp_booked = Carbon::now('Asia/Jakarta')->toDateTimeString(); // menunjukan jam sesuai di komputer
        $room->total = $room->price * $room->room_booked; // menghitung total transaksi

        // dd($room, $request->all());
        return view('customer.booking.booking_details', compact('room'));
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param [String] $slug
     * @return void
     */
    public function bookingRoomSave(Request $request, $slug) {

        Transaction::create([
            'user_id'       => Auth::id(),
            'room_id'       => $request->get('room_id'),
            'total_room'    => $request->get('total_room'),
            'total_price'   => $request->get('total_price'),
            'check_in'      => $request->get('check_in'),
            'check_out'     => $request->get('check_out'),
        ]);

        return redirect()->route('dashboard');
        // dd($request->all(), $slug);
        // $booking = Transaction::with(['users', 'rooms'])->first();

        // dd($booking);
        
        // dd($booking, $booking->rooms->name, $booking->users->name);
    }
}
