<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<a href="{{ route('contracts.create')  }}" class= "btn btn-primary mt-5">Add</a>
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
  @foreach ($contracts->items() as $contract)
    
<tr>

    <td>{{ $contract->id}}</td>
    <td>{{ $contract->name}}</td>
    <td>{{ $contract->date_in}}</td>
    <td>{{ $contract->date_out}}</td>

     <td>
    <a class="btn btn-outline-primary" href="{{ route ('contracts.show', ['contract' => $contract->id ] ) }} ">Details</a>
    <a class="btn btn-outline-primary" href="{{ route ('contracts.edit', ['contract' => $contract->id ] ) }}">Edit</a>
    </td>
</tr>
@endforeach
  </tbody>
</table>
@endsection