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
    <link rel="stylesheet" href="/css/menu_styles.css" />
    <link rel="stylesheet" href="/css/footer.css" />
    <link rel="stylesheet" href="/css/navbar_mobile.css" />

    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <!--script pour soulignement des items de la navbar suivant la page-->
    <script src="/js/nav.js"></script>

    <title>Lili BOwL | Le Menu</title>
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
            <img class="fleur" src="/images/fleur.png" alt="Fleur décorative">
        </div>
        <div class="display_wrapper">
            <div class="menu">
                @foreach ($menu as $item)
                <img class="menu_mobile" src="{{ asset('storage/menus/'.$item) }}" alt="">
                @endforeach
            </div>
            <div class="menu">
                @foreach ($boisson as $drink)
                <img class="menu_mobile" src="{{ asset('storage/boissons/'.$drink) }}" alt="">
                @endforeach
            </div>
            <div class="menu">
                @foreach ($dessert as $objet)
                <img class="menu_mobile" src="{{ asset('storage/desserts/'.$objet) }}" alt="">
                @endforeach
            </div>
        </div>
        <div>
            <img class="photo" src="/images/photo_menu.png" alt="">
            <img class="photo2" src="/images/frise_photos_menu_960.png" alt="">
            <img class="photo3" src="/images/mobile_menu_300.jpg" alt="">
        </div>
    </div>
    <div class="logos_wrapper">
        <img class="logos" src="/images/green_food.jpg" alt="">
        <img class="logos" src="/images/vegorest.png" alt="">
        <img class="logos" src="/images/act4nature.png" alt="">
        <img class="logos" src="/images/fait_maison.png" alt="">
    </div>
    

    <!-- FOOTER -->
        @include('components.footer')
        @yield('footer')
    <!--End FOOTER-->

    <div id="id_view_image_body"></div>
    <div id="id_view_image"></div>
    <script src="/js/newsletterFooter.js"></script>

    <script>
        $("img").not(".no-fullscreen").click(function()
    {
        $("#id_view_image").html("<img src='"+$(this).attr('src')+"' class='view_image_img'/>");
        $("#id_view_image_body").addClass("view_image_body");
        $("#id_view_image").addClass("view_image");
    });

        $("#id_view_image").click(function()
    {
        $("#id_view_image").html("");
        $("#id_view_image_body").removeClass("view_image_body");
        $("#id_view_image").removeClass("view_image");
    });

    </script>
</body>
</html>