<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/my.style.css" />
        <style>
            @import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500);
        </style>
        <!-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">-->

        <!-- Scripts -->
        <!-- Need to place code #1 from Laravel.docx -->



    </head>
    <body class="font-sans antialiased">
        <div class="container">
            <br>
            <div class="creat-post  w-50">
                <h5>Форма для отправки сообщений в Базу Данных</h5>
                <form action="post" method="post">
                    @csrf
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="E-mail" name="email">
                        </div>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Message" name="message">
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-success">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="output_table">
                <table class="table table-striped">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Message</th>
                        <th scope="col">Create Date</th>
                    </tr>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->email }}</td>
                            <td>{{ $post->message }}</td>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- Need to place code #2 from Laravel.docx -->
    </body>
</html>
