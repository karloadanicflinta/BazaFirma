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
  @foreach ($cities->items() as $city)
    
<tr>

    <td>{{ $city->id}}</td>
    <td>{{ $city->name}}</td>
    <td></td>
    <td></td>
</tr>
@endforeach
  </tbody>
</table>
@endsection



