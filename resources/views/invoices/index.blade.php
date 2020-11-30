<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Number</th>
      <th scope="col">fiscal_number</th>
      <th scope="col">invoice_date</th>
      <th scope="col">due_date</th>

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

    <td></td>
    <td></td>
</tr>
@endforeach
  </tbody>
</table>
@endsection

