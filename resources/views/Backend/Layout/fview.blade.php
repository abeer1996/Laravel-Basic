@extends('Backend.master')
@section('main')

<main class="app-content">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add new people
</button>

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
    <input type="string" name="userid" class="form-control"  placeholder="Enter User Id Here">
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

  <div class="form-group">
    <label for="name">Your Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter Your Name Here">
  </div>

  <div class="form-group">
    <label for="digit">Phone Number</label>
    <input type="digit" name="contact" class="form-control"  placeholder="Enter Your Phone Number Here">
  </div>

  <div class="form-group">
    <label for="mail">Mail Id</label>
    <input type="mail" name="mail" class="form-control"  placeholder="Enter Your E-mail Here">
  </div>

  <div class="form-group">
    <label for="name">Present Address</label>
    <input type="string" name="name" class="form-control"  placeholder="Enter Your Address Here">
  </div>
  
  <div class="form-group">
    <label for="date">Date of Admsiion</label>
    <input type="date" name="date" value="" class="form-control">
  </div>

  <div class="form-group">
    <label for="name">Course Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter Your Course Name Here">
  </div>

  <div class="form-group">
  <label for="level">Course Level</label>
  <select id="level" name="level" class="form-control">
    <option value="none">None</option>
    <option value="level 1">Level 1</option>
    <option value="level 2">Level 2</option>
    </select>
  </div>
  
  <div class="form-group">
  <label for="type">Payment Type</label>
  <select id="type" name="type" class="form-control">
    <option value="#">Choose A Type</option>
    <option value="mobile Banking">Mobile Banking</option>
    <option value="On Cash Payment">On Cash Payment</option>
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
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Participate Role</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  @foreach($peoples as $people)


    <tr>
      <td >{{$people->id}}</td>
      <td>{{$people->name}}</td>
      <td>{{$people->contact}}</td>
      <td>{{$people->role}}</td>
      <td><a href="#">Edit</a></td>
      <td><a href="{{route('delete.people',$people->id)}}">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>


</main>

@stop