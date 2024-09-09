@php
    // qui posso scrivere codice PHP anche se è meglio evitarlo il più possibile perché tutta la logica andrà spostata sul controller
    $testo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae consequatur facere quasi delectus nisi numquam, aliquam quis officiis eligendi ducimus aperiam voluptates molestias cupiditate totam eaque expedita pariatur odit mollitia!';

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <title>Primo laravel</title>
</head>
<body>

    <div class="container my-5">
        <h1>{{ $title }}</h1>
        <h2>{{ $subtitle }}</h2>
        <p>Ciao {{ $name }} {{ $surname }}</p>

        @if($stampa_colori)
            <h3>Elenco colori:</h3>
            <ul>
                @foreach ($colori as $colore )
                    @if ($loop->first)
                        <li>{{ $loop->iteration }} Primo colore: {{ $colore }}</li>
                    @elseif ($loop->last)
                        <li>{{ $loop->iteration }} Ultimo colore: {{ $colore }}</li>
                    @else
                        <li>{{ $loop->iteration }} {{ $colore }}</li>
                    @endif
                @endforeach
            </ul>
        @else
            <h2>Non stampo i colori</h2>
        @endif

        {{-- @dump($colori) --}}

        <p>
            {{-- questa variabile non arriva da web.php ma è stata dichairata in testa alla pagina  --}}
            {{ $testo }}
        </p>
    </div>

</body>
</html>
