@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Bokningsid: {{ $booking->id}}</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">In- och Utcheckning </span>
        </div>
        <div class="col-md-2">
            <span class="stand-out">In: {{ Carbon\Carbon::parse($booking->check_in)->format('Y-m-d') }}</span>
        </div>
        <div class="col-md-2">
            <span class="stand-out">Ut: {{ Carbon\Carbon::parse($booking->check_out)->format('Y-m-d') }}</span>
        </div>
        <div class="col-md-4">
            @if (Carbon\Carbon::parse($booking->check_out)->endOfDay()->isPast() == true)
                ❌ Bokningen är över
            @else
                ✅ Bokningen är giltig
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Pris: </span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $booking->price }} kr</span>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <h3><span class="font-weight-bold">Rum </span></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Rumsnummer:</span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $booking->room->room_number }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Antal sängar:</span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $booking->room->number_of_beds }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Rumsbeskrivning:</span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $booking->room->description }}</span>
        </div>
    </div>





    <div class="row">
        <div class="col-md-12">
            <h3><span class="font-weight-bold">Gäst </span></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Namn: </span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $booking->guest->first_name }} {{ $booking->guest->last_name }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">E-post: </span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $booking->guest->email }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <span class="font-weight-bold">Telefonnummer: </span>
        </div>
        <div class="col-md-8">
            <span class="stand-out">{{ $booking->guest->mobile_phone }}</span>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{ route('bookings.edit', $booking->id) }}">Redigera</a>
        </div>
    </div>
@endsection
