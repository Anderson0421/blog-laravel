@vite('resources/css/app.css')
<body style="background-color: rgb(9, 9, 41)">
    <div class="container mx-auto py-20 flex mt-5 justify-center bg-blue-800 rounded-lg max-w-max">
        <form action="{{ route('Projecto', ['proyecto' => $project]) }}" method="POST" class="flex flex-col gap-4 p-10">
            @csrf
            @method('PATCH')
        
            <input class="p-2 rounded-lg" type="text" name="title" placeholder="Titulo" value="{{$project->title}}">
            <input class="p-2 rounded-lg" type="text" name="description" placeholder="Descripcion" value="{{$project->description}}">
            <select name="tecnologias">
                <option value="{{$project->tecnologias}}" selected>{{$project->tecnologias}}</option>
                <option value="Backend">Backend</option>
                <option value="Frontend">Frontend</option>
                <option value="Fullstack">Fullstack</option>
            </select>
            <input class="px-5 py-2 bg-black text-white rounded-lg" type="submit" value="Enviar">
        </form>
    </div>
</body>