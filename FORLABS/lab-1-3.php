<div id="bubble">
  <p><a href="http://f0603071.xsph.ru">Click for OVN Homepage!</a></p>
</div>

<p> Мат. операция:
<p>
<?php
$NUM_E=(M_E);

echo ('Namber e' . ' = ' . $NUM_E . '<br>');

$num_e1=($NUM_E);
echo ('$num_e1' . ' = ' . $num_e1 . ' - ');
echo gettype($num_e1) . '<br>';
$num_e1 = (string) $num_e1;
echo ('$num_e1' . ' = ' . $num_e1 . ' - ');
echo gettype($num_e1) . '<br>';
$num_e1 = (int) $num_e1;
echo ('$num_e1' . ' = ' . $num_e1 . ' - ');
echo gettype($num_e1) . '<br>';
$num_e1 = (float) $num_e1;
echo ('$num_e1' . ' = ' . $num_e1 . ' - ');
echo gettype($num_e1) . '<br>';
$num_e1 = (string) $num_e1;
echo ('$num_e1' . ' = ' . $num_e1 . ' - ');
echo gettype($num_e1) . '<br>';
?>
