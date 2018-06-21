@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>RumsId: {{ $room->id}}</h1>
        </div>
    </div>



    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Rumsnummer: </span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $room->room_number }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Antal sängar: </span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $room->number_of_beds }}</span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">description:</span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $room->description }}</span>
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
                            <th scope="col">Pris</th>
                            <th scope="col">Val</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($room->bookings as $booking)
                            <tr>
                                <th scope="row">{{ $booking->id }}</th>
                                <td>{{ Carbon\Carbon::parse($booking->check_in)->format('Y-m-d') }}</td>
                                <td>{{ Carbon\Carbon::parse($booking->check_out)->format('Y-m-d') }}</td>
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
            <a class="btn btn-primary" href="{{ route('rooms.edit', $room->id) }}">Redigera</a>
        </div>
    </div>
@endsection
