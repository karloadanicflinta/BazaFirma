<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<div>
 <h3 class="mt-3">User detail</h3>
  <ul class= "list-unstyled">

  <li>Name: {{ $user->first_name }}</li>
  <li>Last Name: {{ $user->last_name }}</li>
  <li>Initials: {{ $user->initials }}</li>

  

  <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </ul>
</div>
@endsection


