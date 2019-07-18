@extends('layout')
@section('content')

<h1>Edit Profile</h1>
@if (auth()->id() == $user->id)
    <form method="post" action="{{ action('HomeController@update', [$user->id]) }}">
        @csrf
        <div class="row">
            <div class="form-group col-12">
                <label for="description">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>
            <div class="form-group col-12">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $user->email }}">
            </div>
            <div class="form-group col-6">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" value="{{ $user->city }}">
            </div>
            <div class="form-group col-6">
                <label for="country">Country</label>
                <input type="text" class="form-control" name="country" value="{{ $user->country }}">
            </div>
            <div class="form-group col-12">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" name="phone" value="{{ $user->phone }}">
            </div>
        </div>
        <div class="register row">
            <div class="col-12 mb-4">
                <button type="submit" class="button">Save</button>
            </div>
        </div>
    </form> 
@else
    <div class="alert alert-danger">You don't have access to this page.</div>
@endif
    <a href="/home" class="btn_location">Back to panel</a>
@endsection