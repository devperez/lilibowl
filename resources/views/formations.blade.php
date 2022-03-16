<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content= "Lili BOwL | Restaurant et traiteur végétarien qui propose des formations à la cuisine végétale pour particuliers et professionnels." />
        <meta name="robots" content= "index, follow">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://???????">
        <meta property="og:title" content="Restaurant et traiteur végétarien à Cahors | Lili BOwL">
        <meta property="og:description" content="Lili BOwL | Restaurant/traiteur végétarien éco-responsable proposant une cuisine végétale vitaminée et colorée">
        <meta property="og:image" content="/images/image_social_media_tags.jpg">


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
        <link rel="stylesheet" href="/css/navbar_mobile.css" />
        <link rel="stylesheet" href="/css/formations_styles.css" />

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

    <section class="formations">
        <div class="inner_wrapper">
            <img class="ellipse" src="/images/formations/formations_ellipse.png" alt="Ellipse décorative">
            <img class="ellipse_mobile" src="/images/formations_responsive/mobile_formations_ellipse.png" alt="Ellipse décorative">
            <img class="fleur" src="/images/formations/formations_fleur_titre.png" alt="Fleur décorative">
            <div class="top_titre">
                <h2>Formation à la cuisine végétale</h2>
                <div class="sous-titre">
                    <h5>Lili BOwL propose aussi des cours de cuisine !</h5>
                </div>
            </div>
        </div>
        <p class="texte_formations">
            Plus qu'une simple démonstration et plus qu'un apprentissage de recettes, nos cours vous donneront des clefs pour <strong>cuisiner végétal</strong> chez vous, en vous faisant plaisir et en vous régalant.<br />
            Que ce soit la curiosité qui vous amène ou que vous ayez entamé une démarche pour mettre plus de végétal dans vos assiettes, que vous soyez déjà un cordon bleu ou que vous débutiez, nous avons hâte de vous accueillir dans <a href="#contact">notre restaurant rue Daurade</a> pour partager nos connaissances avec vous !<br />
            <br />
            En tant que formateurs, nous mettons la convivialité, la pratique et le partage au cœur de nos ateliers.
        </p>
    </section>

    <div class="programmes">
        <h5>PROGRAMMES ET RÉSERVATION</h5>
    </div>

    <section class="menu">
        <a href="#ateliers"><img class="lien_image lien_image1" src="/images/formations/formations_lien_atelier.png" alt="Images-liens redirigeant vers la partie de la page consacrée aux ateliers cuisine."></a>
        <a href="#initiation"><img class="lien_image lien_image2" src="/images/formations/formations_lien_initiationpro.png" alt="Images-liens redirigeant vers la partie de la page consacrée à la cuisine végétale pour les professionnels."></a>
    </section>

    <section class="menu_mobile">
        <a href="#ateliers"><img class="lien_image lien_image1 image_mobile" src="/images/formations_responsive/mobile_formations_lien_atelier-min.png" alt="Images-liens redirigeant vers la partie de la page consacrée aux ateliers cuisine."></a>
        <a href="#ateliers"><img class="lien_image lien_image1 image_mobile" src="/images/formations_responsive/mobile_formations_lien_initiationpro-min.png" alt="Images-liens redirigeant vers la partie de la page consacrée à la cuisine végétale pour les professionnels."></a>
    </section>

    <section class="ateliers" id="ateliers">
        <div class="section_header">
            <img class="fleur_section" src="/images/formations/formations_fleur_sections.png" alt="Fleur décorative">
            <div class="header_wrapper">
                <h3 class="title_section">Ateliers de cuisine pour les particuliers</h3>
                <p class="text_header">
                Vous souhaitez en apprendre davantage sur les sensibilités alimentaires, différentes astuces et délices végétaux ? Nos ateliers sont conviviaux et ludiques pour libérer votre créativité végétale !
                </p>
            </div>
        </div>
        <div class="ateliers_wrapper">
            <div>
                <h4 class="ateliers_titre">Ateliers de cuisine pour adultes</h4>
            </div>
            <div class="ateliers_texte">
                Ces ateliers peuvent durer <strong>entre 1 heure et 6 heures</strong> selon l’apprentissage souhaité :<br />
                &bull; 1 recette,<br />
                &bull; 1 repas,<br />
                &bull; 1 technique,<br />
                &bull; des bases culinaires sans allergène,<br />
                &bull; cuisine végétarienne équilibrée,<br />
                &bull; la cuisine végétale équilibrée,<br />
                &bull; la cuisine vivante.<br />
                <br />
                Atelier pour <strong>5 à 6 personnes</strong> au 12 rue Daurade ou autre lieu si l’atelier est réalisé en partenariat avec une autre structure.<br />
                <strong>Prix : nous consulter.</strong>
            </div>
        </div>
        <div class="ateliers_wrapper">
            <div>
                <h4 class="ateliers_titre">Ateliers de cuisine pour enfants</h4>
            </div>
            <div class="ateliers_texte">
            Apprenez à réaliser des truffes au chocolat gourmandes, des sablés sans gluten, des gâteaux simples pour un anniversaire sans allergène, le tout 100% végétal !<br />
            <br />
            Atelier d’<strong>une heure pour 5 enfants maximum</strong> (dès 6 ans) au 12 rue Daurade.<br />
            <strong>Prix : 30 euros.</strong>
            </div>
        </div>
        <div class="ateliers_wrapper">
            <div>
                <h4 class="ateliers_titre2">Ateliers desserts pour les fêtes ou un évènement particulier</h4>
            </div>
            <div class="ateliers_texte">
                Un cadeau à ne pas manquer pour réaliser des desserts de fêtes sans allergènes et avec moins de sucre. Pour une cuisine végétale, saine et gourmande à tous les moments clés de l’année.<br />
                <br />
                Atelier de <strong>4 heures, pour 6 personnes maximum</strong>, au 12 rue Daurade.<br />
                <strong>Prix : 75 euros.</strong>
            </div>
        </div>
        <div class="ateliers_wrapper">
            <div class="conclusion">
            Les dates de nos prochains cours seront communiquées<br />
            sur notre page <a href="https://www.facebook.com/Lilibowl.cahors" target="_blank">Facebook</a>, notre compte <a href="https://www.instagram.com/lili_bowl/" target="_blank">Instagram</a><br />
            et via notre <a href="#newsletter">newsletter !</a><br />
            Réservation au 06 30 03 73 89.
            </div>
        </div>
    </section>

    <section class="cadeau">
        <img class="gift" src="/images/formations/formations_cadeau.png" alt="image d'un paquet cadeau">
        <div class="gift_text">
            <h4 class="gift_title">Bons cadeaux</h4>
            <p class="gift_text">
            Que ce soit pour offrir à quelqu'un d'autre ou pour vous-mêmes, vous pouvez désormais acheter des bons pour nos cours de cuisine & de pâtisserie dans notre restaurant. 
            </p>
        </div>
    </section>

    <section class="initiation" id="initiation">
        <div class="initiation_wrapper">
            <h3 class="initiation_title">Programme d'initiation à la cuisine végétale pour les professionnels</h3>
            <p class="initiation_texte">
            Vous êtes <strong>professionnel</strong> ou <strong>en reconversion</strong> et souhaitez satisfaire une nouvelle clientèle plus sensible au contenu de son assiette ?<br /> 
            Une clientèle qui est intolérante ou allergique à certains aliments (gluten, laitages, œufs), qui souhaite se tourner vers les protéines végétales ou encore qui souhaite manger plus écologique, sain, énergétique et léger ?<br />
            Pour vous initier aux techniques de découpe, de cuisson, d’assaisonnement et de nutrition, et afin de réaliser des préparations culinaires végétales sans allergènes, nous mettons à votre disposition une cuisine biologique et saine.<br />
            Cela vous permettra de :<br />
            &bull; mieux connaître le produit végétal afin de mettre en œuvre les techniques appropriées de cuisson, d’association et de sublimation du produit,<br />
            &bull; proposer une cuisine tendance répondant à la demande de consommation actuelle.<br />
            </p>
            <p CLASS="formation">
                BLOC DE COMPÉTENCES CUISINE VÉGÉTALE - FORMATION ACCÉLÉRÉE
            </p>
            <p class="details">
            <strong>Durée</strong> :<br /> 
            2 jours sur 2 semaines en présentiel :<br />
            &bull; 2h de théorie<br />
            &bull; 12h de pratique<br />
            <br />
            <strong>Pré-requis</strong> : expérience dans le domaine de la cuisine et connaissances culinaires<br />
            <br />
            <strong>Lieu</strong> : à définir selon le besoin<br />
            <br />
            <strong>Objectifs</strong> :<br />
            &bull; Réaliser en autonomie des préparations culinaires végétales et sans allergènes dans le respect des consignes d’hygiène et de sécurité, dans un contexte professionnel et en fonction des interdits alimentaires énoncés.<br />
            &bull; Connaitre les principales techniques de cuissons, de découpe et d’assaisonnement adaptés à la cuisine santé et les mettre en oeuvre pour réaliser un menu complet équilibré et de saison de l’entrée au dessert.<br />
            <br />
            <strong>Programme</strong> :<br />
            Théorie - découpe, préparation, cuissons saines, dressage, gastronomie végétale et épices - cuisine du monde - pâtisserie sans gluten – crusine (cuisine crue) - équilibrage alimentaire - plantes sauvages - mise en pratique et organisation en cuisine.<br />
            <br />
            <strong>Méthodes pédagogiques</strong> :<br />
            Apports théoriques.<br />
            Ateliers pratiques.<br />
            Alternance de travail individuel et en groupe.<br />
            Un support de cours sera remis à chaque participant comportant des fiches recettes et des apports théoriques sur la cuisine végétale saine, gourmande, respectueuse de notre microbiote et de l’environnement.<br />
            <br />
            <strong>Méthode d’évaluation et de suivi</strong> :<br />
            Auto-Evaluation individuelle à l’entrée et à la sortie.<br />
            Questionnaires d'évaluation journaliers pour mesurer le niveau des connaissances acquises.<br />
            Mise en situation finale avec évaluation du degré de maîtrise des savoirs et des techniques apprises.<br />
            Personnalisation de la formation (adaptation du contenu, du niveau des recettes et des interdits alimentaires).<br />
            </p>
            <p class="conclusion">
                Pour toute demande (programmes de formations,<br /> 
                dates des prochaines sessions, inscriptions...),<br />
                merci de nous contacter au 06 30 03 73 89.
            </p>
        </div>
        <img class="fleur_initiation" src="/images/formations/formations_fleur_sections.png" alt="Fleur décorative">
    </section>

    <!--footer-->
    @include('components.footer')
        @yield('footer')
    <!-- end footer -->

    <!--script pour la modif des images lors du hover -->
    <script src="/js/hover.js"></script>
</body>
</html>

