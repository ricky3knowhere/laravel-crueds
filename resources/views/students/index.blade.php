@extends('layout.main')

@section('title', 'Student List')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3 class="my-3">Student List</h3>

      <a href="/students/create" class="btn btn-info mb-3">Add Student</a>
      
      @if(session('notif'))
      <div class="alert alert-success">
        {{ session('notif') }}
      </div>
      @endif

      @foreach($students as $student)
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <h4>{{ $student ->name }}</h4>
          <a href="/students/{{ $student ->id }}" class="badge badge-info badge-pill text-white">Detail</a>
        </li>
        @endforeach
      </ul>
    </div>

  </div>
</div>
@endSection