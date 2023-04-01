<!DOCTYPE html>
<html>
  <head>
    <title>Multiplication Table</title>
    <style>
      table {
        border-collapse: collapse;
      }
      th, td {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
      }
      th {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <?php
    $number = 5;
    echo "<h2>Multiplication Table of $number</h2>";
    echo "<table>";
    echo "<tr><th>X</th>";
    for ($i = 1; $i <= 10; $i++) {
      echo "<th>$i</th>";
    }
    echo "</tr>";
    for ($j = 1; $j <= 10; $j++) {
      echo "<tr><th>$j</th>";
      for ($k = 1; $k <= 10; $k++) {
        echo "<td>" . ($j * $k) . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
    ?>
  </body>
</html>
