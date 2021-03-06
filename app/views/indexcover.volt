<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD Phalcon</title>
        {{ stylesheet_link("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css") }}
        {{ stylesheet_link('css/cover.css') }}
    </head>
    <body>
     <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">CRUD Phalcon</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="http://localhost/crud_phalcon">Home</a></li>
                  <li><a href="signup">Sign Up</a></li>
                  <li><a href="login">Login</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="inner cover">
            {{ content() }}
           <div class="mastfoot">
            <div class="inner">
             <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
            </div>
          </div>
        </div>
        </div>

        {{ javascript_include('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    </body>
</html>
