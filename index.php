<?php
require_once __DIR__ ."./Models/Genre.php";
require_once __DIR__ ."./Models/Production.php";
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
        <h1>Film Table</h1>
        <table class="table">
            <tr>
                <th>Titolo</th>
                <th>Lingua</th>
                <th>Voto</th>
                <th>Genere</th>
                <th>Deacrizione</th>
            </tr>
            <tbody>
                <?php foreach($Production as $film):?>
                <tr>
                    <td><?= $film->title?></td>
                    <td><?= $film->lang?></td>
                    <td><?= $film->vote?></td>
                    <td><?= $film->genre->genre?></td>
                    <td><?= $film->genre->description?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    
</body>
</html>







