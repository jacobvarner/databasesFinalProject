<?php
function executeQuery($query) {

  $result = mysql_query($query);
  $i = 0;
  echo "<table class='table table-striped table-bordered'>";
  echo "<thead>";
  echo "<tr>";
  while ($i < mysql_num_fields($result)) {
    echo "<th>".mysql_fetch_field($result, $i)->name."</th>";
    $i++;
  };
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
  while ($row = mysql_fetch_array($result)) {
    $n = 0;
    echo "<tr>";
    while ($n < count($row)/2) {
      echo "<td>".$row[$n]."</td>";
      $n++;
    }
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
}
?>
