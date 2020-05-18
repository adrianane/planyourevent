@extends('layouts.main')

@section('title','My dashboard')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
            <a href="posts/create" class="btn btn-primary">Create post</a>
            <a href="locations/create" class="btn btn-primary">Add location</a>
            @if(count($posts) > 0)
                <h2>Your posts:</h2>
                <ul>
                    @foreach($posts as $post)
                    <li>
                        {{$post->title}} <br/>
                        {{$post->body}} <br/>
                        created by {{$post->user->name}}
                    </li>
                    @endforeach
                </ul>
            @else
                <p>You have no posts!</p>
            @endif

            @if(count($locations) > 0)
                <h2>Your locations:</h2>
                @foreach($locations as $location)
                    <li>
                        {{$location->name}} <br/>
                        {{$location->city}} <br/>
                        created by {{$location->user->name}}
                    </li>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
