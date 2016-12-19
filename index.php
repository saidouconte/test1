<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cours 15 DvpWeb</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="vues/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src=vues/jquery-3.1.1/jquery-3.1.1.min.js"></script>
        <script src="vues/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
 <div class="container">
            <?php
            include("./vues/menu_header_footer/vue_header.php");
            include("./vues/menu_header_footer/vue_menu.php");

            $navigation = isset($_GET['navigation']) ? $_GET['navigation'] : 'presentation';

            switch ($navigation) {
                case 'presentation' :
                    // Pas besoin de contrôleur spécifique pour <presentation> : 
                    // à part le paramètre navigation, aucune donnée n'est reçue en POST ni GET, et aucun accès DB n'a lieu
                    include("./vues/vue_presentation.php");
                    break;

                // Tout ce qui concerne les CINEMAS est renvoyé au CONTROLEUR_CINEMAS
                case 'cinemas_liste' :
                    include("./controleurs/controleur_cinemas.php");
                    break;
                case 'cinema_ajout_formulaire' :
                    include("./controleurs/controleur_cinemas.php");
                    break;
                case 'cinema_ajout_reception' :
                    include("./controleurs/controleur_cinemas.php");
                    break;
                case 'cinema_suppression' :
                    include("./controleurs/controleur_cinemas.php");
                    break;

                // Tout ce qui concerne les FILMS est renvoyé au CONTROLEUR_FILMS
                case 'films_liste' :
                    include("./controleurs/controleur_films.php");
                    break;
                case 'film_ajout_formulaire' :
                    include("./controleurs/controleur_films.php");
                    break;
                case 'film_ajout_reception' :
                    include("./controleurs/controleur_films.php");
                    break;
                case 'film_suppression' :
                    include("./controleurs/controleur_films.php");
                    break;
                
            }

            include("./vues/menu_header_footer/vue_footer.php");
            ?>
        </div>
    </body>
</html>
