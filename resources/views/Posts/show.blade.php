<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$posts->title}}</title>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="container mx-auto py-10">
        <article>
            <h1 class="text-xl">{{$posts->title}}</h1>
            <p>{{$posts->content}}</p>

            <a href="/" class="flex w-max px-5 py-3 my-1 text-white rounded-lg bg-blue-400">Inicio</a>
        </article>
    </div>
</body>
</html>