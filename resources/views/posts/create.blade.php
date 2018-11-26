@extends('layouts.main')

@section('title','Posts')
@section('content')
    <form method="POST" action="/posts">
    {{ csrf_field() }}
        <div class="form-group">
            <label>Post</label>
            <input type="text" class="form-control" name="title" placeholder="Enter a title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="body" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection