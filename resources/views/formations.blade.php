<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content= "Lili BOwL | Restaurant et traiteur végétarien qui propose des formations à la cuisine végétale pour particuliers et professionnels." />
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
        <link async="true" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        

        <!--Bootstrap-->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <script src="/js/bootstrap.min.js"></script>

        <!-- CSS -->   
        <link rel="stylesheet" href="/css/navbar.css" />
        <link rel="stylesheet" href="/css/footer.css" />
        <link rel="stylesheet" href="/css/navbar_mobile.css" />
        <link rel="stylesheet" href="/css/formations_styles.css" />
        <link rel="stylesheet" href="/css/bubble.css" />

        <!--JQuery-->
        <script src="/JQuery/Jquery_min.js"></script>

        <!--script pour soulignement des items de la navbar suivant la page-->
        <script src="/js/bubble.js"></script>

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
            Le restaurant Lili BOwL s'inscrit depuis sa création dans un projet de sensibilisation globale au bien manger pour respecter votre santé et celle de la planète. Et bonne nouvelle, les belles assiettes saines, pleines de couleurs et de fraîcheur ne sont pas que pour votre restaurant cadurcien préféré !<br />
            Aujourd'hui, Lili BOwL lance ses ateliers de cuisine végétale afin que vous puissiez reproduire nos recettes chez vous, dans le confort de votre propre cuisine, pour vous, votre famille et vos invités.<br />
            Que vous soyez la reine du dhal de lentilles, le petit prince des falafels, ou simplement gourmand ou gourmande, nos ateliers sont faits pour vous !<br />
            Que vous ayez un goût particulier pour la cuisine réalisée à base de produits frais, locaux et de saison, que vous aimiez les épices du monde, que vous cueilliez de jolies fleurs comestibles ou que le "manger sain" soit tout simplement ancré profondément dans vos valeurs, il est sûr que nous avons beaucoup de mets délicieux à réaliser ensemble :-)<br />
            Nous avons hâte de vous accueillir dans <a href="#contact">notre restaurant rue Daurade</a> pour partager ensemble notre passion d'une alimentation saine, gourmande et respectueuse !</p>
    </section>
    <!-- Bubble -->
    @include('components.bubble')
        @yield('bubble')
        <!-- END Bubble -->

    <div class="programmes">
        <h5>PROGRAMMES ET RÉSERVATION</h5>
    </div>
    <p class="programmes">Faites votre choix :</p>

    <section class="menu">
        <a href="#ateliers-cuisine-particuliers"><img loading="lazy" class="lien_image lien_image1" src="/images/formations/formations_lien_atelier.png" alt="Images-liens redirigeant vers la partie de la page consacrée aux ateliers cuisine."></a>
        <a href="#formation-cuisine-vegetale-professionnels"><img loading="lazy" class="lien_image lien_image2" src="/images/formations/formations_lien_initiationpro.png" alt="Images-liens redirigeant vers la partie de la page consacrée à la cuisine végétale pour les professionnels."></a>
    </section>

    <section class="menu_mobile">
        <a href="#ateliers-cuisine-particuliers"><img loading="lazy" class="lien_image lien_image1 image_mobile" src="/images/formations_responsive/mobile_formations_lien_atelier-min.png" alt="Images-liens redirigeant vers la partie de la page consacrée aux ateliers cuisine."></a>
        <a href="#formation-cuisine-vegetale-professionnels"><img loading="lazy" class="lien_image lien_image1 image_mobile" src="/images/formations_responsive/mobile_formations_lien_initiationpro-min.png" alt="Images-liens redirigeant vers la partie de la page consacrée à la cuisine végétale pour les professionnels."></a>
    </section>

    <section class="ateliers" id="ateliers-cuisine-particuliers">
        <div class="section_header">
            <img loading="lazy" class="fleur_section" src="/images/formations/formations_fleur_sections.png" alt="Fleur décorative">
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
            <div class="ateliers_texte ateliers_texte_mobile">
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
        <img loading="lazy" class="gift" src="/images/formations/formations_cadeau.png" alt="image d'un paquet cadeau">
        <div class="gift_text">
            <h4 class="gift_title">Bons cadeaux</h4>
            <p class="gift_text">
                Vous êtes de nature généreuse mais vous ne savez pas quoi offrir à une amie qui déchire, un parent génial, une voisine trop cool ou un collègue hyper sympa ??<br />
                Nous vous proposons des BONS CADEAUX POUR NOS ATELIERS CUISINE, afin de faire découvrir les délices de la nouvelle cuisine végétale, vivante, tendance et sans gluten.
            </p>
        </div>
    </section>

    <section class="initiation" id="formation-cuisine-vegetale-professionnels">
        <div class="initiation_wrapper">
            <h3 class="initiation_title">Programme d'initiation à la cuisine végétale pour les professionnels</h3>
            <p class="initiation_texte">
                Les habitudes alimentaires évoluent. De plus en plus de clients ou de convives souhaitent mettre plus de <strong>végétal</strong> dans leur assiette. Une clientèle allergique, intolérante ou simplement tournée vers une alimentation plus <strong>saine</strong>, plus <strong>écolo</strong>, plus <strong>vivante</strong>.<br />
                <br />
                Vous êtes à court d'idées face à cette nouvelle demande de restauration. Ces nouveaux besoins sont souvent loin de votre formation en gastronomie traditionnelle et carnée.<br />
                <br />
                Nous vous proposons une session de formation sur 2 jours pour vous transmettre les bases de l'<strong>alimentation végétarienne et végétale</strong>, <strong>saine</strong> et <strong>respectueuse de l'environnement</strong>. Nous préparerons ensemble des recettes de base et des recettes tendance pour vous aider à mettre du peps dans vos <strong>assiettes végétariennes</strong> et ainsi apporter à votre carte cette <strong>touche végétale</strong>, moderne et <strong>engagée</strong>.
            <!--Vous êtes <strong>professionnel</strong> ou <strong>en reconversion</strong> et souhaitez satisfaire une nouvelle clientèle plus sensible au contenu de son assiette ?<br /> 
            Une clientèle qui est intolérante ou allergique à certains aliments (gluten, laitages, œufs), qui souhaite se tourner vers les protéines végétales ou encore qui souhaite manger plus écologique, sain, énergétique et léger ?<br />
            Pour vous initier aux techniques de découpe, de cuisson, d’assaisonnement et de nutrition, et afin de réaliser des préparations culinaires végétales sans allergènes, nous mettons à votre disposition une cuisine biologique et saine.<br />
            Cela vous permettra de :<br />
            &bull; mieux connaître le produit végétal afin de mettre en œuvre les techniques appropriées de cuisson, d’association et de sublimation du produit,<br />
            &bull; proposer une cuisine tendance répondant à la demande de consommation actuelle.<br />-->
            </p>
            <p CLASS="formation">
                BLOC DE COMPÉTENCES CUISINE VÉGÉTALE
            </p>
            <p class="details">
            <strong>Durée</strong> :<br /> 
            2 jours :<br />
            &bull; 2h de théorie<br />
            &bull; 12h de pratique<br />
            <br />
            <strong>Pré-requis</strong> : expérience dans le domaine de la cuisine et connaissances culinaires<br />
            <br />
            <strong>Lieu</strong> : à définir selon le besoin<br />
            <br />
            <strong>Objectifs de la formation</strong> :<br />
            &bull; Comprendre les modes alimentaires sans viande,<br />
            &bull; Connaitre l'impact de cette alimentation sur notre santé et sur l'environnement,<br />
            &bull; Apprendre à cuisiner végétal,<br />
            &bull; Valoriser le contenu des assiettes pour favoriser une alimentation saine, sûre et durable pour tous.<br />
            <br />
            <strong>Programme</strong> :<br />
            &bull; Prendre en compte les différents régimes alimentaires (végétarisme, véganisme, crudivore, sans gluten),<br />
            &bull; Comprendre les bases nutritionnelles de ce type d'alimentation afin de pouvoir facilement créer des menus équilibrés,<br />
            &bull; Identifier l'impact de ces modes alimentaires sur la santé et sur l'environnement,<br />
            &bull; Appréhender quelques recettes végétariennes ou végan, selon les saisons pour des menus appétissants et économiques,<br />
            &bull; Être en mesure de modifier un menu standard en fonction de ces régimes alimentaires,<br />
            &bull; Acquérir le réflexe des produits locaux, bio et de saison pour favoriser une alimentation de qualité,<br />
            &bull; Apprendre à mettre en valeur le contenu des assiettes pour sublimer les préparations et les rendre encore plus appétissantes.<br />
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
    <script src="/js/newsletterFooter.js"></script>
    <script src="/js/nav.js"></script>
    <noscript>JavaScript ne semble pas être activé sur votre navigateur !</noscript>

</body>
</html>

