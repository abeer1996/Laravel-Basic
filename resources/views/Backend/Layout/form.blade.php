@extends('Backend.master')
@section('main')

<main class="app-content">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add New Role
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form method="post" action="{{route('store')}}">
@csrf

  <div class="form-group">
    <label for="digit">Role Id</label>
    <input type="digit" name="role" class="form-control"  placeholder="Enter New Role Id Here">
  </div>

  <div class="form-group">
    <label for="name">Role Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter Role Name Here">
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
      <th scope="col">Role Id</th>
      <th scope="col">Role Name</th>
    </tr>
  </thead>
 
</table>


</main>

@stop