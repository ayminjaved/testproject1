<!DOCTYPE html>
<html>
    <head>
        <title>First Page - @yield('title')</title>
          <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
          <style type="text/css">
            body {
                  background-image: url("https://eskipaper.com/images/wallpapers-hd-20.jpg");
                  background-repeat: repeat;
                }
            

          </style>
        </head>
        <body>
         
@show

<div class="container">
  @yield('contacts')
</div>
<div class="container">
  @yield('welcome')
</div>
<div class="container">
  @yield('contact')
</div>
<div class="container">
  @yield('about')
</div>
<div class="container">
  @yield('shipping')
</div>


<div class="container">
  @yield('content')
</div>
@section('footer')
<footer>
 <b><p style="color: orange">posted by:Aymin Javed</p></b>
   <b> <p style="color: orange">contact information <a href="mail to:ayminjaved546@gmail.com">ayminjaved546@gmail.com</a></p></b>
</footer>
@show
</body>
</html>
