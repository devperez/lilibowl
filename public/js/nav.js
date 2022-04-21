$(function() {
    var URL = document.location.href;
    console.log(URL);
    if(URL == "http://127.0.0.1:8000/restaurant")
    {
        $('#restaurant').removeClass();
        $('#restaurant').addClass('actif');
    }
    if(URL == "http://127.0.0.1:8000/cartes")
    {
        $('#menus').removeClass();
        $('#menus').addClass('menu_item_actif');
    }  
    if(URL == "http://127.0.0.1:8000/sensibilisation")
    {
        $('#sensibilisation').removeClass();
        $('#sensibilisation').addClass('actif');
    }
    if(URL == "http://127.0.0.1:8000/formations")
    {
        $('#formations').removeClass();
        $('#formations').addClass('actif');
    }
})
