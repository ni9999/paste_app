<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                margin: 15px;
            }



        </style>
    </head>
    <body>
        <div>
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


            {{--making submit button--}} 
            <br>
            <form action = "/submit" method = "get">
                <button type = "submit">
                    new paste 
                </button> 
            </form>
            <br>



            <div class="content">
                <div class="title">
                    <h3> Click title to view paste data </h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Paste</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                </div>
                    <tbody>
                {{-- reversely shows --}}
                    
                    @foreach ($pastas->reverse() as $i)
                            <tr>
                                <td>{{ $i->id }}</td>
                                <td>
                                    <a href = "/view_paste/{{$i->id}}">
                                            {{ $i->title }}
                                    </a>
                                </td>
                                <td>{{ substr($i->paste_data, 0, 50) }}</td> {{--shows 0-100 characters--}}
                                <td>{{ $i->created_at }}</td>
                                <td>{{ $i->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
