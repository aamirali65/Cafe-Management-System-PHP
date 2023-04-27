<?php
if(isset($_POST['btn'])){
	$a = $_POST['a'];
	$date=date_create($a);
echo date_format($date,"Y-m-d h:i:A");
}
?>
<form method="post">
<input type="datetime-local" name="a">
<input type="submit" name="btn">
</form>