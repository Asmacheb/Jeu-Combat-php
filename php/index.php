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
    <div class="J1GAGNE" style="display: none;">
        <p>JOUEUR 1 : FÉLICITATION!!! </p>
        <p>JOUEUR 2 : GAME OVER...</p>
    </div>
    <div class="J2GAGNE" style="display: none;">
        <p>JOUEUR 2 : FÉLICITATION!!! </p>
        <p>JOUEUR 1 : GAME OVER...</p>
    </div>
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

    <form id="monFormulaire" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <?php
        if (!isset($_POST['pseudo'])) {
            // Si le formulaire n'a pas encore été soumis
            echo '<label for="Pseudo du joueur 1"> PSEUDO JOUEUR 1</label>';
            echo '<input placeholder="Entrer votre Pseudo" type="text" id="pseudo" name="pseudo" />';
            echo '<button class="boutonentrer" type="submit" name="submit">ENTRER</button>';
        } else {
            // Si le pseudo a été soumis, afficher le pseudo
            $pseudo = isset($_POST['pseudo']) ? htmlspecialchars($_POST['pseudo']) : '';
            echo '<span>' . $pseudo . '</span>';
        }
        ?>
    </form>

    <img class="image1" src="img/joueur1.png" alt="">

    <div class="lesattaques">
        <div class="guerrier" id="cardJ1"></div>
        <div class="mage" id="cardJ1"></div>
        <div class="pretre" id="cardJ1"></div>
        <div class="archer" id="cardJ1"></div>
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

    <form id="monFormulaire2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <?php
        if (!isset($_POST['pseudo2'])) {
            // Si le formulaire n'a pas encore été soumis
            echo '<label for="Pseudo du joueur 2"> PSEUDO JOUEUR 2</label>';
            echo '<input placeholder="Entrer votre Pseudo" type="text" id="pseudo2" name="pseudo2" />';
            echo '<button class="boutonentrer2" type="submit" name="submit2">ENTRER</button>';
        } else {
            // Si le pseudo a été soumis, afficher le pseudo
            $pseudo2 = isset($_POST['pseudo2']) ? htmlspecialchars($_POST['pseudo2']) : '';
            echo '<span>' . $pseudo2 . '</span>';
        }
        ?>
    </form>

    <img class="image2" src="img/joueur2.png" alt="">

    <div class="lesattaques2">
        <div class="guerrier2" id="cardJ2"></div>
        <div class="mage2" id="cardJ2"></div>
        <div class="pretre2" id="cardJ2"></div>
        <div class="archer2" id="cardJ2"></div>
    </div>
</div>

    </div>
</div>
<script src="script.js"></script>
</body>
</html>

