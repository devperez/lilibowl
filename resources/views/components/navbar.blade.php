@section('navbar')
<nav>
    <div id="logo">
        <img class="logo" src="/images/Logo-Lilibowl.png" alt="logo du restaurant" />
    </div>
    <div class="navbar">
        <div>
            <a class="links hvr-underline-from-left" href="{{ route('homepage') }}">Notre Concept</a>
            <div class="btn-group">
                <a class="links hvr-underline-from-left" href=" {{ route('restaurant') }}">Le Restaurant</a>
                <bouton type="button" class="dropdown-toggle btn-restaurant" data-bs-toggle="dropdown" aria-expanded="false"></bouton>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('restaurant') }}#traiteur">Service traiteur</a>
                    <a class="dropdown-item" href="{{ route('restaurant') }}#vaisselle">Location de vaisselle</a>
                    <a class="dropdown-item" href="{{ route('restaurant') }}#boutique">Boutique</a>
                </div>
            </div>
            <a class="links hvr-underline-from-left" href="#">Le Menu</a>
            <a class="links hvr-underline-from-left" href="#">Sensibilisation</a>
            <a class="links hvr-underline-from-left" href="#">Formations</a>
            <a class="links hvr-underline-from-left" href="#contact">Contact</a>
        </div>
        <div class="icones">
            <a href="#"><img class="instaicon" src="/images/Instagram_general.png" alt="icones du réseau social Instagram" /></a>
            <a href="#"><img class="fbicon" src="/images/Facebook_general.png" alt="icones du réseau social Facebook" /></a>
        </div>
    </div>
</nav>
@stop