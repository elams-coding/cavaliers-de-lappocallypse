<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Site Web du club d'échec les Cavaliers de l'apocalypse. Ici, vous trouverez les actualités de votre club d'échecs.">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <title>Cavaliers de l'apocalypse</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
    include 'assets/includes/header.php';

    include 'assets/includes/menu.php';
    ?>

    <main>
        <!-- Contenu principal de la page -->
        <h3 class="titre-section">Citation du jour</h3>
        <div>
            <blockquote>Aussi paresseux que nous aimons prétendre l'être, notre cerveau a soif de
                défis et de développements toute notre vie. Et le jeu d'échecs nourrit parfaitement ce besoin
                à tout âge.</blockquote>
            <span>G. Kasparov</span>
        </div>

        <hr id="main-line">

        <h3 class="titre-section">Articles</h3>

        <article>
            <div id="container-articles">
                <div class="box-article">
                    <h2>Annonce du tournoi à venir &laquo; Open d'Automne &raquo;</h2>
                    <img class="img-article" src="assets/img/chess in front of computer.jpg"
                        alt="Illustration de pions d'un plateau d'échecs en face d'un écran d'ordinateur">
                    <div class="text-content">
                        <p class="summary">Le club prépare l'&laquo; Open d'Automne &raquo;, un événement ouvert à tous
                            les niveaux qui se tiendra le mois prochain.
                        </p>
                        <p>Les inscriptions sont déjà ouvertes et les places limitées.
                            <br><span class="know-more">En savoir plus</span>
                        </p>
                        <span class="date-article">15/11/2025</span>
                    </div>
                </div>

                <div class="box-article">
                    <h2>Lancement d'ateliers pour les débutants</h2>
                    <img class="img-article" src="assets/img/chess in front of computer.jpg"
                        alt="Illustration de pions d'un plateau d'échecs en face d'un écran d'ordinateur">
                    <div class="text-content">
                        <p class="summary">De nouveaux ateliers hebdomadaires sont proposés pour aider les débutants à
                            comprendre les principes fondamentaux des ouvertures et finales.</p>
                        <p class="summary">Ces sessions seront animées par les entraîneur bénévoles du club.
                            <br><span class="know-more">En savoir plus</span>
                        </p>
                        <span class="date-article">27/10/2025</span>
                    </div>
                </div>

                <div class="box-article">
                    <h2>Accueil d'un maître international pour une séance de simultanée</h2>
                    <img class="img-article" src="assets/img/chess in front of computer.jpg"
                        alt="Illustration de pions d'un plateau d'échecs en face d'un écran d'ordinateur">
                    <div class="text-content">
                        <p class="summary">Le club recevra prochainement un maître international pour une séance
                            exceptionnelle de parties simultanées.
                        </p>
                        <p class="summary">Cet événement rare offrira aux membres une occasion unique de tester leur
                            niveau face à un joueur d'élite.
                            <br>
                            <span class="know-more">En savoir plus</span>
                        </p>
                        <span class="date-article">31/08/2024</span>
                    </div>
                </div>

                <div class="box-article">
                    <h2>Retour sur le tournoi &laquo; Gambit de Printemps &raquo;</h2>
                    <img class="img-article" src="assets/img/chess in front of computer.jpg"
                        alt="Illustration de pions d'un plateau d'échecs en face d'un écran d'ordinateur">
                    <div class="text-content">
                        <p class="summary">
                            Le tournoi annuel &laquo; Gambit de Printemps &raquo; a réuni plus 60 joueurs dans une
                            ambiance conviviale et compétitive.
                        </p>
                        <p>Les jeunes talents du club y ont particulièrement brillé avec plusieurs podiums.
                            <br><span class="know-more">En savoir plus</span>
                        </p>
                        <span class="date-article">13/06/2024</span>
                    </div>
                </div>

                <div class="box-article">
                    <h2>Nouveau site web disponible</h2>
                    <img class="img-article" src="assets/img/chess in front of computer.jpg"
                        alt="Illustration de pions d'un plateau d'échecs en face d'un écran d'ordinateur">
                    <div class="text-content">
                        <p class="summary">Ô jeune pousse, les Cavaliers de l'apocalypse vous présente leur nouveau site
                            web.
                            <br>Nouveau, moderne et tout frais !
                        </p>
                        <p class="summary">Vous pourrez consulter les actualités, obtenir des informations sur le club
                            et
                            ses différents memebres.
                            <br>
                            <span class="know-more">En savoir plus</span>
                        </p>
                        <span class="date-article">02/03/2018</span>
                    </div>
                </div>
            </div>
        </article>
    </main>

    <?php include 'assets/includes/footer.php'; ?>
</body>

</html>