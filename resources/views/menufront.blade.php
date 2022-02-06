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

    <div class="header_wrapper">
        <div class="title">
            <h2>Le Menu</h2>
        </div>
        <div>
            <img class="fleur" src="/images/fleur.png" alt="Fleur décorative">
        </div>
    </div>
    <div class="left">
        <img class="ellipse1" src="/images/Ellipse_menu.png" alt="Ellipse décorative">   
        <img class="ellipse2" src="/images/Ellipse_menu.png" alt="Ellipse décorative">   
        <img class="ellipse3" src="/images/Ellipse_menu.png" alt="Ellipse décorative">   
        <img class="ellipse" src="/images/Ellipse_menu.png" alt="Ellipse décorative">   
    </div>
    <div class="right">
        <img class="ellipse5" src="/images/Ellipse2_menu.png" alt="Ellipse décorative">   
        <img class="ellipse6" src="/images/Ellipse2_menu.png" alt="Ellipse décorative">   
        <img class="ellipse7" src="/images/Ellipse2_menu.png" alt="Ellipse décorative">
    </div>
    <div class="display_wrapper">
        <div class="menu">
            @foreach ($menu as $item)
            <img src="{{ asset('storage/menus/'.$item) }}" alt="">
            @endforeach
        </div>
        <div class="menu">
            @foreach ($boisson as $drink)
            <img src="{{ asset('storage/boissons/'.$drink) }}" alt="">
            @endforeach
        </div>
        <div class="menu">
            @foreach ($dessert as $objet)
            <img src="{{ asset('storage/desserts/'.$objet) }}" alt="">
            @endforeach
        </div>
    </div>
    @include('components.footer')
    @yield('footer')
</body>
</html>