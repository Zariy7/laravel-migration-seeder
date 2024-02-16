<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Departure Station</th>
                        <th scope="col">Arrival Station</th>
                        <th scope="col">Departure Station</th>
                        <th scope="col">Arrival Station</th>
                        <th scope="col">Company</th>
                        <th scope="col">Delayed?</th>
                        <th scope="col">Cancelled?</th>
                      </tr>
                    </thead>
                  
                @foreach ($trains_db as $train)
                <tr>
                    <th scope="row">
                        {{ $train->train_code }}
                    </th>
                    <td>
                        {{ $train->departure_station }}
                    </td>
                    <td>
                        {{ $train->arrival_station }}
                    </td>
                    <td>
                        {{ $train->departure_time }}
                    </td>
                    <td>
                        {{ $train->arrival_time }}
                    </td>
                    <td>
                        {{ $train->company }}
                    </td>
                    <td>
                        @if($train->delayed)
                            Yes
                        @else
                            No
                        @endif
                    </td>
                    <td>
                        @if($train->cancelled)
                            Yes
                        @else
                            No
                        @endif
                    </td>
                </tr>
                @endforeach

                </table>
            </div>
        </div>
    </div>
</body>

</html>