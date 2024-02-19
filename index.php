<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/food.php';
require_once __DIR__ . '/game.php';
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
            <div class="card">
                <div class="box-img">
                    <?php
                    echo $foodOne->image;
                    ?>
                </div>

                <div class="info-card">
                    <h3 class="title">
                        <?php
                        echo $foodOne->title;
                        ?>
                    </h3>

                    <div class="price">
                        Il prezzo è di €
                        <?php
                        echo $foodOne->price;
                        ?>
                    </div>

                    <div class="type">
                        Il tipo dell'articolo è
                        <?php
                        echo get_class($foodOne);
                        ?>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="box-img">
                    <?php
                    echo $gameOne->image;
                    ?>
                </div>

                <div class="info-card">
                    <h3 class="title">
                        <?php
                        echo $gameOne->title;
                        ?>
                    </h3>

                    <div class="price">
                        Il prezzo è di €
                        <?php
                        echo $gameOne->price;
                        ?>
                    </div>

                    <div class="type">
                        Il tipo dell'articolo è
                        <?php
                        echo get_class($gameOne);
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>