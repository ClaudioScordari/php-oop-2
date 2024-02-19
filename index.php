<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/food.php';
require_once __DIR__ . '/game.php';
require_once __DIR__ . '/kennel.php';
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
            <!-- Croccantini cane -->
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

                <div class="box-icon">
                    <?php
                    echo $foodOne->categoryIcon;
                    ?>
                </div>
            </div>

            <!-- Croccantini gatto -->
            <div class="card">
                <div class="box-img">
                    <?php
                    echo $foodTwo->image;
                    ?>
                </div>

                <div class="info-card">
                    <h3 class="title">
                        <?php
                        echo $foodTwo->title;
                        ?>
                    </h3>

                    <div class="price">
                        Il prezzo è di €
                        <?php
                        echo $foodTwo->price;
                        ?>
                    </div>

                    <div class="type">
                        Il tipo dell'articolo è
                        <?php
                        echo get_class($foodTwo);
                        ?>
                    </div>
                </div>

                <div class="box-icon">
                    <?php
                    echo $foodTwo->categoryIcon;
                    ?>
                </div>
            </div>

            <!-- Gioco palla per cane -->
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

                <div class="box-icon">
                    <?php
                    echo $gameOne->categoryIcon;
                    ?>
                </div>
            </div>

            <!-- Cuccia per cane -->
            <div class="card">
                <div class="box-img">
                    <?php
                    echo $kennelOne->image;
                    ?>
                </div>

                <div class="info-card">
                    <h3 class="title">
                        <?php
                        echo $kennelOne->title;
                        ?>
                    </h3>

                    <div class="price">
                        Il prezzo è di €
                        <?php
                        echo $kennelOne->price;
                        ?>
                    </div>

                    <div class="type">
                        Il tipo dell'articolo è
                        <?php
                        echo get_class($kennelOne);
                        ?>
                    </div>
                </div>

                <div class="box-icon">
                    <?php
                    echo $kennelOne->categoryIcon;
                    ?>
                </div>
            </div>

            <!-- Gioco gomitolo gatto -->
            <div class="card">
                <div class="box-img">
                    <?php
                    echo $gameTwo->image;
                    ?>
                </div>

                <div class="info-card">
                    <h3 class="title">
                        <?php
                        echo $gameTwo->title;
                        ?>
                    </h3>

                    <div class="price">
                        Il prezzo è di €
                        <?php
                        echo $gameTwo->price;
                        ?>
                    </div>

                    <div class="type">
                        Il tipo dell'articolo è
                        <?php
                        echo get_class($gameTwo);
                        ?>
                    </div>
                </div>

                <div class="box-icon">
                    <?php
                    echo $gameTwo->categoryIcon;
                    ?>
                </div>
            </div>

            <!-- Cuccia per gatto -->
            <div class="card">
                <div class="box-img">
                    <?php
                    echo $kennelTwo->image;
                    ?>
                </div>

                <div class="info-card">
                    <h3 class="title">
                        <?php
                        echo $kennelTwo->title;
                        ?>
                    </h3>

                    <div class="price">
                        Il prezzo è di €
                        <?php
                        echo $kennelTwo->price;
                        ?>
                    </div>

                    <div class="type">
                        Il tipo dell'articolo è
                        <?php
                        echo get_class($kennelTwo);
                        ?>
                    </div>
                </div>

                <div class="box-icon">
                    <?php
                    echo $kennelTwo->categoryIcon;
                    ?>
                </div>
            </div>
        </div>

    </div>
</body>

</html>