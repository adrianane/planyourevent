@extends('layouts.main')

@section('title','Event halls')
@section('content')
    <h3>Event halls</h3>
    @if($halls)
        <ul>
        @foreach($halls as $hall)
            <li>
            <h2>{{$hall->name}}</h2>
                <p>Min of seats: {{$hall->min_seats}}</p>
                <p>Max of seats: {{$hall->max_seats}}</p>
                <p>{{$hall->description}}</p>
            </li>
        @endforeach
        </ul>
    @else
        <h2>No event hall found!</h2>
    @endif
@endsection