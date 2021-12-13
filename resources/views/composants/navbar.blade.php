<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" href="/css/styles.css" />

        <title>Lili BoWL - Cuisine végétale et éco-responsable</title>
    </head>
    <body>
        <nav>
            <img class="logo" src="/images/logo.png" alt="logo du restaurant" />
            <ul>
                <li><a href="#">Notre concept</a></li>
                <li><a href="#">Le restaurant</a></li>
                <li><a href="#">Le menu</a></li>
                <li><a href="#">Sensibilisation</a></li>
                <li><a href="#">Formations</a></li>
                <li><a href="#">Contact</a></li>
                <a href="#"><img class="instaicon" src="/images/Instagram.png" alt="icones du réseau social Instagram" /></a>
                <a href="#"><img class="fbicon" src="/images/Facebook.png" alt="icones du réseau social Facebook" /></a>
            </ul>
        </nav>
@yield('content')
