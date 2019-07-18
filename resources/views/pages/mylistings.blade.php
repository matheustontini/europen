@extends('layout')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>My listings</h1>
    </div>
    <div class="col-12">
        <ul class="panel">
            @foreach ($listings as $listing)
            <li><?= $listing->type . " " . $listing->bathrooms . " BEDROOMS " . $listing->neighborhood ?> <a href="/listing/<?= $listing->id ?>/edit" class="btn_location">Edit</a></li>
            @endforeach
        </ul>
        <a href="/home" class="btn_location">Back to panel</a>
    </div>
</div>


@endsection