@extends('layout')

@section('content')

@include('search')

    <div class="row">
        <div class="col-12">
            <h1>Listing</h1>
        </div>
        <div class="col-12 col-md-6 col-lg-4" >
            <div class="list_item mt-3 mb-2 mx-3 d-flex align-items-end flex-row-reverse" style="background-image: url('/img/home_img_01.jpg')">
                <a href="/listing/single">Flat 3 bedrooms good location</a>
            </div>
            <a href="#" class="btn_location ml-3 mb-3">Prague</a>
        </div>

    </div>
@endsection