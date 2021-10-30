<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu2</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    require_once 'Autoload.php';
    require_once 'Perso.php';

    ?>

    <main>

        <div class="container">

            <div class="row col-md-6">
                <h2>Inscription</h2>
                <h3>Bienvenue sur notre jeu en ligne</h3>
            </div>

            <div class="row col-md-6">
                <form method="post" action="">
                    
                    <div class="row">
                        <label for="name">Votre pseudo</label>
                        <input type="text" name="pseudo" id="pseudo" value="<?php echo $pseudo; ?>" class='form-control'>
                    </div>

                    <div class="row">
                        <label for="nom">Votre personnage</label>
                        <input type="text" name="personnage" id="personnage" value="<?php echo $personnage; ?>" class='form-control'>
                        </div>
                    </div>

                    <div class="row col-md-6">
                        <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
                        <?php echo $msg; // Affichage des messages d'erreur pour l'utilisateur ici ?> 
                    </div>
                </form>
            </div>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>