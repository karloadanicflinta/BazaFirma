<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<div>
 <h3 class="mt-3">Good detail</h3>
  <ul class= "list-unstyled">

  <li>ID: {{ $good->id }}</li>
  <li>Name: {{ $good->name }}</li>
  <li>Date In: {{ $good->date_in }}</li>
  <li>Date Out: {{ $good->date_out }}</li>
  <li><a href="https://hr.wikipedia.org/w/index.php?search={{ $good->name }}">Wikipedia link</a></li>
  

  <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </ul>
</div>
@endsection



