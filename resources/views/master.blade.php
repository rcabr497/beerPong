<html>
    <head>
      	<!--Import Google Icon Font-->
      	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<!--Import materialize.css-->
     	 <!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

  		<!-- Compiled and minified JavaScript -->
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
  		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      
           

      	<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="grey lighten-4">
    <nav class="z-depth-0">
    <div class="nav-wrapper red darken-2 z-depth-0">
        <a href="#" class="brand-logo center">test site</a>
    </div>
</nav>
 <!-- Page Layout here -->
      <div class="row" style="margin-bottom: 0px;">
        <div class="col s2 grey lighten-2 menu-left">
          @include('layouts/main-menu')
        </div>
        <div class="col s10 main-content">
          @yield('content')
        </div>
      </div>
    	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      	<script type="text/javascript" src="{{ URL::asset('js/materialize.min.js') }}"></script>
      	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </body>
</html>