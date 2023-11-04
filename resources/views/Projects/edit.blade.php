<form action="Proyects/{project}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="title" placeholder="Titulo" value="{{$project->title}}">
    <input type="text" name="description" placeholder="Descripcion" value="{{$project->description}}">
    <select name="tecnologias">
        <option value="{{$project->tecnologias}}" selected>{{$project->tecnologias}}</option>
        <option value="Backend">Backend</option>
        <option value="Frontend">Frontend</option>
        <option value="Fullstack">Fullstack</option>
    </select>
    <input type="submit" value="Enviar">
</form>