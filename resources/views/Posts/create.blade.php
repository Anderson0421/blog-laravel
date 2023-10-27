<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creacion de Post</title>
</head>
<body>
    <form action="/Blog" method="POST">

        @csrf

        <h1>Crear un post</h1>
        <div>
            <label for="">Titulo
                <input type="text" placeholder="Introduce el Titulo" name="title">
            </label>
        </div>
        <div>
            <label for="">Contenido
                <input type="text" placeholder="Introduce el Contenido" name="content">
            </label>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>