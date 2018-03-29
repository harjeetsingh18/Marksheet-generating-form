<html>
<head>
<title>Marksheet</title>
<link rel="stylesheet" type="text/css" href="marksheet.css">
</head>
<body>
<h1>Marksheet</h1>
<?php 
     $name=$fname=$mname=$school=$passYear=$issueDate=$control=null;
	 $roll=null;
	 $subcode=array();
	 $subject=array();
	 $marks=array();
	 $Wmarks=array();
	 $grade=array();
	 if($_SERVER["REQUEST_METHOD"]=="POST")
	 {
 		 if(empty($_POST["name"]))
		 {
		   $name="<span class='error'>Name is required</span>";
		 }
		 else
			 $name=inputModify($_POST["name"]);
		 if(!preg_match("/^[a-zA-Z\s]*$/",$name))
		 {
			$name="<span class='error'>Only letters and space allowed</span>";
		 }
		 if(empty($_POST["rollno"]))
		 {
		   $roll="<span class='error'>Roll No. is required</span>";
		 }
		 else
		     $roll=inputModify($_POST["rollno"]);
		 if(empty($_POST["father"]))
		 {
		   $fname="<span class='error'>Father Name is required</span>";
		 }
		 else
		    $fname=inputModify($_POST["father"]);
		 if(!preg_match("/^[a-zA-Z\s]*$/",$fname))
		 {
			$fname="<span class='error'>Only letters and space allowed</span>";
		 }
		if(empty($_POST["mother"]))
		 {
		   $mname="<span class='error'>Mother Name is required</span>";
		 }
		 else
		    $mname=inputModify($_POST["mother"]);
		 if(!preg_match("/^[a-zA-Z\s]*$/",$mname))
		 {
			$mname="<span class='error'>Only letters and space allowed</span>";
		 }
		 if(empty($_POST["school"]))
		 {
		   $school="<span class='error'>School Name is required</span>";
		 }
		 else
		    $school=inputModify($_POST["school"]);
		 if(!preg_match("/^[a-zA-Z\s]*$/",$school))
		 {
			$school="<span class='error'>Only letters and space allowed</span>";
		 }
		 if(empty($_POST["pass"]))
		 {
		   $passYear="<span class='error'>Passing year is required</span>";
		 }
		 else
		    $passYear=inputModify($_POST["pass"]);
	     $issueDate=inputModify($_POST["issue"]);
		 if(empty($_POST["control"]))
		 {
		   $control="<span class='error'>controller Name is required</span>";
		 }
		 else
	       $control=inputModify($_POST["control"]);
		 if(!preg_match("/^[a-zA-Z\s]*$/",$control))
		 {
			$control="<span class='error'>Only letters and space allowed</span>";
		 }
		 for($x=0;$x<5;$x++)
		 {		 
		   $subcode[]=inputModify($_POST["subcode".($x+1)]);
		 }
		 for($x=0;$x<5;$x++)
		 {	 
		   $subject[]=inputModify($_POST["subject".($x+1)]);
		 }
		 for($x=0;$x<5;$x++)
		 {	 
		   $marks[]=inputModify($_POST["marks".($x+1)]);
		 }
		 for($x=0;$x<5;$x++)
		 {	 
		   $Wmarks[]=inputModify($_POST["Wmarks".($x+1)]);
		 }
		 for($x=0;$x<5;$x++)
		 {	 
		   $grade[]=inputModify($_POST["grade".($x+1)]);
		 }
	 }
	 function inputModify($data)
	 {
		 $data=trim($data);
		 $data=stripslashes($data);
		 $data=htmlspecialchars($data);
		 return $data;
	 }
	 ?>
	 <div>
	 <h1>CENTRAL BOARD OF SECONDARY EDUCATION</h1>
	 <h2>MARKS STATEMENT</h2>
	 <h2>SENIOR SCHOOL CERTIFICATE EXAMINATION <?php echo $passYear; ?></h2>
	 <p><span class="left">Name : <?php echo "<span class='value'>$name</span>"; ?></span><span class="right">Roll No. : <?php echo "<span class='value'>$roll</span>"; ?></span></p>
     <p><span class="left">Father's Name : <?php echo "<span class='value'>$fname</span>"; ?></span><span class="right">Mother's Name : <?php echo "<span class='value'>$mname</span>"; ?></span></p>
	 <p class="left">School : <?php echo "<span class='value'>$school</span>"; ?></p>
	 <table>
  <tr>
    <th rowspan="2">SUB CODE</th>
    <th rowspan="2">SUBJECT</th>
    <th>MARKS OBTAINED</th>
    <th rowspan="2">POSITIONAL GRADE</th>
  </tr>
  <tr>
   <td><table class="innertable">
          <tr>
            <th>MARKS</th>
            <th>MARKS IN WORDS</th>
          </tr>
        </table>
   </td>
  </tr>
  <tr>
     <td><?php echo "<span class='value'>$subcode[0]</span>"; ?></td>
     <td><?php echo "<span class='value'>$subject[0]</span>"; ?></td>
     <td><table class="innertable">
          <tr>
            <td><?php echo "<span class='value'>$marks[0]</span>"; ?></td>
            <td><?php echo "<span class='value'>$Wmarks[0]</span>"; ?></td>
          </tr>
        </table>
     </td>
     <td><?php echo "<span class='value'>$grade[0]</span>"; ?></td>
  </tr>
  <tr>
     <td><?php echo "<span class='value'>$subcode[1]</span>"; ?></td>
     <td><?php echo "<span class='value'>$subject[1]</span>"; ?></td>
     <td><table class="innertable">
          <tr>
            <td><?php echo "<span class='value'>$marks[1]</span>"; ?></td>
            <td><?php echo "<span class='value'>$Wmarks[1]</span>"; ?></td>
          </tr>
        </table>
     </td>
     <td><?php echo "<span class='value'>$grade[1]</span>"; ?></td>
  </tr>
  <tr>
      <td><?php echo "<span class='value'>$subcode[2]</span>"; ?></td>
     <td><?php echo "<span class='value'>$subject[2]</span>"; ?></td>
     <td><table class="innertable">
          <tr>
            <td><?php echo "<span class='value'>$marks[2]</span>"; ?></td>
            <td><?php echo "<span class='value'>$Wmarks[2]</span>"; ?></td>
          </tr>
        </table>
     </td>
     <td><?php echo "<span class='value'>$grade[2]</span>"; ?></td>
  </tr>
  <tr>
      <td><?php echo "<span class='value'>$subcode[3]</span>"; ?></td>
     <td><?php echo "<span class='value'>$subject[3]</span>"; ?></td>
     <td><table class="innertable">
          <tr>
            <td><?php echo "<span class='value'>$marks[3]</span>"; ?></td>
            <td><?php echo "<span class='value'>$Wmarks[3]</span>"; ?></td>
          </tr>
        </table>
     </td>
     <td><?php echo "<span class='value'>$grade[3]</span>"; ?></td>
  </tr>
  <tr>
     <td><?php echo "<span class='value'>$subcode[4]</span>"; ?></td>
     <td><?php echo "<span class='value'>$subject[4]</span>"; ?></td>
     <td><table class="innertable">
          <tr>
            <td><?php echo "<span class='value'>$marks[4]</span>"; ?></td>
            <td><?php echo "<span class='value'>$Wmarks[4]</span>"; ?></td>
          </tr>
        </table>
     </td>
     <td><?php echo "<span class='value'>$grade[4]</span>"; ?></td>
  </tr>
</table>
<p><span class="left">Dated : <?php echo "<span class='value'>$issueDate</span>"; ?></span><span class="Cright">Controller of Examination : <?php echo "<span class='value'>$control</span>"; ?></span></p>
</div>
<span class="error">If you recieve any error then please refill the form correctly</span>
</body>
</html>