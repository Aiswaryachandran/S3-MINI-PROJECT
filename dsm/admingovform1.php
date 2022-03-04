<!doctype html>
<html><!-- InstanceBegin template="/Templates/adminHome.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<table width="100%" border="0" cellpadding="0">
  <tbody>
    <tr>
      <td height="600" align="left" valign="top"><table width="100%">
        <tbody>
          <tr>
            <td height="115" align="left" valign="top" bgcolor=#000000><img src="image/logo.png" width="600" height="100" alt=""/><img src="image/car.png" width="214" height="164" alt=""/></td>
            <td align="center" valign="middle" bgcolor=#000000>
          <font color="#FFD05B"> <h4>Contact</h4>
         
              
                 
                    <p>2321 king street,
                     Trivandrum,Kerala. </p>
				

                   <p>phone Number : +2321 256 651</p>
            
                    <p>Email address :- dsmdrive@gmail.com</p></font> 
              </td>
          </tr>
        </tbody>
      </table>
        <table width="100%" border="0" cellpadding="0">
          <tbody>
            <tr bgcolor="#FFD05B">
             <td height="34" align="center" valign="middle"><a href="adminHome.php"> Home</a></td>
				<td align="center" valign="middle"><a href="adminauth1.php">Authorisation</a></td>
				<td align="center" valign="middle"><a href="adminnotification.php">Upload Notification</a></td>
				<td align="center" valign="middle"><a href="admingovadd.php">Add GOV Form</a></td>
			  <td align="center" valign="middle"><a href="admingovform.php">Update gov Form</a></td>
				<td align="center" valign="middle"><a href="admintrinersent.php">Messege To Trainer</a></td>
				<td align="center" valign="middle"><a href="logout.php">Logout</a></td>
            </tr>
          </tbody>
        </table>
		  <table width="100%">
  <tbody>
    <tr>
      <td align="center" bgcolor="#FFD05B" width="15%" height="20px"><a href="adminpaymend.php">View Payment Info</a></td>
      <td width="85%" rowspan="10" align="left" valign="top"><!-- InstanceBeginEditable name="EditRegion1" -->
       <?php
		  
		  $id=$_GET['id'];
    $link=mysqli_connect("localhost","root","","dsm");
    if($link===false)
    {
        die("ERROR : Could not connect . " . mysqli_connect_error());
    }
    $result=mysqli_query($link,"select * from lcreg where id=$id ");
    $row = mysqli_fetch_array($result)
    ?>
		  <table width="100%" border="0" cellpadding="0">
  <tbody>
    <tr>
      <td>
		  <center><h1>APPROVAL USER LICENSE</h1></center> 
		  <br>
		  <table align="center"  width="100%" border="0" cellpadding="0">
  <tbody>
    <tr align="center" bgcolor="#FB9E9E">
      <td valign="top">ID</td>
      <td valign="top"><?php echo $row['id']?></td>
    </tr>
    <tr align="center" bgcolor="#FB9E9E">
      <td valign="top" bgcolor="#FFFFFF">Name</td>
      <td valign="top" bgcolor="#FFFFFF"><?php echo $row['name']?></td>
    </tr>
    <tr align="center" bgcolor="#FB9E9E">
      <td valign="top">DOB</td>
      <td valign="top"><?php echo $row['dob']?></td>
    </tr>
    <tr align="center" bgcolor="#FB9E9E">
      <td valign="top" bgcolor="#FFFFFF">SEX</td>
      <td valign="top" bgcolor="#FFFFFF"><?php echo $row['sex']?></td>
    </tr>
    <tr align="center" bgcolor="#FB9E9E">
      <td valign="top">BLOOD GROUP</td>
      <td valign="top"><?php echo $row['bloodgroup']?></td>
    </tr>
    <tr align="center" bgcolor="#FB9E9E">
      <td valign="top" bgcolor="#FFFFFF">NAME OF Father</td>
      <td valign="top" bgcolor="#FFFFFF"><?php echo $row['fathername']?></td>
    </tr>
    <tr align="center" bgcolor="#FB9E9E">
      <td valign="top">EMAIL</td>
      <td valign="top"><?php echo $row['email']?></td>
    </tr>
    <tr align="center" bgcolor="#FB9E9E">
      <td valign="top" bgcolor="#FFFFFF">PHONE NO</td>
      <td valign="top" bgcolor="#FFFFFF"><?php echo $row['phno']?></td>
    </tr>
    <tr align="center" bgcolor="#FB9E9E">
      <td valign="top">Place of bairth</td>
      <td valign="top"><?php echo $row['pob']?></td>
    </tr>
    <tr align="center" bgcolor="#FB9E9E">
      <td valign="top" bgcolor="#FFFFFF">ADHAR NO</td>
      <td valign="top" bgcolor="#FFFFFF"><?php echo $row['adharno']?></td>
    </tr>
    <tr align="center" bgcolor="#FB9E9E">
      <td valign="top">Idmark</td>
      <td valign="top"><?php echo $row['idenmark']?></td>
    </tr>
	 
    <tr align="center" bgcolor="#FB9E9E">
      <td valign="top" bgcolor="#FFFFFF">Housename</td>
      <td valign="top" bgcolor="#FFFFFF"><?php echo$row['housename']?></td>
    </tr>
    <tr align="center" bgcolor="#FB9E9E">
      <td valign="top">Place</td>
      <td valign="top"><?php echo$row['place']?></td>
    </tr>
      <tr align="center" bgcolor="#FB9E9E">
      <td valign="top" bgcolor="#FFFFFF">State</td>
      <td valign="top" bgcolor="#FFFFFF"><?php echo$row['state']?></td>
      </tr>
      <tr align="center" bgcolor="#FB9E9E">
      <td valign="top">Nationality</td>
      <td valign="top"><?php echo$row['nationality']?></td>
      </tr>
     
    <tr align="center" bgcolor="#FB9E9E">
      <td valign="top" bgcolor="#FFFFFF">Regdate</td>
      <td valign="top" bgcolor="#FFFFFF"><?php echo$row['regdate']?></td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#FFFFFF"></td>
		
        <td></td>
    </tr>
  </tbody>
