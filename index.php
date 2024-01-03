<?php

require __DIR__ . '/vendor/autoload.php';

use \Colors\RandomColor;

$faker = Faker\Factory::create('fr_FR'); // alternative à "use"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composer</title>
    <style>
        .colAl {
            color: <?= RandomColor::one() ?>
        }

        .card {}
    </style>
</head>

<body>
    <section class="card">
        <?php for ($i = 0; $i < 20; $i++) : ?>
            <article>
                <h1 class="colAl"><?= ucfirst($faker->words(5, true)) ?></h1>
                <p><img src="<?= $faker->imageUrl(320, 240, "Fake Image LOL", false) ?>" alt="Oopsie..."></p>
                <p><?= $faker->paragraph() ?></p>
                <p>Ecrit par :<strong><?= $faker->name() ?></strong><br>le : <?= $faker->date('d/m/y') ?></p>
            </article>
        <?php endfor; ?>
    </section>
</body>

</html>