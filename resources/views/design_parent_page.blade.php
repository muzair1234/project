<!DOCTYPE html>
<html>
<head>
	<title>App Name - @yield('title')</title>




 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




</head>
<body>




@section('navbar')
<div class="container" style="margin-top: 100px" >
	<nav class="navbar navbar-expand-sm bg-light">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a  id="index" class="navbar-brand" href="{{url('welcome')}}">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand" href="{{url('about')}}">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand" href="#">Link 3</a>
    </li>
  </ul>

</nav>

<br>
<br>
<br>
<br>
<br>
<br>


<ul class="pagination" style="margin-left: 400px">
    <li class="page-item"><a class="page-link" href="C:\wamp64\www\project\resources\views\pag2">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>


   </div>





</body>
</html>