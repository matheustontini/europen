@extends('layout')
@section('content')

<h1>Edit a Listing</h1>
@if (auth()->id() == $listing->user_id)
    <form method="post" action="{{ action('ListingController@update', [$listing->id]) }}">
    @csrf
    <div class="row">
        <div class="form-group col-12">
            <label for="description">Description</label>
            <textarea class="form-control" name="description">{{ $listing->description }}</textarea>
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
            <input type="text" class="form-control" name="neighborhood" value="{{ $listing->neighborhood }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12">
            <label for="Address">Address</label>
            <input type="text" class="form-control" name="mailaddress" value="{{ $listing->mailaddress }}">
        </div>
    </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="City">City</label>
                <input type="text" class="form-control" name="cityname" value="{{ $listing->cityname }}">
            </div>
            <div class="form-group col-md-4">
                    <label for="Country">Country</label>
                    <input type="text" class="form-control" name="countryname" value="{{ $listing->countryname }}">
            </div>
            <div class="form-group col-md-4">
                    <label for="Zip">Zip</label>
                    <input type="text" class="form-control" name="zipcode" value="{{ $listing->zipcode }}">
            </div>
        </div>

        <div class="row">  
            <div class="form-group col-4">
                <label for="rentorsell">Rent or Sell</label>
                <select id="dropdown" class="form-control" name="rentorsell">
                    <option value="rent" 
                    <?= $listing->rentorsell == "rent" ? "selected" : '' ?>>For Rent</option>
                    <option value="sell"
                    <?= $listing->rentorsell == "sell" ? "selected" : '' ?>>To Sell</option>
                </select>
            </div>
            <div class="form-group col-4">
                <label for="Offer Price">Offer Price</label>
                <input type="number" class="form-control" name="price" value="<?= $listing->rentorsell == "rent" ? $listing->rentalprice : $listing->saleprice ?>">
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
                <input type="number" class="form-control" name="totalsquaremeters" value="{{ $listing->totalsquaremeters }}">
            </div>
            <div class="col-6">
                <label for="Year Built">Year Built</label>
                <input type="number" class="form-control" name="yearbuilt" value="{{ $listing->yearbuilt }}">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="Rooms">Total Bedrooms</label>
                <input type="number" class="form-control" name="rooms" value="{{ $listing->rooms }}">
            </div>
            <div class="col-6">
                <label for="Bathrooms">Bathrooms</label>
                <input type="number" class="form-control" name="bathrooms" value="{{ $listing->bathrooms }}">
            </div>
        </div><br>
        <div class="row">
            <div class="col-12">
                <label for="image">Images</label>
                <div id="image">
                    <?php $i = 0; ?>
                    @foreach ($listing->images as $image) 
                        <input type="file" class="form-control mt-2" placeholder="URL" name="image[<?= $i ?>]" value="{{ $image->image }}">
                        <?php $i++; ?>
                    @endforeach
                </div>
                <input type="button" onClick="createImage()" value="+" id="but" class="btn btn-secondary mt-2">
            </div>
        </div>
        <div class="register row">
            <div class="col-12">
                <button type="submit" class="button">Save</button>
            </div>
        </div>
    </form> 
    @else
        <div class="alert alert-danger">You don't have access to this page.</div>
    @endif
    <a href="/listing/user/listing" class="btn_location">Back to your listings</a>
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