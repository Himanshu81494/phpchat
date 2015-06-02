<?php
$message = htmlspecialchars($_GET['message']);
$user = htmlspecialchars($_GET['user']);
if ($message)
{
$fp = fopen('./messages.txt', 'a');
$date = date("g:i A");
fwrite($fp, "By ".$user." at " .$date. "</p><br>" .$message. "\n");
fclose($fp);
header("Location: chatting1.php");
}
else
{
header("Location: chatting1.php");
}
?>