<div id="bubble">
  <p><a href="http://f0603071.xsph.ru">Click for OVN Homepage!</a></p>
</div>
<body bgcolor="#F08080">
<?php
$a=rand(1,10);
$b=rand(10,20);
print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
for ($i=$a; $i<=$b; ++$i) {
 echo($a . "<br>");
 $a=++$a; }
?>
