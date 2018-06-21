@extends('layouts.app')

@section('content')
    <form class="" action="{{ route('bookings.store') }}" method="post">
        @csrf

        <h1>Skapa ny bokning</h1>
        <div class="form-group row">
            <label for="" class="col-md-2">Incheckning</label>
            <div class="col-md-10">
                <input type="date" class="form-control" min="{{ date('Y-m-d') }}" name="check_in" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2">Utcheckning</label>
            <div class="col-md-10">
                <input type="date" class="form-control" min="{{ date('Y-m-d') }}" name="check_out" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2">Rum</label>
            <div class="col-md-10">
                <select class="form-control" name="room_id" required>
                    <option value="" disabled>Rumnummer</option>
                    @forelse ($rooms as $room)
                        <option value="{{$room->id}}">{{$room->room_number}} (max {{$room->number_of_beds}} pers.)</option>
                    @empty
                        <option value="" disabled>Inga rum är tillgängliga</option>
                    @endforelse
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2">Gäst</label>
            <div class="col-md-10">
                <select class="form-control" name="guest_id" required>
                    <option value="" disabled>Gäst</option>
                    @forelse ($guests as $guest)
                        <option value="{{$guest->id}}">{{$guest->first_name}} {{$guest->last_name}}</option>
                    @empty
                        <option value="" disabled>Inga gäster är tillgängliga</option>
                    @endforelse
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2">Pris</label>
            <div class="col-md-10">
                <input type="number" class="form-control" step="any" name="price" required>
            </div>
        </div>

        <input class="btn btn-success" type="submit" name="submit" value="Skapa"></button>
    </form>
    <a class="btn btn-primary" href="{{ route('bookings.index') }}">Tillbaka</a>
@endsection
