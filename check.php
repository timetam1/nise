<?php
$name = $_POST["name"];
$gazou = $_POST["gazou"];
print "<p>以下の情報で間違い無いですか</p>";
print "名前".$name;
print "画像".$gazou;
?>

<a href="form.php">いいえ</form>
<a href="input.php?id=<?php print $name; ?>">はい</form>


