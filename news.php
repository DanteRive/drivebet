<?php
require "components/db_connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
</head>
<body>
 <?php include 'header.php';?>
<div class="intro">
<!--<iframe class="news" style="background-color: #ffffff;" src="https://newsnovosti.ru/novosti-sport-widget/" name="novosti-sport" width="600px" height="800" frameborder="0" marginwidth="2" marginheight="4"></iframe>-->
    <div class="news" id="championat-informer21620"></div>
    <script>(function(w, d, s, t) {
    t = d.getElementsByTagName("script")[0];s = d.createElement("script");s.src = "https://st.championat.com/informer/_script.js";s.type = "text/javascript";s.id = 'championat-informer';s.async = true;
    t.parentNode.insertBefore(s, t);s.onload = function(){new ChampionatInformer('championat-informer21620', {"width":"600","height":"600"}, {"type":"news","width":"600","limit":"20","height":"600"}).init(); };
})(window, document);</script>
</div>
<?php include 'footer.php';?>
</body>
</html>