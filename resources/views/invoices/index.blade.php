<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<a href="{{ route('contracts.create')  }}" class= "btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Number</th>
      <th scope="col">fiscal_number</th>
      <th scope="col">invoice_date</th>
      <th scope="col">due_date</th>
      <th>Actions</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($invoices->items() as $invoice)
    
<tr>

    <td>{{ $invoice->id}}</td>
    <td>{{ $invoice->number}}</td>
    <td>{{ $invoice->fiscal_number}}</td>
    <td>{{ $invoice->invoice_date}}</td>
    <td>{{ $invoice->due_date}}</td>
     
     <td>
    <a class="btn btn-outline-primary" href="{{ route ('invoices.show', ['invoice' => $invoice->id ] ) }} ">Details</a>
    <a class="btn btn-outline-primary" href="{{ route ('invoices.edit', ['invoice' => $invoice->id ] ) }}">Edit</a>
</td>
</tr>
@endforeach
  </tbody>
</table>
@endsection

