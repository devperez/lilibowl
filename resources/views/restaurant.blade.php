<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
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

        <title>Lili BOwL | Le restaurant</title>
    </head>
    <body>
    <!--navbar-->
    @include('components.navbar')
        @yield('navbar')
    <!-- end navbar -->
    
    <section class="topPage">
        <div class="fleur">
            <img class="fleur_image" src="/images/fleur_titre.svg" alt="illustration florale">
        </div>
        <div class="pageTitle">
            <h2 class="title">Le Restaurant</h2>
        </div>
        <div class="ellipse_wrapper">
            <img class="ellipse" src="/images/Ellipse_restaurant.png" alt="ellipse décorative">
        </div>
    </section>

    <section class="restauration" id="restauration">
        <div class="left_part_1">
            <div class="title_wrapper_1">
                <h4 class="title_1">Restauration sur place ou <br /> à emporter & service livraison</h4>
            </div>
            <div class="mobile_right_part_1">
                <div class="picture_wrapper_1">
                    <img class="picture_1" src="/images/placeholder.png" alt="">
                </div>
            </div>
            <div class="texte_wrapper_1">
                <p class="texte_1">
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
        <div class="right_part_1">
            <div class="picture_wrapper_1">
                <img src="/images/placeholder.png" alt="">
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
                    <img class="picture_2" src="/images/placeholder.png" alt="">
                </div>
            </div>
            <div class="texte_wrapper_2">
                <p class="texte_2">
                SERVICE TRAITEUR<br />
                Lili BOwl peut préparer des repas <strong>jusqu’à 50 couverts</strong> sur réservation. 
                Pour vos repas de famille ou d’entreprise, n’hésitez pas à ajouter une touche végétale, engagée et saine.<br />

                COMMANDES DE GÂTEAUX<br /> 
                Tous nos gâteaux sont réalisables en grands formats (de 6 à 8 parts) <strong>sur commande au moins 48h en avance</strong>.
                Personnalisation possible sur demande : décoration d’anniversaire, parfums, etc.<br />
                Pour toute demande particulière, contactez-nous !
                </p>
            </div>
        </div>
        <div class="right_part_2">
            <div class="picture_wrapper_2">
                <img src="/images/placeholder.png" alt="">
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
                    <img class="picture_3" src="/images/placeholder.png" alt="">
                </div>
            </div>
            <div class="texte_wrapper_vaisselle texte_wrapper_3">
                <p class="texte_1">
                    Vous pouvez louer notre vaisselle vintage romantique pour une table chic et conviviale (vaisselle mix and match <strong>pour 20 convives</strong>).
                </p>
            </div>
        </div>
        <div class="right_part_1">
            <div class="picture_wrapper_1">
                <img src="/images/placeholder.png" alt="">
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
                    <img class="picture_4" src="/images/placeholder.png" alt="">
                </div>
            </div>
            <div class="texte_wrapper_2">
                <p class="texte_2">
                Lili BOwl est ambassadeur des <strong>cafés Terramoka</strong> et
                des <strong>thés Bio Tea Queen</strong>.<br />
                <br />
                Terramoka est une petite entreprise française qui propose un café 100% bio,
                biodégradable et éthique, en vente au restaurant,  en vrac, moulu, en grains,
                en capsules Nespresso compostables ou en dosettes Senséo.<br />
                <br />
                Nous vendons également des thés bio de la marque toulousaine "Bio Tea Queen"
                qui sélectionne ses thés avec passion. Elle propose des thés bios de qualité
                délicatement parfumés et riches en saveur.
                </p>
            </div>
        </div>
        <div class="right_part_2">
            <div class="picture_wrapper_2">
                <img src="/images/placeholder.png" alt="">
            </div>
        </div>
    </section>
    <div>
        <img class="photo_before_footer" src="/images/photos_restau_mobile.png" alt="">
        <img class="photo_before_footer2" src="/images/frise_photos.png" alt="">
    </div>
        <!--FOOTER-->
        @include('components.footer')
        @section('footer')
        @endsection
        <!--End FOOTER-->

    <script src="/js/newsletterFooter.js"></script>

    </body>
</html>
