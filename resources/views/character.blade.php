
@extends('layouts.base')
@section('title', 'Character')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@endsection

@section('content')
    <h1 class="title">Character détails</h1>
    <div id="card">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">{{ $character->name }}</div>
            <div class="card-body text-dark flex">
                <p>Name :</p>
                <p class="card-text">{{ $character->name}}</p>
            </div>
            <div class="card-body text-dark flex">
                <p>Year of creation:</p>
                <p class="card-text">{{ $character->year_of_Creation }}</p>
            </div>
            <div class="card-body text-dark flex">
                <p>Affiliate comic :</p>
                <p class="card-text">{{ $character->affiliate_Comic }}</p>
            </div>
            <div class="card-body text-dark">
                <p>Designer :</p>
                <p class="card-text">{{ $character->designer }}</p>
            </div>
        </div>
    </div>
@endsection