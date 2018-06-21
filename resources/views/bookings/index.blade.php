@extends('layouts.app')

@section('content')
    <h1>Alla bokningar</h1>
    <!-- <p>Senaste bokningar:</p> -->
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Bokningsid</th>
                    <th scope="col">Incheckning</th>
                    <th scope="col">Utcheckning</th>
                    <th scope="col">Gäst</th>
                    <th scope="col">Rum</th>
                    <th scope="col">Pris</th>
                    <th scope="col">Val</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <th scope="row">{{ $booking->id }}</th>
                        <td>{{ Carbon\Carbon::parse($booking->check_in)->format('Y-m-d') }}</td>
                        <td>{{ Carbon\Carbon::parse($booking->check_out)->format('Y-m-d') }}</td>
                        <td>{{ $booking->guest->first_name }} {{ $booking->guest->last_name }}</td>
                        <td>{{ $booking->room->room_number }}</td>
                        <td>{{ $booking->price }} kr</td>
                        <td><a class="btn btn-primary" href="{{ route('bookings.show', $booking->id) }}">Visa</a><br></td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>


    <br>
    <a class="btn btn-success" href="{{ route('bookings.create') }}">Ny bokning</a>
@endsection
