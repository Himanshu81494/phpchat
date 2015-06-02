<?php 
session_start();
?>
<button onmouseover="this.style.cursor='pointer'";  onClick="send()">
<img src="./send.jpg" width="133"></button><br>
<textarea style="background: black; color: white; text-align: left"  type="text"  name="search" id="chat"  value=""></textarea>
<br>
<div id="frame1">
<iframe  src="chatting1.php">
</iframe>
</div>
<style type="text/css">
	iframe{
		width: 20% !important;
		height:300px !important;

	}
	textarea{
		width:20% !important;
		height:80px !important;
	}
</style>
<script>
function send()
{
var message = document.getElementById('chat').value;
var meslen = message.length;
var user="<?php echo $_SESSION['user']; ?>";
if (meslen <= 0)
{
alert('Please,write the message.');
}
else if (meslen >= 81)
{
alert('Maximum characters in your messages must be 80');
}
else
{
document.getElementById("frame1").innerHTML='<iframe src="chatting2.php?message='+message+'&user='+user+'"></iframe>';
}
}
</script>