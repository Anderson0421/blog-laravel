<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$post->title}}</title>
    @vite('resources/css/app.css')

</head>
<body>
    <form action="/Blog/{{$post->id}}" method="POST">

        @csrf
        @method('PATCH')
        <h1>Editar un post</h1>
        <div>
            <label for="">Titulo
                <input type="text" placeholder="Introduce el Titulo" name="title" value="{{$post->title}}">
            </label>
        </div>
        <div>
            <label for="">Contenido
                <input type="text" placeholder="Introduce el Contenido" name="content" value="{{$post->content}}">
            </label>
        </div>
        
        <button type="submit" class="px-5 py-3 bg-blue-800 rounded-lg text-white">Guardar</button>
        <a href="/" class="flex w-max px-5 py-3 my-1 text-white rounded-lg bg-blue-400">Inicio</a>

    </form>
</body>
</html>