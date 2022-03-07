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

    </head>
    <body>
        
        <!--navbar-->
        @include('components.navbar')
            @yield('navbar')
        <!-- end navbar -->

        <section class="projets">
            <div class="inner_wrapper">
                <div class="fleur_titre">
                    <div class="top_titre">
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
            <div class="wrapper">
                <div class="left">
                    <div class="title_wrapper">
                        <h4 class="tchin_title">Projet TCHIN, d'octobre 2021 à avril 2022</h4>
                    </div>
                    <div class="texte_tchin">
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
                    </div>
                </div>
                <div class="right">
                    <img class="tchin_1" src="/images/sensibilisation/projet_tchin_1.png" alt="">
                    <img class="tchin_1"src="/images/sensibilisation/projet_tchin_2.png" alt="">
                </div>
            </div>
        </section>

        <section class="oser">
            <div class="wrapper2">
                <div class="left2">
                    <img class="oser_1" src="/images/sensibilisation/projet_croquer_1.png" alt="">
                    <img class="oser_1" src="/images/sensibilisation/projet_croquer_2.png" alt="">
                </div>
                <div class="right2">
                    <div class="title_wrapper2">
                        <h4 class="oser_title">Oeuvre "OSER CROQUER LE PAYSAGE", novembre 2021</h4>
                    </div>
                    <div class="texte_oser">
                        L’artiste <a href="http://maevabarriere.com" target="_blank">Maeva Barrière</a> et la cheffe Julie GIVERNE du Restaurant Lili Bowl ont réalisé un paysage à croquer dans le cadre de l’appel à projet « Santé environnement 2020 » du Programme Régional de Santé Environnementale (PRSE3). Projet local coordonné par Le Pôle d’Equilibre Territorial et Rural (PETR) du Grand Quercy, en partenariat avec l’association <a href="http://www.cahorsjuinjardins.fr" target="_blank">Cahors Juin Jardin</a>. « Oser croquer le paysage » est co-financé par la <a href="https://draaf.occitanie.agriculture.gouv.fr" target="_blank">Direction Régionale de l’Alimentation, de l’Agriculture et de la Forêt</a> (DRAAF) et le <a href="https://adefpat.fr/adhrents/pole-dequilibre-territorial-et-rural-du-grand-quercy/" target="_blank">PETR Grand Quercy</a>.<br />
                        <br />
                        C’est un projet participatif multi-partenarial autour du « bien manger local » dont l’enjeu est de promouvoir auprès de la population des comportements favorables à la santé et à l’environnement en matière d’alimentation.<br />
                        Les objectifs de ce projet sont les suivants :<br />
                        •	Communiquer et sensibiliser autour des impacts de l’alimentation sur la santé et l’environnement ; 
                        •	Promouvoir une alimentation locale, saine et durable auprès de publics spécifiques ;<br />
                        •	Promouvoir le respect de la saisonnalité dans les pratiques de consommation des habitants ;<br />
                        •	Valoriser le patrimoine alimentaire local ; <br />
                        •	Faire intervenir des artistes plasticiennes qui mêlent art et aliment.<br />
                        <br />
                        « Oser croquer le paysage » s’est déroulé sur deux territoires : au <a href="https://www.jardinbourian.org/club-nature-et-alsh" target="_blank">Jardin Bourian</a> (Communauté de Communes de Cazals-Salviac) et dans les quartiers prioritaires de la ville (QPV) de Cahors.<br />
                        <br />
                        Ce projet conjugue la réalisation d'une œuvre d'art comestible, la convivialité et la santé.  Au-delà de la prestation culinaire et artistique, il vise à promouvoir la santé environnementale, le jardin, la forêt, les produits bio, locaux et de saison. Cette œuvre d’art a été présentée et dégustée avec les participants et le public à l’occasion de l'inauguration de l'exposition VERS LES LUEURS des peintures de <a href="http://bastienlemaitre.blogspot.com" target="_blank">Bastien Lemaître</a> dans le jardin du Chai (auberge de jeunesse à Cahors).<br />
                        Le paysage à croquer a été élaboré après plusieurs ateliers créatifs et culinaires, avec les habitants des quartiers sensibles de la ville, mamans et enfnats. Les mets ont été réalisés majoritairement à partir de plantes sauvages récoltées en forêt et des légumes de l’association des Jardins du Cœurs de Cahors.<br />
                        <br />
                        Lili BOwL a participé à ce beau projet aux côtés de la plasticienne art et aliments Maeva Barrière pour la création des mises en bouches, et du dressage.
                    </div>
                </div>
            </div>
        </section>

        <section class="tiger">
            <div class="wrapper">
                <div class="left">
                    <div class="title_wrapper">
                        <h4 class="tiger_title">Partenariat avec le TIGER MILK, octobre 2021</h4>
                    </div>
                    <div class="texte_tiger">
                        Une première sur Cahors ! Afin d’optimiser et mettre en valeur l’alliance subtile de la Street food et de la Healthy food, le restaurant Lili BOwL et le bar Tiger Milk vous proposent des brunchs inédits avec des créations de cocktails et mocktails du Tiger Milk sublimant les nouveautés végétales de Lili BOwL !<br />
                        <br /> 
                        Un brunch complet, sain et équilibré composé de fruits et légumes de saison, de céréales, de légumineuses, de sucrés et salés healthy, colorés, respectueux de votre santé et de l’environnement.
                        Œuf au plat et pesto de noix et basilic, raw food façon velouté, burger Portobello, pancakes et brownies succulents et sans gluten, et bien plus encore !
                    </div>
                </div>
                <div class="right">
                    <img class="tiger_1" src="/images/sensibilisation/projet_tiger.png" alt="">
                </div>
            </div>
        </section>

        <section class="jardins">
            <div class="wrapper2">
                <div class="left2">
                    <img class="jardins_1" src="/images/sensibilisation/projet_jardins.png" alt="">
                </div>
                <div class="right2">
                    <div class="title_wrapper2">
                        <h4 class="jardins_title">Jardins urbains partagés, juin 2021</h4>
                    </div>
                    <div class="texte_jardins">
                        Le quartier de la Daurade et sa place des Républicains espagnols se végétalise ! Grâce à la ville de <a href="https://cahorsagglo.fr" target="_blank">Cahors</a>, au <a href="https://ceiis.fr" target="_blank">Comité d’Études et d’Informations pour l’Insertion Sociale</a> (CEIIS), à l’EHPAD <a href="https://orpea.com/maison-de-retraite-les-rives-de-cabessut-cahors-46-" target="_blank">Les Rives de Cabessut</a> (Cahors) et à <a href="https://cahorsagglo.fr/association/association-quartier-liberation-daurade" target="_blank">l’association d'habitants et de commerçants du quartier Libération Daurade</a> qui ont tous répondu positivement aux propositions de Lili BOwL, c’est une belle dynamique qui s’est créée autour de ces jardinières partagées, pour promouvoir les potagers urbains et inciter les citoyens à se les approprier. Semer, cultiver, récolter, consommer, pour le moment à petite échelle… Les trois bacs de 2m2 voient pousser des tomates, courgettes, poivrons, ou encore du persil et nous souhaitons y voir fleurir de nouvelles espèces à chaque saison.
                    </div>
                </div>
            </div>
        </section>

        <section class="alimentaire">
            <div class="wrapper">
                <div class="left">
                    <div class="title_wrapper">
                        <h4 class="alimentaire_title">Alimentaire Mon Cher Watson, mars à juin 2022</h4>
                    </div>
                    <div class="texte_alimentaire">
                        Le projet « Alimentaire Mon Cher Watson » se situe au croisement de l’expérience cinématographique et de l’expérience culinaire.<br />
                        À partir d’ateliers coordonnés par Lili BOwl et l’association <a href="http://champdimages.com" target="_blank">Champ d’images</a>, nous souhaitons sensibiliser de jeunes enfants handicapés de l’IME Centre Genyer (Cahors) à l’alimentation santé à travers la réalisation de courtes fictions.<br />
                        <br />
                        Avec ce projet, nous prenons plaisir à détourner la célèbre réplique pour planter le décor : une enquête dans le milieu de l’alimentation sous la forme de courtes fictions, ludiques et pédagogiques.<br />
                        Partant du principe que chaque aliment est porteur d’une histoire, de sa fabrication à l’assiette, nous souhaitons sensibiliser des jeunes enfants à l’alimentation santé, en questionnant leurs habitudes alimentaires sur le bio et le circuit court, la gestion des déchets par le tri sélectif et la revalorisation des déchets organiques.
                    </div>
                </div>
                <div class="right">
                    <img class="alimentaire_1" src="/images/sensibilisation/projet_tiger.png" alt="">
                </div>
            </div>
        </section>

        <!--footer-->
        @include('components.footer')
            @yield('footer')
        <!-- end footer -->