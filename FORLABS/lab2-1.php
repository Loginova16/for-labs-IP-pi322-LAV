<div id="bubble">
  <p><a href="http://f0597837.xsph.ru">Click for OVN Homepage!</a></p>
</div>

    <?php
    $treug=array(1,2,3,4,5,6,7,8,9,10);
    $kvd=array(1,2,3,4,5,6,7,8,9,10);
    $rez=array();
    $rez1=array();
     echo '<br><br><br><br>Задание 1<br>';
   echo'massiv treugolnuh chisel: ';
   foreach($treug as $k=>$n) {
       $treug[$k]=$n*($n+1)/2;
       echo $treug[$k] .'&nbsp;&nbsp;';
      }
       echo '<br><br><br><br>Задание 2<br>';
    echo'Massiv kvadratov naturalnuh chisel: ';
    foreach($kvd as $a=>$b) {
       $kvd[$a]=$b*$b;
       echo $kvd[$a].'&nbsp;';
       }
    echo '<br><br><br><br>Задание 3<br>';
    echo'Massiv rezultat: ';
    $rez=array_merge($treug,$kvd);
    print_r($rez);
    echo '<br><br><br><br>Задание 4<br>';
    echo'Otsortirovannui massiv: ';
    sort($rez);
    reset($rez);
    while (list($key, $val) = each($rez)) {
    echo "rez  [" . $key . "] = " . $val . "\n";
   }
    echo '<br><br><br><br>Задание 5<br>';
    echo'Massiv s udalennum pervum elementom: ';
   array_shift($rez);
   print_r($rez);
    echo '<br><br><br><br>Задание 6<br>';
    echo'Massiv s udalennumi povtoryauwimi elementami : ';
    $rez1 = array_unique($rez);
print_r($rez1);
   ?>
