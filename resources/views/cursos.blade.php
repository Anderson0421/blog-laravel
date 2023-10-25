<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mis cursos</title>
    @vite('resources/css/app.css')

</head>
<body style="background-color: #010D4B">
    <div class="container mx-auto pt-24">
        <div class="text-white flex gap-10">
            <div class="w-1/3 bg-gray-950 px-5 py-5 rounded-xl">
                <div class="flex flex-col gap-10 items-center">
                    <h1 class="border-b-2 w-44 text-center border-b-orange-500 text-2xl font-bold">Cursos</h1>                    
                    @foreach ($cursos as $curso)
                        <h1 class="px-4 py-2 rounded-lg bg-gray-900 hover:outline hover:outline-white hover:outline-1">{{$curso->title}}</h1>
                    @endforeach
                </div>
            </div>
            <div class="w-2/3 bg-gray-950 px-5 py-12 rounded-xl h-max ">
                <div class="flex flex-col items-center gap-y-10">
                    <h1 class="font-semibold text-3xl">Crear nuevo Curso</h1>
                    <div>
                        <input class="px-4 py-2 rounded-lg bg-gray-800 outline outline-white outline-1" type="text" placeholder="Agregar un nuevo curso">
                        <button class="px-4 py-2 rounded-lg bg-orange-500 hover:outline hover:outline-white hover:outline-1">Submit</button>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, nihil?</p>
                    <div>
                        <h1>Total de cursos :
                                <span>{{$cantidad}}</span>
                        </h1>
                    </div>
                </div>

            </div>
            <div class="w-1/3 bg-gray-950 px-5 py-5 rounded-xl">
                <div class="flex flex-col gap-10 items-center">
                    <h1 class="border-b-2 w-44 text-center border-b-orange-500 text-2xl font-bold">Progreso</h1>
                    <div class="flex flex-col gap-10 items-center">
                        @foreach ($cursos as $curso)
                        <input type="text" class="px-4 py-2 rounded-lg bg-gray-900 hover:outline hover:outline-white hover:outline-1" value={{$curso->progress}}% readonly>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>