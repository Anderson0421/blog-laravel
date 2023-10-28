<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My tasks</title>
    @vite('resources/css/app.css')
</head>
<body style="background-color: #00051df8">
    <div class="mx-20 py-10 flex">
        <div class="flex flex-col w-1/2 gap-3">
            <h1 class="text-white text-5xl font-semibold">Listas de tareas</h1>
                <h1 class="text-white text-3xl font-bold">Tareas incompletas</h1>
                
                @foreach ($tareas as $tarea)
                    @if ($tarea->completed == 0)
                            <div class="bg-white border-red-700 border-l-8 rounded-lg px-5 py-5  w-80 h-auto flex items-center">
                                <input type="checkbox"  class="inline-block relative w-12  h-6">
                                <h1 class="text-black">{{$tarea->title}}</h1>
                            </div>
                    @endif
                @endforeach

                <h1 class="text-white text-3xl font-bold">Tareas completadas</h1>
                <div class="flex">
                    <div class="bg-white border-green-400 border-l-8 rounded-lg px-5 py-5  w-80 h-auto flex items-center">
                        <input type="checkbox" checked disabled  class="inline-block relative w-12  h-6 ">
                        <h1 class="text-black">{{$tarea->title}}</h1>
                    </div>
                </div>

                <div>
                    <button type="text" class="px-6 py-4 rounded-lg bg-blue-900 text-gray-100">New task<button>
                </div>
        </div>               
        <div>
            <div class="text-white">
                <form action="/Tasks/New" method="post" class="flex flex-col gap-3">
                    @csrf
                    <h1 class="text-5xl font-medium">Nueva tarea</h1>
                    <label class="flex flex-col gap-2" >Introduzca el titulo
                        <input type="text" name="title" placeholder="Introduce el titulo" class="px-6 py-2 rounded-lg text-black">
                    </label>
                    <label class="flex flex-col gap-2">Introduzca la categoria
                        <select class=" text-black px-6 py-2 rounded-lg" name="categoria">
                            <option selected>---------</option>
                            <option value="Frontend">Frontend</option>
                            <option value="Backend">Backend</option>
                        </select>
                    </label>
                    <button type="submit" class="px-6 py-4 rounded-lg bg-blue-900 text-gray-100">Enviar<button>


                </form>
            </div>
        </div>
    </div>
</body>
</html>