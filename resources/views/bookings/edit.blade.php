@extends('layouts.app')

@section('content')
    <h1>Uppdatera bokning</h1>

    <form class="" action="{{ route('bookings.update', $booking->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <h2>ID {{ $booking->id }}</h2>
        </div>


        <div class="form-group row">
            <label for="" class="col-md-2">Incheckning</label>
            <div class="col-md-10">
                <input type="date" class="form-control" min="{{ date('Y-m-d') }}" name="check_in" value="{{ Carbon\Carbon::parse($booking->check_in)->format('Y-m-d') }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2">Utcheckning</label>
            <div class="col-md-10">
                <input type="date" class="form-control" min="{{ date('Y-m-d') }}" name="check_out" value="{{ Carbon\Carbon::parse($booking->check_out)->format('Y-m-d') }}" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-md-2">Rum</label>
            <div class="col-md-10">
                <select class="form-control" name="room_id" required>
                    <option value="" disabled>Rumsnummer</option>
                    @forelse ($rooms as $room)
                        <option value="{{$room->id}}"
                            {{ ((isset($booking) && $booking->room_id == $room->id) ? "selected":"") }}>
                            {{$room->room_number}} (max {{$room->number_of_beds}} pers.)
                        </option>
                    @empty
                        <option value="" disabled>Inga rum är tillgängliga</option>
                    @endforelse
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-md-2">Pris</label>
            <div class="col-md-10">
                <input type="number" class="form-control" step="any" name="price" value="{{ $booking->price }}" required>
            </div>
        </div>



        <div class="form-group row">
            <label for="" class="col-md-2">Gäst</label>
            <div class="col-md-10">
                <select class="form-control" name="guest_id" required>
                    <option value="" disabled>Namn</option>
                    @forelse ($guests as $guest)
                        <option value="{{$guest->id}}"
                            {{ ((isset($booking) && $booking->guest_id == $guest->id) ? "selected":"") }}>
                            {{$guest->first_name}} {{$guest->last_name}} - {{$guest->email}}
                        </option>
                    @empty
                        <option value="" disabled>Inga gäster är tillgängliga</option>
                    @endforelse
                </select>
            </div>
        </div>

        <input button class="btn btn-success" type="submit" name="submit" value="Uppdatera"></button>
    </form>

    <form class="" action="{{ route('bookings.destroy', $booking->id) }}" method="post">
        @method('DELETE')
        @csrf
        <input button class="btn btn-danger" type="submit" name="submit" value="Radera"></button>
    </form>
@endsection
