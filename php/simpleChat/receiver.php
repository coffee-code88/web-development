<?php
$fileName="sender.php";
include 'form.inc.php';

if(isset($_POST['submit']) && !empty(trim($_POST['username']))) {
	echo "From " . $_POST['username'] . ": " . $_POST['msg'];
}

?>
