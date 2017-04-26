<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Credits</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i" rel="stylesheet">
    </head>
    <style>
    /*GLOBAL STYLES*/
    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #F9F9F9;
    }

    h1 {
      font-size: 60px;
    }

    h2 {
      font-size: 50px;
    }

    h3 {
      font-size: 40px;
    }

    h4 {
      font-size: 30px;
    }

    h5 {
      font-size: 20px;
    }

    p {
      font-size: 18px;
    }

    a {
      font-size: 18px;
      color: #000;
    }

    a:hover {
      color: #A6130F;
    }

    /*BOOTSTRAP NAVBAR*/
    a {
      cursor: pointer;
    }

    .navbar-default {
      background: transparent;
      box-shadow: none;
      border-color: transparent;
    }

    li {
      font-family: 'Open sans', sans-serif;
      font-size: 30px;
    }

    .navbar-default .navbar-nav > li > a {
        color: #000;
        font-family: 'Abril Fatface', cursive;
        font-size: 30px;
    }

    .navbar-nav > li {
        margin-top: 30px;
    }

    .navbar-brand {
      margin-bottom: 28px;
    }

    /*ACTIVE & HOVER A*/
    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
        background: transparent;
        box-shadow: none;
        color: #A6130F;
    }

    .navbar-default .navbar-nav > li > a:hover {
        color: #A6130F;
    }

    /*--HAMBURGER BREAK POINT (https://coderwall.com/p/wpjw4w/change-the-bootstrap-navbar-breakpoint)--*/
    @media (max-width: 1200px) {
        .navbar-header {
            float: none;
        }
        .navbar-left,.navbar-right {
            float: none !important;
        }
        .navbar-toggle {
            display: block;
        }

        .navbar-toggle:hover {
          background-color: #A6130F !important;
        }

        .navbar-collapse {
            border-top: 1px solid transparent;
            box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
        }
        .navbar-fixed-top {
            top: 0;
            border-width: 0 0 1px;
        }
        .navbar-collapse.collapse {
            display: none!important;
        }
        .navbar-nav {
            float: none!important;
            margin-top: 7.5px;
        }
        .navbar-nav>li {
            float: none;
        }
        .navbar-nav>li>a {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .collapse.in{
            display:block !important;
        }

        .navbar-default .navbar-toggle {
          border-color: #ccc;
        }

        .navbar-default .navbar-collapse {
          border-color: transparent;
        }

        .navbar-default .navbar-toggle .icon-bar {
          background-color: #000;
        }
    }

    /*LOGO*/
    .main-logo {
      width: auto;
      height: 80px;
    }
    </style>
    </head>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><img src="/images/logo-blk.png" class="main-logo"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/">home</a></li>
          <li><a href="https://www.github.com/alexisbarnes" target="_blank">github</a></li>
          <li><a href="/styles">style guide</a></li>
          <li><a href="https://alexisbarnes.gitbooks.io/audiobook/" target="_blank">documentation</a></li>
          <li class="active"><a href="#">credits<span class="sr-only">(current)</span></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
    <body>
      <div id="credits"></div>

      <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
      </script>
      <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
