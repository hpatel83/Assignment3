<html>
<head>
	<meta charset = "utf-8">
	<title>Charlie thief or not</title>
</head>
<body>
<?php
function isBitten(){
	$i=rand(0,100);
	if ($i<=50){
		echo "Charlie ate my lunch!";
	}
	else{
		echo "Charlie did not eat my lunch.";
	}
}
isBitten();
?>
</body>
</html>