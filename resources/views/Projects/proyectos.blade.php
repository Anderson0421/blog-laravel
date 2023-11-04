<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects Page</title>
    @vite('resources/css/app.css')

</head>
<body style="background-color: rgb(9, 9, 41)">
        <div class="container mx-auto pt-10 text-white">
            <h1 class="text-2xl font-bold mb-2">Gestion de proyectos</h1>
            <div>
                <table class="table-auto text-white">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Descripcion</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <td>{{$project->id}}</td>
                            <td>{{$project->title}}</td>
                            <td>{{$project->description}}</td>
                            <td>{{$project->tecnologias}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


</body>
</html>