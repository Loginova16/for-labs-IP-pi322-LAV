<div id="bubble">
  <p><a href="http://f0603071.xsph.ru">Click for OVN Homepage!</a></p>
</div>
<body bgcolor="#F08080">
<HTML>
  <TITLE> Таблица умножения </TITLE>
  <BODY>
    <TABLE border=1>
      <?php
//echo '<table border=1>';
       for ($i = 0; $i < 10; $i++)
       {
         echo '<tr>';
         for ($k = 1; $k < 11; $k++)
         {
           echo '<td style="color:'.($k%2?'black':'red').'">'.($i*10+$k).'</td>';
         }
         echo '</tr>';
       }
       echo '</table>';
       ?>
  </TABLE>
</BODY>
</HTML>
