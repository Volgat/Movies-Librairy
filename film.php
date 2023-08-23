

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>DÉLICIEUX</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css?v=1.1">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
</head>

<body>
<?php include "./public/header.php";
include "./includes/data.inc.php";
$id = $_GET['id'];

?>
<main>

    <section>
        <?php foreach ($films as $key => $tabFilm) {
           if ($id == $tabFilm['id']) {
           
        ?>
        <h1><?php echo $tabFilm['titre']; ?></h1>
        <div>
            <img src=<?php echo $tabFilm['image']; ?> alt="">
            <div class="info">
                <p><?php echo $tabFilm['description']; ?></p>
                <hr>
                <ul>
                    <li><span>Genre:</span><span><?php echo $tabFilm['genre']; ?></span></li>
                    <li><span>Année:</span><span><?php echo $tabFilm['annee']; ?></span></li>
                    <li><span>Durée:</span><span><?php echo $tabFilm['duree']; ?> minutes</span></li>

                    <!-- liste des réalisateurs -->
                    <li><span>Réalisation:</span><span><?php echo $tabFilm['realisation']; ?></span></li>

                    <!-- liste des pays -->
                    <li><span>Pays:</span><span>
                    <?php echo $tabFilm['pays']; ?>
                    </span></li>

                    <!-- liste des acteurs -->
                    <li><span>Interprètes:</span>
                        <span>
                        <?php foreach ($tabFilm['interpretes'] as $key => $value) {
                           echo $value."<br>";
                        } ?>

                        </span>
                    </li>

                </ul>
            </div>
            <div class="ba">

                <video src="medias/bandes-annonces/ba-2-1634829119.mp4" controls></video>

                <!-- horaires -->
                <section>
                    <h2>Horaires</h2>
                    <div id="horaires">

                        <div class='jour'>Lundi 25</div>
                        <div class='heures'>

                            <div>14:00:00</div>
                        </div>


                    </div>
                </section>

            </div>
        </div>
       <?php    }}?> 
    </section>
</main>
</body>
</html>