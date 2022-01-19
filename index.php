<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<body>
<h1> Ëîãèíîâà À. Â. </h1>
<p> Äàòà è âðåìÿ:

<?php
        date_default_timezone_set("Asia/Yekaterinburg");
	$d=date("d.m.Y H:i");
	
	echo($d);
?>
<br><br>

<a href='./4/'>Ëàáîðàòîðíàÿ ðàáîòà ¹4</a><br>
<a href='./5/'>Ëàáîðàòîðíàÿ ðàáîòà ¹5</a><br>

</body>

