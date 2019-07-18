@extends('layout')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>My Listings</h1>
    </div>
    <div class="col-12">
        <ul class="panel">
            @foreach ($listings as $listing)
            <li>
                <?= $listing->type . " " . $listing->bathrooms . " BEDROOMS " . $listing->neighborhood ?> 
                <a href="/listing/single/<?= $listing->id ?>" class="btn_location">View</a>
                <a href="/listing/<?= $listing->id ?>/edit" class="btn_location">Edit</a>
                <form method="post" action="{{ action('ListingController@destroy') }}">
                    @csrf
                    <input type="hidden" name="id" value="<?= $listing->id ?>">
                    <button type="submit" class="delete-btn">Delete</button>
                </form>
            </li>
            @endforeach
        </ul>
        <a href="/home" class="btn_location">Back to panel</a>
    </div>
</div>


@endsection