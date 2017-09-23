<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset = "utf-8">
	<title>Checkerboard</title>
</head>
<style type="text/css">
*{
	padding: 0;
	margin: 0;
}
	table{border-spacing: 1px; }
	td{border-collapse: collapse;  padding: 1px; }
	.blackspace{
		background-color: black;
		width: 35px;
		height: 35px;
		border: 1px;
	}
	.redspace{
		background-color: red;
		width: 35px;
		height: 35px;
		border: 1px;
	}
</style>
<body>
	<table>
		<tbody>
			<?php
				for($i=1; $i<=8; $i++){
					echo "<tr>";
					for($j=1; $j<=4; $j++){
						echo "<td></td>";
						if($i % 2 == 0){
							echo '<td class="blackspace"></td>';
							echo '<td class="redspace"></td>';
						}
						else{
							echo '<td class="redspace"></td>';
							echo '<td class="blackspace"></td>';
						}
					}
				echo "</tr>";
				}
?>
</tbody>
</table>
</body>
</html>