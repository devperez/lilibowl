@section('navbar')
<nav>
    <div id="logo">
        <img class="logo" src="/images/Logo-Lilibowl.png" alt="logo du restaurant" />
    </div>
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
                    <a class="dropdown-item" href="{{ route('restaurant') }}#vaisselle">Location de vaisselle</a>
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
            <a href="#"><img class="instaicon" src="/images/Instagram_general.png" alt="icones du réseau social Instagram" /></a>
            <a href="#"><img class="fbicon" src="/images/Facebook_general.png" alt="icones du réseau social Facebook" /></a>
        </div>
    </div>
</nav>
@stop


<!-- <nav class="navbar navbar-expand-lg navbar-light navCustom">
    <div class="container-fluid">
        <div id="logo">
            <img class="logo" src="/images/Logo-Lilibowl.png" alt="logo du restaurant" />
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse menuCustom" id="navbarNavDropdown">
            <div class="navbar-nav">
                <a class="nav-link links hvr-underline-from-left" aria-current="page" href="{{ route('homepage') }}#concept">Notre Concept</a>
                <div class="btn-group">
                    <a class="nav-link links hvr-underline-from-left" id="restaurant" href=" {{ route('restaurant') }}">Le Restaurant</a>
                    <a class="polygonWrapper" href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="polygon" src="/images/Polygonblack.png"></a>
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
                <a class="nav-link links hvr-underline-from-left" id="sensibilisation" href="{{ route('sensibilisation') }}">Sensibilisation</a>
                <a class="nav-link links hvr-underline-from-left" id="formations" href="{{ route('formations') }}">Formations</a>
                <a class="nav-link links menu_item" id="menus" href="{{ route('menus') }}">Le Menu</a>
                <a class="nav-link links hvr-underline-from-left" id="navcontact" href="#contact">Contact</a>
                <div class="icones">
                    <a href="#"><img class="instaicon" src="/images/Instagram_general.png" alt="icones du réseau social Instagram" /></a>
                    <a href="#"><img class="fbicon" src="/images/Facebook_general.png" alt="icones du réseau social Facebook" /></a>
                </div>
            </div>
        </div>
    </div>
</nav> -->

