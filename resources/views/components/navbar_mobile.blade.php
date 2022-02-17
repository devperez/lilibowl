@yield("navbar_mobile")
<div id="menu-button">
  <div id="line-1"></div>
  <div id="line-2"></div>
  <div id="line-3"></div>
</div>
<div id="menu">
  <ul>
    <li>Home</li>
    <li>Service</li>
    <li>Blog</li>
    <li>About</li>
    <li>Contact</li>
  </ul>
</div>

<script>
$("#menu-button").click(function(){
  $(this).toggleClass("active");
  $("#line-1").toggleClass("active");
  $("#line-2").toggleClass("active");
  $("#line-3").toggleClass("active");
  $("#menu").slideToggle("slow");
});
</script>