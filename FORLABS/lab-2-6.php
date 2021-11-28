<div id="bubble">
  <p><a href="http://f0603071.xsph.ru">Click for OVN Homepage!</a></p>
</div>

<?php
$a=rand(1,10); $b=rand(10,20);
print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
while ($a<=$b) { echo $a . "<br>";
 $a=++$a; }
?>
