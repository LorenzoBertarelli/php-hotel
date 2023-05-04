<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <h1>Lista Hotel</h1>
    <div class="container">
        <table class="table table-striped">
            <?php for($i=0; $i < count($hotels); $i++) { 
                $cur_hotel = $hotels[$i];?>
                    <thead>
                        <tr>
                        <th scope="col">Nome:</th>
                        <th scope="col">Descrizione:</th>
                        <th scope="col">Parcheggio:</th>
                        <th scope="col">Voto:</th>
                        <th scope="col">Distanza dal centro:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><h2><?php echo "{$cur_hotel['name']}"; ?></h2></td>
                        <td><p><?php echo "{$cur_hotel['description']}"; ?></p></td>
                        <td><p><?php echo $cur_hotel['parking'] ? "Disponibile" : "Non disponibile"?></p></td>
                        <td><p><?php echo "{$cur_hotel['vote']}"; ?></p></td>
                        <td><p><?php echo "{$cur_hotel['distance_to_center']}"; ?></p></td>
                        </tr>
                    </tbody>
            <?php }?>
        </table>
    
        <form action="index.php" method="GET">

            <button type="submit">Cerca</button>
            <button type="reset">Annulla</button>
        </form>
    </div>
</body>
</html>
