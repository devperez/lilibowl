@section('navbar')
<nav>
    <div id="logo">
        <img class="logo_lili" src="/images/navbar_fixe/LILI_BOwL_logo_header.png" alt="logo du restaurant" />
        <!-- menu mobile hamburger-->
        <div class="hamburger" id="menu-button">
            <div id="line-1"></div>
            <div id="line-2"></div>
            <div id="line-3"></div>
        </div>
        <div id="menu">
            <ul class="nav_wrapper">
                <a class="links_mobile" href="{{ route('homepage') }}#concept"><li>Notre Concept</li></a>
                <a class="links_mobile" href="{{ route('restaurant') }}"><li>Le Restaurant</li></a>
                <a class="links_mobile" href="{{ route('sensibilisation') }}"><li>Sensibilisation</li></a>
                <a class="links_mobile" href="{{ route('formations') }}"><li>Formations</li></a>
                <div class="mobile_menu_wrapper">
                    <a class="links_mobile special" href="{{ route('menus') }}"><li class="menu_item2">Le Menu</li></a>
                </div>
                <a class="links_mobile" href="#contact"><li>Contact</li></a>
                <div class="mobile_icones">
                    <a href="https://www.instagram.com/lili_bowl/" rel="noreferrer" target="_blank"><img class="instaicon" src="/images/navbar_fixe/Instagram_icon_black.svg" alt="icones du réseau social Instagram" /></a>
                    <a href="https://www.facebook.com/Lilibowl.cahors" rel="noreferrer" target="_blank"><img class="mobile_fbicon" src="/images/navbar_fixe/Facebook_icon_black.svg" alt="icones du réseau social Facebook" /></a>
                </div>
            </ul>
        </div>
    </div>
    <!-- End menu mobile hamburger-->
    <div class="navbar">
        <div>
            <a class="links hvr-underline-from-left" href="{{ route('homepage') }}#concept">Notre Concept</a>
            <div class="btn-group">
                <a class="links hvr-underline-from-left" id="restaurant" href=" {{ route('restaurant') }}">Le Restaurant</a>
                <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="polygon" src="/images/Polygonblack.png">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('restaurant') }}#restauration">Restauration</a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item" href="{{ route('restaurant') }}#traiteur">Service traiteur</a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item" href="{{ route('restaurant') }}#location-de-vaisselle">Location de vaisselle</a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item" href="{{ route('restaurant') }}#boutique">Boutique</a>
                </div>
            </div>
            <a class="links hvr-underline-from-left" id="sensibilisation" href="{{ route('sensibilisation') }}">Sensibilisation</a>
            <a class="links hvr-underline-from-left" id="formations" href="{{ route('formations') }}">Formations</a>
            <a class="links menu_item" id="menus" href="{{ route('menus') }}">Le Menu</a>
            <a class="links hvr-underline-from-left" id="navcontact" href="#contact">Contact</a>
        </div>
        <div class="icones">
            <a href="https://www.instagram.com/lili_bowl/" target="_blank"><img class="instaicon" src="/images/navbar_fixe/Instagram_icon_black.svg" alt="icones du réseau social Instagram" /></a>
            <a href="https://www.facebook.com/Lilibowl.cahors" target="_blank"><img class="fbicon" src="/images/navbar_fixe/Facebook_icon_black.svg" alt="icones du réseau social Facebook" /></a>
        </div>
    </div>
</nav>

<script>
$("#menu-button").click(function(){
    $(this).toggleClass("active");
    $("#line-1").toggleClass("active");
    $("#line-2").toggleClass("active");
    $("#line-3").toggleClass("active");
    $("#menu").slideToggle("slow");
});
</script>
@stop


