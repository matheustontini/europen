<?php

namespace App\Http\Controllers;
use App\ListingFeature;
use App\Image;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function show($id) 
    {
        $features = ListingFeature::find($id);
        return view('listing.single', compact('features'));
    }
    public function store(Request $request) 
    {

        $listing = new ListingFeature();
        // $listing->user_id = Auth::user()->user_id;
        $listing->description = $request->description;
        $listing->type = $request->type;
        $listing->neighborhood = $request->neighborhood;
        $listing->rentorsell = $request->rentorsell;
        $listing->user_id = '1';
        $listing->totalsquaremeters = $request->totalsquaremeters;
        $listing->rooms= $request->rooms;
        $listing->bathrooms = $request->bathrooms;
        $listing->yearbuilt = $request->yearbuilt;
        $listing->countryname = $request->countryname;
        $listing->cityname = $request->cityname;
        $listing->zipcode = $request->zipcode;
        $listing->mailaddress = $request->mailaddress;

        if ($request->rentorsell == 'rent') {
            $listing->rentalprice = $request->price;
        } else {
            $listing->saleprice = $request->price;
        }

        $listing->save();
        
        foreach ($request->image as $image) {        
            $pic = new Image();
            $pic->user_id = '1';
            $pic->listing_feature_id = $listing->id;
            $pic->image = $image;
            $pic->save();
        }

        

        return redirect(action('ListingController@listing'));

    }
    public function create() 
    {
        return view('listing.create');
    }
    public function listing(Request $request)
    {
        $listings = ListingFeature::where('cityname', 'LIKE', "%{$request->search}%")->get();
        // $listings = ListingFeature::all();

        return view('listing.list', compact('listings'));
    }

}
?>
