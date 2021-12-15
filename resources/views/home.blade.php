<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" href="/css/styles.css" />

        <title>Lili BoWL - Cuisine végétale et éco-responsable</title>
    </head>
    <body>
        <section class="background">
            <nav>
                <div class="logo" >
                    <img src="/images/logo.png" alt="logo du restaurant" />
                </div>
                <div class="navbar">
                    <div>
                        <a class="links" href="#concept">Notre concept</a>
                        <a class="links" href="#">Le restaurant</a>
                        <a class="links" href="#">Le menu</a>
                        <a class="links" href="#">Sensibilisation</a>
                        <a class="links" href="#">Formations</a>
                        <a class="links" href="#">Contact</a>
                    </div>
                    <div class="icones">
                        <a href="#"><img class="instaicon" src="/images/Instagram.png" alt="icones du réseau social Instagram" /></a>
                        <a href="#"><img class="fbicon" src="/images/Facebook.png" alt="icones du réseau social Facebook" /></a>
                    </div>
                </div>
            </nav>
            <div class="hero">
                <div class="hero-inner">
                    <h1>Cuisine végétale<br />et éco-responsable</h1>
                </div>
            </div>
        </section>

    <main>
        <section class="concept" id="concept">
            <h2>Notre Concept</h2>
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
                <img src="/images/homepage_fleur.png" alt="illustration botanique" />
            </div>
        </section>
        <section class="quotationwrapper">
            <div class="bowlpicwrapper">
                <img class="bowlpic" src="/images/homepage_bol.png" alt="illustration d'un bowl" />
            </div>
            <div class="innerwrapper">

                <h4>Pourquoi le nom Lili BOwL ?</h4>

                <div class="quoteandtext">
                    <div class="quotationmarkleft">
                        <img class="quotemark1" src="/images/homepage_quotationmark1.png" alt="guillemets stylisés" />
                    </div>
                    <div>
                        <p class="quotetext">
                        Parce que ma cuisine, (la cuisine de Julie ou de Lili) s’inspire des Bouddha bowls, assiettes composées principalement de légumes,
                        de céréales et de légumineuses qui composent un repas complet, sain et équilibré. Par ailleurs, j’ai voulu un animal de la vie sauvage
                        pour illustrer le logo parce que j’adore cuisiner le fruit de mes cueillettes lors de mes balades en forêt.<br />
                        « Owl » en anglais veut dire chouette, l’animal était donc tout trouvé. Et ne soyez pas étonnés si nous prenons plaisir à vous appeler
                        nos chouettes clients !
                        </p>
                        <p class="quoteauthor">Julie</p>

                    </div>
                    <div class="quotationmarkright">
                        <img class="quotemark2" src="/images/homepage_quotationmark2.png" alt="guillemets stylisés" />
                    </div>
                </div>

                <!-- <div class="quoteauthor">
                    <p>Julie</p>
                </div> -->
            </div>
        </section>

    </main>
    </body>
</html>
