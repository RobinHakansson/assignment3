@extends('layouts.app')

@section('content')
    <form class="" action="{{ route('rooms.store') }}" method="post">
        @csrf

        <h1>Skapa nytt rum</h1>
        <div class="form-group row">
            <label for="" class="col-md-2">Rumsnummer</label>
            <div class="col-md-10">
                <input type="number" class="form-control" name="room_number" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2">Antal sängar</label>
            <div class="col-md-10">
                <input type="number" class="form-control" name="number_of_beds" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2">Beskrivning</label>
            <div class="col-md-10">
                <textarea class="form-control" name="description" cols="40" rows="5" required></textarea>
            </div>
        </div>


        <input class="btn btn-success" type="submit" name="submit" value="Skapa"></button>
    </form>
    <a class="btn btn-primary" href="{{ route('rooms.index') }}">Tillbaka</a>
@endsection
