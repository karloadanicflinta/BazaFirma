<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  

   <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Baza firma</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('cities.index') }}">City</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('companies.index') }}">Company</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contracts.index') }}">Contract</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('countries.index') }}">Country</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('goods.index') }}">Good</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('invoices.index') }}">Invoice</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('offices.index') }}">Office</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('suppliers.index') }}">Supplier</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>



<div class="container">

 @yield('content')

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

 
  </body>
</html>