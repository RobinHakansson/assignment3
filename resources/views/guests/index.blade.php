@extends('layouts.app')

@section('content')
    <h1>Alla gäster</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">GästId</th>
                    <th scope="col">Förnamn</th>
                    <th scope="col">Efternamn</th>
                    <th scope="col">E-post</th>
                    <th scope="col">Mobilnummer</th>
                    <th scope="col">Val</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($guests as $guest)
                    <tr>
                        <th scope="row">{{ $guest->id }}</th>
                        <td>{{ $guest->first_name }}</td>
                        <td>{{ $guest->last_name }}</td>
                        <td>{{ $guest->email }}</td>
                        <td>{{ $guest->mobile_phone }}</td>
                        <td><a class="btn btn-primary" href="{{ route('guests.show', $guest->id) }}">Visa</a><br></td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>


    <br>
    <a class="btn btn-success" href="{{ route('guests.create') }}">Ny gäst</a>
@endsection
