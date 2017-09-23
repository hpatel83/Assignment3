<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
  <title>Nice Restaurants</title>
</head>
<body>
<?php
function make_table($array){
    $html = '<table>';
    $html .= '<tr>';
    foreach($array[0] as $key1=>$value1){
            $html .= '<th>' . $key1 . '</th>';
        }
    $html .= '</tr>';
    foreach( $array as $key1=>$value1){
        $html .= '<tr>';
        foreach($value1 as $key2=>$value2){
            $html .= '<td>' . $value2 . '</td>';
        }
        $html .= '</tr>';
    }
    $html .= '</table>';
    return $html;
}
$Rest = array(
   array("Restaurants"=>"Chama Gaucha", "Average Cost"=>(double)40.50),
   array("Restaurants"=>"Aviva by Kameel", "Average Cost"=>(double)15.00),
   array("Restaurants"=>"Bone’s Restaurant", "Average Cost"=>(double)65.00),
   array("Restaurants"=>"Umi Sushi Buckhead", "Average Cost"=>(double)40.50),
   array("Restaurants"=>"Fandangles", "Average Cost"=>(double)30.00),
   array("Restaurants"=>"Capital Grille", "Average Cost"=>(double)60.50),
   array("Restaurants"=>"Canoe", "Average Cost"=>(double)35.50),
   array("Restaurants"=>"One Flew South", "Average Cost"=>(double)21.00),	
   array("Restaurants"=>"Fox Bros. BBQ", "Average Cost"=>(double)15.00),
   array("Restaurants"=>"South City Kitchen Midtown", "Average Cost"=>(double)29.00),
);
echo "Table of restaurants and prices.";
echo make_table($Rest);
asort($Rest);
echo "Table of restaurants and prices sorted alphabetically.";
echo make_table($Rest);
usort($Rest, 'sortbyprice');
function sortbyprice($first, $second)
{
    if($first['Average Cost'] == $second['Average Cost'])
        return ($first['Average Cost'] < $second['Average Cost']);
    else
        return ($first['Average Cost'] > $second['Average Cost']);
}
echo "Table of restaurants and prices sorted by cost.";
echo make_table($Rest);
?>
</body>
</html>