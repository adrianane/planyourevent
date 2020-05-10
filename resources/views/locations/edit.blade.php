@extends('layouts.main')

@section('title','Posts')
@section('content')
    <h3>Edit location:</h3>
    <form method="POST" action="/locations/{{$location->id}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="col-sm-6">
            <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" name="name" placeholder="Enter location name" value="{{$location->name}}">
            </div>
            <div class="form-group">
                <label>Street</label>
                <input type="text" class="form-control" name="street" placeholder="Enter street name" value="{{$location->street}}">
            </div>
            <div class="form-group">
                <label>Street number</label>
                <input type="text" class="form-control" name="nr" placeholder="Enter street number" value="{{$location->nr}}">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" name="city" placeholder="Enter city" value="{{$location->city}}">
            </div>
            <div class="form-group">
                <label>District</label>
                <input type="text" class="form-control" name="district" placeholder="Enter district" value="{{$location->district}}">
            </div>
            <div class="form-group hidden">
                <label>Country</label>
                <input type="hidden" class="form-control" name="country" placeholder="Enter country" value="RO" value="{{$location->country}}">
            </div>
            <div class="form-group">
                <label>Zipcode</label>
                <input type="text" class="form-control" name="zip" placeholder="Enter zipcode" value="{{$location->zip}}">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter phone" value="{{$location->phone}}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{$location->email}}">
            </div>
            <div class="form-group">
                <label>Website:</label>
                <input type="text" class="form-control" name="web" placeholder="Enter website url" value="{{$location->web}}">
            </div>
            <div class="form-group">
                <label>Facebook:</label>
                <input type="text" class="form-control" name="fb" placeholder="Enter facebook url" value="{{$location->fb}}">
            </div>
            <div class="form-group">
                <label>Twitter:</label>
                <input type="text" class="form-control" name="twitter" placeholder="Enter twitter url" value="{{$location->twitter}}">
            </div>
            <div class="form-group">
                <label>Pinterest:</label>
                <input type="text" class="form-control" name="pinterest" placeholder="Enter pinterest url" value="{{$location->pinterest}}">
            </div>
            <div class="form-group">
                <label>Upload images</label>
                <input type="file" name="img[]" multiple>
            </div>
            <div class="form-group">
                <label>Facilities/Description</label>
                <textarea id ="description" name="description" class="form-control" rows="3" value="{{$location->description}}"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <a href="/locations" class="btn">back</a>
    <!-- call ckeditor 5 for the description field -->
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection