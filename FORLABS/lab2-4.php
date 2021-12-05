<div id="bubble">
  <p><a href="http://f0603071.xsph.ru">Click for OVN Homepage!</a></p>
</div>
<head>
	<title>Логинова ПИ-322</title>
  </head>
  <?php
  echo "Вариант 11";
$array = array();
$sum=0;
echo "<br>","Иходный массив: ","<br>";

for ($i=0; $i<=9;$i++){

$array[$i]=rand(-10,10);

echo "<th>","$array[$i]","</th>","   ";
}

echo "</table>";

for ($i=9;$i>=1;$i--) {
if($array[$i]<pow($i,2))
  $sum+=$array[$i];
}
echo "<br>","<br>","Сумма удовлетворяющая условию :  ","$sum","<br>";
echo "<br>";
  ?>
<?php
  echo "Вариант 14";
$massive = array();
   $c1=rand(0,9);
   $c2=rand(0,9);

   echo "<br>","Иходный массив: ","<br>";
   echo "<table border>";
   for ($i=0; $i<=9;$i++){

$massive[$i]=rand(-10,10);

echo "<th>","$massive[$i]","</th>","   ";
}
echo "</table>";
echo "C1 = ","$c1","</br>";
echo "C2 = ","$c2","</br>";


$min=$massive[0];

    for($i=0;$i<=9;$i++)
if($min>$massive[$i])
  $min=$massive[$i];

    if($c1<$c2)
    {
      for($i=$c1;$i<=$c2;$i++)
        $massive[$i]=$min;
    }
    elseif($c2<$c1){
       for($i=$c2;$i<=$c1;$i++)
        $massive[$i]=$min;
    }

echo "<br>","Обработанный массив: ","<br>";
echo "<table border>";
for ($i=0; $i<=9;$i++){
echo "<th>","$massive[$i]","</th>","   ";
}
echo "</table>";
?>
