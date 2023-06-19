<?php
include __DIR__ . '/classes/Movie.php';
include __DIR__ . '/classes/Genre.php';
include __DIR__ . '/filmData.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-danger">Film</h1>
        <div class="cards-container d-flex justify-content-between">
            <?php
            foreach ($movies as $movie) { ?>
                <div class="card m-5 text-center">
                    <img src="<?= $movie->imageUrl ?>" alt="<?= $movie->name ?>">
                    <h2 class="pb-3"><?= $movie->name ?></h2>
                    <h4 class="pb-2"><?= $movie->language ?></h4>
                    <p><?= $movie->year ?></p>
                    <ul><?php
                        foreach ($movie->genres as $genre) { ?>
                            <li class="text-start"><?= $genre->genreName ?></li>
                        <?php } ?>
                    </ul>
                    <p>Lingua Originale: <?= $movie->printLang() ?></p>
                </div><?php
                    } ?>

        </div>
    </div>
</body>

</html>