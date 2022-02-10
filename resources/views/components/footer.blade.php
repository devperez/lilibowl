@yield('footer')
<div class="last_section container-fluid">
    <section class="footer">
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
            <p class="error" id="error2">Cette adresse mail est incorrecte ou elle est déjà enregistrée.</p>
            <input name="register" value="Je m'inscris !" id="register" class="button" type="submit"/>
        </form>
    </section>
    <footer id="contact">
        <div class="logo-contact-photo">
            <div class="logo-contact-icones">
                <div class="logolili">
                    <a href="#logo"><img class="logo-footer" src="/images/Logo-Lilibowl.png" alt="logo de Lili BOwL" /></a>
                </div>
                <div style="display:flex; flex-direction:column;align-items:center; width:355px;">
                    <div style="text-align:center;">
                        <p class="contact">Contactez-nous</p>
                    </div>
                    <div style="display:flex; flex-direction:column; align-items:center;">
                        <span style="display:inline-block;margin-bottom:24px;">12, rue Daurade, 46000 Cahors</span><br />
                        <span style="display:inline-block;margin-bottom:24px;">06.30.03.73.89</span><br />
                        <span style="display:inline-block;margin-bottom:24px;">lilibowl.cahors@gmail.com</span>
                    </div>
                    <div>
                        <img class="insta" src="/images/Insta.png" alt="icône instagram" />
                        <img src="/images/Fb.png" alt="icône facebook" />
                    </div>
                    <div class="wrapper-horaires">
                        <div class="horaires">Ouvert du lundi au vendredi, de 11h à 15h,<br />
                                            sur place ou à emporter.</div>
                    </div>
                </div>
            </div>
            <div class="photo-texte">
                <img src="/images/footer_photo.png" alt="photo de la terrasse du restaurant" />
            </div>
        </div>
        <div class="partagez-wrapper">
            <span class="partagez">Partagez votre expérience :</span>
            <img class="googleicon" src="/images/icone_google.png" alt="icône Google pour laisser un avis" />
            <img src="/images/icone_tripadvisor.png" alt="icône pour aller sur le site de Tripadvisor" />
        </div>
        <div class="mentions">
            <span>Lili BOwL &copy; Mentions légales - créé avec <img src="/images/heart.svg" class="heart" alt="petit coeur qui bat"/> par David PEREZ</span>
        </div>
    </footer>
</div>
