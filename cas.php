 
<html> 
<head> 
<style>
body {
    background-image: url("assasin_jar.jpg");
}

h1 {
color : white ;
margin-left : 450px;


}
b {
  color : white;
}
form {
  margin-left : 400px;
  margin-top : 130px;
}


</style>


<title>Create Assignment</title>

</head>

<body>

 <script language="javascript">
 var today = new Date();
 document.write(today);
 </script>



 <h1>Create Daily Assignment</h1> 
<form method="POST" action='create.php'>
 
<b><h3>Date</b> <input type="text" name="date" value="<?php
echo date("m/d/y") ?>"
></h3><br> <br> 

<b> Environment </b> 
<select name=myenvironment>
<option value=zero selected> Please select</option>
<option name=qad value=one > QAD </option>
<option name=staging value=two > Staging </option>
<option name=production value=three> Production </option>
</select>

&nbsp &nbsp &nbsp &nbsp &nbsp
  
<b> Task </b>
<select name=mytask >
<option value=zero selected> Please select</option>
<option name=regression value=one> Regression </option>
<option name=smoke value=two > Smoke </option>
<option name=bcc value=three > BCC </option>
<option name= value=four> Exploratory </option>
</select>

&nbsp &nbsp &nbsp &nbsp &nbsp

<b> Features </b>
<select name=myfeatures >
<option value=zero selected> Please select</option>
<option name=Roles value=one> Roles and Permissions </option>
<option name=Dashboard value=two > Dashboard </option>
<option name=LPN value=three > LPN </option>
<option name=Reader value=four> Reader </option>
<option name=DateManager value=five> Date Manager </option>
<option name=BuilderOrganizations value=six> Builder - Organizations </option>
<option name=AdminBuilder value=seven > Admin Builder </option>
<option name=AdaptiveTestPrep value=eight> Adaptive Test Prep </option>
<option name=Suppression value=nine> Suppression </option>
<option name=HideAndShow value=ten> Hide & Show </option>
<option name=CompactView value=eleven > Compact View </option>
<option name=Print value=twelve> Print </option>
<option name=LPNScores value=thirteen> LPN Scores </option>
<option name=GenericAppDock value=fourteen> Generic App Dock </option>
<option name=Questia value=fifteen > Questia </option>
<option name=SessionTimeout value=sixteen> Session Timeout </option>
<option name=MessageCenter value=seventeen> Message Center </option>
<option name=Analytics value=eighteen> Analytics </option>
<option name=Accessibility value=nineteen > Accessibility </option>
<option name=AA value=twenty> AA </option>
<option name=CloneMasters value=twenty-one> Clone Masters </option>
<option name=Media value=twenty-two> Media </option>
<option name=ActiveListeningGuide value=twenty-three > 	Active Listening Guide </option>
<option name=CSM value=twenty-four> CSM </option>
<option name=FullBook value=twenty-five> FullBook </option>
<option name=StudyHub value=twenty-six> Study Hub </option>
<option name=CompositionTool value=twenty-seven > Composition Tool </option>
<option name=SnapshotCreation value=twenty-eight> Snapshot Creation </option>
</select>



<br/> <br/>

<b> Assignee </b> &nbsp&nbsp&nbsp&nbsp
<select name=assignee >
<option value=zero selected> Please select</option>
<option name=amit value=one> Amit </option>
<option name=krati value=two > Krati </option>
<option name=ritesh value=three > Ritesh </option>
<option name=nikita value=four> Nikita </option>
<option name=parvez value=four> Parvez </option>
</select> <br> <br>

<b>JiraID</b>  <input type="text" name="jiraid" value=""> &nbsp &nbsp <input type="submit" name="add" value="ADD" action="<?php 
$_POST['jiraid'] ?>" <br/> <br>



<b>Ticket Basket</b> <br><textarea rows="10" cols="50" maxlength="10000" name="ticketbasket" value="<?php $_POST['add'] ?>"> </textarea><br>

<b>Instructions</b> <br><textarea rows="10" cols="50" maxlength="1000" name="instructions"></textarea><br>

 <input type="submit" name="submit" value="Generate Assignment"> </form> 

 </body>
 </html> 