<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thropic</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                height: 100vh;
                margin: 0;
            }

            section {
              height: 100vh;
              width: 100vw;
              display: flex;
              justify-content: center;
              align-items: center;
            }

            .logo {

            }

            .logo img {
              max-width: 250px;
            }

        </style>
    </head>
    <body>
        <section>
          <div class="logo">
              <img src="{{ asset('images/thropic-logo.svg') }}">
          </div>
        </section>
    </body>
</html>
