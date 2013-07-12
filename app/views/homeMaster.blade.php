
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="env" content="{{ App::environment() }}">
    <meta name="viewport" content="width=device-width" />
    <title>Laravel Boiler Plate | Ludo237</title>
    <link rel="stylesheet" href="http://cdn.arcadia.one.6go.it/vendor/foundation/4/css/normalize.min.css">
    <link rel="stylesheet" href="http://cdn.arcadia.one.6go.it/vendor/foundation/4/css/foundation.min.css">
    <style>
    .clear{ clear:both; }
    </style>
</head>
<body>
    <!-- Header and Nav -->
    <nav class="top-bar">
        <ul class="title-area">
          <!-- Title Area -->
          <li class="name">
            <h1>
              <a href="#">LBP</a>
            </h1>
          </li>
        </ul>
    </nav>
    <!-- End Header and Nav -->
    @yield('content')
    <!-- Footer -->
    <footer class="row">
        <div class="large-12 columns">
            <hr />
            <div class="row">
                <div class="large-6 columns">
                    <p>This Template is licensed under M.I.T. License.</p>
                </div>
                <div class="large-6 columns">
                    <ul class="inline-list right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="http://cdn.arcadia.one.6go.it/vendor/foundation/4/js/vendor/zepto.js"></script>
    <script src="http://cdn.arcadia.one.6go.it/vendor/foundation/4/js/vendor/custom.modernizr.js"></script>
    <script src="http://cdn.arcadia.one.6go.it/vendor/foundation/4/js/foundation.min.js"></script>
    <script>$(document).foundation().ready(function(e){});</script>
</body>
</html>
