<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Séries</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        
            
        <div class="h-100 p-5 text-white bg-dark rounded-3">
            <h1>Séries do Ricardinho</h1>
        </div>    
          
        <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>
        
        <ul class="list-group">
            <?php foreach($series as $serie):?>
            <li class="list-group-item"><?=$serie;?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>