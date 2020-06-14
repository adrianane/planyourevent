@extends('layouts.main')

@section('title', $hall->name)
@section('content')
    <h3>Add an event hall</h3>
    <form method="POST" action="/halls/{{$hall->id}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{csrf_field()}}
        <div class="col-sm-6">
            <div class="form-group">
                <label>Hall name</label>
                <input type="text" name="name" class="form-control" value="{{$hall->name}}"/>
            </div>
            <div class="form-group">
                <label>Min. number of seats</label>
                <input type="number" name="min_seats" class="form-control" value="{{$hall->min_seats}}"/>
            </div>
            <div class="form-group">
                <label>Max. number of seats</label>
                <input type="number" name="max_seats" class="form-control" value="{{$hall->max_seats}}"/>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="textarea" name="description" class="form-control" value="{{$hall->description}}"/>

            </div>
            <div class="form-group">
                <label>Select your restaurant</label>
                <select name="location_id" class="form-control" value="">
                    <option value="0">Please select a restaurant</option>
                    @foreach($locations as $loc)
                        @if($loc->id == $hall->location_id)
                            <option value="{{$loc->id}}" selected>{{$loc->name}}</option>
                        @else
                            <option value="{{$loc->id}}">{{$loc->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection