<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Page de contact du club d'échecs les Cavaliers de l'apocalypse. Ici, vous pourrez prendre contact avec le club afin de faire par de vos recommandations, problèmes rencontrés au sein du club ou simplement saluer les membres.">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <title>Contact - Cavaliers de l'apocalypse</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Story+Script&display=swap" rel="stylesheet">
</head>

<body>
    <?php
        include "../includes/header.php";
        
        include "../includes/menu3.php";
    ?>

    <main id="main-form">
        <!-- Contenu principal de la page -->
        <form action="" method="post">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" placeholder="Votre nom" required><br>
            </div>

            <div>
                <label for="prenom">Prénom :</label>
                <input type="text" placeholder="Votre prénom" required><br>
            </div>

            <div>
                <label for="email">Adresse email :</label>
                <input type="email" placeholder="votre.adresse@exemple.com" required><br>
            </div>

            <div>
                <label for="sujet">Sujet :</label>
                <input type="text" placeholder="Le sujet du message" required><br>
            </div>

            <div>
                <label for="message">Message :</label>
                <textarea placeholder="Votre message..." required rows="4"></textarea><br>
            </div>

            <input type="submit" value="Envoyer">
        </form>
    </main>

    <?php
        include "../includes/footer2.php";
    ?>
</body>

</html>