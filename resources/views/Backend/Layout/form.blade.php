@extends('Backend.master')
@section('main')

<main class="app-content">
<form method="post" action="{{route('store')}}">
@csrf

  <div class="form-group">
    <label for="name">Your Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter Your Name Here">
  </div>

  <div class="form-group">
    <label for="digit">Phone Number</label>
    <input type="digit" name="contact" class="form-control"  placeholder="Enter Your Phone Number Here">
  </div>
  

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</main>

@stop