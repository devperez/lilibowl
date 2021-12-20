$(document).ready(function () {
    setTimeout(function(){
        $('#myModal').fadeIn(400)
        },5000);
});

$('#close').on('click', function(){
    $('#myModal').fadeOut(400)
}
);