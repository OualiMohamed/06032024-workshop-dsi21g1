@extends('layouts.app')

@section('contenu')
    <h1>Contact List</h1>
    <ul>
        @if (count($contacts) > 0)
            @foreach ($contacts as $contact)
                <li>{{ $contact }}</li>
            @endforeach
        @else
            <p>Pas de contacts</p>
        @endif
    </ul>

    @php
        $counter = 1;
    @endphp

    @forelse ($contacts as $contact)
        <p>{{ $counter }}. {{ $contact }}</p>
        @php
            $counter++;
        @endphp
    @empty
        <p>Pas de contacts</p>
    @endforelse
@endsection
