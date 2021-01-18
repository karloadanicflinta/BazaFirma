<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<div>
 <h3 class="mt-3">Office detail</h3>
  <ul class= "list-unstyled">

  <li>ID: {{ $office->id }}</li>
  <li>Name: {{ $office->name }}</li>

  

  <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </ul>
</div>
@endsection



