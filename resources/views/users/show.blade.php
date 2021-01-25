<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@php
$loggedInUser = \Auth::user();
@endphp



@section('content')
<div>
 <h3 class="mt-3">User detail</h3>
  <ul class= "list-unstyled">

  <li>Name: {{ $user->first_name }}</li>
  <li>Last Name: {{ $user->last_name }}</li>
  <li>Initials: {{ $user->initials }}</li>

  <div class="btn-group mt-5" role="group">
        <a class="btn btn-secondary" href="{{ route('users.index') }}">Back</a>

        <!-- admin svima mijenja password, korisnik samo sebi -->
        @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
        <a class="btn btn-primary" href="{{ route('users.edit', ['user' => $user]) }}">Edit</a>
        <a class="btn btn-primary" href="{{ route('change_password.edit', ['user' => $user]) }}">Change Password</a>
        @endif

        <!-- admin svima deaktivira račun, korisnik može samo sebi -->
        @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
        <form class="form-inline" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deactivate</button>
        </form>
        @endif
    </div>


  <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </ul>
</div>
@endsection


