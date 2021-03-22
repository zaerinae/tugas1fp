<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

       <div class="container">
        <div class="row">
            <div class="col-sm-2 col-md-2">
             <img src="assets/img/nana.png"
                alt="" class="img-rounded img-responsive" />
            </div>
            <div class="col-sm-4 col-md-4">
                <blockquote>
                    <p>Zaerina Eriyadi</p> <p>18090095</p> <p>5D</p> <small><cite title="Source Title">Tegal, Indonesia  <i class="glyphicon glyphicon-map-marker"></i></cite></small>
                 </blockquote>
                    <p> <i class="glyphicon glyphicon-envelope"></i> john.ilham58@gmail.com
                <br
                    /> <i class="glyphicon glyphicon-globe"></i> https://koifarmtegal.com/
                <br /> <i class="glyphicon glyphicon-gift"></i> 26 November 1998</p>
        </div>
    </div>
</div>
<br>
<br>
<br>
        </div>
    </body>
</html>
