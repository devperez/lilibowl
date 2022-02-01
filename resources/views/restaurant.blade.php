<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--FONT-->
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <!-- CSS -->        
        <link rel="stylesheet" href="/css/restaurant_styles.css" />

        <title>Lili BOwL | Le restaurant</title>
    </head>
    <body>
    <!--navbar-->
    @include('components.navbar')
        @yield('navbar')
    <!-- end navbar -->

    
    <section class="topPage">
        <div class="fleur">
            <img src="/images/fleur_titre.svg" alt="illustration florale">
        </div>
        <div class="pageTitle">
            <h2 class="title">Le Restaurant</h2>
        </div>
        <div class="ellipse_wrapper">
            <img class="ellipse" src="/images/Ellipse_restaurant.png" alt="ellipse décorative">
        </div>
    </section>

    <section class="restauration" id="restauration">
        <div class="left_part">
            <div class="title_wrapper">
                <h4>Restauration sur place ou <br /> à emporter & service livraison</h4>
            </div>
            <div class="restauration_texte_wrapper">
                <p class="restauration_texte">
                Nous vous accueillons dans notre restaurant situé dans la plus ancienne maison médiévale du centre historique de Cahors, <strong> en service continu du lundi au vendredi de 11h00 à 15h00</strong> :<br />
                - 6 places assises en salle,<br />
                - terrasse et petit salon accueillants.<br />
                <br />
                Réservations uniquement par téléphone.<br />
                <br />
                Livraison continue le mardi et le jeudi dans le Grand Cahors.
                </p>
            </div>
        </div>
        <div>
        </div>
    </section>
    
    </body>
</html>
