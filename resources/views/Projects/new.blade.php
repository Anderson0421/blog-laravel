<form action="/Proyects/process" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Titulo">
    <input type="text" name="description" placeholder="Descripcion">
    <select name="tecnologias">
        <option value="Backend">Backend</option>
        <option value="Frontend">Frontend</option>
        <option value="Fullstack">Fullstack</option>
    </select>
    <input type="submit" value="Enviar">
</form>