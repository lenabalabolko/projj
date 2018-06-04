<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <!--  <title>{{ config('app.name', 'Laravel') }}</title> -->
<title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
.backgrounds {
/*float:none;*/
min-height:800px;
margin:0 auto;
position: relative;
width:100%;
background: #DDA0DD center 0;
background-position: center top;
}

.bg-holder {
padding: 75px 0 1px;
position:relative;
background: #9400D3;

}

.banner {
margin:0 auto;
position:relative;
width:1230px;
background: #9400D3;
}

.logo {
float:left;
min-height:47px;
padding:20px 0 18px;
width:500px;
background:#4B0082;
color: #e0dfe5;

font-size:49px;
letter-spacing:0;
text-align:center;
text-transform:uppercase;
}
.btn-danger {
    color: #fff;
    background-color: #4B0082;
    border-color: #9400D3 !important;
}

</style>
  <body>
   @section('sidebar')
      <div class="backgrounds">
      <header class="bg-holder">
        <div class="banner">
          <div class="logo">
 iPhone Apple Indastries Store
          </div>

      </br></br></br>
        </div>
   </header>
          
    @show

   <div class="container">
      @yield('content')
    </div>

</div>
  </body>
</html>

    <!-- Scripts -->
   <!--  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
 -->