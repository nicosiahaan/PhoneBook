<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css\navbarr.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js\script.js"></script>
   {{-- <title>CSS MenuMaker</title> --}}
</head>
<body>

<div id='cssmenu'>
<ul>
   <li class='active'><a href='/'>Home</a></li>
   
   <li class="nav-item"><a class="nav-link link" href="/list">Contact List</a></li></ul>
</ul>
</div>


      
   <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
       <div class="close-icon"></div>
   </button>

</div>
<div>
  @yield('kontenku')
</div>
</body>
<html>
