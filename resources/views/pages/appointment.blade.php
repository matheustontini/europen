@extends('layout')

@section('content')
<div class="container-fluid">
    <form>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 justify-content-center text-center">
                    <h1 class="display-4">Appointment Scheduler</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12 justify-content-center text-center">
                <h2 class="apt">
                    Book an Appointment to see a listing right from the touch of a button!
                </h2>
            </div>
        </div>

          <div class="row">
            <div class="form-group col-6">
              <label for="firstName">First Name</label>
              <input type="name" class="form-control" id="" placeholder="" />
            </div>
  
            <div class="form-group col-6">
              <label for="lastName">Last Name</label>
              <input type="name" class="form-control" id="" placeholder="" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-4">
              <label for="date">Appointment Date</label>
              <input
                type="date"
                class="form-control"
              />
            </div>
  
            <div class="form-group col-4">
              <label for="Check-in">Check-in Time</label>
              <input type="time" class="form-control" id="" placeholder="00:00" />
            </div>
  
            <div class="form-group col-4">
              <label for="Check-out">Check-out Time</label>
              <input type="time" class="form-control" id="" placeholder="00:00" />
            </div>
          </div>
  
          <div class="form-group">
            <label for="textarea">Additional Comments:</label>
            <textarea
              class="form-control rounded-0"
              id="exampleFormControlTextarea1"
              rows="5"
            ></textarea>
          </div>

          <div class="row"> 
            <input class="btn col-4 button__style" type="submit" value="Submit">
          </div>
        </div>
      </form> 
      
      
      <div class="row">
          <div class="col-6">
              <h3>Get Support</h3>
              <h3>We're Here to Help!</h3>
              <hr style="border: 4px;" />
          </div>
      </div>
</div>
@endsection
