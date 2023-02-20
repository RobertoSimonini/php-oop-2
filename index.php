<?php include __DIR__ . '/Article.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop_2</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- FontAwesome  -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css' integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==' crossorigin='anonymous' />

    <!-- Style  -->
    <link href="style.css" />
</head>

<body>
    <h1 class="text-primary text-center py-4">
        Articles
    </h1>
    <div class="container">
        <div class="row g-3 justify-content-center">
            <?php foreach ($articles as $article) : ?>
                <div class="col-4">
                    <div class="card text-center" style="height: 750px !important">
                        <img src="<?= $article->img ?>" class="card-img-top h-50" alt="...">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-title"><?= $article->name ?></h3>
                            <p class="card-text"><?= $article->description ?></p>
                            <h2><?= $article->categorie->name ?></h2>
                            <h5 class="card-title"><?= $article->price ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>