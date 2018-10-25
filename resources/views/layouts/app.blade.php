<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <title>Sample Website</title>
</head>
<body>

    @include('inc.navbar')
    @include('inc.messages')
  <div class="container">
    @if(Request::is('/'))
    @include('inc.showcase')
    @endif
      <div class="row">
          <div class="col-md-8 col-lg-8">
              
              @yield('content')
        
          </div>
        
          <div class="col-lg-4 col-md-4">
        
              @include('inc.sidebar')
        
          </div>
      </div>
  </div>
  
  <footer id="footer" class="text-center">

    <p>Copyright 2018 &copy; Babashov.info</p>

  </footer>
  
</body>
</html>