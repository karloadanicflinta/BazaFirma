<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<div>
 <h3 class="mt-3">Country detail</h3>
  <ul class= "list-unstyled">

  <li>ID: {{ $country->id }}</li>
  <li>Name: {{ $country->name }}</li>
  <li><a href="https://hr.wikipedia.org/w/index.php?search={{ $country->name }}">Wikipedia link</a></li>
  

  <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </ul>
</div>
@endsection



