<?php

namespace App\Http\Controllers;
use App\ListingFeature;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function store (Request $request) {
        $listing = new ListingFeature();
        $listing->id = $request ->id;
        // $listing->user_id = Auth::user()->user_id;
        $listing->user_id = '1';
        $listing->saleprice = $request ->saleprice;
        $listing->rentalprice = $request ->rentalprice;
        $listing->totalsquaremeters = $request ->totalsquaremeters;
        $listing->rooms= $request ->rooms;
        $listing->bathrooms = $request ->bathrooms;
        $listing->yearbuilt = $request ->yearbuilt;
        $listing->countryname = $request ->countryname;
        $listing->cityname = $request ->cityname;
        $listing->zipcode = $request ->zipcode;
        $listing->mailaddress = $request ->mailaddress;

        $listing->save();

        return redirect(action('ListingController@create'));

    }
    public function create () {
        return view('listing.create');
    }
}
?>
