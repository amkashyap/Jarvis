<?php

include 'connection.php';

$query = "sELECT * from daily_assign";

$result = mysql_query($query);

while($person = mysql_fetch_array($result)) {
   echo "<h3>" . $person['Assignee'] . "</h3>"; 
   echo "<p>"  . $person['JiraID'] . "</p>";
   echo "<p>"  . $person['Regression'] . "</p>";
   echo "<p>"  . $person['Instructions'] . "</p>"; 
}
?>



