<?php
session_start();
require_once "joueurs.php";
require_once "classe.php";

if (!isset($_SESSION['joueur1'])) {
    $_SESSION['joueur1'] = new Joueurs("Joueur 1", 10);
}

if (!isset($_SESSION['joueur2'])) {
    $_SESSION['joueur2'] = new Joueurs("Joueur 2", 10);
}


if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $_SESSION['joueur1']['coeurs'] = 10;
    $_SESSION['joueur2']['coeurs'] = 10;
    $_SESSION['jeu_termine'] = false; // Réinitialise le jeu à chaque début de partie
}


// if (!isset($_SESSION['joueur1'])) {
//     $joueur1 = new Joueurs("Joueur 1", 10);
//     $_SESSION['joueur1']['nom'] = $joueur1->getNom();
//     $_SESSION['joueur1']['coeurs'] = $joueur1->getCoeurs();
    

// }

// if (!isset($_SESSION['joueur2'])) {
//     $joueur2 = new Joueurs("Joueur 2", 10);
//     $_SESSION['joueur2']['nom'] = $joueur2->getNom();
//     $_SESSION['joueur2']['coeurs'] = $joueur2->getCoeurs();
// }


// if ($_SERVER["REQUEST_METHOD"] != "POST") {
//     $_SESSION['joueur1']['coeurs'] = 10;
//     $_SESSION['joueur2']['coeurs'] = 10;

// }  


function perdre($joueur,$vies){
    if(isset($_SESSION[$joueur]['coeurs']))
    $_SESSION[$joueur]['coeurs'] -= $vies;
if($_SESSION[$joueur]['coeurs'] < 0){
    $_SESSION[$joueur]['coeurs'] = 0;
    $_SESSION['jeu_termine'] = true;
}
}


function gagner($joueur, $vies) {
    if (isset($_SESSION[$joueur]['coeurs'])) {
        $_SESSION[$joueur]['coeurs'] += $vies;
    }
}

if ($_SESSION['joueur1']['coeurs'] <= 0) {
    echo "Le Joueur 1 a perdu";
    echo ' <br>';
    echo "Le Joueur 2 a gagné";
}

if ($_SESSION['joueur2']['coeurs'] <= 0) {
    echo "Le Joueur 2 a perdu ";
    echo ' <br>';
    echo "Le Joueur 1 a gagné ";
}


$jeu_termine = false;

if ($_SESSION['joueur1']['coeurs'] <= 0 || $_SESSION['joueur2']['coeurs'] <= 0) {
    $jeu_termine = true;
}



$guerrier = new Guerrier ('guerrier', 'img/img/Guerrier-removebg-preview.png');
  $guerrier2 = new Guerrier ('guerrier2', 'img/img/Guerrier-removebg-preview.png');
  $mage = new Mage ('mage', 'img/Sorcier-removebg-preview.png');
  $mage2 = new Mage ('mage2', 'img/Sorcier-removebg-preview.png');
  $pretre = new Pretre ('pretre','img/Capture_d_Ã©cran_2023-11-20_Ã _13.03.43-removebg-preview.png' );
  $pretre2 = new Pretre ('pretre2','img/Capture_d_Ã©cran_2023-11-20_Ã _13.03.43-removebg-preview.png' );
  $archer = new Archer ('archer', 'img/archer-removebg-preview.png');
  $archer2 = new Archer ('archer2', 'img/archer-removebg-preview.png');
  

 

?>


<!-- JOUEUR 1 -->

<div class="resultat" id="resultat">

<?php

// GUERRIER
if (isset($_POST['submitGuerrier'])) {
    perdre("joueur2", 3);    
}

// MAGE
if (isset($_POST['submitMage'])) {
    perdre("joueur2", 2);

//  PRETRE  
}
if (isset($_POST['submitPretre'])) {
    gagner("joueur1", 1);
}

// ARCHER
if (isset($_POST['submitArcher'])) {
    perdre("joueur2", 1); 
}

?>
</div>
<!-- JOUEUR2 -->
<div class="resultat2" id="resultat2">
<?php

// GUERRIER 2
if(isset($_POST['submitGuerrier2'])) {
    perdre("joueur1", 3);
}

// MAGE 2
if(isset($_POST['submitMage2'])) {
    perdre("joueur1", 2);
}

// PRETRE  2
if(isset($_POST['submitPretre2'])) {
    gagner("joueur2", 1);   
}

// ARCHER 2
if(isset($_POST['submitArcher2'])) {
    perdre("joueur1", 1);
}


?>
</div>



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
// Si la session est terminée, affichez le bouton "Rejouer"
if ($_SESSION['jeu_termine']) {
    echo '<div class="rejouer" id="rejouer" ><button onclick="window.location.reload();">Rejouer</button></div>';
}
?>

    <div class="lesjoueurs">
    <div class="joueur1">
    <div class="vies">
     
    <p><?php echo $_SESSION['joueur1']['coeurs']?></p>
    
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

<!-- <button class=rejouer id="rejouer" >Recommencer la partie</button> -->



<div class="joueur2">
    <div class="vies2">
        <p><?php echo $_SESSION['joueur2']['coeurs']?></p>
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

<!-- <style>
    .rejouer{
        display: none;
    }
</style> -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var boutonRejouer = document.querySelector('.rejouer button');
        boutonRejouer.style.display = '<?php echo ($_SESSION['jeu_termine']) ? "block" : "none"; ?>';

        boutonRejouer.addEventListener("click", function() {
            <?php session_start() ?>
        });
    });
  
    
        
</script>

</body>
</html>

