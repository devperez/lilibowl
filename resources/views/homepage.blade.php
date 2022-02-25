<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" href="/css/styles.css" />
        <link rel="stylesheet" href="/css/footer.css" />
        <link rel="stylesheet" href="/css/navbar_mobile.css" />

        
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
        
        <title>Lili BoWL - Cuisine végétale et éco-responsable</title>
    </head>
    <body class="content">
        <section class="background">
            <nav>
                <div id="logo">
                    <img class="logo" src="/images/Logo-Lilibowl.png" alt="logo du restaurant" />
                    @include('components.navbar_mobile')
                    @yield('navbar_mobile')
                </div>
                <div class="navbar">
                    <div>
                        <a class="links hvr-underline-from-left" href="#concept">Notre Concept</a>
                        <div class="btn-group">
                            <a class="links hvr-underline-from-left" href=" {{ route('restaurant') }}">Le Restaurant</a>
                            <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="polygon" src="/images/Polygon.png" alt="flêche du menu déroulant"></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('restaurant') }}#restauration">Restauration</a>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="{{ route('restaurant') }}#traiteur">Service traiteur</a>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="{{ route('restaurant') }}#vaisselle">Location de vaisselle</a>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="{{ route('restaurant') }}#boutique">Boutique</a>
                            </div>
                        </div>
                        <a class="links hvr-underline-from-left" href="{{ route('sensibilisation') }}">Sensibilisation</a>
                        <a class="links hvr-underline-from-left" href="{{ route('formations') }}">Formations</a>
                        <a class="links menu_item" href="{{ route('menus') }}">Le Menu</a>
                        <a class="links hvr-underline-from-left" href="#contact">Contact</a>
                    </div>
                    <div class="icones">
                        <a href="#"><img class="instaicon" src="/images/Instagram.png" alt="icones du réseau social Instagram" /></a>
                        <a href="#"><img class="fbicon" src="/images/Facebook.png" alt="icones du réseau social Facebook" /></a>
                    </div>
                </div>
            </nav>

            <div class="hero">
                <div class="hero-inner">
                    <h1 class="accroche">Cuisine végétale<br />et éco-responsable</h1>
                </div>
            </div>
        </section>

        <main>
            <section class="concept" id="concept">
                <div class="concept_title">
                    <h2 class="concept_title">Notre Concept</h2>
                    <img class="fleurDeco2" src="/images/homepage_fleur.svg" alt="illustration botanique" />
                </div>
                <div class="conceptwrapper">
                    <p class="concepttext">
                    Chez Lili BOwL, nous sommes convaincus que nos habitudes alimentaires ont un impact significatif sur notre santé. 
                    Certains aliments que nous consommons parfois au quotidien sont responsables de problèmes de santé majeurs. 
                    Et pourtant, réapprendre à s’alimenter plus simplement, avec des produits naturels et de qualité, est un jeu de Lili !
                    Se faire plaisir tout en respectant notre corps, notre esprit et nos besoins nous paraît être plus que jamais une nécessité. 
                    <br /><br />
                    Dans notre restaurant et par le biais de nos différents projets, nous vous invitons à vous diriger, tout en douceur, vers une 
                    sensibilisation à l’alimentation durable, et ce en commençant par la découverte de produits frais de saisons et de recettes ultra
                    gourmandes 100% végétales.
                    </p>
                    <img class="fleurDeco1" src="/images/homepage_fleur.svg" alt="illustration botanique" />
                </div>
            </section>

            <section class="quotationwrapper">
                <div class="bowlpicwrapper1">
                    <img class="bowlpic" src="/images/homepage_bol.png" alt="illustration d'un bowl" />
                </div>
                <div class="innerwrapper">
                    <div class="pourquoiwrapper">
                        <h4 class="pourquoi">Pourquoi le nom Lili BOwL ?</h4>
                    </div>
                    <div class="bowlpicwrapper2">
                    <img class="bowlpic2" src="/images/homepage_bol.png" alt="illustration d'un bowl" />
                </div>
                    <div class="quoteandtext">
                        <div class="quotationmarkleft">
                            <img class="quotemark1" src="/images/homepage_quotationmark1.png" alt="guillemets stylisés" />
                        </div>
                        <div>
                            <p class="quotetext">
                            Parce que ma cuisine, (la cuisine de Julie ou de Lili) s’inspire des Bouddha bowls, assiettes composées principalement de légumes,
                            de céréales et de légumineuses qui composent un repas complet, sain et équilibré. Par ailleurs, j’ai voulu un animal de la vie sauvage
                            pour illustrer le logo parce que j’adore cuisiner le fruit de mes cueillettes lors de mes balades en forêt.<br />
                            « Owl » en anglais veut dire chouette, l’animal était donc tout trouvé. Et ne soyez pas étonnés si nous prenons plaisir à vous appeler
                            nos chouettes clients !<br />
                            <span class="quoteauthor2">Julie</span>
                            </p>
                            <p class="quoteauthor">Julie</p>
                        </div>
                        <div class="quotationmarkright">
                            <img class="quotemark2" src="/images/homepage_quotationmark2.png" alt="guillemets stylisés" />
                        </div>
                    </div>
                </div>
            </section>

            <section class="engagement">
                <div class="engagementtitrewrapper">
                    <h2 class="engagementtitre">Nos engagements</h2>
                </div>
                <div class="wrapper_engagement">
                    <div>
                        <ul>
                            <li class="li_engagement"><p class="texteli">Proposer une cuisine sans gluten et végétale variée aux influences du monde.</p></li>
                            <li class="li_engagement"><p class="texteli">Utiliser des produits majoritairement issus de l’agriculture biologique, sans pesticides et de saison.</p></li>
                            <li class="li_engagement"><p class="texteli">Connaître les producteurs et privilégier les circuits courts pour éviter le gaspillage alimentaire et favoriser l’économie locale.</p></li>
                            <li class="li_engagement"><p class="texteli">Respecter l’environnement dans une démarche éco-responsable (lunch boxes consignées en verre, tri sélectif, compost,
                                    revalorisation des déchets…).</p></li>
                            <li class="li_engagement"><p class="texteli">Éduquer le plus grand nombre à l’alimentation santé et au goût.</p></li>
                            <li class="li_engagement"><p class="texteli">Favoriser le lien social autours de projets, d’ateliers et de repas partagés.</p></li>
                        </ul>
                    </div>
                    <div class="fleur_engagement">
                        <img src="/images/homepage_fleur2.svg" alt="illustration florale" />
                    </div>
                </div>
            </section>

            <section class="container-frise">
                <div class="marque">
                    <div class="mots-clés" data-text="SANS GLUTEN &#183; LOCAL &#183; VÉGÉTALIEN &#183; ÉTIQUE &#183; SANS PLASTIQUE &#183; BIO &#183; SAIN &#183; ÉCO-RESPONSABLE &#183; DURABLE &#183; FAIT MAISON &#183; SANS GLUTEN &#183; LOCAL &#183; VÉGÉTALIEN &#183; ÉTIQUE &#183; SANS PLASTIQUE &#183; BIO &#183; SAIN &#183; ÉCO-RESPONSABLE &#183; DURABLE &#183; FAIT MAISON &#183;"></div>
                </div>
            </section>

            <section class="carrousel container">
                <div class="section-title">
                    <h2 class="equipe">L'équipe Lili BOwL</h2>
                </div>

                <!-- Wrapper du carrousel / version desktop -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="profile-text-title-pic">
                                <div class="profile-pic1">
                                    <img src="/images/homepage_photoJulie.png" class="d-block w-100" alt="photo de Julie Giverne">
                                </div>
                                <div class="text-title">
                                    <h5 class="profile-title">Julie Giverne, à l'origine de ce beau projet</h5>
                                    <p class="profile-text1">La cuisine a toujours occupé une place centrale dans ma vie. Les recettes de ma grand-mère qui embaument encore
                                        ma mémoire, les saveurs de la cuisine maternelle, une cuisine à base de céréales et de végétaux, qui soigne et
                                        qui apporte toujours de l’équilibre à ma vie. Puis ma cuisine d’étudiante et de femme, où mes essais culinaires
                                        ont été inspirés de mes lectures et voyages. L’alimentation est comme un fil rouge dans mon identité.<br /><br />
                                        J’ai toujours été convaincue d’une relation étroite entre l’alimentation, la santé et le bien-être, mais jamais
                                        je n’aurais pensé ouvrir un jour mon restaurant. Jusqu’à cette nuit où, cherchant à créer une activité de sens,
                                        en lien avec le respect de soi, de l’environnement, de la santé, j’ai eu envie de partager ma cuisine aux autres.
                                        Commençant dans la cuisine de ma maison, j’ai débuté par livrer des repas à vélo, et c’est en été 2020 que j’ouvre
                                        la porte de mon propre restaurant au profit d’une cuisine végétale et gourmande !<br /><br />
                                        Dans mon rôle de cheffe d’entreprise, je partage avec conviction une attitude sincèrement positive à l’égard de mes
                                        collaborateurs en basant la relation de travail sur la confiance, la motivation, le respect et l’écoute. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="profile-text-title-pic">
                                <div class="text-title">
                                    <h5 class="profile-title">Émilie</h5>
                                    <p class="profile-text2">Depuis l’enfance, j’ai été sensibilisée à l’impact de mon alimentation sur ma santé.
                                        Puis par goût, mais également par convictions liées au bien-être animal et à l’écologie, j’ai pris la décision
                                        de ne plus manger de viande. Est alors née une prise de conscience : la nourriture que nous consommons est trop
                                        grasse, trop transformée et trop carnée.<br /><br />
                                        Globetrotteuse super active nouvellement installée dans le Lot, je mets un point d’honneur à ce que mes habitudes
                                        de vie et mes voyages soient les plus respectueux possible pour la planète. Depuis plusieurs années maintenant,
                                        je suis un régime entièrement végétal. J’accompagne aujourd’hui le restaurant Lili BOwL avec engagement, joie et
                                        bonne humeur en cuisine, au service et sur l’ensemble des projets de sensibilisation naissants ! Je suis fière de
                                        mettre au service de cette entreprise mes compétences en marketing et communication.
                                    </p>
                                </div>
                                <div class="profile-pic2">
                                    <img src="/images/homepage_photoEmilie.png" class="d-block w-100" alt="photo d'Émilie">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="profile-text-title-pic">
                                <div class="profile-pic1">
                                    <img src="/images/homepage_photoThomas.png" class="d-block w-100" alt="photo de Thomas">
                                </div>
                                <div class="text-title">
                                    <h5 class="profile-title">Thomas</h5>
                                    <p class="profile-text1">Pur produit lotois, j’ai fait avec fierté mes classes dans dans les restaurants
                                        Le Melchior et Au Fil des Douceurs de Cahors. Après plusieurs années, notamment sur Toulouse et en Espagne,
                                        j'ai souhaité travailler dans un restaurant italien où j’ai pu élaborer avec amour et précision l’une de mes
                                        recettes végétaliennes préférées de lasagnes au pesto ! Aujourd’hui je partage fièrement les valeurs de Lili
                                        BOwL qui n’utilise que de bons produits, majoritairement en circuit court, pour respecter au mieux l'environnement.
                                        <br /><br />
                                        Issu d’une famille d’agriculteurs et de maraîchers bio, j’ai été dès le plus jeune âge sensible à l’origine,
                                        la qualité et la fraîcheur de mes produits. Mon projet serait d’ouvrir un restaurant avec un potager bio, où
                                        je pourrais cultiver mes propres légumes que l’on retrouvera à la carte. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="profile-text-title-pic">
                                <div class="text-title">
                                    <h5 class="profile-title">Anaëlle</h5>
                                    <p class="profile-text2">Lorsque j'ai franchi pour la première fois la porte du restaurant Lili BOwL, j’étais une
                                        lycéenne de 18 ans, sans expérience technique en cuisine. Mais une véritable soif d’apprendre en cuisine
                                        professionnelle m’animait. Julie avait alors pris le risque de me faire confiance en me transmettant son
                                        savoir-faire, mais aussi son amour pour les bons produits et pour le travail bien fait.<br /><br />
                                        J’ai passé des moments formidables, entourée d’une équipe souriante et bienveillante et ayant toujours
                                        pour but de fournir aux clients une cuisine plaisir qui a du goût, mais aussi de leur faire vivre une
                                        véritable expérience humaine et éco responsable !<br /><br />
                                        Après mon année passée parmi les chouettes Lili BOwL, je suis à présent étudiante en école de management
                                        hôtelier, Vatel à Paris, où je travaille pour les plus grands noms de l'hôtellerie comme le Four Seasons 
                                        où je suis comblée. Il n’y a pas un jour où je n’utilise pas les compétences transversales que j’ai apprises
                                        chez Lili BOwL qui m’a permis de mettre le pied à l’étrier, ce qui est souvent le plus difficile !
                                    </p>
                                </div>
                                <div class="profile-pic2">
                                    <img src="/images/homepage_photoAnaelle.png" class="d-block w-100" alt="photo d'Anaëlle">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <img class="previous" src="/images/previous.png" alt="bouton retour du carrousel" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" />
                    <img src="/images/next.png" type="button" alt="bouton suivant du carrousel" data-bs-target="#carouselExampleControls" data-bs-slide="next">   
                </div>
            </section>

            <!-- FIN du CARROUSEL / Début version mobile -->
            <section class="mobile">
                <div class="mobile_section-title">
                    <h2 class="mobile_equipe">L'équipe Lili BOwL</h2>
                </div>
                <div class="membre">
                    <div class="mobile_profile-pic">
                        <img src="/images/homepage_photoJulie.png" class="membrepic" alt="photo de Julie Giverne">
                    </div>
                    <div class="mobile_profile_title_wrapper">
                        <h5 class="mobile_profile_title">Julie Giverne, à l'origine de ce beau projet</h5>
                    </div>
                    <div class="mobile_profile_text_wrapper">
                        <p class="mobile_profile_text">La cuisine a toujours occupé une place centrale dans ma vie. Les recettes de ma grand-mère qui embaument encore
                        ma mémoire, les saveurs de la cuisine maternelle, une cuisine à base de céréales et de végétaux, qui soigne et
                        qui apporte toujours de l’équilibre à ma vie. Puis ma cuisine d’étudiante et de femme, où mes essais culinaires
                        ont été inspirés de mes lectures et voyages. L’alimentation est comme un fil rouge dans mon identité.<br /><br />
                        J’ai toujours été convaincue d’une relation étroite entre l’alimentation, la santé et le bien-être, mais jamais
                        je n’aurais pensé ouvrir un jour mon restaurant. Jusqu’à cette nuit où, cherchant à créer une activité de sens,
                        en lien avec le respect de soi, de l’environnement, de la santé, j’ai eu envie de partager ma cuisine aux autres.
                        Commençant dans la cuisine de ma maison, j’ai débuté par livrer des repas à vélo, et c’est en été 2020 que j’ouvre
                        la porte de mon propre restaurant au profit d’une cuisine végétale et gourmande !<br /><br />
                        Dans mon rôle de cheffe d’entreprise, je partage avec conviction une attitude sincèrement positive à l’égard de mes
                        collaborateurs en basant la relation de travail sur la confiance, la motivation, le respect et l’écoute. 
                        </p>
                    </div>
                    <div class="separator">
                        <img src="/images/mobile_separator.png" alt="séparateur végétal entre les différents membres de l'équipe">
                    </div>
                </div>
                <div class="membre">
                    <div class="mobile_profile-pic">
                        <img src="/images/homepage_photoEmilie.png" class="membrepic" alt="photo d'Émilie">
                    </div>
                    <div class="mobile_profile_title_wrapper">
                        <h5 class="mobile_profile_title">Émilie</h5>
                    </div>
                    <div class="mobile_profile_text_wrapper">
                        <p class="mobile_profile_text">Depuis l’enfance, j’ai été sensibilisée à l’impact de mon alimentation sur ma santé.
                            Puis par goût, mais également par convictions liées au bien-être animal et à l’écologie, j’ai pris la décision
                            de ne plus manger de viande. Est alors née une prise de conscience : la nourriture que nous consommons est trop
                            grasse, trop transformée et trop carnée.<br /><br />
                            Globetrotteuse super active nouvellement installée dans le Lot, je mets un point d’honneur à ce que mes habitudes
                            de vie et mes voyages soient les plus respectueux possible pour la planète. Depuis plusieurs années maintenant,
                            je suis un régime entièrement végétal. J’accompagne aujourd’hui le restaurant Lili BOwL avec engagement, joie et
                            bonne humeur en cuisine, au service et sur l’ensemble des projets de sensibilisation naissants ! Je suis fière de
                            mettre au service de cette entreprise mes compétences en marketing et communication. 
                        </p>
                    </div>
                    <div class="separator">
                        <img src="/images/mobile_separator.png" alt="séparateur végétal entre les différents membres de l'équipe">
                    </div>
                </div>
                <div class="membre">
                    <div class="mobile_profile-pic">
                        <img src="/images/homepage_photoThomas.png" class="membrepic" alt="photo de Thomas">
                    </div>
                    <div class="mobile_profile_title_wrapper">
                        <h5 class="mobile_profile_title">Thomas</h5>
                    </div>
                    <div class="mobile_profile_text_wrapper">
                        <p class="mobile_profile_text">Pur produit lotois, j’ai fait avec fierté mes classes dans dans les restaurants
                            Le Melchior et Au Fil des Douceurs de Cahors. Après plusieurs années, notamment sur Toulouse et en Espagne,
                            j'ai souhaité travailler dans un restaurant italien où j’ai pu élaborer avec amour et précision l’une de mes
                            recettes végétaliennes préférées de lasagnes au pesto ! Aujourd’hui je partage fièrement les valeurs de Lili
                            BOwL qui n’utilise que de bons produits, majoritairement en circuit court, pour respecter au mieux l'environnement.
                            <br /><br />
                            Issu d’une famille d’agriculteurs et de maraîchers bio, j’ai été dès le plus jeune âge sensible à l’origine,
                            la qualité et la fraîcheur de mes produits. Mon projet serait d’ouvrir un restaurant avec un potager bio, où
                            je pourrais cultiver mes propres légumes que l’on retrouvera à la carte.  
                        </p>
                    </div>
                    <div class="separator">
                        <img src="/images/mobile_separator.png" alt="séparateur végétal entre les différents membres de l'équipe">
                    </div>
                </div>
                <div class="membre">
                    <div class="mobile_profile-pic">
                        <img src="/images/homepage_photoAnaelle.png" class="membrepic" alt="photo d'Anaëlle">
                    </div>
                    <div class="mobile_profile_title_wrapper">
                        <h5 class="mobile_profile_title">Anaëlle</h5>
                    </div>
                    <div class="mobile_profile_text_wrapper">
                        <p class="mobile_profile_text">Lorsque j'ai franchi pour la première fois la porte du restaurant Lili BOwL, j’étais une
                            lycéenne de 18 ans, sans expérience technique en cuisine. Mais une véritable soif d’apprendre en cuisine
                            professionnelle m’animait. Julie avait alors pris le risque de me faire confiance en me transmettant son
                            savoir-faire, mais aussi son amour pour les bons produits et pour le travail bien fait.<br /><br />
                            J’ai passé des moments formidables, entourée d’une équipe souriante et bienveillante et ayant toujours
                            pour but de fournir aux clients une cuisine plaisir qui a du goût, mais aussi de leur faire vivre une
                            véritable expérience humaine et éco responsable !<br /><br />
                            Après mon année passée parmi les chouettes Lili BOwL, je suis à présent étudiante en école de management
                            hôtelier, Vatel à Paris, où je travaille pour les plus grands noms de l'hôtellerie comme le Four Seasons 
                            où je suis comblée. Il n’y a pas un jour où je n’utilise pas les compétences transversales que j’ai apprises
                            chez Lili BOwL qui m’a permis de mettre le pied à l’étrier, ce qui est souvent le plus difficile ! 
                        </p>
                    </div>
                </div>
            </section>
            <!-- FOOTER -->
            @include('components.footer')
            @yield('footer')
            <!-- END FOOTER -->
        </main>

        <!-- POP UP -->
        @include('components.popup')
        @yield('popup')
        <!-- END POP UP -->
    
    <script src="/js/newsletter.js"></script>
    <script src="/js/newsletterFooter.js"></script>
</body>
</html>
