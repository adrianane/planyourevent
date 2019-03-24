@extends('layouts.main')

@section('title','Posts')
@section('content')
    <h1>Posts</h1>
   @if($posts)
    @foreach($posts as $post)
    <a href="posts/{{$post->id}}">
        <h2>{{$post->title}}</h2>
        <div>{{$post->body}}</div>
        Created by <small>{{$post->user->name}}</small>
        <br/>

    </a>
    <a href="posts/{{$post->id}}/edit" class="btn"> Edit </a>

    <form method="POST" action="/posts/{{$post->id}}">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}
        
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
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