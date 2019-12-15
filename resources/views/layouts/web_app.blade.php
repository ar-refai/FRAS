<html lang="en"><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FRAS System">
    <meta name="author" content="Abdelrahman Elrefai">
    <meta name="icon" content="Abdelrahman Elrefai">
    <link rel="icon" sizes="192x192" href="{{url('/image/logo.png')}}">
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style("Web/vendor/bootstrap/css/bootstrap.min.css")!!}
    <!-- Custom fonts for this template -->
    {!! Html::style("Web/vendor/fontawesome-free/css/all.min.css")!!}
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    {!! Html::style("Web/css/clean-blog.min.css")!!}
    @yield('head_tag')
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="{{route('Web.Main')}}">
        <img src="{{url('/image/logo.png')}}" width="30" height="30" alt="logo" >
        FRASystem
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('Web.Main')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url(@yield('header_image'))">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>@yield('silder_title')</h1>
              <span class="subheading">@yield('silder_description')</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      @yield('content')
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container ">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="https://twitter.com/rEFAIeSHTA">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/AR.Re.Taw.MO">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/Abdelrahman-Elrefai">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright © Abdelrahaman Elrefai 2020</p>
          </div>
        </div>
      </div>
      @yield('footer')
    </footer>
    <!--Jquery  JavaScript  -->
    {!! Html::script("Web/vendor/jquery/jquery.min.js") !!}
    <!-- Bootstrap core JavaScript -->
    {!! Html::script("Web/vendor/bootstrap/js/bootstrap.bundle.min.js") !!}
    <!-- Custom scripts for this template -->
    {!! Html::script("Web/js/clean-blog.min.js") !!}


  


</body>
</html>