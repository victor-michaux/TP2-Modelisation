@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dvds</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Producteur</th>
                <th>Acteurs</th>
                <th>Durée (min)</th>
                @if(Auth::check())
                    <th>Action</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($dvds as $dvd)
                <tr>
                    <td>{{ $dvd->title }}</td>
                    <td>{{ $dvd->producer }}</td>
                    <td>{{ $dvd->actors }}</td>
                    <td>{{ $dvd->duration }}</td>
                    @include('partials.loan_button', ['loanable' => $dvd])
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection