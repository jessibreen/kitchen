@extends('layouts.app')

@section('content')

    <h1>{{ $event->name }}</h1>

    <ul>
        @foreach ($event->attendees as $attendees)
            <li>{{ $attendees->firstname }}</li>
        @endforeach
    </ul>
@stop
