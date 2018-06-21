<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;
use App\Room;
use App\Guest;

class BookingController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $bookings = Booking::all();

        return view("bookings.index", [
            "bookings" => $bookings
        ]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view("bookings.create", [
            "rooms" => Room::All(),
            "guests" => Guest::All()
        ]);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        try {
            $booking = new Booking;
            $booking->check_in = $request->check_in;
            $booking->check_out = $request->check_out;
            $booking->price = $request->price;
            $booking->room_id = $request->room_id;
            $booking->guest_id = $request->guest_id;
            $booking->save();
        }
        catch(\Exception $e) {
            return redirect()->route('bookings.index');
        }

        return redirect()->route('bookings.show', ['id' => $booking->id]);
        // return redirect()->route('bookings.index');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $booking = Booking::find($id);
        return view("bookings.show", [
            "booking" => $booking
        ]);
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $booking = Booking::find($id);
        $rooms = Room::all();
        $guests = Guest::all();
        return view("bookings.edit", [
            "booking" => $booking,
            "rooms" => $rooms,
            "guests" => $guests
        ]);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        try {
            $booking = Booking::find($id);
            $booking->check_in = $request->check_in;
            $booking->check_out = $request->check_out;
            $booking->price = $request->price;
            $booking->room_id = $request->room_id;
            $booking->guest_id = $request->guest_id;
            $booking->save();
        }
        catch(\Exception $e) {
            return redirect()->route('bookings.index');
        }

        return redirect()->route('bookings.show', ['id' => $id]);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return redirect()->route('bookings.index');
    }
}
