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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    </body>

</html>

<!-- STYLE CSS -->
<link rel="stylesheet" href="css/style.css">
<title>PHP Hotel</title>
</head>

<body>
    <!-- STAMPIAMO A SCHERMO LE INFO TRAMITE FOREACH -->
    <!-- <ul>
        <?php // foreach ($hotels as $hotel): ?>
            <li>
                <?php // echo $hotel["name"] ?>
            </li>
            <li>
                <?php // echo $hotel["description"] ?>
            </li>
            <li>
                <?php // echo $hotel["parking"] ?>
            </li>
            <li>
                <?php // echo $hotel["vote"] ?>
            </li>
            <li>
                <?php // echo $hotel["distance_to_center"] ?>
            </li>
        <?php // endforeach; ?>
    </ul> -->
    <div class="container mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">NOME HOTEL</th>
                    <th scope="col">DESCRIZIONE</th>
                    <th scope="col">PARCHEGGIO</th>
                    <th scope="col">VOTO</th>
                    <th scope="col">DISTANZA DAL CENTRO</th>
                </tr>
            </thead>
            <tbody>
                <!-- TRAMITE FOREACH STAMPO I VALORI IN UNA TABELLA -->
                <?php foreach ($hotels as $hotel): ?>
                    <tr>
                        <td>
                            <?php echo $hotel["name"]; ?>
                        </td>
                        <td>
                            <?php echo $hotel["description"]; ?>
                        </td>
                        <?php if ($hotel["parking"]) { ?>
                            <td>
                                <i class="fa-solid fa-check"></i>
                            </td>
                        <?php } else { ?>
                            <td>
                                <i class="fa-solid fa-xmark"></i>
                            </td>
                        <?php } ?>
                        <td>
                            <?php echo $hotel["vote"]; ?>
                        </td>
                        <td>
                            <?php echo $hotel["distance_to_center"]; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>




    <!-- BS JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>