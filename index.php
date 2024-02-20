<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/food.php';
require_once __DIR__ . '/game.php';
require_once __DIR__ . '/kennel.php';

// Array che contiene tutti i prodotti
$allProducts = [];

// Croccantini per cane
$foodOne = new Food(
    'ZampaFelice Bocconcini al Pollo',
    'pippo',
    $dog,
    'https://media.istockphoto.com/id/483452891/it/foto/cibo-per-animali-domestici.jpg?s=612x612&w=0&k=20&c=TrLVzTAt3VZXcbO70T9Eea5T1zjZHwRLdvPFZeMyEC0='
);
$allProducts[] = $foodOne;

// Croccantino per gatti
$foodTwo = new Food(
    'Croccantini Felini Deliziosi',
    5.50,
    $cat,
    'https://www.my-personaltrainer.it/2021/04/13/cibo-per-gatti_900x760.jpeg'
);
$allProducts[] = $foodTwo;

// Gioco palla cane
$gameOne = new Game(
    'Palla rimbalzante',
    10.00,
    $dog,
    'https://m.media-amazon.com/images/I/51yZAEHEJZL.jpg'
);
$allProducts[] = $gameOne;

// Gioco gomitolo gatto
$gameTwo = new Game(
    'Gomitolo di lana',
    5.00,
    $cat,
    'https://www.smagatto.it/wp-content/uploads/set-2-gomitoli-colorati-gatti.jpg'
);
$allProducts[] = $gameTwo;

// Cuccia per cani
$kennelOne = new Kennel(
    'Casa Accogliente a Zampe',
    20.50,
    $dog,
    'https://m.media-amazon.com/images/I/81mTYtNJ0dL.jpg'
);
$allProducts[] = $kennelOne;

// Cuccia per gatti
$kennelTwo = new Kennel(
    'Regno dei Felini Coccole',
    22.99,
    $cat,
    'https://cdn.maurysonline.it/immagini/6062152_a009220-cuccia-per-gatti-in-legno-con-2-cuscini-e-tiragraffi-rimovibili-bianco-main_510.jpeg'
);
$allProducts[] = $kennelTwo;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>

    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <div class="container">
        <h1>
            Prodotti per animali
        </h1>

        <div class="box-card">
            <?php
            foreach ($allProducts as $singleProduct) {
            ?>

                <!-- Colonna da ciclare -->
                <div class="card">
                    <div class="box-img">
                        <img src="<?php echo $singleProduct->image; ?>" alt="">
                    </div>

                    <div class="info-card">
                        <h3 class="title">
                            <?php
                            echo $singleProduct->title;
                            ?>
                        </h3>

                        <div class="price">
                            Il prezzo è di €
                            <?php
                            echo $singleProduct->price;
                            ?>
                        </div>

                        <div class="type">
                            Il tipo dell'articolo è
                            <?php
                            echo get_class($singleProduct);
                            ?>
                        </div>

                        <div class="box-icon">
                            La categoria è
                            <?php
                            echo $singleProduct->category->name;
                            ?>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>

    </div>
</body>

</html>