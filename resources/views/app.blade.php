<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
      <div id="app"></div>

      <script>
        window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
        ]) !!};
      </script>
      <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
