<?php $id = \Auth::id(); ?>
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
            <li><a href="/listing/user/<?= $id ?>">Edit profile</a></li>
        </ul>
        <form method="post" action="{{ action('Auth\LoginController@logout') }}" class="register">
            @csrf
            <button type="submit" class="button">Log out</button>
        </form>
    </div>
</div>


@endsection