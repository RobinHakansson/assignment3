<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Room;

class RoomController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $rooms = Room::all();
        return view("rooms.index", [
            "rooms" => $rooms
        ]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view("rooms.create");
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
            $room = new Room;
            $room->room_number = $request->room_number;
            $room->number_of_beds = $request->number_of_beds;
            $room->description = $request->description;
            $room->save();
        }
        catch(\Exception $e) {
            return redirect()->route('rooms.index');
        }

        return redirect()->route('rooms.show', ['id' => $room->id]);
        // return redirect()->route('rooms.index');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $room = Room::find($id);
        return view("rooms.show", [
            "room" => $room
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
        $room = Room::find($id);
        return view("rooms.edit", [
            "room" => $room
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
            $room = Room::find($id);
            $room->room_number = $request->room_number;
            $room->number_of_beds = $request->number_of_beds;
            $room->description = $request->description;
            $room->save();
        }
        catch(\Exception $e) {
            return redirect()->route('rooms.index');
        }

        return redirect()->route('rooms.show', ['id' => $id]);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();

        return redirect()->route('rooms.index');
    }
}
