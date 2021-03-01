@extends('layout.main')

@section('title', 'Student List')

@section('content')
  
  <div class="container">
    <div class="row">
      <div class="col-md-11">
        <h3 class="my-3">Student_1 List</h3>
        
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">NRP</th>
              <th scope="col">Email</th>
              <th scope="col">Course</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($students as $student)
            <tr>
              <th scope="row">{{$loop -> iteration }}</td>
              <td>{{ $student -> name }}</td>
              <td>{{ $student -> nrp }}</td>
              <td>{{ $student -> email }}</td>
              <td>{{ $student -> course }}</td>
              <td>
                <a href="" class="badge badge-success">Edit</a>
                <a href="" class="badge badge-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
    </div>
  </div>
  
@endSection