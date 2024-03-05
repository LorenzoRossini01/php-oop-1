<?php

require_once __DIR__ ."./db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        

        <div class="card" >
            <div class="card-header">
            <h1>Film Table</h1>
            </div>
            <ul class="list-group list-group-flush">
                <?php foreach($Productions as $production):?>
                <li class="list-group-item">  
                <ul class="list-group list-group-flush">

                    <li class="list-group-item"><h2><b>Titolo</b> <?= $production->title?></h2></li>      
                    <li class="list-group-item"><b>Lingua</b> <?= $production->lang?></li>      
                    <li class="list-group-item"><b>Voto</b> <?= $production->vote?></li>      
                    <li class="list-group-item"><b>Genere</b> 
                        <?php foreach($production->genres as $genre): ?>
                            <?= $genre->genre?>
                        <?php endforeach; ?>
                    </li>      
                    <li class="list-group-item"><b>Descrizione</b>                         
                    <?php foreach($production->genres as $genre): ?>
                            <?= $genre->description?>
                        <?php endforeach; ?></li>      
                    
                    <?php if($production instanceof TvShow): ?>
                        <li class="list-group-item"><b>Stagioni</b> <?= $production->seasons?></li>      
                        <li class="list-group-item"><b>Episodi</b> <?= $production->episodes?></li>      
                    <?php elseif($production instanceof Movie): ?>
                        <li class="list-group-item"><b>Earnings</b> <?= $production->earnings?></li>      
                        <li class="list-group-item"><b>Durata</b> <?= $production->duration?></li>      
                    <?php endif; ?>
                </ul>    
                </li>
                <?php endforeach;?>
            </ul>
        </div>

    </div>
    
</body>
</html>







