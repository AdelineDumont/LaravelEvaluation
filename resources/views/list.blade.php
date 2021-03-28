@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/style.css')}}">
@endsection

@section('title', 'Character')

@section('content')
<h1 class="title">List of character</h1>

<div class="list">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Year of creation</th>
                <th scope="col">Affiliate comic</th>
                <th scope="col">Designer</th>
                <th scope="col">MAJ</th>
                <th scope="col">Supp</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($characters= as $character)
            <tr>
                <th scope="row">{{ $character->id }}</th>
                <td><a href="/character/{{ $character->id }}">{{ $character->name }}</a></td>
                <td>{{ $character->name }}</td>
                <td>
                    @foreach ($character->designer as $designer)
                        <p>{{ $designer->name }}</p>
                    @endforeach
                </td>
                <td>
                    <a href="/updateCharacter/{{ $character->id }}" class="btn btn-success">U</a>
                </td>
                <td>
                    <form action="/deleteCharacter" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $character->id }}">
                        <input type="submit" class="btn btn-danger" value="X">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection