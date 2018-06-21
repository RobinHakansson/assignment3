@extends('layouts.app')

@section('content')
    <h1>Uppdatera gäst</h1>

    <form class="" action="{{ route('guests.update', $guest->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <h2>ID {{ $guest->id }}</h2>
        </div>


        <div class="form-group row">
            <div class="col-md-2">
                <span class="font-weight-bold">Förnamn: </span>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="first_name" value="{{ $guest->first_name }}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <span class="font-weight-bold">Efternamn: </span>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="last_name" value="{{ $guest->last_name }}" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <span class="font-weight-bold">E-post:</span>
            </div>
            <div class="col-md-8">
                <input type="email" class="form-control" name="email" value="{{ $guest->email }}" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <span class="font-weight-bold">Mobilnummer:</span>
            </div>
            <div class="col-md-8">
                <input type="tel" class="form-control" name="mobile_phone" value="{{ $guest->mobile_phone }}" required>
            </div>
        </div>


        <input button class="btn btn-success" type="submit" name="submit" value="Uppdatera"></button>
    </form>

    <form class="" action="{{ route('guests.destroy', $guest->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input button class="btn btn-danger" type="submit" name="submit" value="Radera"></button>
    </form>
@endsection
