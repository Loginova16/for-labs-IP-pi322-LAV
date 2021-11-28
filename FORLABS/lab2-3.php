<div id="bubble">
  <p><a href="http://f0597837.xsph.ru">Click for OVN Homepage!</a></p>
</div>
  <?php


  echo'Ассоциативный массив <br>';
  $cust= array("cnum"=>"2001", "cname"=>"Hoffman", "city"=>"London", "snum"=>"1001");
  print_r ($cust);
  echo'<br> ---------------------------------------------------------------------------------------------------------------------------------------------------------------';
  echo '<br><br><br>Добавление ключа rating со значением 100 в массив <br>';
  $cust["rating"] = 100;
  foreach($cust as $k => $v)
  echo  $k, ' => ', $v;

echo'<br>';
echo'<br>';
  echo '<br><br><br>Сортировка массива по ключам <br> ';
  ksort($cust);
  print_r($cust);
echo'<br>';
  echo '<br><br><br>Отсортированный массив <br>';
  sort($cust);
  print_r($cust);
echo'<br>';

?>
