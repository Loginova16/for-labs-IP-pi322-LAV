<div id="bubble">
  <p><a href="http://f0603071.xsph.ru">Click for OVN Homepage!</a></p>
</div><body bgcolor="#F08080">
<head>
	<title>Логинова ПИ-322</title>
  </head>
  <?php

  function f($u, $t) {
    if ( $u>2)
        return pow($u^2+$t,1/3)*pow(sin($t),2);
    elseif ( $u <= 2)
        return log(abs($u^2/($u+$t)));

}


  echo "<img src='Уравнение1.png'>";
$A=rand(-10,10);
$B=rand(-10,10);

echo "<br>","A = $A;","<br>","B = $B","<br>";

$result=sin(f($B,$A))+sqrt(abs(f($A,$B)));
echo "Результат = ","$result";
echo "<br>";
  ?>
  <?php



  function f2($u, $t) {
     if ( $u < -2 )
         return 2*$u;
     elseif ( $u >= -2 && $u <= 2 )
         return $t;
     elseif ( $u >= 0 && $t < 0 )
         return sin(pow($u,3))+log(abs($t));
       elseif ( $u >2)
         return pow(pow(cos($u),2)+pow(sin(pow($t,3)),4),1/4);}


   echo "<img src='Уравнение.png'>";
 $A=rand(-10,10);
 $B=rand(-10,10);

 echo "<br>","A = $A;","<br>","B = $B","<br>";

 $result=log(abs(f2($A,$B)))+f(pow($A,2),$A+$B);
 echo "Результат = ","$result";
  ?>
