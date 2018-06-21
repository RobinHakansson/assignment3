<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Guest;

class GuestController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $guests = Guest::all();

        return view("guests.index", [
            "guests" => $guests
        ]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view("guests.create");
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
            $guest = new Guest;
            $guest->first_name = $request->first_name;
            $guest->last_name = $request->last_name;
            $guest->email = $request->email;
            $guest->mobile_phone = $request->mobile_phone;
            $guest->save();
        }
        catch(\Exception $e) {
            return redirect()->route('guests.index');
        }

        return redirect()->route('guests.show', ['id' => $guest->id]);
        // return redirect()->route('guests.index');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $guest = Guest::find($id);
        return view("guests.show", [
            "guest" => $guest
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
        $guest = Guest::find($id);
        return view("guests.edit", [
            "guest" => $guest
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
            $guest = Guest::find($id);
            $guest->first_name = $request->first_name;
            $guest->last_name = $request->last_name;
            $guest->email = $request->email;
            $guest->mobile_phone = $request->mobile_phone;
            $guest->save();
        }
        catch(\Exception $e) {
            return redirect()->route('guests.index');
        }

        return redirect()->route('guests.show', ['id' => $id]);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $guest = Guest::find($id);
        $guest->delete();

        return redirect()->route('guests.index');
    }
}
