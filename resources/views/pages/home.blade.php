@extends('layout')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Welcome!</h1>
    </div>
    <div class="col-12">
        <ul class="panel">
            <li><a href="/listing/user/listing">My listings</a></li>
            <li><a href="/listing/create">Create a new listing</a></li>
            <li><a href="">Edit profile</a></li>
        </ul>
        <a href="#" class="btn_location">Log out</a>
    </div>
</div>


@endsection