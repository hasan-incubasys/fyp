<?php
$file = fopen("prediction.txt","r");
$array= array();
while(! feof($file))
  {
  $data=fgets($file);
  $pieces=explode(" ",$data);
  //echo $pieces[2];
  if ($pieces[0])
  {
  $index=$pieces[2];
   //echo $index;
  $score=$pieces[4];
  $array[$index]=$score;
}
  }
arsort($array);
foreach ($array as $key => $val) {
    echo "$key = $val\n";

}







/*$length = count($array);

$loop=0;

while ($loop<10)
{
echo $length-1 ."<br />";	
echo $array[$length-1] . "<br />";

$loop++;
$length--;

}*/




fclose($file);
?>









