//logique des boutons

$(function(){
    $('.btn2').on("click",function(e){
        e.preventDefault();
        $('.prev').attr('src','');
        $('#menu1').addClass().css('display','none');
        $('#menu2').addClass().css('display','block');
        $('#menu3').addClass().css('display','none');
    });
    $('.btn3').on("click",function(e){
        e.preventDefault();
        $('.prev').attr('src','');
        $('#menu1').addClass().css('display','none');
        $('#menu2').addClass().css('display','none');
        $('#menu3').addClass().css('display','block');
    });
    $('.btn1').on("click",function(){
        $('.prev').attr('src','');
        $('#menu1').addClass().css('display','block');
        $('#menu2').addClass().css('display','none');
        $('#menu3').addClass().css('display','none');
    });
});