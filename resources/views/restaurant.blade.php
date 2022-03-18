<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content= "Lili BOwL | Restaurant végétarien éco-responsable, service traiteur, location de vaisselle, vente de café et de thé bio..." />
        <meta name="robots" content= "index, follow">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://???????">
        <meta property="og:title" content="Restaurant et traiteur végétarien à Cahors | Lili BOwL">
        <meta property="og:description" content="Lili BOwL | Restaurant/traiteur végétarien éco-responsable proposant une cuisine végétale vitaminée et colorée">
        <meta property="og:image" content="/images/image_social_media_tags-min.jpg">


        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content=" https://???????">
        <meta property="twitter:title" content="Restaurant et traiteur végétarien à Cahors | Lili BOwL">
        <meta property="twitter:description" content="Lili BOwL | Restaurant/traiteur végétarien éco-responsable proposant une cuisine végétale vitaminée et colorée">
        <meta property="twitter:image" content="adresse image">
        
        <!--FONT-->
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        
        <!--Icone-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <!-- CSS -->   
        <link rel="stylesheet" href="/css/navbar.css" />
        <link rel="stylesheet" href="/css/footer.css" />
        <link rel="stylesheet" href="/css/restaurant_styles.css" />
        <link rel="stylesheet" href="/css/navbar_mobile.css" />
        
        <!--JQuery-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        
        <!--script pour soulignement des items de la navbar suivant la page-->
        <script src="/js/nav.js"></script>

        <title>Restaurant et traiteur végétarien à Cahors | Lili BOwL</title>
    </head>
    <body>
    <!--navbar-->
    @include('components.navbar')
        @yield('navbar')
    <!-- end navbar -->
    
    <section class="topPage">
        <div class="fleur">
            <img class="fleur_image" src="/images/restaurant/restaurant_fleur.png" alt="illustration florale">
            <img class="fleur_image_mobile" src="/images/restaurant_responsive/3rdbkpt_restaurant_fleur.svg" alt="illustration florale">
        </div>
        <div class="pageTitle">
            <h2 class="title">Le Restaurant</h2>
        </div>
        <div class="ellipse_wrapper">
            <img class="ellipse" src="/images/restaurant/restaurant_ellipse.png" alt="ellipse décorative">
            <img class="ellipse_mobile" src="/images/restaurant_responsive/3rdbkpt_restaurant_ellipse.png" alt="ellipse décorative">
        </div>
    </section>

    <section class="restauration" id="restauration">
        <div class="left_part_1">
            <div class="title_wrapper_1">
                <h4 class="title_1">Restauration sur place ou <br /> à emporter & service livraison</h4>
            </div>
            <div class="mobile_right_part_1">
                <div class="picture_wrapper_1">
                    <img class="picture_1" src="/images/restaurant/gif_restaurant.gif" alt="Image de bols illustrant la partie restauration">
                </div>
            </div>
            <div class="texte_wrapper_1">
                <p class="texte_1">
                Nous vous accueillons dans notre <strong>restaurant</strong> situé dans la plus ancienne maison médiévale du centre historique de Cahors :<br />
                - 6 places assises en salle,<br />
                - terrasse extérieure accueillante.<br />
                <strong>Du lundi au vendredi de 11h00 à 15h00.</strong><br />
                <strong>Réservations par téléphone au 06 30 03 73 89.</strong><br />
                <br />
                <strong>Livraison</strong> par notre partenaire CallEats. Téléchargez l’application sur leur site : 
                <a href="https://cahors.calleats.com/" target="_blank"><img class="calleats" src="/images/restaurant/logo_calleats.png" alt="logo du partenaire de livraison Call Eats"></a>


                </p>
            </div>
        </div>
        <div class="right_part_1">
            <div class="picture_wrapper_1">
                <img src="/images/restaurant/gif_restaurant.gif" alt="Image de bols illustrant la partie restauration">
            </div>
        </div>
    </section>
    
    <section class="traiteur" id="traiteur">
        <div class="left_part_2">
            <div class="title_wrapper_2">
                <h4 class="title_2">Service traiteur (hors été) <br /> & commande de gâteaux</h4>
            </div>
            <div class="mobile_right_part_2">
                <div class="picture_wrapper_2">
                    <img class="picture_2" src="/images/restaurant/gif_traiteur_gateau.gif" alt="Image de gâteaux et de plats illustrant la partie pâtisseries et traiteur.">
                </div>
            </div>
            <div class="texte_wrapper_2">
                <p class="texte_2">
                SERVICE TRAITEUR<br />
                Lili BOwl peut préparer des repas <strong>jusqu’à 50 couverts</strong> sur réservation.<br />
                Pour vos repas de famille ou d’entreprise, pour  le  plaisir  d’ajouter  une  touche  végétale,  saine,  et 
                engagée à vos évènements.<br />
                <br />
                COMMANDES DE GÂTEAUX<br />
                Tous nos gâteaux sont réalisables en grands formats (de 6 à 12 parts) <strong>sur commande au moins 48h à l’avance</strong>.<br />
                Personnalisation possible sur demande selon vos goûts et vos intolérances.<br />
                Vous allez adorer nos desserts “GLO” (sans Gluten, sans Lait, sans Oeufs).<br />
                Pour toute demande particulière, contactez-nous !
                </p>
            </div>
        </div>
        <div class="right_part_2">
            <div class="picture_wrapper_2">
                <img src="/images/restaurant/gif_traiteur_gateau.gif" alt="Image de gâteaux et de plats illustrant la partie pâtisseries et traiteur.">
            </div>
        </div>
    </section>

    <section class="vaisselle" id="vaisselle">
        <div class="left_part_vaisselle">
            <div class="title_wrapper_1">
                <h4 class="title_3">Location de vaisselle</h4>
            </div>
            <div class="mobile_right_part_1">
                <div class="picture_wrapper_1">
                    <img class="picture_3" src="/images/restaurant/gif_vaisselle.gif" alt="Image illustrant la vaisselle disponible à la location.">
                </div>
            </div>
            <div class="texte_wrapper_vaisselle texte_wrapper_3">
                <p class="texte_1">
                Vous pouvez louer notre vaisselle <strong>vintage romantique</strong> pour une table chic et conviviale (vaisselle mix and match).<br />
                Contactez-nous pour connaître la formule la plus adaptée à vos besoins.<br />
                <strong>De 1 à 3€ par personne</strong>.
                </p>
            </div>
        </div>
        <div class="right_part_1">
            <div class="picture_wrapper_1">
                <img src="/images/restaurant/gif_vaisselle.gif" alt="Image illustrant la vaisselle disponible à la location.">
            </div>
        </div>
    </section>

    <section class="boutique" id="boutique">
        <div class="left_part_2">
            <div class="title_wrapper_2">
                <h4 class="title_4">Boutique</h4>
            </div>
            <div class="mobile_right_part_2">
                <div class="picture_wrapper_2">
                    <img class="picture_4" src="/images/restaurant/gif_boutique.gif" alt="Image illustrant les thés et cafés vendus au restaurant.">
                </div>
            </div>
            <div class="texte_wrapper_2">
                <p class="texte_2">
                Lili BOwl est ambassadeur des cafés Terramoka et des thés Bio Tea Queen.<br />
                Terramoka est une petite entreprise française qui propose un <strong>café 100% bio, biodégradable et éthique</strong>, en vente au restaurant,  en vrac, moulu, en grains, en capsules Nespresso compostables ou en dosettes Senséo.<br />
                Nous vendons également des <strong>thés bio</strong> de la marque toulousaine Bio Tea Queen qui sélectionne ses thés avec passion. Elle propose des thés bios de qualité délicatement parfumés et riches en saveur.<br />
                <br />
                Vous pourrez aussi repartir avec de jois articles Lili BOwL : de la vaisselle spécialement créée pour nous par notre voisine céramiste à l’atelier-boutique C’Dauré, des totes bags ou encore des germoirs.
                </p>
            </div>
        </div>
        <div class="right_part_2">
            <div class="picture_wrapper_2">
                <img src="/images/restaurant/gif_boutique.gif" alt="Images illustrant les thés et cafés vendus au restaurant.">
            </div>
        </div>
    </section>
    <div>
        <img class="photo_before_footer4" src="/images/restaurant/restaurant_photo_frise-min.jpg" alt="illustrations de plats.">
        <img class="photo_before_footer3" src="/images/restaurant_responsive/restaurant_photo_frise_mobile-min.jpg" alt="illustrations de plats.">
        <img class="photo_before_footer" src="/images/restaurant_responsive/restaurant_photo_frise_3rdbkpt-min.jpg" alt="illustrations de plats.">
        <img class="photo_before_footer2" src="/images/restaurant_responsive/restaurant_photo_frise-min.jpg" alt="illustrations de plats.">
    </div>
        <!--FOOTER-->
        @include('components.footer')
        @section('footer')
        @endsection
        <!--End FOOTER-->

    <script src="/js/newsletterFooter.js"></script>

    </body>
</html>
