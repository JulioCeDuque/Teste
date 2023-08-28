<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @section('content')
        <h1>Resultados da Pesquisa</h1>
        
        @if(count($resultados) > 0)
            <ul>
                @foreach($resultados as $resultado)
                    <li>{{ $resultado->campo_a_ser_exibido }}</li>
                @endforeach
            </ul>
        @else
            <p>Nenhum resultado encontrado.</p>
        @endif
    @endsection
</body>
</html>