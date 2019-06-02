@extends('layouts.main')

@section('title','Posts')
@section('content')
    <h1>Locations</h1>
    @if($location)
        <h2>{{$location->name}}</h2>
        <p>{{$location->street}}, {{$location->nr}}</p>
        <p>{{$location->city}}, {{$location->district}}</p>
        {!!$location->description!!}
        @if($location->img)
        var_dump({{$location->img}});
                <a href="$img" data-lightbox="roadtrip">Image #1</a>
                <a href="$img" data-lightbox="roadtrip">Image #2</a>
        @endif
        <br/>
    @endif
    <br />
    <h1>
        Go back to locations list <a href="/locations">here</a>.
    </h1>
@endsection