@extends('layouts.app')
@section('content')
    <h1>HotelSys - Bokningssystem för hotell</h1>
    <p>Här är administrationssystemet för att registrera hotellets gäster och boka rum.</p>

    <h2>Resurser</h2>
    <hr>
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('bookings.index') }}"><h3>Bokningar</h3></a>
        </div>
        <div class="col-md-6">
            <p>Detta är bokningarna som man kan visa/skapa/ändra/radera.</p>
            <p>En bokning består av:</p>
            <ul>
                <li>Incheckningsdatum</li>
                <li>Utcheckningsdatum</li>
                <li>Rum</li>
                <li>Gäst</li>
                <li>Pris</li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('rooms.index') }}"><h3>Rum</h3></a>
        </div>
        <div class="col-md-6">
            <p>Detta är hotellrummen som man kan visa/skapa/ändra/radera. Vid visa kan man även se vilka bokningar som är gjorda på rummet.</p>
            <p>Ett rum består av:</p>
            <ul>
                <li>Rumsnummer</li>
                <li>Antal sängar</li>
                <li>Beskrivning</li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('guests.index') }}"><h3>Gäster</h3></a>
        </div>
        <div class="col-md-6">
            <p>Detta är hotellets gäster som man kan visa/skapa/ändra/radera. Vid visa kan man även se vilka bokningar en gäst har.</p>
            <p>En gäst består av:</p>
            <ul>
                <li>Förnamn</li>
                <li>Efternamn</li>
                <li>E-post</li>
                <li>Mobilnummer</li>
            </ul>
        </div>
    </div>


@endsection
