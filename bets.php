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

<form action="components/stavka.php" method="post">
<input class="invisible" type="text" name="Navi" value="Navi">
<input class="invisible" type="text" name="virtus" value="VP.P">
<div class="overflow-auto mb-3 mb-md-0 mr-md-3 comments-block" style="width: 800px; height: 700px;">
<div class="input-group ">
  <div class="input-group-prepend">
    <span class="input-group-text" enabled>Navi</span>
    <span class="input-group-text" enabled>2.15</span>
    <span class="input-group-text">$</span>
  </div>
  <input type="number" class="form-control bets-block" value=0 placeholder="Введите ставку $" name="nv" aria-label="Example text with button addon" style="width:80px">
    <div class="input-group-append">
  <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Поставить</button>
    </div>
  <input type="number" class="form-control bets-block" value=0 placeholder="Введите ставку $" name="vp" aria-label="Example text with button addon" style="width:80px">
  <div class="input-group-append">
  <span class="input-group-text">$</span>
  <span class="input-group-text" enabled>1.03</span>
  <span class="input-group-text" enabled>VP.P</span>
  </div>
</div>
</div>
</div>
<?php include 'footer.php';?>

<script type="text/javascript" src="library/jquery.js"></script>
<script type="text/javascript">
            $('form').submit(function(event) {
                event.preventDefault();
                $.post('components/stavka.php', $('form').serialize(),
                    function(data) {
                        if (data == '1') {
                            alert("Вы успешно поставили")
                        } else {
                            alert(data);
                        }
                    }
                );
            });
        </script>
        </form>

</body>
</html>