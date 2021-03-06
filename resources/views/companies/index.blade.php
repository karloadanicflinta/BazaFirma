<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<a href="{{ route('companies.create')  }}" class= "btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">SWIFT</th>
      <th scope="col">IBAN</th>
      <th>Actions</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($companies->items() as $company)
    
<tr>

    <td>{{ $company->id}}</td>
    <td>{{ $company->name}}</td>
    <td>{{ $company->SWIFT}}</td>
    <td>{{ $company->IBAN}}</td>

    <td>
    <a class="btn btn-outline-primary" href="{{ route ('companies.show', ['company' => $company->id ] ) }} ">Details</a>
    <a class="btn btn-outline-primary" href="{{ route ('companies.edit', ['company' => $company->id ] ) }}">Edit</a>
    </td>
</tr>
@endforeach
  </tbody>
</table>
@endsection

