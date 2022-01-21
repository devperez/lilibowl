@yield('footer')
<div class="last_section container-fluid">
    <section class="footer">
        <div class="newsletter">
            <p class="titre">RECEVOIR LA NEWSLETTER</p>
            <p class="texte">Recevez le nouveau menu de saison au début de chaque mois, ainsi que des informations
                    sur nos ateliers et événements dans votre boîte mail :)
            </p>
        </div>
        <div class="inscription">
            <label>Email</label>
            <input type="email" placeholder="lili@mail.com">
            <button class="button"> Je m'inscris !</button>
        </div>
    </section>
    <hr>
    <footer id="contact">
        <div class="logo-contact-photo">
            <div class="logo-contact-icones">
                <div class="logolili">
                    <a href="#logo"><img class="logo-footer" src="/images/Logo-Lilibowl.png" alt="logo de Lili BOwL" /></a>
                </div>
                <p class="contact">Contactez-nous</p>
                <address>12, rue Daurade, 46000 Cahors<br />
                        06.30.03.73.89<br />
                        lilibowl.cahors@gmail.com
                </address>
                <img class="insta" src="/images/Insta.png" alt="icône instagram" />
                <img src="/images/Fb.png" alt="icône facebook" />
                <div class="wrapper-horaires">
                    <p class="horaires">Ouvert du lundi au samedi, de 11h à 15h, sur place ou à emporter.</p>
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
            <span>Lili BOwL &copy; Mentions légales - créé avec <img src="/images/heart.svg" class="heart" /> par David PEREZ</span>
        </div>
    </footer>
</div>

