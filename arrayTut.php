<html>
 <head>
  <title>PHP Array</title>
 </head>
 <body>
 <?php
/*$arr = array (34 , 140, 78, 54, 12, 7, 1200, 29, 2, 111);
$cnt = count($arr);
echo 'Number of elements in array' , $cnt;
echo "<br> Given array";
var_dump($arr);
for($i=0; $i<$cnt; $i++)
{
	for($j=$i+1; $j<$cnt; $j++)	
		if($arr[$i] > $arr[$j])
		 {
			
			$temp = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $temp;
		 }
}
echo 'sorted array';
var_dump($arr);
echo "second biggest is by index in sorted array", $arr[$i-2];*/
//finding second largest independent of sorting

$arr = array (34 , 140, 78, 54, 12, 7, 1200, 29, 2, 111);
$cnt = count($arr);
echo 'Number of elements in array' , $cnt;
echo "<br> Given array";
var_dump($arr);
if($arr[0] > $arr[1])
{
	$biggest = $arr[0];
	$secBiggest = $arr[1];
}
else
{
	$biggest = $arr[1];
	$secBiggest = $arr[0];
}
$cnt = $cnt-2; // already compared first two
for($i=3; $i<$cnt; $i++)
{
	
		if($arr[$i] > $biggest)
		 {
			
			$secBiggest = $biggest;
			$biggest = $arr[$i];
			 
		 }
		 elseif($arr[$i] > $secBiggest)
			$secBiggest=$arr[$i];
		  
}
echo "the largest: ", $biggest;
echo "the second largest: ", $secBiggest;
?>
  <span><h3>Next assignment<table>
  <!-- <tr><td>1. numeric array : 1, 567, 29886, </td></tr> -->
  <!-- <tr><td>2. sort array </td></tr> -->
  <!-- <tr><td>3.find second largest number </td></tr> -->
</table></span>
 </body>
</html>


