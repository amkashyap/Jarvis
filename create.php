<?php edit

include 'connection.php';

$a = $_POST['assignee'];
$j = $_POST['jiraid'];
$r = $_POST['regression'];
$i = $_POST['instructions'];

if(!$_POST['submit']) {
 echo "kindly fill out the form";
  header('Location: ca.html');
}
else {

       mysql_query("INSERT INTO daily_assign(`Assignee`,`JiraID`,`Regression`,`Instructions`) VALUES('$a','$j','$r','$i')") or die(mysql_error());

           echo "Data saved into database successfully ";
           header('Location: ca.html');
  }
?>

