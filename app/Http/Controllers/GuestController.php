<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            $guest->title = $request->title;
            $guest->price = $request->price;
            $guest->save();
        }
        catch(\Exception $e) {
            return redirect()->route('guests.index');
        }

        // return redirect()->route('guest.show', ['id' => $guest->id]);
        return redirect()->route('guests.index');
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
        $guest = Guest::find($id);
        $guest->title = $request->title;
        $guest->price = $request->price;
        $guest->save();

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
