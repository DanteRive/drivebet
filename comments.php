<?php
require "components/db_connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
<script type="text/javascript">
  VK.init({apiId: 7481891, onlyWidgets: true});
</script>
</head>
<body>
 <?php include 'header.php';?>
<div class="intro">
<!-- Put this div tag to the place, where the Comments block will be -->
<br><div id="vk_comments" class="comments-block"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 60, width: "600", attach: "*"});
</script>
</div>
<?php include 'footer.php';?>
</body>
</html>