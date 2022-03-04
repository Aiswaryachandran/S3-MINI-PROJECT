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
        <table width="100%" border="0" cellpadding="0">
  <tbody>
    <tr>
      <td>
		
		<?php
		  $id=$_GET['id'];
		   $link=mysqli_connect("localhost","root","","dsm");
		 if($link===false)
		 {
			 die("ERROR : Could not connect . " . mysqli_connect_error());
		 }
	  else
	  {
		  $result=mysqli_query($link,"select * from reg where id=$id");
		  $row=mysqli_fetch_array($result);
		  ?>
		  <!--<div class="m_contact"><span class="left_line1"> </span>Details<span class="right_line1"> </span></div>!-->
		 
		  
	   <table class="achu" width="50%" border="0" cellpadding="3" align="center">
  <tbody>
	   <tr align="center" bgcolor="#F50C0C">
	     <td colspan="2" valign="top" bgcolor="#F50C0C" ><font size="+2" color="#FFFFFF">DETAILS</font></td>
	     </tr>
    <tr align="left" bgcolor="#FDF9F7">
      <td valign="top">ID</td>
      <td valign="top"><?php echo $row['id']?></td>
    </tr>
    <tr align="left" bgcolor="#FB9E9E">
      <td valign="top">Name</td>
      <td valign="top"><?php echo $row['name']?></td>
    </tr>
    <tr align="left" bgcolor="#FDF9F7">
      <td valign="top">DOB</td>
      <td valign="top"><?php echo $row['dob']?></td>
    </tr>
    <tr align="left" bgcolor="#FB9E9E">
      <td valign="top">SEX</td>
      <td valign="top"><?php echo $row['sex']?></td>
    </tr>
    <tr align="left" bgcolor="#FDF9F7">
      <td valign="top">BLOOD GROUP</td>
      <td valign="top"><?php echo $row['blood']?></td>
    </tr>
    <tr align="left" bgcolor="#FB9E9E">
      <td valign="top">NAME OF GUARDIAN</td>
      <td valign="top"><?php echo $row['nog']?></td>
    </tr>
    <tr align="left" bgcolor="#FDF9F7">
      <td valign="top">EMAIL</td>
      <td valign="top"><?php echo $row['email']?></td>
    </tr>
    <tr align="left" bgcolor="#FB9E9E">
      <td valign="top">PHONE NO</td>
      <td valign="top"><?php echo $row['phno']?></td>
    </tr>
    <tr align="left" bgcolor="#FDF9F7">
      <td valign="top">USERNAME</td>
      <td valign="top"><?php echo $row['username']?></td>
    </tr>
    <tr align="left" bgcolor="#FB9E9E">
      <td valign="top" bgcolor="#FB9E9E">ADHAR NO</td>
      <td valign="top"><?php echo $row['adharno']?></td>
    </tr>
    <tr align="left" bgcolor="#FDF9F7">
      <td valign="top">User type</td>
      <td valign="top"><?php echo $row['usertype']?></td>
    </tr>
	 
    <tr align="left" bgcolor="#FB9E9E">
      <td valign="top">address</td>
      <td valign="top"><?php echo $row['address']?></td><?php }?>
    </tr>
	   <tr>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
	  </tr>
	 
  </tbody>
</table>
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
