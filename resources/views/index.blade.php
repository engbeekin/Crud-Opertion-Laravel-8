@extends('layouts.layout')
@section('content')
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"> -->
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container ">
                  <h1 class="text-center mt-5 ">Compony Employe Info  </h1>
                <a href="{{route ('create')}}" class="btn btn-sm btn-primary" type="submit">Create New Employe</a>
                
                <div>
 <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Emp Name</th>
      <th scope="col">Email</th>
      <th scope="col">Moble No</th>
      <th scope="col">Job Type</th>
      <th scope="col">Salary</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($shaqo as $e)
    <tr>
      
      <td>{{$e->name}}</td>
      <td>{{$e->phone}}</td>
      <td>{{$e->email}}</td>
      <td>{{$e->job}}</td>
      <td>{{$e->salary}}$</td>
      <td>
      <a href="{{route('edit',[$e->id])}}" class="btn btn-sm btn-success" type="submit">Edit</a>
      <a href="{{route('delete', [$e->id])}}" class="btn btn-sm btn-danger" type="submit">Delete</a>
      </td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>

</div>




                  
                </div>

                
    @endsection
