<div id="bubble">
    <p><a href="http://f0597837.xsph.ru"> Домой </a></p>
  </div>
  <h1 align="center"> Лабораторная работа №2 </h1>
  <h2 align="center"> Задание 2 </h2>
  <?php

  $per = rand (3,20);
  $array = array();
  $rez = array();
  echo ("Массив из ".$per." элементов, заполненный случайными числами: ");
  for ($i=0;$i<$per;$i++)
  {
      $array[$i]=rand(10,99);
      echo $array[$i].'&nbsp;&nbsp;';
  }
  echo '<br><br>'."Массив в отсартированном виде: ";
  sort($array);
  print_r($array);

  echo '<br><br>'."Элементы массива в обратном порядке: ";
  $rez = array_reverse($array);
  print_r($rez);

  echo '<br><br>'."Массив после удаления последнего элемента: ";
  array_pop($rez);
  print_r($rez);

  echo '<br><br>'."Сумма элементов массива: ";
  $sum = array_sum($rez);
  print_r($sum);

  echo '<br><br>'."Количество элементов в массиве: ";
  $count = count($rez);
  print_r($count);

  echo '<br><br>'."Среднее арифметическое для элементов массива: ";
  $sred=$sum/$count;
  print_r($sred);
  //"Число 50:
  if (in_array(50, $rez)) {
      echo '<br><br>'."Число 50 есть в массиве";

  }
  else echo "<br><br>Число 50 нет в массиве  ";
  echo '<br><br>'."Массив из уникальных значений: ";
  $unik=array_unique($rez);
  print_r($unik);

  ?>
  <div id="bubble">
      <p><a href="http://f0597837.xsph.ru/lab2-3.php"> 	&raquo; Задание 3 </a></p>
    </div>
    <div id="bubble">
        <p><a href="http://f0597837.xsph.ru/lab2-1.php"> &laquo; Задание 1 </a></p>
      </div>
