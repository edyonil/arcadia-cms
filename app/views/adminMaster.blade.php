
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="env" content="{{ App::environment() }}">
    <meta name="viewport" content="width=device-width" />
    <title>Administration | {{ Auth::user()->username }}</title>
    <link rel="stylesheet" href="http://cdn.arcadia.one.6go.it/vendor/foundation/4/css/normalize.min.css">
    <link rel="stylesheet" href="http://cdn.arcadia.one.6go.it/vendor/foundation/4/css/foundation.min.css">
    <style>
    .clear{ clear:both; }
    </style>
</head>
<body>
    <!-- Header and Nav -->
    <nav class="top-bar">
        <section class="top-bar-section">  
            <ul class="left">
                <li><a href="#">Manage Post</a></li>
                <li class="divider"></li> 
                <li><a href="#">Manage Comment</a></li>
                <li class="divider"></li>
                <li><a href="#">Manage Users</a></li>
                <li class="divider"></li>
            </ul>
        </section>
    </nav>
    <!-- End Header and Nav -->
    @yield('content')
    <!-- Footer -->
    <footer class="row">
        <div class="large-12 small-12 column">
            <hr />
        </div>
    </footer>
    <script src="http://cdn.arcadia.one.6go.it/vendor/foundation/4/js/vendor/zepto.js"></script>
    <script src="http://cdn.arcadia.one.6go.it/vendor/foundation/4/js/vendor/custom.modernizr.js"></script>
    <script src="http://cdn.arcadia.one.6go.it/vendor/foundation/4/js/foundation.min.js"></script>
    <script>$(document).foundation().ready(function(e){});</script>
</body>
</html>
