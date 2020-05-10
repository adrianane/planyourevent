@extends('layouts.main')

@section('title','Posts')
@section('content')
    <h1>Locations</h1>
    @if($locations)
        @foreach($locations as $location)
        <a href="locations/{{$location->id}}">
            <h2>{{$location->name}}</h2>
            <p>{{$location->street}}, {{$location->nr}}</p>
            <p>{{$location->city}}, {{$location->district}}</p>
            <br/>
        </a>
        <a href="locations/{{$location->id}}/edit" class="btn">Edit</a>
        @endforeach
    @else
        <h2>No location found!</h2>
    @endif
    <br />
    <h1>
        Click <a href="locations/create">here</a> to create your location.
    </h1>
@endsection