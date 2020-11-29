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
    <label for="name">Your Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter Your Name Here">
  </div>

  <div class="form-group">
    <label for="digit">Phone Number</label>
    <input type="digit" name="contact" class="form-control"  placeholder="Enter Your Phone Number Here">
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
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($peoples as $people)


    <tr>
      <td >{{$people->id}}</td>
      <td>{{$people->name}}</td>
      <td>{{$people->contact}}</td>
      <td><a href="{{url('edit.people'.$people->id)}}">Edit</a></td>
      <td><a href="{{url('delete.people'.$people->id)}}">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>


</main>

@stop