@extends('Backend.master')
@section('main')

<main class="app-content">



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
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
  
  <div class="form-group">
  <label for="role">Participate Role</label>
  <select id="role" name="role" class="form-control">
    <option value="#">Choose a Role</option>
    <option value="admin">Admin</option>
    <option value="teacher">Teacher</option>
    <option value="student">Student</option>
    </select>
  </div>
      </div>



      
      <div class="modal-footer">
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sl No.</th>
      <th scope="col">Payment Id</th>
      <th scope="col">Student Id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Payment Type</th>
      <th scope="col">Course Fee</th>
      <th scope="col">Receive Amount</th>
      <th scope="col">Due Amount</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>

</table>


</main>

@stop