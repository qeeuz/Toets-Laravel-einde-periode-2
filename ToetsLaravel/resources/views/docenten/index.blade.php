    @extends('layouts.app')

@section('content')
    <h1>Docenten en hun vakken</h1>
    <ul>
        @foreach($docenten as $docent)
            <li>
                <strong>{{ $docent->naam }}</strong> - Geeft de volgende vakken:
                <ul>
                    @foreach($docent->vakken as $vak)
                        <li>{{ $vak->naam }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
