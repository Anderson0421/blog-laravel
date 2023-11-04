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
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                        <tr class="bg-gray-200 text-xs leading-4 text-left font-medium text-gray-500 uppercase tracking-wider">
                            <th class="px-6 py-3 text-left">ID</th>
                            <th class="px-6 py-3 text-left">Title</th>
                            <th class="px-6 py-3 text-left">Descripcion</th>
                            <th class="px-6 py-3 text-left">Categoria</th>
                            <th class="px-6 py-3  text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($projects as $project)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $project->id }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $project->title }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $project->description }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $project->tecnologias }}</td>
                            <td>
                                <a href="Proyects/{{$project->id}}">
                                    <svg class="w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0">
                                        </g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> 
                                            <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> 
                                    </g></svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>


</body>
</html>