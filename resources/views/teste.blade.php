<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
                font-size: 12px;
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


            <div class="content">
                <div class="title m-b-md">
                    Coins
                </div>
                <div>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Sigla</th>
                                <th>Nome no site</th>
                                <th>Rank</th>
                                <th>Circulação</th>
                                <th>Total de Oferta</th>
                                <th>Oferta Maxima</th>
                                <th>Preço</th>
                                <th>Volume(24h)</th>
                                <th>Valor de Mercado</th>
                                <th>Variação(1h)</th>
                                <th>Variação(24h)</th>
                                <th>Variação(7d)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coins as $member)
                            <tr>
                                <td>{{ $member['id'] }}</td>
                                <td>{{ $member['name'] }}</td>
                                <td>{{ $member['symbol'] }}</td>
                                <td>{{ $member['website_slug'] }}</td>
                                <td>{{ $member['rank'] }}</td>
                                <td>{{ $member['circulating_supply'] }}</td>
                                <td>{{ $member['total_supply'] }}</td>
                                <td>{{ $member['max_supply'] }}</td>
                                <td>{{ $member['price'] }}</td>
                                <td>{{ $member['volume_24h'] }}</td>
                                <td>{{ number_format($member['market_cap'], 8, ',', '.') }} </td>
                                <td>{{ $member['percent_change_1h'] }}%</td>
                                <td>{{ $member['percent_change_24h'] }}%</td>
                                <td>{{ $member['percent_change_7d'] }}%</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
    </body>
</html>
