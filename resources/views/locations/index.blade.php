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
        @if(Auth::user())
            @if(Auth::user()->id == $location->user_id)
                <a href="locations/{{$location->id}}/edit" class="btn">Edit</a>
                <form action="locations/{{$location->id}}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            @endif
        @endif
        @endforeach
    @else
        <h2>No location found!</h2>
    @endif
    <br />
    <h1>
        Click <a href="locations/create">here</a> to create your location.
    </h1>
@endsection