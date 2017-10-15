@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Mes emprunts</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h2>CDs</h2>
            </div>
        </div>
        <div class="row">
            @foreach($cds as $cd)
                <div class="col-md-6">
                    <div class="well">
                        <h3>{{ $cd->loanable->title }}</h3>
                        <p>Artiste : <span style="font-weight: 300">{{ $cd->loanable->author }}</span></p>
                        <p>Compositeur : {{ $cd->loanable->compositor }}</p>
                        <p style="font-style: italic; text-align: right">Emprunté le {{ $cd->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h2>DVDs</h2>
            </div>
        </div>
        <div class="row">
            @foreach($dvds as $dvd)
                <div class="col-md-6">
                    <div class="well">
                        <h3>{{ $dvd->loanable->title }} <small>({{ $dvd->loanable->duration }} min.)</small></h3>
                        <p>Réalisateur : <span style="font-weight: 300">{{ $dvd->loanable->producer }}</span></p>
                        <p>Acteurs : {{ $dvd->loanable->actors }}</p>
                        <p style="font-style: italic; text-align: right">Emprunté le {{ $dvd->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h2>Livres</h2>
            </div>
        </div>
        <div class="row">
            @foreach($books as $book)
                <div class="col-md-6">
                    <div class="well">
                        <h3>Titre : {{ $book->loanable->title }} <small>({{ $book->loanable->pages }} pages)</small></h3>
                        <p>Auteur : <span style="font-weight: 300">{{ $book->loanable->author }}</span></p>
                        <p>ISBN : {{ $book->loanable->ISBN }}</p>
                        <p style="font-style: italic; text-align: right">Emprunté le {{ $book->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection