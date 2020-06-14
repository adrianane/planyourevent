@extends('layouts.main')

@section('title','Locations')
@section('content')
    <h1 xmlns:f="http://www.w3.org/1999/html">Locations</h1>
    @if($locations)
        @foreach($locations as $location)
        <a href="locations/{{$location->id}}">
            <h2>{{$location->name}}</h2>
            <p>{{$location->street}}, {{$location->nr}}</p>
            <p>{{$location->city}}, {{$location->district}}</p>
            <br/>
        </a>
        @endforeach
    @else
        <h2>No location found!</h2>
    @endif
    <br />
@endsection