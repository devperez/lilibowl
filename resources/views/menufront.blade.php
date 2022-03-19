<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    <!--Icone-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <!-- CSS -->        
    <link rel="stylesheet" href="/css/navbar.css" />
    <link rel="stylesheet" href="/css/menu_styles.css" />
    <link rel="stylesheet" href="/css/footer.css" />
    <link rel="stylesheet" href="/css/navbar_mobile.css" />

    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
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
            <div class="menu">
                @foreach ($menu as $item)
                <img class="menu_mobile" src="{{ asset('storage/menus/'.$item) }}" alt="Le menu principal du restaurant.">
                @endforeach
            </div>
            <div class="menu">
                @foreach ($boisson as $drink)
                <img class="menu_mobile" src="{{ asset('storage/boissons/'.$drink) }}" alt="Les boissons proposées par le restaurant.">
                @endforeach
            </div>
            <div class="menu">
                @foreach ($dessert as $objet)
                <img class="menu_mobile" src="{{ asset('storage/desserts/'.$objet) }}" alt="Les desserts proposés par le restaurant.">
                @endforeach
            </div>
        </div>
        <div>
            <img class="photo" src="/images/menu/menu_photo_frise-min.jpg" alt="Illustrations de plats et de desserts">
            <img class="photo2" src="/images/menu_responsive/menu_photo_frise_3rdbkpt-min.jpg" alt="Illustrations de plats et de desserts">
            <img class="photo3" src="/images/menu_responsive/menu_photo_frise_mobile-min.jpg" alt="Illustrations de plats et de desserts">
            <img class="photo4" src="/images/menu_responsive/menu_photo_frise-min.jpg" alt="Illustrations de plats et de desserts">
        </div>
    </div>
    <div class="logos_wrapper">
        <a href="https://www.greenfood-label.com/listings/lili-bowl/" target="_blank"><img class="logos" src="/images/menu/logo_green_food.png" alt="logo du label Green Food."></a>
        <a href="https://vegoresto.fr/cahors/lili-bowl/" target="_blank"><img class="logos" src="/images/menu/logo_vegoresto.png" alt="logo de Vegoresto."></a>
        <a href="https://www.ofb.gouv.fr/actualites/grands-groupes-pme-tpe-elles-sont-plus-de-100-entreprises-avoir-fait-le-choix-de" target="_blank"><img class="logos" src="/images/menu/logo_act4nature.png" alt="logo de Act4nature."></a>
        <a href="https://www.economie.gouv.fr/entreprises/fait-maison" target="_blank"><img class="logos" src="/images/menu/logo_fait_maison.png" alt="logo de Fait Maison."></a>
    </div>
    

    <!-- FOOTER -->
        @include('components.footer')
        @yield('footer')
    <!--End FOOTER-->

    <div id="id_view_image_body"></div>
    <div id="id_view_image"></div>
    <script src="/js/newsletterFooter.js"></script>
    <script src="/js/fullscreen.js"></script>

</body>
</html>