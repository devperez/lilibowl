@section("navbar_mobile")
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
            <a href="https://www.instagram.com/lili_bowl/" target="_blank"><img class="instaicon" src="/images/navbar_fixe/Instagram_icon_black.svg" alt="icones du réseau social Instagram" /></a>
            <a href="https://www.facebook.com/Lilibowl.cahors" target="_blank"><img class="mobile_fbicon" src="/images/navbar_fixe/Facebook_icon_black.svg" alt="icones du réseau social Facebook" /></a>
        </div>
    </ul>
</div>

<script>
$("#menu-button").click(function(){
    $(this).toggleClass("active");
    $("#line-1").toggleClass("active");
    $("#line-2").toggleClass("active");
    $("#line-3").toggleClass("active");
    $("#menu").slideToggle("slow");
});
</script>
@endsection