<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
</head>
<body>
   @include('inc.navbar')
  <div class="container">
      @if(Request::is('/') or Request::is('home'))
        @include('layout.homecase')
      @endif
      <div class="row"> 
          <div class="col-md-8 col-lg-8 "> 
            @include('inc.error')                                    
            @yield('contact')
            </div>
            <div class="col-md-4 col-lg-4">
              @include('inc.slidebar')
            </div> 
            
         
    </div>
</div>
</body>
</html>