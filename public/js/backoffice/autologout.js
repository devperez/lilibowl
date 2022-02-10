// ce script permet de déconnecter un utilisateur au bout de 15 minutes
// s'il est inactif

$(function () {
    const timeout = 900000;  // 900000 ms = 15 minutes
    var idleTimer = null;
    $('*').on("bind",'mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick', function () {
        clearTimeout(idleTimer);

        idleTimer = setTimeout(function () {
            document.getElementById('form_id').submit();
        }, timeout);
    });
    $("body").trigger("mousemove");
});