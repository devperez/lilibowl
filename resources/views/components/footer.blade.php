@yield('footer')
<div class="last_section container-fluid">
    <section class="footer" id="newsletter">
        <div class="newsletter">
            <p class="titre">RECEVOIR LA NEWSLETTER</p>
            <p class="titre2" style="display:none">MERCI POUR VOTRE INSCRIPTION !</p>
            <p class="texte">Recevez le nouveau menu de saison au début de chaque mois, ainsi que des informations
                sur nos ateliers et événements dans votre boîte mail :)
            </p>
            <p class="texte2" style="display:none">BRAVO ! Vous faites maintenant partie de la Lili Team engagée !<br /> À très bientôt dans notre restaurant !<i class="material-icons smiley">
                sentiment_satisfied</i>
            </p>
        </div>
        <form class="inscription" id="footerForm" method="POST" action="{{ route('getmail') }}">
            <label>Email</label>
            <input class="input" type="email" name="email" id="footerEmail" placeholder="lili@mail.com">
            <span class="crossErrorWrapper2"><img class="crossError2" src="/images/popup/croixr.png" alt="croix rouge d'erreur"/></span>
            <p class="error" id="error2">Cette adresse mail est incorrecte ou elle est déjà enregistrée.</p>
            <input name="register" value="Je m'inscris !" id="register" class="button" type="submit"/>
        </form>
    </section>
    <footer id="contact">
        <div class="logo-contact-photo">
            <div class="logo-contact-icones">
                <div class="logolili">
                    <a href="#logo"><img class="logo-footer" src="/images/homepage/LILI_BOwL_logo_footer.png" alt="logo de Lili BOwL" /></a>
                </div>
                <div class="mobile_horaires">Ouvert du lundi au vendredi,<br /> de 11h à 15h,
                                            sur place ou à emporter.</div>
                <div style="display:flex; flex-direction:column;align-items:center; width:355px;">
                    <div style="text-align:center;">
                        <p class="contact">Contactez-nous</p>
                    </div>
                    <div class="detail_wrapper">
                        <a href="https://g.page/lili-bowl?share" target="_blank"><span class="detail address">12, rue Daurade, 46000 Cahors</span></a><br />
                        <span class="detail">06.30.03.73.89</span><br />
                        <span class="detail">lilibowl.cahors@gmail.com</span>
                    </div>
                    <div class="social_wrapper">
                        <a href="https://www.instagram.com/lili_bowl/" target="_blank"><img class="insta" src="/images/homepage/Instagram_icon_black.svg" alt="icône instagram" /></a>
                        <a href="https://www.facebook.com/Lilibowl.cahors" target="_blank"><img src="/images/homepage/Facebook_icon_black.svg" alt="icône facebook" /></a>
                    </div>
                    <div class="wrapper-horaires">
                        <div class="horaires">Ouvert du lundi au vendredi, de 11h à 15h,<br />
                                            sur place ou à emporter.</div>
                    </div>
                </div>
            </div>
            <div>
                <img class="photo-texte" src="/images/homepage/photo_footer-min.png" alt="photo de la terrasse du restaurant" />
            </div>
        </div>
        <div class="partagez-wrapper">
            <span class="partagez">Partagez votre expérience :</span>
            <div class="icones_wrapper">
                <img class="googleicon" src="/images/icone_google.png" alt="icône Google pour laisser un avis" />
                <img src="/images/icone_tripadvisor.png" alt="icône pour aller sur le site de Tripadvisor" />
            </div>
        </div>
        <div class="mentions">
            <span>Lili BOwL &copy; <a class="lien" href="#" target="_blank">Mentions légales</a> - créé avec <img src="/images/heart.svg" class="heart" alt="petit coeur qui bat"/> par <a class="lien" href="https://devdavidperez.com/" target="_blank">David PEREZ</a></span>
        </div>
    </footer>
</div>
