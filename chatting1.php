<html>
<head>
<script type="text/javascript">
function pageScroll() {
window.scrollBy(0,10000);
}
</script>
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
</head>
<body>
<body onload="pageScroll()">
<div id="contents">
<?php
$fps = file("./messages.txt");
$test = array_slice($fps, 0);
echo "<table  border='1' style='color: black' bordercolor='#B1749F' background='black'>";
while (list ($line_num, $line) = each ($test))
{
$line_num = $line_num + 1;
echo "<tr>";
echo "<td><p>#" .$line_num. " " .$line;
echo "</td></tr>";
}
echo "</table>";
?>
<br><br>
</div>
</body>
</html>