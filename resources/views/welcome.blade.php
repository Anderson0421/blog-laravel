<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Practica</title>
    <link rel="stylesheet" href="css/tailwind.css">
    @vite('resources/css/app.css')

</head>
<body class="bg-black container mx-auto">
    <!-- Navar -->
    <div class="bg-black bg-opacity-95">
        <div class="py-5 text-blue-100 font-semibold flex justify-between">
            <div class="flex items-center">
                <div class="flex gap-x-5 items-center">
                    <a href="/" class="flex items-center text-2xl font-bold">
                        <img src="../img/tailwind-css-2.svg" class="w-16 mr-2">
                        AnderDevBlog
                    </a>
                </div>
            </div>
            <div class="flex gap-x-8 items-center">
                <a href="#" class="flex items-center">Blog</a>
                <a href="#" class="flex items-center">Tags</a>      
                <a href="#" class="flex items-center">Projects</a>      
                <a href="#" class="flex items-center">About</a>      
            </div>
        </div>
    </div>
    <div class="pt-16 pb-8 h-max relative z-0 text-white">
        <h1 class="text-5xl font-extrabold">Latest</h1>
        <p class="mt-2">A blog created with Laravel and Tailwind.css</p>
    </div>
    <hr>
    <div>
        @if ($posts->count() > 0)
        @foreach ($posts as $post)
        <div class="flex pt-14">
                <div class="w-1/2">
                    <p class="text-gray-400"> {{$post->created_at}} </p>
                </div>
                <div class="w-2/3">
                    <h1 class="text-xl text-white font-bold"> {{$post->title}} </h1> 
                    <div class="flex gap-x-6">
                        <a href="#" class="text-green-600">NEXT JS</a>
                        <a href="#" class="text-green-600">TailwindCSS</a>
                        <a href="#" class="text-green-600">Guide</a>
                    </div>
                    <div class="flex flex-col gap-4 pt-6">
                        <p class="text-gray-400">{{$post->content}}</p>
                        <a href="Blog/{{$post->id}}" class="text-green-600">Read more -></a>
                    </div>
                </div>
            </div>
            <hr class="mt-12">
        </div>
        @endforeach
        @else
            <h1 class="text-white mt-3 text-3xl font-semibold">Blog no encontrado</h1>
            <a href="/" class="text-gray-50 mt-4 py-2 px-4 inline-block bg-green-400 rounded-lg">Regresar..</a>
        @endif

</body>
</html>