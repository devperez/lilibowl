@yield('footer')
<div class="last_section container-fluid">
    <section class="footer" id="newsletter">
        <div class="newsletter">
            <p class="titre">RECEVOIR LA NEWSLETTER</p>
            <p class="titre2" style="display:none">MERCI POUR VOTRE INSCRIPTION !</p>
            <p class="texte">Recevez le nouveau menu de saison au début de chaque mois, ainsi que des informations
                sur nos ateliers et événements dans votre boîte mail :)
            </p>
            <p class="texte2" style="display:none">BRAVO ! Vous faites maintenant partie de la Lili Team engagée !<br /> À très bientôt dans notre restaurant !<img class="material-icons smiley" src="/images/popup/sentiment_satisfied_black_24dp.svg" alt="petit smiley"></p>
        </div>
        <form class="inscription" id="footerForm" method="POST" action="{{ route('getmail') }}">
            <input type="hidden" name="_token" id="tokenFooter" value="{{ csrf_token() }}">
            <label for="footerEmail">Email</label>
            <input class="input" type="email" name="email" id="footerEmail" placeholder="lili@mail.com" aria-label="champ d'entrée de l'adresse email">
            <span class="crossErrorWrapper2"><img class="crossError2" src="/images/popup/croixr.png" alt="croix rouge d'erreur"/></span>
            <p class="error" id="error2">Cette adresse mail est incorrecte ou elle est déjà enregistrée.</p>
            <input name="register" value="Je m'inscris !" id="register" class="button" type="submit"/>
        </form>
    </section>
    <footer id="contact">
        <div class="logo-contact-photo">
            <div class="logo-contact-icones">
                <div class="logolili">
                    <a href="#logo"><img loading="lazy" class="logo-footer" src="/images/homepage/LILI_BOwL_logo_footer.png" alt="logo de Lili BOwL" /></a>
                </div>
                <div class="mobile_horaires">Ouvert du lundi au vendredi,<br /> de 11h à 15h,
                                            sur place ou à emporter.</div>
                <div style="display:flex; flex-direction:column;align-items:center; width:355px;">
                    <div style="text-align:center;">
                        <p class="contact">Contactez-nous</p>
                    </div>
                    <div class="detail_wrapper">
                        <a class="lien" href="https://g.page/lili-bowl?share" rel="noreferrer" target="_blank"><span class="detail address">12, rue Daurade, 46000 Cahors</span></a><br />
                        <span class="detail">06.30.03.73.89</span><br />
                        <span class="detail">lilibowl.cahors@gmail.com</span>
                    </div>
                    <div class="social_wrapper">
                        <a href="https://www.instagram.com/lili_bowl/" rel="noreferrer" target="_blank"><img class="insta" src="/images/navbar_fixe/Instagram_icon_black.svg" alt="icône instagram" /></a>
                        <a href="https://www.facebook.com/Lilibowl.cahors" rel="noreferrer" target="_blank"><img src="/images/homepage/Facebook_icon_black.svg" alt="icône facebook" /></a>
                    </div>
                    <div class="wrapper-horaires">
                        <div class="horaires">Ouvert du lundi au vendredi, de 11h à 15h, sur place ou à emporter.</div>
                    </div>
                </div>
            </div>
            <div>
                <img class="photo-texte" loading="lazy" src="/images/homepage/photo_footer-min.png" alt="photo de la terrasse du restaurant" />
            </div>
        </div>
        <div class="partagez-wrapper">
            <span class="partagez">Partagez votre expérience :</span>
            <div class="icones_wrapper">
                <div class="review-widget_net" data-uuid="f581a3d9-1d1b-4455-8816-0e3f04b2bab4" data-template="2" data-filter="" data-lang="en" data-theme="light"><a href="https://www.review-widget.net/" target="_blank" rel="noreferrer" rel="noopener"><img src="https://grwapi.net/assets/spinner/spin.svg" title="Google Review Widget" alt="Review Widget"></a></div><script async type="text/javascript" src="https://grwapi.net/widget.min.js"></script>
                <div id="TA_cdsratingsonlywide933" class="TA_cdsratingsonlywide"><ul id="d5LBktNnp" class="TA_links JlO4GwCeH"><li id="GtJK97lMZdS" class="S6PZHuu"><a target="_blank" rel="noreferrer" href="https://www.tripadvisor.fr/Restaurant_Review-g187168-d21204190-Reviews-Lili_Bowl-Cahors_Lot_Occitanie.html"><img src="https://www.tripadvisor.fr/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=cdsratingsonlywide&amp;uniq=933&amp;locationId=21204190&amp;lang=fr&amp;border=false&amp;shadow=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
            </div>
        </div>
        <div class="mentions">
            <span>Lili BOwL &copy; 2022 - <a class="liens" href="{{ route('mentions') }}">Mentions légales</a> - créé avec <img src="/images/heart.svg" class="heart" alt="petit coeur qui bat"/> par <a class="liens" rel="noreferrer" href="https://devdavidperez.com/" target="_blank">David PEREZ</a></span>
        </div>
    </footer>
</div>
