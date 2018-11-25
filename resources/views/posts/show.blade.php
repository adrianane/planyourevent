@extends('layouts.main')

@section('title','Posts')
@section('content')
    <h2>{{$post->title}}</h2>
    <p>{{$post->body}}</p>
    <a href="/posts" class="btn btn-default">Go back</a>
@endsection