$(".menu_mobile").not(".no-fullscreen").on ('click', function()
{
    $("#id_view_image").html("<img src='"+$(this).attr('src')+"' class='view_image_img'/>");
    $("#id_view_image_body").addClass("view_image_body");
    $("#id_view_image").addClass("view_image");
});

    $("#id_view_image").on('click',function()
{
    $("#id_view_image").html("");
    $("#id_view_image_body").removeClass("view_image_body");
    $("#id_view_image").removeClass("view_image");
});