<ul>
Вставь ссылку в поисковик для перехода на главную страиницу сайта
<li>http://f0597837.xsph.ru</li>

<?php
$a=rand(1,10);
$b=rand(10,20);
print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
for ($i=$a; $i<=$b; ++$i) {
 echo($a . "<br>");
 $a=++$a; }
?>
