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
        <h1>Painel de administração</h1>
        <form action="/" method="post">
            @csrf
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div style="color: red;">{{$error}}</div>
                @endforeach
            @endif
            <label for="hostname">Endereço do site</label>
            <input name="hostname" id="hostname"/>
            <button type="submit">criar condominio</button>
        </form>

        @isset ($hostnames)
            @if ($hostnames)
                <p>condominios</p>
                <ul>
                    @foreach ($hostnames as $hostname)
                        <li>{{ $hostname->fqdn }}</li>
                    @endforeach
                </ul>
            @endif
        @endisset
    </body>
</html>
