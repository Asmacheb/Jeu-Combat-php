
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de Combat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="back">
<?php
session_start();

require_once 'joueurs.php';
require_once 'classe.php';


?>

    <?php
      $guerrier = new Guerrier ('guerrier', 'img/img/Guerrier-removebg-preview.png');
      $guerrier2 = new Guerrier ('guerrier2', 'img/img/Guerrier-removebg-preview.png');
      $mage = new Mage ('mage', 'img/Sorcier-removebg-preview.png');
      $mage2 = new Mage ('mage2', 'img/Sorcier-removebg-preview.png');
      $pretre = new Pretre ('pretre','img/Capture_d_Ã©cran_2023-11-20_Ã _13.03.43-removebg-preview.png' );
      $pretre2 = new Pretre ('pretre2','img/Capture_d_Ã©cran_2023-11-20_Ã _13.03.43-removebg-preview.png' );
      $archer = new Archer ('archer', 'img/archer-removebg-preview.png');
      $archer2 = new Archer ('archer2', 'img/archer-removebg-preview.png');
      $joueur = new Joueurs ('joueur', 'img/joueur1.png', 10);
      $joueur2 = new Joueurs ('joueur2', 'img/joueur2.png', 10);
?>

    <!-- // Joueur1 -->
    <!-- <div class="titre1"><h1>Joueur1</h1></div> -->
<div class="resultat" id="resultat">
<?php
// Vérifie si le formulaire a été soumis
if (isset($_POST['submitGuerrier'])) {
    // Obtient le nombre de vies actuel du joueur 2 depuis la session
    $coeurs_joueur2 = isset($_SESSION['coeurs_joueur2']) ? $_SESSION['coeurs_joueur2'] : 10;
    
    // Effectue l'attaque et met à jour le nombre de vies du joueur 2
    $guerrier->attaque($joueur2, $coeurs_joueur2); 
    
    // Stocke le nouveau nombre de vies du joueur 2 dans la session
    $_SESSION['coeurs_joueur2'] = $joueur2->getCoeurs();
}
// if(isset($_POST['submitGuerrier'])) {
//     $nombreVies = $joueur2->getCoeurs(); // Nombre de vies à retirer

//     $guerrier->attaque($joueur2, $nombreVies); 
//     echo $joueur2->getCoeurs();
// }
if(isset($_POST['submitMage'])) {
    $nombreVies = $joueur2->getCoeurs(); // Nombre de vies à retirer

    $mage->attaque($joueur2, $nombreVies); 
    echo $joueur2->getCoeurs();
}
if(isset($_POST['submitPretre'])) {
    $nombreVies = $joueur2->getCoeurs(); // Nombre de vies à retirer

    $pretre->attaque($joueur2, $nombreVies); 
    echo $joueur2->getCoeurs();
}
if(isset($_POST['submitArcher'])) {
    $nombreVies = $joueur2->getCoeurs(); // Nombre de vies à retirer

    $archer->attaque($joueur2, $nombreVies); 
    echo $joueur2->getCoeurs();
}
?>
</div>

<!-- // Joueur2 -->
<!-- <div class="titre2"><h1>Joueur2</h1></div> -->
<div class="resultat2" id="resultat2">

<?php
if(isset($_POST['submitGuerrier2'])) {
    $nombreVies = $joueur->getCoeurs(); // Nombre de vies à retirer

    $guerrier2->attaque($joueur, $nombreVies); 
    echo $joueur->getCoeurs();
}
if(isset($_POST['submitMage2'])) {
    $nombreVies = $joueur->getCoeurs(); // Nombre de vies à retirer

    $mage2->attaque($joueur, $nombreVies); 
    echo $joueur->getCoeurs();
}
if(isset($_POST['submitPretre2'])) {
    $nombreVies = $joueur->getCoeurs(); // Nombre de vies à retirer

    $pretre2->attaque($joueur, $nombreVies); 
    echo $joueur->getCoeurs();
}
if(isset($_POST['submitArcher2'])) {
    $nombreVies = $joueur->getCoeurs(); // Nombre de vies à retirer

    $archer2->attaque($joueur, $nombreVies); 
    echo $joueur->getCoeurs();
}
?>
</div>
    <!-- <div class="J1GAGNE" style="display: none;">
        <p>JOUEUR 1 : FÉLICITATION!!! </p>
        <p>JOUEUR 2 : GAME OVER...</p>
    </div>
    <div class="J2GAGNE" style="display: none;">
        <p>JOUEUR 2 : FÉLICITATION!!! </p>
        <p>JOUEUR 1 : GAME OVER...</p>
    </div> -->
    <div class="lesjoueurs">
    <div class="joueur1">
    <div class="vies">
     
   

        <?php
        // Générer les éléments de cœur pour le joueur 1
        for ($i = 0; $i < 10; $i++) {
            echo '<div class="coeur"> <img src="img/coeurblanc.png" alt=""></div>';
        }
        ?>
    </div>

   

    <img class="image1" src="img/joueur1.png" alt="">

    <div class="lesattaques">
        <div class="guerrier" id="cardJ1">
        <form method="post">  <input type="submit" name="submitGuerrier"></form>
        </div> 
        <div class="mage" id="cardJ1">
        <form method="post"> <input type="submit" name="submitMage"></form>
        </div>
        <div class="pretre" id="cardJ1">
        <form method="post"><input type="submit" name="submitPretre"></form>
        </div>
        <div class="archer" id="cardJ1">
        <form method="post"><input type="submit" name="submitArcher"></form>
        </div>
    </div>
</div>

<button class="play" style="<?php if (isset($_POST['pseudo']) && isset($_POST['pseudo2'])) {
                                    echo 'display: block;';
                                } else {
                                    echo 'display: none;';
                                } ?>">PLAY</button>

<div class="joueur2">
    <div class="vies2">
        <?php
        // Générer les éléments de cœur pour le joueur 2
        for ($i = 0; $i < 10; $i++) {
            echo '<div class="coeur2"> <img src="img/coeurblanc.png" alt=""></div>';
        }
        ?>
    </div>

   

    <img class="image2" src="img/joueur2.png" alt="">

    <div class="lesattaques2">
        <div class="guerrier2" id="cardJ2">
        <form method="post">  <input type="submit" name="submitGuerrier2"></form>
        </div>
        <div class="mage2" id="cardJ2">
        <form method="post"> <input type="submit" name="submitMage2"></form>
        </div>
        <div class="pretre2" id="cardJ2">
        <form method="post"><input type="submit" name="submitPretre2"></form>
        </div>
        <div class="archer2" id="cardJ2">
        <form method="post"><input type="submit" name="submitArcher2"></form>
    </div>
</div>
 </div>
</div>
<script src="script.js"></script>
</body>
</html>

