@extends('layouts.app')

@section('content')
    <h1>Uppdatera rum</h1>

    <form class="" action="{{ route('rooms.update', $room->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <h2>ID {{ $room->id }}</h2>
        </div>


        <div class="form-group row">
            <div class="col-md-2">
                <span class="font-weight-bold">Rumsnummer: </span>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="room_number" value="{{ $room->room_number }}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <span class="font-weight-bold">Antal sängar: </span>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="number_of_beds" value="{{ $room->number_of_beds }}" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <span class="font-weight-bold">Beskrivning:</span>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="description" cols="40" rows="5" required>{{ $room->description }}</textarea>
            </div>
        </div>


        <input button class="btn btn-success" type="submit" name="submit" value="Uppdatera"></button>
    </form>

    <form class="" action="{{ route('rooms.destroy', $room->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input button class="btn btn-danger" type="submit" name="submit" value="Radera"></button>
    </form>
@endsection
