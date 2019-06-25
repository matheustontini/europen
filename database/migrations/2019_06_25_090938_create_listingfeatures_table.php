<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ListingFeatures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedDecimal('saleprice')->nullable();
            $table->unsignedDecimal('rentalprice')->nullable();
            $table->unsignedDecimal('totalsquaremeters')->nullable();
            $table->unsignedInteger('rooms')->nullable();
            $table->unsignedDecimal('bathrooms')->nullable();
            $table->unsignedInteger('yearbuilt')->nullable();
            $table->string('countryname');
            $table->string('cityname');
            $table->string('zipcode')->nullable();
            $table->string('mailaddress')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listingfeatures');
    }
}
