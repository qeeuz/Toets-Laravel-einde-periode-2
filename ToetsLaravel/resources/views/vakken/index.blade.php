@extends('layouts.app')

@section('content')
    <h1>Vakken en hun docenten</h1>
    <ul>
        @foreach($vakken as $vak)
            <li>
                <strong>{{ $vak->naam }}</strong> - Gegeven door: {{ $vak->docent->naam }}
            </li>
        @endforeach
    </ul>
@endsection
