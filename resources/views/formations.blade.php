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
        <link rel="stylesheet" href="/css/navbar_mobile.css" />
        <link rel="stylesheet" href="/css/formations_styles.css" />

        <!--JQuery-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        
        <!--script pour soulignement des items de la navbar suivant la page-->
        <script src="/js/nav.js"></script>

        <title>Lili BOwL | Formations à la cuisine végétale</title>
    </head>
    <body>

    <!--navbar-->
    @include('components.navbar')
        @yield('navbar')
    <!-- end navbar -->

    <section class="formations">
        <div class="inner_wrapper">
            <img class="ellipse" src="/images/formations/formations_ellipse.png" alt="Ellipse décorative">
            <img class="fleur" src="/images/formations/formations_fleur_titre.png" alt="Fleur décorative">
            <div class="fleur_titre">
                <div class="top_titre">
                    <h2>Formation à la cuisine végétale</h2>
                    <div class="sous-titre">
                        <h5>Lili BOwL propose aussi des cours de cuisine !</h5>
                    </div>
                </div>
            </div>
        </div>
        <p class="texte_formations">
            Plus qu'une simple démonstration et plus qu'un apprentissage de recettes, nos cours vous donneront des clefs pour cuisiner végétal chez vous, en vous faisant plaisir et en vous régalant.<br />
            Que ce soit la curiosité qui vous amène ou que vous ayez entamé une démarche pour mettre plus de végétal dans vos assiettes, que vous soyez déjà un cordon bleu ou que vous débutiez, nous avons hâte de vous accueillir dans notre restaurant rue Daurade pour partager nos connaissances avec vous !<br />
            <br />
            En tant que formateurs, nous mettons la convivialité, la pratique et le partage au cœur de nos ateliers.
        </p>
    </section>

    <div class="programmes">
        <h5>PROGRAMMES ET RÉSERVATION</h5>
    </div>

    <section class="menu">
        <a href="#"><img class="lien_image lien_image1" src="/images/formations/formations_lien_atelier.png" alt=""></a>
        <a href="#"><img class="lien_image lien_image2" src="/images/formations/formations_lien_initiationpro.png" alt=""></a>
    </section>






<script>
    $(".lien_image1").hover(function(){
        $(".lien_image1").attr('src','/images/formations/formations_lien_atelier_hover.png');
    },function(){
        $(".lien_image1").attr("src", "/images/formations/formations_lien_atelier.png");
    });

    $(".lien_image2").hover(function(){
        $(".lien_image2").attr('src','/images/formations/formations_lien_initiationpro_hover.png');
    },function(){
        $(".lien_image2").attr("src", "/images/formations/formations_lien_initiationpro.png");
    });
</script>
