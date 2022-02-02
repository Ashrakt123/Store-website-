<!DOCTYPE html>
<html>

<head>
    <title>STORE</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"></link>
    <link rel="stylesheet" href="{{asset('/css/font-awesome.css') }}"></link>
    <link rel="stylesheet" href="{{ asset('/css/backend.css') }}"></link>
</head>

<body>
   
<header class="d-flex">
   <div ><h3 >{{config('app.name')}}</h3></div>
   <div class="ml-auto">
      <a href="{{route('profile.show')}}">{{Auth::user()->name}}</a>
      <a href="#" onclick="document.getElementById('logout').submit()">Logout</a>
      <form id="logout" class="d-none" action="{{route('logout')}}" method="POST">
         @csrf
      <button type="submit"></button>
      </form>

   </div>

</header>
<div class="container ">
<div class="row ">

<div class="col-md-2 bord ">
<nav class="nav flex-column">
      <button> <a href="{{route('categories.index')}}" class="nav_link active">categories</a></button>
      <button><a href="{{route('products.index')}}" class="nav_link active">Products</a></button>
      <button><a href="{{route('products.index')}}" class="nav_link active">Orders</a></button>
      </nav>
</div>

<div class="col-md-10">
  @yield('content')
</div>

</div> <!--container -->
</div> <!--row -->

   <script src="/js/bootstrap.min.js"></script>
</body>
</html>