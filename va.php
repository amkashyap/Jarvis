<?php

include 'connection.php';

$query = "SELECT * from daily_assign where (`Date` > DATE_SUB(now()), INTERVAL 1 DAY)";

$result = mysql_query($query);

while($person = mysql_fetch_array($result)) {
   echo "<h2>" . $person['Date'] . "</h3>";
   echo "<h3>" . $person['Assignee'] . "</h3>"; 
   echo "<p>"  . $person['Environment'] . "</p>";
   echo "<p>"  . $person['Task'] . "</p>";
   echo "<p>"  . $person['Features'] . "</p>";
   echo "<p>"  . $person['Tickets'] . "</p>";
   echo "<p>"  . $person['Instructions'] . "</p>"; 
}
?>



