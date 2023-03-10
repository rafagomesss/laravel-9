<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comentários</title>
</head>

<body>
    {{-- Comentário blade --}}
    {{-- <h1>Título</h1> Título comentado pelo blade, não será renderizado no html --}}

    <?php // Comentário PHP padrão, também não renderiza o conteúdo no html ?>
    <?php // echo '<h1> Título </h1>'; ?>

    <!-- Comentário HTML - renderizado-->
    <!-- <h1>Título</h1>-->
    <h1>Título</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Odit tempore inventore,
        nihil sunt officiis id iure voluptatum libero beatae vero quia commodi distinctio sapiente soluta aperiam saepe labore autem.
        Voluptatem?
    </p>
</body>

</html>
