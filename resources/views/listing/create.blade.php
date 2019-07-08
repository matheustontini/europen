@extends('layout')
@section('content')

<h1>Create a Listing</h1>
    <form method="post" action="{{ action('ListingController@store') }}">
    @csrf
        <div class="row">
            <div class="col">
                <label for="First Name">First Name</label>
                <input type="text" class="form-control" placeholder="Jane">
            </div>
            <div class="col">
                <label for="Last Name">Last Name</label>
                <input type="text" class="form-control" placeholder="Doe">
            </div>
        </div><br>
            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" class="form-control" placeholder="1234 Main St." name="mailaddress">
            </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="City">City</label>
                <input type="text" class="form-control" placeholder="Prague" name="cityname">
            </div>
        <div class="form-group col-md-4">
                <label for="Country">Country</label>
                <input type="text" class="form-control" placeholder="Czech Republic" name="countryname">
        </div>
        <div class="form-group col-md-4">
                <label for="Zip">Zip</label>
                <input type="text" class="form-control" name="zipcode">
        </div>
        </div>

        <div class="row">  
            <div class="form-group col-4">
                <label for="Rent or Sell">Rent or Sell</label>
                <select id="dropdown" class="form-control">
                <option selected>Choose...</option>
                <option>For Rent</option>
                <option>To Sell</option>
                </select>
            </div>
            <div class="form-group col-4">
                <label for="Offer Price">Offer Price</label>
                <input type="text" class="form-control" placeholder="" name="saleprice">
            </div>
            <div class="form-group col-4">
                <label for="Currency">Currency</label>     
                <select id="dropdown" class="form-control">
                <option selected>Choose...</option>
                <option>Euros</option>
                <option>Local Country Currency</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="Square Meters">Total Square Meters</label>
                <input type="text" class="form-control" placeholder="1,000" name="totalsquaremeters">
            </div>
            <div class="col">
                <label for="Year Built">Year Built</label>
                <input type="text" class="form-control" placeholder="2006" name="yearbuilt">
            </div>
        </div><br>
        <div class="row">
            <div class="col">
                <label for="Rooms">Total Bedrooms</label>
                <input type="text" class="form-control" placeholder="3" name="rooms">
            </div>
            <div class="col">
                <label for="Bathrooms">Bathrooms</label>
                <input type="text" class="form-control" placeholder="3.5" name="bathrooms">
            </div>
        </div><br>
        <div class="picture link">
            <input type="text" class="form-control" placeholder="Input Home Picture Link">
        </div><br>
        <div class="register">
            <button type="submit" class="button">Submit</button>
        </div>
    </form> 
@endsection
