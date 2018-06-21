@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>GästId: {{ $guest->id}}</h1>
        </div>
    </div>



    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Förnamn: </span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $guest->first_name }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Efternamn: </span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $guest->last_name }}</span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">E-post:</span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $guest->email }}</span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Mobilnummer:</span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $guest->mobile_phone }}</span>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <h3><span class="font-weight-bold">Bokningar </span></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Bokningsid</th>
                            <th scope="col">Incheckning</th>
                            <th scope="col">Utcheckning</th>
                            <th scope="col">Rum</th>
                            <th scope="col">Pris</th>
                            <th scope="col">Val</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guest->bookings as $booking)
                            <tr>
                                <th scope="row">{{ $booking->id }}</th>
                                <td>{{ Carbon\Carbon::parse($booking->check_in)->format('Y-m-d') }}</td>
                                <td>{{ Carbon\Carbon::parse($booking->check_out)->format('Y-m-d') }}</td>
                                <td>{{ $booking->room->room_number }}</td>
                                <td>{{ $booking->price }} kr</td>
                                <td><a class="btn btn-primary" href="{{ route('bookings.show', $booking->id) }}">Visa</a><br></td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>






    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{ route('guests.edit', $guest->id) }}">Redigera</a>
        </div>
    </div>
@endsection
