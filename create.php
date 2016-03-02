<?php

include 'connection.php';

$d = $_POST['date'];
$e = $_POST['myenvironment'];
$task = $_POST['mytask'];
$f = $_POST['myfeatures'];
$a = $_POST['assignee'];
$t = $_POST['ticketbasket'];
$i = $_POST['instructions'];

if(!$_POST['submit']) {
 echo "please fill out the form";
  header('Location: cas.php');
}
else {

       mysql_query("INSERT INTO daily_assign(`Date`,`Environment`,`Task`,`Features`,`Assignee`,`Tickets`,`Instructions`) VALUES('$d','$e','$task','$f','$a','$t','$i')") or die(mysql_error());

           echo "Data saved into database successfully ";
           header('Location: cas.php');
  }
?>

