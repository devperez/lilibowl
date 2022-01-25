@yield('popup')
<div class="modal fade" tabindex="-1" id="myModal" data-backdrop="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <img src="images/image_popup.png" alt="Photo illustrant un bol" class="col-md-6 img" />
                        <div class="col-md-6 inscrivez-vous">
                            <div class="cross">    
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
                            </div>
                            <div class="text1-wrapper">
                                <p id="inscription" style="display:block" class="inscription2">INSCRIVEZ-VOUS À <br/>NOTRE NEWSLETTER !</p>
                                <p class="recevez" style="display:block" id="recevez">Recevez le nouveau menu de saison au début de chaque mois,
                                    ainsi que des informations sur nos ateliers et événements dans votre boîte mail :)
                                </p>
                            </div>
                            <div class="text2-wrapper">
                                <p class="inscription2" style="display:none" id="merci">MERCI POUR VOTRE <br /> INSCRIPTION !</p>
                                <p id="confirm" style="display:none" class="recevez">
                                    BRAVO ! Vous faites maintenant partie de la Lili team engagée !<br /> À très bientôt dans notre<br /> restaurant <i class="material-icons smiley">
                                    sentiment_satisfied</i>
                                </p>
                            </div>
                            <form id="form" style="display:block" action="{{ route('getmail') }}" method="POST" class="form">
                                @csrf
                                <label class="label">Email</label>
                                <input class="input" id="email" name="email" type="email" placeholder="lili@mail.com">
                                <p class="error" id="error">Cette adresse mail est incorrecte ou elle est déjà enregistrée.</p>
                                <input name="register" value="Je m'inscris !" id="register" class="button" type="submit"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>