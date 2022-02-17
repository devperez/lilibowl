@yield("navbar_mobile")
<div id="menu-button">
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
        <a class="links_mobile" href="{{ route('menus') }}"><li>Le Menu</li></a>
        <a class="links_mobile" href="#contact"><li>Contact</li></a>
        <div class="mobile_icones">
            <a href="#"><img class="instaicon" src="/images/Instagram_general.png" alt="icones du réseau social Instagram" /></a>
            <a href="#"><img class="mobile_fbicon" src="/images/Facebook_general.png" alt="icones du réseau social Facebook" /></a>
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
