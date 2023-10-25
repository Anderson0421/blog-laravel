<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mis cursos</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="script/script.js"></script>
</head>
<body>
    <h1>Mis cursos</h1>
    <ul class="item_cursos">
        @foreach ($cursos as $item)
            <li>{{$item['title']}} 
                <span class="progress ">{{"Progreso:"}}
                    @if ($item['progress'] > 40)<span class="progress progress_yes">{{$item['progress']}}%</span>
                    @else
                    <span class="progress progress_not">{{$item['progress']}}%</span>
                    @endif
                </span> 
            </li>
        @endforeach
    </ul>

</body>
</html>