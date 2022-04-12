//Affichage de la petit bulle verte
//sur les périphériques qui font strictement
//moins de 960px de large

if (screen.width < 960) {
    setTimeout(function() {
        $('#bubble').slideDown('slow');
    },4000);
}