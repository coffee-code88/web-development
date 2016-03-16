<?php
$fileName="receiver.php";

include 'form.inc.php';

if(isset($_POST['submit']) && !empty(trim($_POST['username']))) {
	echo "From " . trim($_POST['username']) . ": " . $_POST['msg'];
}
?>
