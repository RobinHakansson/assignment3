@extends('layouts.app')

@section('content')
    <h1>Alla rum</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">RumId</th>
                    <th scope="col">Rumsnummer</th>
                    <th scope="col">Antal sängar</th>
                    <th scope="col">Beskrivning</th>
                    <th scope="col">Val</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <th scope="row">{{ $room->id }}</th>
                        <td>{{ $room->room_number }}</td>
                        <td>{{ $room->number_of_beds }}</td>
                        <td>{{ $room->description }}</td>
                        <td><a class="btn btn-primary" href="{{ route('rooms.show', $room->id) }}">Visa</a><br></td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>


    <br>
    <a class="btn btn-success" href="{{ route('rooms.create') }}">Nytt rum</a>
@endsection
