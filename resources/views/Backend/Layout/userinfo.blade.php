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
    <label for="digit">User Id</label>
    <input type="string" name="userid" class="form-control">
  </div>
  
  <div class="form-group">
    <label for="name">Password</label>
    <input type="string" name="password" class="form-control">
  </div>

  <div class="form-group">
    <label for="String">Participate Role</label>
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
      <th scope="col">User Id</th>
      <th scope="col">Password</th>
      <th scope="col">Participate Role</th>
      <th scope="col">Status</th>
    </tr>
  </thead>

</table>


</main>

@stop