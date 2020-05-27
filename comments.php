<?php
require "components/db_connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
<script type="text/javascript">
  VK.init({apiId: 7481891, onlyWidgets: true});
</script>
</head>
<body>
 <?php include 'header.php';?>
<div class="intro">

<div class="overflow-auto mb-3 mb-md-0 mr-md-3 comments-block" style="width: 800px; height: 700px;">
<br><div id="vk_comments" class="comments-block_item"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 5, width: "600", attach: "*"});
</script>
</div>
</div>


</div>
<?php include 'footer.php';?>
</body>
</html>