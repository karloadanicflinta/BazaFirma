<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">date_in</th>
      <th scope="col">date_out</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($contracts->items() as $contract)
    
<tr>

    <td>{{ $contract->id}}</td>
    <td>{{ $contract->name}}</td>
    <td>{{ $contract->date_in}}</td>
    <td>{{ $contract->date_out}}</td>
    <td></td>
    <td></td>
</tr>
@endforeach
  </tbody>
</table>
@endsection