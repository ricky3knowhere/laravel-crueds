@extends('layout.main')

@section('title', 'Student Details')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-11">
      <h3 class="my-3">Student Details</h3>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $student ->name }}</h5> 
          <h6 class="card-subtitle mb-2 text-muted">{{ $student ->nrp }}</h6> 
          <p class="card-text">{{ $student ->email }} </p>
          <p class="card-text">{{ $student ->course }} </p>
        
        <a href="{{ $student ->id }}/edit" class="btn btn-success"> Edit</a>
     
     <form action="{{ $student ->id  }}" method="post" class="d-inline">
       @method('delete')
       @csrf
        <button type="submit" class="btn btn-warning" onclick="return confirm('Delete this data..?')"> Delete</button>
     </form>
         
         
          <a href="/students" class="card-link">Back</a>
        </div>
      </div>

    </div>

  </div>
</div>

@endSection