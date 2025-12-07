<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Page dédié aux informations du club d'échec les Cavaliers de l'apocalypse. Ici, vous trouverez des informations sur le club et ses différents membres.">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <title>Infos du club et des membres - Cavaliers de l'apocalypse</title>
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

        include "../includes/menu2.php";
    ?>

    <main>
        <!-- Contenu principal de la page -->

        <section id="box-infos-club" class="box-infos">
            <h2>Informations générales du club</h2>

            <p>
                Le club d'échecs Cavaliers de l'apocalypse a été fondé le 14 février 1994. Le nom était alors
                Capablanca et le Siège Social se trouvait à la cafétéria Le Magnolia. L'activité échiquéenne consistait
                seulement à la pratique d'un loisir entre amis.
            </p>

            <p>
                Aujourd'hui, le Siège Social est au F.J.T. "Les 3 Portes" et depuis septembre 2002, le Club d'Echecs est
                affilié à la Fédération Française des Echecs. En conservant bien sur son caractère convivial,
                l'association organise et participe à des compétitions officielles, par équipes ou individuelles.
            </p>

            <p>
                Aujourd'hui nous comptons plus d'une trentaine de membres actifs, en partant du novice aux joueurs
                plus expérimentés. Ils sont notre moteur dans la vie du club et apportent tous un soutien essentiel au
                bon fonctionnement de celui-ci.
            </p>
        </section>

        <section id="box-infos-membres" class="box-infos">
            <h2>Informations générales des membres</h2>

            <table id="tableau-membres"
                summary="Tableau présentant la liste des membres non exhaustive et leur différents score (elo, rapide et blitz)">
                <caption>Liste des membres</caption>
                <thead>
                    <tr>
                        <th scope="col">Nom et Prénom</th>
                        <th scope="col">Score Elo</th>
                        <th scope="col">Score Rapide</th>
                        <th scope="col">Score Blitz</th>
                    </tr>
                <tbody>
                    <tr>
                        <td>Yung Li</td>
                        <td>1300</td>
                        <td>700</td>
                        <td>900</td>
                    </tr>

                    <tr>
                        <td>Marie Dubois</td>
                        <td>1500</td>
                        <td>850</td>
                        <td>1100</td>
                    </tr>

                    <tr>
                        <td>Jean-Pierre Martin</td>
                        <td>2100</td>
                        <td>1200</td>
                        <td>1800</td>
                    </tr>

                    <tr>
                        <td>Fatima Ziani</td>
                        <td>950</td>
                        <td>450</td>
                        <td>600</td>
                    </tr>

                    <tr>
                        <td>David Tremblay</td>
                        <td>4200</td>
                        <td>2500</td>
                        <td>3100</td>
                    </tr>

                    <tr>
                        <td>Sophie Lemaire</td>
                        <td>600</td>
                        <td>200</td>
                        <td>350</td>
                    </tr>

                    <tr>
                        <td>Carlos Da Silva</td>
                        <td>1800</td>
                        <td>900</td>
                        <td>1500</td>
                    </tr>

                    <tr>
                        <td>Amélie Richard</td>
                        <td>2500</td>
                        <td>1500</td>
                        <td>2000</td>
                    </tr>
                </tbody>
                </thead>
            </table>

        </section>
    </main>

    <?php
        include "../includes/footer2.php";
    ?>
</body>

</html>