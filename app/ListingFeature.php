<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListingFeature extends Model
{
    protected $table = "listingfeatures";

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function firstImage()
    {
        return $this->images()->first();
    }
}
