<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<a href="{{ route('offices.create')  }}" class= "btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th>Actions</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($offices->items() as $office)
    
<tr>

    <td>{{ $office->id}}</td>
    <td>{{ $office->name}}</td>
<td>

    <a class="btn btn-outline-primary" href="{{ route ('offices.show', ['office' => $office->id ] ) }} ">Details</a>
    <a class="btn btn-outline-primary" href="{{ route ('offices.edit', ['office' => $office->id ] ) }}">Edit</a>
</td>
</tr>
@endforeach
  </tbody>
</table>
@endsection


