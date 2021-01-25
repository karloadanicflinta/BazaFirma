<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<a href="{{ route('offices.create')  }}" class= "btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th>Actions</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($users->items() as $user)
    
<tr>

    <td>{{ $user->id}}</td>
    <td>{{ $user->first_name}}</td>
    <td>{{ $user->last_name}}</td>
    <td>{{ $user->country->name}}</td>

<td>
    <a class="btn btn-outline-primary" href="{{ route ('users.show', ['user' => $user->id ] ) }} ">Details</a>
    <a class="btn btn-outline-primary" href="{{ route ('users.edit', ['user' => $user->id ] ) }}">Edit</a>
</td>
</tr>
@endforeach
  </tbody>
</table>
@endsection
