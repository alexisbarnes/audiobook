<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AudioBook</title>

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

    /*PAGE HEADER*/

    .styleHeader {
      text-align: center;
      font-size: 60px;
      font-family: 'Abril Fatface', cursive;
    }

    /*TYPOGRAPHY*/

    .styleH2 {
      border-bottom: 1px solid #ccc;
      font-family: 'Open Sans', sans-serif;
    }

    .abril {
      font-family: 'Abril Fatface', cursive;
    }

    .p-lead {
      font-weight: bold;
      margin-top: 5px;
    }

    .p-light {
      font-weight: 300;
    }

    .link-style {
      font-size: 18px;
      text-decoration: none;
      margin-top: 10px;
    }

    .link-style:hover {
      text-decoration: none;
    }

    /*COLORS*/
    .color {
      text-align: center;
    }

    .margin-bottom {
      margin-bottom: 20px;
    }
    .box-blk {
      margin: 0 auto;
      height: 200px;
      width: 200px;
      box-shadow: 0px 0px 6px rgba(0, 0, 0, 1);
      border-radius: 50%;
      background-color: #000;
    }

    .box-gray1 {
      margin: 0 auto;
      height: 200px;
      width: 200px;
      box-shadow: 0px 0px 6px rgba(0, 0, 0, 1);
      background-color: #ccc;
      border-radius: 50%;
    }


    .box-tan {
      margin: 0 auto;
      height: 200px;
      width: 200px;
      box-shadow: 0px 0px 6px rgba(0, 0, 0, 1);
      background-color: #F4EDE6;
      border-radius: 50%;
    }


    .box-green {
      margin: 0 auto;
      height: 200px;
      width: 200px;
      box-shadow: 0px 0px 6px rgba(0, 0, 0, 1);
      background-color: #6D8C77;
      border-radius: 50%;
    }


    .box-white {
      margin: 0 auto;
      height: 200px;
      width: 200px;
      box-shadow: 0px 0px 6px rgba(0, 0, 0, 1);
      background-color: #FFF;
      border-radius: 50%;
    }


    .box-red {
      margin: 0 auto;
      height: 200px;
      width: 200px;
      box-shadow: 0px 0px 6px rgba(0, 0, 0, 1);
      background-color: #A6130F;
      border-radius: 50%;
    }


    /*---BOXES MOBILE--*/
    .color-sm {
      text-align: center;
    }

    .box-red-sm {
      margin: 0 auto;
      height: 100px;
      width: 100px;
      box-shadow: 0px 0px 6px rgba(0, 0, 0, 1);
      background-color: #A6130F;
      border-radius: 50%;
    }

    .box-tan-sm {
      margin: 0 auto;
      height: 100px;
      width: 100px;
      box-shadow: 0px 0px 6px rgba(0, 0, 0, 1);
      background-color: #F4EDE6;
      border-radius: 50%;
    }

    .box-blk-sm {
      margin: 0 auto;
      height: 100px;
      width: 100px;
      box-shadow: 0px 0px 6px rgba(0, 0, 0, 1);
      border-radius: 50%;
      background-color: #000;
    }

    .box-green-sm {
      margin: 0 auto;
      height: 100px;
      width: 100px;
      box-shadow: 0px 0px 6px rgba(0, 0, 0, 1);
      background-color: #6D8C77;
      border-radius: 50%;
    }

    .box-white-sm {
      margin: 0 auto;
      height: 100px;
      width: 100px;
      box-shadow: 0px 0px 6px rgba(0, 0, 0, 1);
      background-color: #FFF;
      border-radius: 50%;
    }

    .box-gray1-sm {
      margin: 0 auto;
      height: 100px;
      width: 100px;
      box-shadow: 0px 0px 6px rgba(0, 0, 0, 1);
      background-color: #ccc;
      border-radius: 50%;
    }

    /*INPUT FORM*/
    .form-control:focus {
      border-color: #000;
      box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(0,0,0,.6);
    }

    .form-control::placeholder {
      font-style: italic;
    }

    /*--ICONS--*/
    .primary-btns {
      text-align: center;
    }

    .icons-style {
      text-align: center;
      margin: 20px;
    }

    .btn-xs {
        margin-right: 12px;
        font-size: 12px;
        padding: 8px 20px;
        border-radius: 9px;
        background-color: #ccc;
    }

    .btn-sm {
        margin-right: 12px;
        font-size: 20px;
        padding: 8px 26px;
        border-radius: 9px;
        background-color: #6D8C77;
    }

    .btn-md {
        margin-right: 12px;
        font-size: 25px;
        padding: 8px 30px;
        border-radius: 9px;
        background-color: #ccc;
    }

    .btn-lg {
        margin-right: 12px;
        font-size: 35px;
        padding: 8px 45px;
        border-radius: 9px;
        background-color: #6D8C77;
    }

    .mobile-create {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: #F4EDE6;
      /*position: fixed;*/
      /*bottom: 30px;*/
      /*right: 30px;*/
      /*cursor: pointer;*/
      box-shadow: 0px 2px 5px #666;
      display: inline-block;
      margin-left: 15px;
      vertical-align: middle;
    }

    .plus-style {
      color: #000;
      display: block;
      text-align: center;
      padding: 14px;
      margin: 0;
      line-height: 30px;
      font-size: 60px;
      font-weight: 300;
    }

    .delete {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: #A6130F;
      /*position: fixed;*/
      /*bottom: 30px;*/
      /*right: 30px;*/
      /*cursor: pointer;*/
      box-shadow: 0px 2px 5px #666;
      display: inline-block;
      margin-left: 15px;
      vertical-align: middle;
    }

    .x-style {
      color: #FFF;
      display: block;
      text-align: center;
      padding: 14px;
      margin: 0;
      line-height: 30px;
      font-size: 45px;
      font-weight: 300;
    }
    .footer {
      margin: 40px;
    }

    .footer p {
      font-family: 'Open Sans', sans-serif;
      color: #000;
      text-align: center;
    }

    .footer a {
      text-decoration: underline;
      color: #000;
    }

    .footer a:hover {
      color: #A6130F;
      cursor: pointer;
    }
    </style>

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
          <li class="active"><a href="/styles">style guide<span class="sr-only">(current)</span></a></li>
          <li><a href="https://alexisbarnes.gitbooks.io/audiobook/" target="_blank">documentation</a></li>
          <li><a href="#">credits</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
    <body id="styles">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h1 class="styleHeader">style guide</h1>
          </div>
        </div>

      <!--TYPOGRAPHY-->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h2 class="styleH2">typography</h2>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <h4 class="abril">font-family: 'abril fatface', cursive;</h4>
              <h4>font-family: 'open sans', sans-serif;</h4>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <h1 class="align-left abril">header 1</h1>
              <span class="text-muted">Font: Abril Fatface 60px/Color: #000</span>

              <h2>Header 2</h2>
              <span class="text-muted">Font: Open Sans 50px/Color: #000</span>

              <h3>Header 3</h3>
              <span class="text-muted">Font: Open Sans 40px/Color: #000</span>

              <h4>Header 4</h4>
              <span class="text-muted">Font: Open Sans 30px/Color: #000</span>

              <h5>Header 5</h5>
              <span class="text-muted">Font: Open Sans 20px/Color: #000</span>

              <p class="p-lead">Paragraph Lead</p>
              <span class="text-muted">Font: Open Sans, Weight: Bold 18px/Color:#000</span>
              <p class="p-lead">Proin nec egestas orci. Vivamus bibendum est non suscipit convallis. Aenean a velit ut nisl malesuada ultrices.</p>

              <p>Paragraph</p>
              <span class="text-muted">Font: Open Sans 18px/Color: #000</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet lacinia ipsum. Aenean congue mauris lacus, et posuere risus accumsan in. Suspendisse eu nibh vel ligula sollicitudin scelerisque sed in urna.</p>

              <p class="p-light">Paragraph Light</p>
              <span class="text-muted">Font: Open Sans, Weight: 300 18px/Color: #000</span>
              <p class="p-light">Nullam eu congue purus, ac aliquam elit. Praesent sed ipsum molestie elit vehicula laoreet. Curabitur ut ullamcorper elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fringilla luctus sapien, id semper lectus gravida vitae. Mauris blandit nisl eget nibh sollicitudin consectetur.</p>

              <p>Links</p>
              <span class="text-muted">Font: Open Sans 18px/Color: #4DA6B2</span><br>
              <a href="#" class="link-style">This is a link.</a>

            </div>
          </div>
        </div>

      <!--COLORS-->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h2 class="styleH2">colors</h2>

            <div class="row margin-bottom">
              <!--RED BOX IPAD + DESKTOP-->
              <div class="hidden-xs col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="box-red"></div>
                <h4 class="color">#A6130F</h4>
              </div>
              <!--RED MOBILE-->
              <div class="col-xs-4 hidden-sm hidden-md hidden-lg hidden-xl">
                <div class="box-red-sm"></div>
                <p class="color-sm">#A6130F</p>
              </div>

              <!--TAN BOX IPAD + DESKTOP-->
              <div class="hidden-xs col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="box-tan"></div>
                <h4 class="color">#F4EDE6</h4>
              </div>
              <!--TAN MOBILE-->
              <div class="col-xs-4 hidden-sm hidden-md hidden-lg hidden-xl">
                <div class="box-tan-sm"></div>
                <p class="color-sm">#F4EDE6</p>
              </div>

              <!--GREEN IPAD + DESKTOP-->
              <div class="hidden-xs col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="box-green"></div>
                <h4 class="color">#6D8C77</h4>
              </div>
              <!--GREEN MOBLILE-->
              <div class="col-xs-4 hidden-sm hidden-md hidden-lg hidden-xl">
                <div class="box-green-sm"></div>
                <p class="color-sm">#6D8C77</p>
              </div>
            </div><!--closing div for first row-->

            <div class="row margin-bottom">
              <!--BLACK IPAD + DESKTOP-->
              <div class="hidden-xs col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="box-blk"></div>
                <h4 class="color">#000000</h4>
              </div>
              <!--BLACK MOBILE-->
              <div class="col-xs-4 hidden-sm hidden-md hidden-lg hidden-xl">
                <div class="box-blk-sm"></div>
                <p class="color-sm">#000000</p>
              </div>

              <!--GRAY IPAD + DESKTOP-->
              <div class="hidden-xs col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="box-gray1"></div>
                <h4 class="color">#CCCCCC</h4>
              </div>
              <!--GRAY MOBILE-->
              <div class="col-xs-4 hidden-sm hidden-md hidden-lg hidden-xl">
                <div class="box-gray1-sm"></div>
                <p class="color-sm">#CCCCCC</p>
              </div>

              <!--WHITE IPAD + DESKTOP-->
              <div class="hidden-xs col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="box-white"></div>
                <h4 class="color">#FFFFFF</h4>
              </div>

              <!--WHITE MOBILE-->
              <div class="col-xs-4 hidden-sm hidden-md hidden-lg hidden-xl">
                <div class="box-white-sm"></div>
                <p class="color-sm">#FFFFFF</p>
              </div>


            </div>
          </div>

        </div>
      <!-- </div> --><!--May be container closing div-->
        <!--LISTS-->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h2 class="styleH2">lists</h2>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <h4 class="align-center">Unordered List</h4>
              <ul>
                <li>This is the first item.</li>
                <li>This is the second item.</li>
                <li>This is the third item.</li>
                <li>This is the fourth item.</li>
                <li>This is the fifth item.</li>
                <li>This is the sixth item.</li>
                <li>This is the seventh item.</li>
                <li>This is the eighth item.</li>
                <li>This is the ninth item.</li>
                <li>This is the tenth item.</li>
              </ul>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <h4 class="align-center">Ordered List</h4>
                <ol>
                  <li>This is the first item.</li>
                  <li>This is the second item.</li>
                  <li>This is the third item.</li>
                  <li>This is the fourth item.</li>
                  <li>This is the fifth item.</li>
                  <li>This is the sixth item.</li>
                  <li>This is the seventh item.</li>
                  <li>This is the eighth item.</li>
                  <li>This is the ninth item.</li>
                  <li>This is the tenth item.</li>
                </ol>
              </div>
            </div>
          </div>
          <!--INPUTS-->
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <h2 class="styleH2">inputs</h2>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                  <textarea class="form-control" rows="4" placeholder="textarea input"></textarea>
                </div>

              </div>

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="example input field">
                </div>
                <div class="form-group">
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <!--ICONS/BUTTONS-->
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <h2 class="styleH2">icons + buttons</h2>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 primary-btns">
                <button class="btn btn-xs btn-style-primary">X-small</button>
                <button class="btn btn-sm btn-style-primary">Small</button>
                <button class="btn btn-md btn-style-primary">Medium</button>
                <button class="btn btn-lg btn-style-primary">Large</button>
                <div class="mobile-create"><p class="plus-style">+</p></div>
                <div class="delete"><p class="x-style">x</p></div>

              </div>
            </div>
          </div>
        </div>
        <!--FOOTER-->
        <div class="container-fluid">
          <div class="footer">
            <p>&copy; <a>Alexis Barnes</a></p>
          </div>
        </div>

      <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
      </script>
      <!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> -->
      <!-- <script src="{{ mix('js/app.js') }}"></script> -->
    </body>
</html>
