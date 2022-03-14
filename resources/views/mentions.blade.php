<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/navbar.css" />
    <link rel="stylesheet" href="/css/navbar_mobile.css" />
    <link rel="stylesheet" href="/css/mentions_styles.css" />


    <title>Mentions légales | Lili BOwL</title>
</head>
<body>
    <!-- navbar -->
    @include('components.navbar')
    @yield('navbar')
    <!--End navbar -->

    <section>
        <h1>Propriété du site</h1>
        <p>
            Le présent site est la propriété de la société Lili BOwL.<br />
            Le restaurant Lili BOwL est situé au 12, rue Daurade 46000 Cahors.<br />
            La société Lili BOwL est représentée par Mme Julie Giverne sous la forme juridique EIRL.<br />

            La société est enregistrée au RCS de Cahors sous le numéro : A 814 829 024.<br />
            Le siège social du restaurant est situé au 321, rue du Dr Jean Ségala - 46000 Cahors<br />
            Adresse email du restaurant : lilibowl.cahors@gmail.com<br />
            Numéro de TVA : FR75814829024<br />
        </p>
        <h1>Hébergeur</h1>
        <p>
            PLANETHOSTER<br />
            4416, Louis B. Mayer, Laval (Québec) H7P 0G1, Canada.<br />
            Numéro de téléphone en France : 01 76 60 41 43<br />
            Ou numéro vert : 0 805 080 426<br />
        </p>
        <h1>Création</h1>
        <p>
            Le site internet du restaurant Lili BOwL a été créé par :<br />
            David Perez, développeur web indépendant<br />
            11, rue Gaspard Monge<br />
            82000 Montauban<br />
            Adresse email : dev.davidperez@gmail.com<br />
        </p>
        <h1>Propriété intellectuelle</h1>
        <p>
        L’ensemble de ce site relève de la législation française sur le droit d’auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris pour les représentations iconographiques et photographiques.<br />
        La reproduction de tout ou partie de ce site sur un support quel qu’il soit est formellement interdite sauf autorisation écrite de Lili BOwL. À ce titre, et conformément aux dispositions du Code de la Propriété Intellectuelle, seules les utilisations pour un usage privé ou pour un usage strictement personnel sont autorisées.<br />
        À défaut d’autorisation préalable communiquée par écrit, toute autre utilisation est constitutive de contrefaçon et sanctionnée par le Code de la Propriété Intellectuelle.<br />
        </p>
        <h1>Collecte de données</h1>
        <p>
            Le site Lili BOwL est susceptible de traiter des données personnelles. Le site Lili BOwL ne collecte que les adresses emails des utilisateurs qui désirent s'inscrire à la newsletter du site.<br />
            Les adresses emails collectées ne sont ni revendues ni utilisées par des tiers ; elles restent en possession de la société Lili BOwL et sont utilisées pour la newsletter du site et d'autres communications promotionnelles du restaurant.<br />
            Une adresse email collectée restera stockée et utilisée tant que son propriétaire ne demandera pas son effacement. Cette demande peut se faire par email à l'adresse lilibowl.cahors@gmail.com.
        </p>
    </section>
</body>
</html>

