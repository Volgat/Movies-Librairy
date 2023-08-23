
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>À l'affiche</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css?v=1.1">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
</head>

<body>
<?php 

include "./public/header.php";
include "./includes/data.inc.php";

?>
<main>

    <!-- début template listeFilms -->
    <section>
        <h1>À L'AFFICHE</h1>
            <div>
            <?php foreach ($films as $key => $tabFilm) { ?>
                   
                <div>
                    <!-- Exemple : film.php?id=2 -->
                    <a href=<?php echo "film.php?id=".$tabFilm['id']; ?>>
                        <img src=<?php echo $tabFilm['image']; ?> alt="">
                    </a>
                    <p class="legende"><?php echo $tabFilm['titre']; ?> 
                    - <?php echo $tabFilm['annee']; ?> 
                    - <?php echo $tabFilm['duree']; ?> min</p>
                    </div>
                <?php }?>

            </div>
    </section>
</main>
</body>
</html>