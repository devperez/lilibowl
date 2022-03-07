<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lili BOwL | Projets de sensibilisation</title>
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
        <link rel="stylesheet" href="/css/sensibilisation_styles.css">

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
        <section class="projets">
            <div class="inner_wrapper">
                <div class="fleur_titre">
                    <div class="titre">
                    <img class="fleur" src="/images/sensibilisation/projets_fleur.png" alt="Fleur décorative">
                        <h2>Projets de Sensibilisation</h2>
                        <div class="sous-titre">
                            <h5>Les projets de sensibilisation de Lili BOwL s'animent pour vous faire découvrir la cuisine santé et éco-responsable.</h5>
                        </div>
                    </div>
                </div>
                <img class="ellipse1" src="/images/sensibilisation/projets_ellipse1.png" alt="Ellipse décorative">

            </div>
            <p class="texte_projets">
                Se nourrir pour être <strong>en bonne santé</strong> tout en <strong>respectant la planète</strong> est une des préoccupations majeures aujourd’hui. Les recommandations alimentaires françaises récentes <a href="https://solidarites-sante.gouv.fr/prevention-en-sante/preserver-sa-sante/le-programme-national-nutrition-sante/article/programme-national-nutrition-sante-pnns-professionnels" target="_blank">(PNNS ou programme national nutrition santé</a>) préconisent <strong>une alimentation plus végétale</strong> avec des <strong>aliments biologiques et peu transformés</strong>.<br />
                Cependant, les connaissances en nutrition sont diverses et compliquées, influencées par la tradition, le marketing alimentaire, les croyances et les alternatives foisonnantes toutes aussi séduisantes les unes que les autres. Ainsi, ces nouvelles recommandations constituent une évolution importante car pour la première fois, on affiche la volonté de « tenir compte des préoccupations environnementales et de développement durable ». En effet, nous pensons qu’il est impossible d’avoir un raisonnement sur la santé, le respect du corps, du vivant, de l’autre et du naturel sans réfléchir plus largement à nos modes de consommation.
            </p>
            <img class="ellipse2" src="/images/sensibilisation/projets_ellipse2.png" alt="Ellipse décorative">
        </section>

        <section class="tchin">
            <div class="title_wrapper">
                <h4 class="tchin_title">Projet TCHIN, d'octobre 2021 à avril 2022</h4>
            </div>
            <div class="wrapper">    
                <div class="texte_tchin">
                    <p>
                    “Tchin !” est l’acronyme formé des initiales des mots Table, Convivialité, Harmonie, Innovation, et Nutrition.<br />
                    <br />
                    Nous avons imaginé ce projet pour les résidents de l’EHPAD de Cajarc.<br />
                    Nous souhaitions partager l’alimentation sous le prisme du plaisir, de la diversité, de la découverte, en faisant revivre des perceptions et des sensations culinaires oubliées. Partir du connu, du brut et innover, essayer, enrichir dans la convivialité, la couleur et le partage, toujours avec le souci de préserver la santé, la nature et le lien qui doit exister entre les différents acteurs.<br />
                    <br />
                    Pour ce projet, nous avons imaginé différentes actions sans perdre de vue l’objectif premier qui consiste à lutter contre la perte d’autonomie et la dénutrition.<br />
                    <br />
                    Lorsqu’on avance en âge, la sensation de faim tend à diminuer et manger devient souvent un passage obligé. Redonner l’envie de manger aux personnes âgées est donc essentiel.<br />
                    Le repas est en effet un temps structurant du quotidien des seniors et un véritable moment de sociabilité. La conservation d’un lien social et du plaisir de manger permet de lutter contre la dénutrition et de ce fait, limite la perte d’autonomie des personnes âgées.<br />
                    <br />
                    Le projet « Tchin » souhaite sensibiliser les résidents, le personnel de l’Ehpad, et les familles aux bienfaits d’une alimentation vivante, durable, colorée, biologique de préférence, locale et partagée !<br />
                    <br />
                    A l’occasion de ce projet, en partenariat avec le restaurant <a href="http://www.alleedesvignes.com/" target="_blank">L'Allée des Vignes</a> (Cajarc), nous avons vécu des instants privilégiés avec les
                    résidents au travers de ces animations et ateliers qui leur ont permis de se reconnecter à des saveurs, des odeurs et des textures, travailler la mémoire olfactive et sensorielle et redécouvrir le plaisir de cuisiner ensemble. Chaque animation a permis de mettre l’accent sur l’alimentation vivante, les saveurs intenses des produits frais, bio, locaux, au naturel, ou agrémentés sans cuisson pour en garder tous les principes actifs et faire le plein de vitalité !
                    </p>
                </div>
                <div>
                    <img class="tchin_1" src="/images/sensibilisation/projet_tchin_1.png" alt="">
                </div>
            </div>
            </section>
