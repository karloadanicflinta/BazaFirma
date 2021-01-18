<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')


@section('content')
<div>
 <h3 class="mt-3">Invoice detail</h3>
  <ul class= "list-unstyled">

  <li>ID: {{ $invoice->id }}</li>
  <li>Name: {{ $invoice->number }}</li>
  <li>Fiscal Number: {{ $invoice->fiscal_number }}</li>
  <li>Invoice Date: {{ $invoice->invoice_date }}</li>
  <li>Due Date: {{ $invoice->due_date }}</li>

  <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </ul>
</div>
@endsection



