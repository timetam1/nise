<?php
$name = $_POST["name"];
$gazou = $_POST["gazou"];
?>
<form action = "check.php"  method = "post"> 
<dt>名前を入れて</dt>
<input type = "text" name = "name">
<dt>画像を入れて</dt>
<input type = "text" name = "gazou">
<input type = "submit" value= "送る">
</form>
