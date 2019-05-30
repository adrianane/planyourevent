@extends('layouts.main')

@section('title','Posts')
@section('content')
    <h3>Add your special location:</h3>
    <form method="POST" action="/locations">
        {{ csrf_field() }}
        <div class="col-sm-6">
            <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" name="name" placeholder="Enter location name">
            </div>
            <div class="form-group">
                <label>Street</label>
                <input type="text" class="form-control" name="street" placeholder="Enter street name">
            </div>
            <div class="form-group">
                <label>Street number</label>
                <input type="text" class="form-control" name="nr" placeholder="Enter street number">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" name="city" placeholder="Enter city">
            </div>
            <div class="form-group">
                <label>District</label>
                <input type="text" class="form-control" name="district" placeholder="Enter district">
            </div>
            <div class="form-group hidden">
                <label>Country</label>
                <input type="hidden" class="form-control" name="country" placeholder="Enter country" value="RO">
            </div>
            <div class="form-group">
                <label>Zipcode</label>
                <input type="text" class="form-control" name="zip" placeholder="Enter zipcode">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter phone">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Website:</label>
                <input type="text" class="form-control" name="web" placeholder="Enter website url">
            </div>
            <div class="form-group">
                <label>Facebook:</label>
                <input type="text" class="form-control" name="fb" placeholder="Enter facebook url">
            </div>
            <div class="form-group">
                <label>Twitter:</label>
                <input type="text" class="form-control" name="twitter" placeholder="Enter twitter url">
            </div>
            <div class="form-group">
                <label>Pinterest:</label>
                <input type="text" class="form-control" name="pinterest" placeholder="Enter pinterest url">
            </div>
            <div class="form-group">
                <label>Upload images</label>
                <input type="file" name="fotos" multiple>
            </div>
            <div class="form-group">
                <label>Facilities/Description</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection