<div id="bubble">
  <p><a href="http://f0603071.xsph.ru">Click for OVN Homepage!</a></p>
</div>
<body bgcolor="#F08080">
<p> Мат. операция;
<p>
  <?php
$a=rand(-20,20);
$c=rand(-20,20);
$d=rand(-20,20);
if ($d==0 or ($c-$a+1)==0){
  $result = 'На ноль делить нельзя!';
}
else {
  $result = ((($c/$d)+3*($a/2))/($c-$a+1));
}
print (((($c . '/' . $d) . '3' . '*' . ($a . "/2")) . '/' . ($c . '-' . '(' . ($a) . ')' . '+1')) . '=' . $result);
   ?>
