<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($countries->items() as $country)
    
<tr>

    <td>{{ $country->id}}</td>
    <td>{{ $country->name}}</td>
    <td></td>
    <td></td>
</tr>
@endforeach
  </tbody>
</table>
@endsection



