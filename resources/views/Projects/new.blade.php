<form action="" method="POST">
    <input type="text" name="title" placeholder="Titulo">
    <input type="text" name="description" placeholder="Descripcion">

    @foreach ($projects as $item)
        {{$item->tecnologias}}
    @endforeach
    <input type="submit" value="Enviar">
</form>