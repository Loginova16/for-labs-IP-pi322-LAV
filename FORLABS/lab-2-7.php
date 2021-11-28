<div id="bubble">
  <p><a href="http://f0603071.xsph.ru">Click for OVN Homepage!</a></p>
</div>

<?php
$a=rand(-5,0);
$b=rand(0,5);
print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
do {
echo($a . "<br>");
$a=++$a; }
while ($a<=$b);
?>
