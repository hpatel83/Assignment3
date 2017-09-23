<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
  <title>Months Ordered</title></head><body>
<?php
$months = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
'September', 'October', 'November', 'December');
$nummonths=count($months);
echo"For Loop<br>";
for ($a=0;$a<$nummonths; $a++){
  echo "$months[$a]"."<br>";
}
echo "<br>Foreach Array<br>";
foreach($months as $keys){
  echo "$keys"."<br>";
  }
sort($months);
echo"<br><br>Sorted Alphabetically<br>";
for ($a=0;$a<$nummonths; $a++){
  echo "$months[$a]"."<br>";
}
echo "<br> Sorted Alphabetically Foreach Array<br>";
foreach($months as $keys){
  echo "$keys"."<br>";
  }
?>
</body>
</html>