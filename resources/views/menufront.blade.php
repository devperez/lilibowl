<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content= "Lili BOwL, restaurant végétarien éco-responsable proposant une cuisine végétale vitaminée et colorée : consultez le menu !" />
    <meta name="robots" content= "index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://???????">
    <meta property="og:title" content="Restaurant et traiteur végétarien à Cahors | Lili BOwL">
    <meta property="og:description" content="Lili BOwL | Restaurant/traiteur végétarien éco-responsable proposant une cuisine végétale vitaminée et colorée">
    <meta property="og:image" content="/images/image_social_media_tag_menu_Fbk-min.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content=" https://???????">
    <meta property="twitter:title" content="Restaurant et traiteur végétarien à Cahors | Lili BOwL">
    <meta property="twitter:description" content="Lili BOwL | Restaurant/traiteur végétarien éco-responsable proposant une cuisine végétale vitaminée et colorée">
    <meta property="twitter:image" content="adresse image">

    <!--FONT-->
    <link async="true" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    <!--Icone-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>

    <!-- CSS -->        
    <link rel="stylesheet" href="/css/navbar.css" />
    <link rel="stylesheet" href="/css/menu_styles.css" />
    <link rel="stylesheet" href="/css/footer.css" />
    <link rel="stylesheet" href="/css/navbar_mobile.css" />

    <!--JQuery-->
    <script src="/JQuery/Jquery_min.js"></script>
    
    <!--script pour soulignement des items de la navbar suivant la page-->
    <script src="/js/nav.js"></script>

    <title>Restaurant et traiteur végétarien à Cahors | Lili BOwL</title>
</head>
<body>
    <!--NAVBAR-->
    @include('components.navbar')
    @yield('navbar')
    <!--END NAVBAR-->
    
    <div class="background">
        <div class="header_wrapper">
            <div class="title">
                <h2 class="title_text">Le Menu</h2>
            </div>
            <img class="fleur" src="/images/menu/menu_fleur.png" alt="Fleur décorative">
            <img class="fleur_mobile" src="images/menu_responsive/3rdbkpt_menu_fleur.svg" alt="Fleur décorative">
        </div>
        <div class="display_wrapper">
            <div class="menu menu1">
                @foreach ($menu as $item)
                <img class="menu_mobile" src="{{ asset('storage/menus/'.$item) }}" alt="Le menu principal du restaurant.">
                @endforeach
            </div>
            <!-- <div class="menu">
                @foreach ($boisson as $drink)
                <img loading="lazy" class="menu_mobile" src="{{ asset('storage/boissons/'.$drink) }}" alt="Les boissons proposées par le restaurant.">
                @endforeach
            </div> -->
            <div class="logos_wrapper">
                <a href="https://www.greenfood-label.com/listings/lili-bowl/" target="_blank"><img loading="lazy" class="logos" src="/images/menu/logo_green_food.png" alt="logo du label Green Food."></a>
                <a href="https://vegoresto.fr/cahors/lili-bowl/" target="_blank"><img loading="lazy" class="logos" src="/images/menu/logo_vegoresto.png" alt="logo de Vegoresto."></a>
                <a href="https://www.ofb.gouv.fr/actualites/grands-groupes-pme-tpe-elles-sont-plus-de-100-entreprises-avoir-fait-le-choix-de" target="_blank"><img loading="lazy" class="logos" src="/images/menu/logo_act4nature.png" alt="logo de Act4nature."></a>
                <a href="https://www.economie.gouv.fr/entreprises/fait-maison" target="_blank"><img loading="lazy" class="logos" src="/images/menu/logo_fait_maison.png" alt="logo de Fait Maison."></a>
            </div>
            <div class="menu menu2">
                @foreach ($dessert as $objet)
                <img loading="lazy" class="menu_mobile" src="{{ asset('storage/desserts/'.$objet) }}" alt="Les desserts proposés par le restaurant.">
                @endforeach
            </div>
        </div>
        <div>
            <img loading="lazy" class="photo" src="/images/menu/menu_photo_frise-min.jpg" alt="Illustrations de plats et de desserts">
            <img loading="lazy" class="photo2" src="/images/menu_responsive/menu_photo_frise_3rdbkpt-min.jpg" alt="Illustrations de plats et de desserts">
            <img loading="lazy" class="photo3" src="/images/menu_responsive/menu_photo_frise_mobile-min.jpg" alt="Illustrations de plats et de desserts">
            <img loading="lazy" class="photo4" src="/images/menu_responsive/menu_photo_frise-min.jpg" alt="Illustrations de plats et de desserts">
        </div>
    </div>
    
    

    <!-- FOOTER -->
        @include('components.footer')
        @yield('footer')
    <!--End FOOTER-->

    <div id="id_view_image_body"></div>
    <div id="id_view_image"></div>
    <script src="/js/newsletterFooter.js"></script>
    <script src="/js/fullscreen.js"></script>
    <noscript>JavaScript ne semble pas être activé sur votre navigateur !</noscript>

</body>
</html>