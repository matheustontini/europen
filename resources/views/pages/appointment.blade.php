@extends('layout')

@section('content')
<div class="container-fluid">
    <h1>Appointment Scheduler</h1>
    <h2>Book an Appointment to see a listing right from the touch of a button</h2>
    <div class="row">
        <div class="col-12">

        </div>
    </div>
    
    <form>
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="name" class="form-control" id="" placeholder="">
        </div>

        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="name" class="form-control" id="" placeholder="">
        </div>

        <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
{{-- 
        First , Last Name
    
        Time to book appointment w drop down menu 

        Message --}}

      </form>
   

</div>
@endsection
