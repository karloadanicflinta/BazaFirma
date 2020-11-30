<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">SWIFT</th>
      <th scope="col">IBAN</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($companies->items() as $company)
    
<tr>

    <td>{{ $company->id}}</td>
    <td>{{ $company->name}}</td>
    <td>{{ $company->SWIFT}}</td>
    <td>{{ $company->IBAN}}</td>
    <td></td>
    <td></td>
</tr>
@endforeach
  </tbody>
</table>
@endsection

