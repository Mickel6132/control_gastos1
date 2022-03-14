<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Control Gasto') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->   
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark " style="font-family: algeria; color: white;">
<img src="https://c.tenor.com/RlUzcdBM6dcAAAAC/rent-a-girlfriend-kanojo-okarishimasu.gif" width="50px">𝙈𝙄𝙆𝙀 𝙄𝙉𝘿𝙐𝙎𝙏𝙍𝙄𝙀𝙎
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
  <div class="collapse navbar-collapse" style="margin-left: 60%;">
    <div class="navbar-nav">

      <a class="btn btn-primary text-dark" href="{{route('usuarios')}}">𝙐𝙨𝙪𝙖𝙧𝙞𝙤𝙨</a>

      <a class=" btn btn-info" href="{{route('categorias')}}">𝘾𝙖𝙩𝙚𝙜𝙤𝙧𝙞𝙖𝙨</a>

      

                                <a class="btn btn-light" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('𝘾𝙚𝙧𝙧𝙖𝙧 𝙨𝙚𝙨𝙞𝙤𝙣') }}
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
    </div>
  </div>
</nav>
       <div class="">
        
        <!-- Esto es una seccion -->
        @yield('content') 
    </div>
   <!--  <div class="footer" style="background:black;color: white;">
        <h1>Footer</h1>
    </div> -->
</body>
</html>