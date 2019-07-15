@extends('layout')

@section('content')

@include('search')

    <div class="row">
        <div class="col-12">
            <h1>Listing</h1>
        </div>
        @if (count($listings) < 1)
            <div class="alert alert-secondary col-12">Sorry, we did not find results for your search. <a href="/listing">Show all listings</a>.</div>
        @else
        @foreach ($listings as $listing)
        <div class="col-12 col-md-6 col-lg-4" >
            <div class="list_item mt-3 mb-2 mx-3 d-flex align-items-end flex-row-reverse" style="background-image: url('<?= $listing->images ?>')">
                <a href="/listing/single/<?= $listing->id ?>"><?= $listing->type . " " . $listing->bathrooms . " BEDROOMS " . $listing->neighborhood ?></a>
            </div>
            <a href="/listing?search=<?= $listing->cityname ?>" class="btn_location ml-3 mb-3"><?= $listing->cityname ?></a>
        </div>
        @endforeach
        @endif
    </div>
@endsection