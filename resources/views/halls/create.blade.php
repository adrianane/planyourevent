@extends('layouts.main')

@section('title','Event halls')
@section('content')
    <h3>Add an event hall</h3>
    <form method="POST" action="/halls" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="col-sm-6">
            <div class="form-group">
                <label>Hall name</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}"/>
            </div>
            <div class="form-group">
                <label>Min. number of seats</label>
                <input type="number" name="min_seats" class="form-control" value="{{old('min_seats')}}"/>
            </div>
            <div class="form-group">
                <label>Max. number of seats</label>
                <input type="number" name="max_seats" class="form-control" value="{{old('max_seats')}}"/>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="textarea" name="description" class="form-control" value="{{old('description')}}"/>
            </div>
            {{-- @TODO: get options from DB(locations added by the current user)--}}
            <div class="form-group">
                <label>Select your restaurant</label>
                <select name="location_id" class="form-control" value="{{old('location_id')}}">
                    <option value="0">Please select a restaurant</option>
                    <option value="1">Polaris</option>
                    <option value="2">Sun Garten	</option>
                    <option value="4">Adam's Events	</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection