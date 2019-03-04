@extends('layouts.main')

@section('title','Edit Post')
@section('content')
    <form method="POST" action="/posts/{{$post->id}}">
    <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Post</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="body" class="form-control" rows="3">{{$post->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection