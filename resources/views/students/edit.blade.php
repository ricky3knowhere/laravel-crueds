@extends('layout.main')

@section('title', 'Edit Student')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3 class="my-3">Form Edit Student</h3>

      <form method="post" action="/students/{{ $student ->id }} ">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
          placeholder="Insert name" name="name" value="{{ $student ->name }}">
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="nrp">NRP</label>
          <input type="number" class="form-control @error('nrp') is-invalid @enderror" id="nrp"
          placeholder="Insert NRP" name="nrp" value="{{ $student ->nrp }}">
          @error('nrp')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
          placeholder="Insert email" name="email" value="{{ $student ->email }}">
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="course">Course</label>
          <input type="text" class="form-control @error('course') is-invalid @enderror" id="course"
          placeholder="Insert course" name="course" value="{{ $student ->course }}">
          @error('course')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-info">Save</button>
      </form>

    </div>
  </div>
  @endSection