</table>
		  
		  <table width="100%" border="0">
  <tbody>
    <tr align="center" valign="middle" bgcolor="#FFD05B">
      <td>&nbsp;Photo</td>
      <td>&nbsp;Adharfront</td>
      <td>&nbsp;Adharback</td>
      <td>&nbsp;Eyetest</td>
    </tr>
    <tr align="center" valign="middle" bgcolor="#FFD05B">
      <td>&nbsp;<img width="180" height="180" src="upload/<?php echo $row['photo']?>"></td>
      <td>&nbsp;<img width="350" height="180" src="upload/<?php echo $row['adharfront']?>"></td>
      <td>&nbsp;<img width="350" height="180" src="upload/<?php echo $row['adharback']?>"></td>
      <td>&nbsp;<img width="180" height="180" src="upload/<?php echo $row['eyetest']?>"></td>
    </tr>
  </tbody>
</table>

	<br>
			   <center><a href="admingovform2.php?id=<?php echo $row['id']?>">
		<div class="smallbutton">	<input type="button" value="Accept" id="s2"></a></center>
<br>
		
		</div>
		
		
		
	  
		
		
		
		
		
		
		</td>
    </tr>
  </tbody>
</table>
      <!-- InstanceEndEditable --></td>
    </tr>
    <tr>
      <td align="center" valign="middle" bgcolor="#FFD05B" width="15%" height="20px"><a href="adminpakre.php">View Package request</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
     <td align="center" valign="middle" bgcolor="#FFD05B" width="15%" height="20px"><a href="admineq1.php">View Enquiry</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
       <td align="center" valign="middle" bgcolor="#FFD05B" width="15%" height="20px"><a href="adminuserview.php">View Users</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
       <td align="center" valign="middle" bgcolor="#FFD05B" width="15%" height="20px"><a href="adminfeedback.php">View Feedback</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
       <td align="center" valign="middle" bgcolor="#FFD05B" width="15%" height="20px"><a href="admindpr.php">View Driving Practice Request</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle" bgcolor="#FFD05B" width="15%" height="20px"><a href="adminpackage.php">Upload Package</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle" bgcolor="#FFD05B" width="15%" height="20px"><a href="admincomsend.php">Compose Message</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
     <td align="center" valign="middle" bgcolor="#FFD05B" width="15%" height="20px"><a href="admincomre.php">Reply To Message </a></td>
      <td>&nbsp;</td>
    </tr>
	  <tr>
     <td align="center" valign="middle" bgcolor="#FFD05B" width="15%" height="20px"><a href="adminpackeview.php">Package View And Delete </a></td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

        
		  
		  
		  
		  
		  
		  
		  
		  
		  
        <table width="100%" border="0" cellpadding="0">
          <tbody>
            <tr align="center" valign="middle" bgcolor="#656565">
			  <td><a href="index.html"><img src="image/car.png" width="100" height="100"></a><font color="#FFD05B">
              <p>We have successfully transformed 15 00 000+<br> beginners into skilled and confident drivers.<br>Perfection comes with seamless integration<br> of learning and application!<br> Become a confident driver by getting theoretical <br>and practical driving training</p></td>
              <td><font color="#FFD05B">
                <h4>Contact</h4>
     
                      <p>2321 king street ,<br>
                        Trivandrum,Kerala. </p>
              
                      <p>Phone number :+2321 256 651</p>
            
                      <p>Email Address :dsmdrive@gmail.com</p>
        
                      <p>Email Address :dsmdrive@gmail.com</p>
						</font>
              </td>
              <td><font color="#FFD05B">
                <h4>Latest Tweets</h4>
           
                    <p>Ds which don't look even slightly believable. <br>If you are going to use a passage  3 Hours Ago</p>
             
             
                    <p>Ds which don't look even slightly believable.<br> If you are going to use a passage 3 Hours Ago</p>
                
			  </font></td>
              
            </tr>
          </tbody>
        </table>
      <p><font color=#000000> Site Maintained And Developed By DSM Team</p></td>
    </tr>
  </tbody>
</table>
</body>
<!-- InstanceEnd --></html>
