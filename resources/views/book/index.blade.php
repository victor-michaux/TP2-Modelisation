@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Livres</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>ISBN</th>
                <th>Pages</th>
                @if(Auth::check())
                    <th>Action</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->ISBN }}</td>
                    <td>{{ $book->pages }}</td>
                    @include('partials.loan_button', ['loanable' => $book])
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection