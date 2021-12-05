<div id="bubble">
  <p><a href="http://f0603071.xsph.ru">Click for OVN Homepage!</a></p>
</div>
<head>
	<title>Логинова ПИ-322</title>
  </head>

<?php

$x=10;
$y=1;
$v=1;
$k='levo';
do {
    $mass[$x][$y]=$v;
    $fin=0;
    if (!$fin AND $k=='levo') {
    $x--;
    if ($x<1 OR isset($mass[$x][$y])) { $x++; $k='niz'; }
    else $fin=1;
    }
    if (!$fin AND $k=='niz') {
    $y++;
    if ($y>10 OR isset($mass[$x][$y])) { $y--; $k='pravo'; }
    else $fin=1;
    }
    if (!$fin AND $k=='pravo') {
    $x++;
    if ($x>10 OR isset($mass[$x][$y])) { $x--; $k='verh'; }
    else $fin=1;
    }
    if (!$fin AND $k=='verh') {
    $y--;
    if ($y<1 OR isset($mass[$x][$y])) { $y++; $k='levo'; }
    else $fin=1;
    }
    if (!$fin AND $k=='levo') {
    $x--;
    if ($x<1 OR isset($mass[$x][$y])) { $x++; $k='niz'; }
    else $fin=1;
    }
    $v++;
} while ($v<=100);

$tbl = '';
for ($y=1;$y<=10;$y++) {
    $tr = '';
    for ($x=1;$x<=10;$x++) {
        $tr .= '<td>'.$mass[$x][$y].'</td>';
    }
    $tbl .= '<tr>'.$tr.'</tr>';
}
echo '<table>'.$tbl.'</table>';

?>
