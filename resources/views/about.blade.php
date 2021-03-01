@extends('layout.main')

@section('title', 'About')
@section('content')  
  <div class="container">
    <div class="row">
      <div class="col-md-10">

        <h1 class="mt-3">Hello, {{$name}}!</h1>
      </div>
    </div>
  </div>
@endSection