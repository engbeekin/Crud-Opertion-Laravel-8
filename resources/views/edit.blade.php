@extends('layouts.layout')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="text-center">Edit Employe </h1>
    <h3>Edit Employe Name: <b> {{$emp->name}}</b></h3>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach -->
         </ul>
      </div><br />
    @endif
      <form method="post" action="{{route('update', $emp->id)}}">
          @csrf
          <div class="form-group">    
              <label for="first_name">Employe Name:</label>
              <input type="text" class="form-control" value="{{$emp->name}}" name="name" required/>
          </div>
          <div class="form-group">    
              <label for="first_name">Employe Email:</label>
              <input type="text" class="form-control" name="email" value="{{$emp->email}}" required/>
          </div>
          <div class="form-group">    
              <label for="first_name">Employe Mobile no:</label>
              <input type="text" class="form-control" name="phone" value="{{$emp->phone}}"required/>
          </div>
          <div class="form-group">    
              <label for="first_name">Job Type:</label>
              <input type="text" class="form-control" name="job"value="{{$emp->job}}"required/>
          </div>
          <div class="form-group">    
              <label for="first_name">Employe Salary:</label>
              <input type="text" class="form-control" name="salary" value="{{$emp->salary}}"required/>
          </div>

                                
          <button  type="submit" class="btn btn-primary m-3 ">Edit Employe</button>
      </form>
  </div>
</div>
</div>

<!-- endsection -->