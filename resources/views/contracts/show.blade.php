<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<div>
 <h3 class="mt-3">Contract detail</h3>
  <ul class= "list-unstyled">

  <li>ID: {{ $contract->id }}</li>
  <li>Name: {{ $contract->name }}</li>
  <li>Date In: {{ $contract->date_in }}</li> 
  <li>Date Out: {{ $contract->date_out }}</li>

  

  <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </ul>
</div>
@endsection



