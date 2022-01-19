<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
   <body bgcolor="#FFC0CB">
<body>

<?php
  session_start();

  $conn = mysqli_connect("sql11.freemysqlhosting.net","sql11466478","vbqFjsYdN9", "sql11466478") or die ("Íĺâîçěîćíî ďîäęëţ÷čňüń˙ ę ńĺđâĺđó");
  mysqli_query($conn, "SET NAMES cp1251");

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $query=mysqli_query($conn, "SELECT * FROM users WHERE username='".$_POST["username"]."' AND password='".md5($_POST["password"])."'");
    if($fetch = mysqli_fetch_array($query)) {
      $_SESSION["username"] = $fetch["username"];
      $_SESSION["rule"] = $fetch["rule"];
      if(!$_SESSION["count"]) $_SESSION["count"] = 0;
    }
    else {
      echo "<html><head><title>Ŕâňîđčçŕöč˙</title></head><body>";
      echo "Íĺâĺđíîĺ čě˙ ďîëüçîâŕňĺë˙ čëč ďŕđîëü!<br>";
      echo "<br><a href='.'> Âĺđíóňüń˙ </a>";
    }
  }
  elseif(!$_SESSION["username"]) { 
    echo "<html><head><title>Ŕâňîđčçŕöč˙</title></head><body>";
    echo "<h1>Ëîăčíîâŕ Ŕ. Â.</h1>";
    echo "<form method='post' action='". $PHP_SELF ."'>";
    echo "<p>Ďîëüçîâŕňĺëü:</p><input type='text' name='username' size='20'>";
    echo "<p>Ďŕđîëü:</p><input type='password' name='password' size='20'><br><br>";
    echo "<input type='submit' name='submit' value='Âîéňč'></form>";
    echo "<br><a href='..'>Íŕçŕä</a><br>";
  }
  
  if($_SESSION["username"]) {
    $query=mysqli_query($conn, "SELECT rule FROM users WHERE username='" . $_SESSION["username"] . "'");
    if($fetch = mysqli_fetch_array($query)) $_SESSION["rule"] = $fetch["rule"];

    echo "<html><head><title>Áŕçŕ äŕííűő</title></head><body>";
    echo "<h2>ßçűęč ďđîăđŕěěčđîâŕíč˙:</h2>";
    echo "<table border='1'>";
    echo "<tr><th> id </th>";
    echo "<th> Íŕçâŕíčĺ </th> <th> Ňčď </th>";
    echo "<th> Ăîä đŕçđŕáîňęč </th> <th> Ňčď âűďîëíĺíč˙ </th> <th> Đŕçđŕáîň÷čę </th>";
    echo "<th> Đĺäŕęňčđîâŕňü </th>";
    if($_SESSION["rule"] == 2) echo "<th>Óíč÷ňîćčňü</th>";
    echo "</tr>";
    $result=mysqli_query($conn, "SELECT * FROM pl");
    while ($row=mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["type"] . "</td>";
      echo "<td>" . $row["year"] . "</td>";
      echo "<td>" . $row["exec"] . "</td>";
      echo "<td>" . $row["dev"] . "</td>";
      echo "<td><a href='edit_pl.php?id=" . $row["id"]
      . "'>Đĺäŕęňčđîâŕňü</a></td>";
      if($_SESSION["rule"] == 2) echo "<td><a href='delete_pl.php?id=" . $row["id"]
      . "'>Óäŕëčňü</a></td>";
      echo "</tr>";
    }
    echo "</table>";
    $num_rows = mysqli_num_rows($result);
    echo "<p> Âńĺăî çŕďčńĺé: $num_rows </p>";
    echo "<a href='new_pl.php'> Äîáŕâčňü çŕďčńü </a><br><br>";

    echo "<h2>Đŕçđŕáîň÷čęč:</h2>";
    echo "<table border='1'>";
    echo "<tr><th> id </th>";
    echo "<th> Íŕçâŕíčĺ </th> <th> Ăîđîä </th>";
    echo "<th> Đĺäŕęňčđîâŕňü </th>";
    if($_SESSION["rule"] == 2) echo "<th> Óíč÷ňîćčňü </th></tr>";
    $result=mysqli_query($conn, "SELECT * FROM developer");
    while ($row=mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["city"] . "</td>";
      echo "<td><a href='edit_developer.php?id=" . $row["id"]
      . "'>Đĺäŕęňčđîâŕňü</a></td>";
      if($_SESSION["rule"] == 2) echo "<td><a href='delete_developer.php?id=" . $row["id"]
      . "'>Óäŕëčňü</a></td>";
      echo "</tr>";
    }
    echo "</table>";
    $num_rows = mysqli_num_rows($result);
    echo "<p> Âńĺăî çŕďčńĺé: $num_rows </p>";
    echo "<a href='new_developer.php'> Äîáŕâčňü çŕďčńü </a><br><br>";

    echo "<h2>Ďđčëîćĺíč˙:</h2>";
    echo "<table border='1'>";
    echo "<tr><th> id </th>";
    echo "<th> id ßçűęŕ ďđîăđŕěěčđîâŕíč˙ </th> <th> id Đŕçđŕáîň÷čęŕ </th>";
    echo "<th> id Äŕňŕ ńîçäŕíč˙ </th> <th> Ňĺęóůŕ˙ âĺđńč˙ </th>";
    echo "<th> Íŕçâŕíčĺ </th>";
    echo "<th> Đĺäŕęňčđîâŕňü </th>";
    if($_SESSION["rule"] == 2) echo "<th> Óíč÷ňîćčňü </th> </tr>";
    $result=mysqli_query($conn, "SELECT * FROM app");
    while ($row=mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["id_pl"] . "</td>";
      echo "<td>" . $row["id_developer"] . "</td>";
      echo "<td>" . date("d.m.Y", strtotime($row["date"])) . "</td>";
      echo "<td>" . $row["ver"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td><a href='edit_app.php?id=" . $row["id"]
      . "'>Đĺäŕęňčđîâŕňü</a></td>";
      if($_SESSION["rule"] == 2) echo "<td><a href='delete_app.php?id=" . $row["id"]
      . "'>Óäŕëčňü</a></td>";
      echo "</tr>";
    }
    echo "</table>";
    $num_rows = mysqli_num_rows($result);
    echo "<p> Âńĺăî çŕďčńĺé: $num_rows </p>";
    echo "<a href='new_app.php'> Äîáŕâčňü çŕďčńü </a><br><br>";

    if($_SESSION["rule"] == 2) {
      echo "<h2>Ďîëüçîâŕňĺëč:</h2>";
      echo "<table border='1'>";
      echo "<tr><th>Čě˙ ďîëüçîâŕňĺë˙</th><th>Ďŕđîëü</th><th>Ďđŕâŕ äîńňóďŕ</th>";
      echo "<th>Đĺäŕęňčđîâŕňü</th><th>Óíč÷ňîćčňü</th></tr>";
      $query=mysqli_query($conn, "SELECT * FROM users");
      while($fetch=mysqli_fetch_array($query)) {
        echo "<tr><td>" . $fetch["username"] . "</td>";
        echo "<td>" . $fetch["password"] . "</td>";
        echo "<td>" . $fetch["rule"] . "</td>";
        echo "<td><a href='edit_users.php?username=" . $fetch["username"] . "'>Đĺäŕęňčđîâŕňü</a></td>";
        echo "<td><a href='delete_users.php?username=" . $fetch["username"]. "'>Óäŕëčňü</a></td></tr>";
      } 
      echo "</table>";
   
      $num_rows = mysqli_num_rows($query);
      echo "<p> Âńĺăî çŕďčńĺé: $num_rows </p>";
      echo "<a href='new_users.php'>Äîáŕâčňü çŕďčńü</a><br><br>";
    }

    echo "<br><a href='gen_pdf.php'> Ńîőđŕíčňü PDF </a><br>";
    echo "<a href='gen_xls.php'> Ńîőđŕíčňü Excel </a><br>";

    $_SESSION["count"]++;
    echo "<br>Ďîäęëţ÷ĺíčé çŕ ńĺńńčţ: " . $_SESSION["count"];
    echo "<br><a href='exit.php'>Âűőîä</a><br>";

    echo "<br><a href='https://php-loginova.herokuapp.com'>Íŕçŕä</a><br>";

    echo "</body></html>";
 }
?>
