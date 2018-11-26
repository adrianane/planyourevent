@extends('layouts.main')

@section('title','Posts')
@section('content')
    <h1>Posts</h1>
   @if($posts)
    @foreach($posts as $post)
    <a href="posts/{{$post->id}}">
        <h2>{{$post->title}}</h2>
        <div>{{$post->body}}</div>
        </a>
    @endforeach
    {{$posts->links()}}
    @else
    <h2>No posts found!</h2>
    @endif
    <br />
    <h1>
        Click <a href="posts/create">here</a> to create your post.
    </h1>
@endsection