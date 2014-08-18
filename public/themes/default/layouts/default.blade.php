<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>@yield('title')</title>

    <!-- load styles -->
    {{HTML::style(Theme::path('css/theme.css'))}}
    {{HTML::style('libs/fontawesome/css/font-awesome.min.css')}}

    <!-- load js scripts -->
    {{HTML::script('libs/jquery/dist/jquery.min.js')}}
    {{HTML::script('libs/bootstrap/dist/js/bootstrap.min.js')}}

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Laravel Starter</a>
        </div>

        
       
      </div><!-- /.container-fluid -->
    </nav>
    <!-- end of navbar -->


    <!-- main content container -->
    <div class="container">
        @yield('main')
    </div>
    

</body>

</html>
