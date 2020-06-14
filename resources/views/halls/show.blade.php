@extends('layouts.main')

@section('title',$hall->name)
@section('content')
    @if($hall)
        <h2>{{$hall->name}}</h2>
        <p>Min seats: {{$hall->min_seats}}</p>
        <p> Max seats: {{$hall->max_seats}}</p>
        {!!$hall->description!!}
        <br/>
    @endif
    <br />
    <h1>
        Go back to dashboard list <a href="/dashboard">here</a>.
    </h1>
@endsection