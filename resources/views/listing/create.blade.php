@extends('layout')
@section('content')

<h1>Create a Listing</h1>
    <form method="post" action="{{ action('ListingController@store') }}">
    @csrf
    <div class="row">
        <div class="form-group col-12">
            <label for="description">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-6">
            <label for="type">Type</label>     
            <select id="dropdown" class="form-control" name="type">
                <option value="Flat">Flat</option>
                <option value="House">House</option>
            </select>
        </div>
        <div class="form-group col-6">
            <label for="neighborhood">Neighborhood</label>
            <input type="text" class="form-control" name="neighborhood">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12">
            <label for="Address">Address</label>
            <input type="text" class="form-control" name="mailaddress">
        </div>
    </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="City">City</label>
                <input type="text" class="form-control" name="cityname">
            </div>
            <div class="form-group col-md-4">
                    <label for="Country">Country</label>
                    <input type="text" class="form-control" name="countryname">
            </div>
            <div class="form-group col-md-4">
                    <label for="Zip">Zip</label>
                    <input type="text" class="form-control" name="zipcode">
            </div>
        </div>

        <div class="row">  
            <div class="form-group col-4">
                <label for="rentorsell">Rent or Sell</label>
                <select id="dropdown" class="form-control" name="rentorsell">
                    <option value="rent" selected>For Rent</option>
                    <option value="sell">To Sell</option>
                </select>
            </div>
            <div class="form-group col-4">
                <label for="Offer Price">Offer Price</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="form-group col-4"> 
                <label for="Currency">Currency</label>     
                <select id="dropdown" class="form-control" name="currency">
                    <option value="Euro">Euro</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="Square Meters">Total Square Meters</label>
                <input type="number" class="form-control" name="totalsquaremeters">
            </div>
            <div class="col-6">
                <label for="Year Built">Year Built</label>
                <input type="number" class="form-control" name="yearbuilt">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="Rooms">Total Bedrooms</label>
                <input type="number" class="form-control" name="rooms">
            </div>
            <div class="col-6">
                <label for="Bathrooms">Bathrooms</label>
                <input type="number" class="form-control" name="bathrooms">
            </div>
        </div><br>
        <div class="row">
            <div class="col-12">
                <label for="image">Images</label>
                <div id="image">
                    <input type="text" class="form-control" placeholder="URL" name="image[0]">
                </div>
                <input type="button" onClick="createImage()" value="+" id="but" class="btn btn-secondary mt-2">
            </div>
        </div>
        <div class="register row">
            <div class="col-12">
                <button type="submit" class="button">Submit</button>
            </div>
        </div>
    </form> 

@endsection

<script>
    const createImage = () => {
        let i = document.getElementById("image").childElementCount;
        const image = document.getElementById("image");
        const imageIn = document.createElement('input');
        imageIn.className = 'form-control mt-2';
        imageIn.placeholder = 'URL';
        imageIn.name = 'image['+ (i) +']';
        image.appendChild(imageIn);
    }
</script>