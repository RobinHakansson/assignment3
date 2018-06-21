@extends('layouts.app')

@section('content')
    <form class="" action="{{ route('guests.store') }}" method="post">
        @csrf

        <h1>Skapa ny gäst</h1>
        <div class="form-group row">
            <label for="" class="col-md-2">Förnamn</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="first_name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2">Efternamn</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="last_name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2">E-post</label>
            <div class="col-md-10">
                <input type="email" class="form-control" name="email" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2">Mobilnummer</label>
            <div class="col-md-10">
                <input type="tel" class="form-control" name="mobile_phone" required>
            </div>
        </div>

        <input class="btn btn-success" type="submit" name="submit" value="Skapa"></button>
    </form>
    <a class="btn btn-primary" href="{{ route('guests.index') }}">Tillbaka</a>
@endsection
