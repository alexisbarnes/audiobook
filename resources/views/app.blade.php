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

        <!-- Styles -->
        <style>
        body {
          font-family: 'Open Sans', sans-serif;
        }
        </style>
    </head>
    <body>
      <div id="app"></div>

      <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
      </script>
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">
      <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
