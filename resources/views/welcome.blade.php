<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de AnderDev</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        @foreach ($posts as $post)
            <article>
                <h1>{{ $post['title'] }}</h1> <!-- Con esto ya retornamos el listado del array -->
                <p>{{ $post['resume'] }}</p>
            </article>
        @endforeach
    </div>
</body>
</html>