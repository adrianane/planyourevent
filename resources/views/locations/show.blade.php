@extends('layouts.main')

@section('title','Posts')
@section('content')
    @if($location)
        <h2>{{$location->name}}</h2>
        <p>{{$location->city}}, {{$location->district}}</p>
        {!!$location->description!!}
        @if($location->img)
        <div class="container">
            <div class="row">
                @foreach ($location->locationImages as $img)
                    <div class="col-sm-3">
                        <a href="/storage/user/{{$img->path}}" data-lightbox="roadtrip">
                            <img src="/storage/user/{{$img->path}}" class="img-thumbnail">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
        <br/>
    @endif
    <br />
    <h1>
        Go back to locations list <a href="/locations">here</a>.
    </h1>
@endsection