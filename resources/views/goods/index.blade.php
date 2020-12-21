<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<a href="{{ route('goods.create')  }}" class= "btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">date_in</th>
      <th scope="col">date_out</th>
      <th>Actions</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($goods->items() as $good)
    
<tr>

    <td>{{ $good->id}}</td>
    <td>{{ $good->name}}</td>
    <td>{{ $good->date_in}}</td>
    <td>{{ $good->date_out}}</td>
    
    <td>
    <a class="btn btn-outline-primary" href="{{ route ('goods.show', ['good' => $good->id ] ) }} ">Details</a>
    <a class="btn btn-outline-primary" href="{{ route ('goods.edit', ['good' => $good->id ] ) }}">Edit</a>
    </td>
</tr>
@endforeach
  </tbody>
</table>
@endsection

