<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<div>
 <h3 class="mt-3">Company detail</h3>
  <ul class= "list-unstyled">

  <li>ID: {{ $company->id }}</li>
  <li>Name: {{ $company->name }}</li>
  <li>SWIFT: {{ $company->SWIFT }}</li>
  <li>IBAN: {{ $company->IBAN }}</li>

  

  <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </ul>
</div>
@endsection



