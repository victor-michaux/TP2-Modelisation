@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cds</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Compositeur</th>
                    <th>Durée</th>
                    @if(Auth::check())
                        <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
            @foreach($cds as $cd)
                <tr>
                    <td>{{ $cd->title }}</td>
                    <td>{{ $cd->author }}</td>
                    <td>{{ $cd->compositor }}</td>
                    <td>{{ $cd->duration }}</td>
                    @include('partials.loan_button', ['loanable' => $cd])
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection