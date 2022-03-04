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
		  session_start();
    $link=mysqli_connect("localhost","root","","dsm");
    if($link===false)
    {
        die("ERROR : Could not connect . " . mysqli_connect_error());
    }
    	
		?>
		 
		   <table width="100%" border="0" cellpadding="0">
          <tbody>
            <tr>
              <td>
				  <script language="javascript">
				  function validation()
				  { 
					  var a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,a13,a14,a15,a16,a17;
				   
				   a2=reg.t2.value;
				   a3=reg.t3.value;
				   a4=reg.t4.value;
				   a5=reg.t5.value;
				   a6=reg.t6.value;
				   a7=reg.t7.value;
				   a8=reg.t8.value;
				   a9=reg.t9.value;
				   a10=reg.t10.value;
				   a11=reg.t11.value;
				   a12=reg.t12.value;
				   a13=reg.t13.value;
				   a14=reg.t14.value;
				   a15=reg.t15.value;
				   a16=reg.t16.value;
				   a17=reg.t17.value;
					  	
				  
					
				   if(a2=="")
						{
							alert("Enter name");
							reg.t2.focus();
							return true;
						}
					   
					    if(a4=="")
						{
							alert("Enter father's name ");
							reg.t4.focus();
							return true;
						}
					  if(a5=="")
						{
							alert("Enter sex ");
							reg.t5.focus();
							return true;
						}
				  
				   if(a3=="")
						{
							alert("Enter blood group");
							reg.t3.focus();
							return true;
						}
				 
				   if(a7=="")
					   {
						   alert("Enter date of birth");
							reg.t7.focus();
							return true;
					   }
					   if(a8=="")
					   {
						   alert("Enter place of birth");
							reg.t8.focus();
							return true;
					   }
				   if(a6=="")
						{
							alert("Enter educational qualification");
							reg.t6.focus();
							return true;
						}
					  if(a10=="")
						{
							alert("Enter identity mark");
							reg.t10.focus();
							return true;
						}
					  if(a11=="")
						{
							alert("Enter phone No");
							reg.t11.focus();
							return true;
						}
					  if(isNaN(a11))
					  	{
						  alert("enter a valid phone number");
						  reg.t11.focus();
							return true;
					  	}
					
					 if(a11.length!=10)
					   {
						   alert("Enter Valid Phone No");
							reg.t11.focus();
							return true;
					   }
					 if(a9=="")
						{
							alert("Enter email");
							reg.t9.focus();
							return true;
						}
					  if(a9.indexOf(".")<0)
					   {
						   alert("Enter Valid Email Id");
							reg.t9.focus();
							return true;
					   }
					  if(a9.indexOf("@")<0)
					   {
						   alert("Enter Valid Email Id");
							reg.t9.focus();
							return true;
					   }
				    
				   	 
				   	 	if(a13=="")
						{
							alert("Enter house name");
							reg.t13.focus();
							return true;
						}
				   	 if(a14=="")
						{
							alert("Enter place");
							reg.t14.focus();
							return true;
						}
				   	if(a12=="")
						{
							alert("Enter district");
							reg.t12.focus();
							return true;
						}
					  if(a16=="")
						{
							alert("Enter state");
							reg.t6.focus();
							return true;
						}
				    if(a17=="")
						{
							alert("Enter nationality");
							reg.t17.focus();
							return true;
						}
					 
					  if(a15=="")
						{
							alert("Enter adhar number");
							reg.t15.focus();
							return true;
						}
					  if(isNaN(a15))
					    {
						   alert("Enter Numeric Value");
							reg.t15.focus();
							return true;
					    }
					  if(a15.length!=12)
					    {
						   alert("Enter Valid Adhar Number");
							reg.t15.focus();
							return true;
					   }
					  
					  else
						  {
						   reg.submit();
						  }
				  }
					  </script>
				 <center><h1>License Registration</h1></center>
				<form action="admingovadd1.php" method="post" name="reg"  enctype="multipart/form-data">
					<center>
				
	  <br><!--<form action="up.php" enctype="multipart/form-data" method="post">-->
Select image :
<input type="file" name="file1"><br/>
<!--<input type="submit" value="Upload" name="Submit1"> <br/> -->

<!--
</form>-->
<?php
						
					
if(isset($_SESSION['m1']) )
            {
                
                //echo $_SESSION['m1'];
                
                unset($_SESSION['m1']);
            }?>
						
		  <br>

	
						
					<table frame="border" width="100%" border="0" cellpadding="0">
  <tbody>
    <tr>
      <td>Full Name</td>
      <td><input type="text" name="t2" id="t2" placeholder=""></td>
      <td></td>
      <td></td>
      <td>Father’s Name</td>
      <td><input type="text" name="t4" id="t4" placeholder=""></td>
    </tr>
    <tr>
      <td>Select Sex</td>
      <td><select  name="t5" id="t5">
<option value="" selected disabled>Sex</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
		   <option value="Transgender">Transgender</option>
  
</select></td>
      <td>Blood Group</td>
      <td><input type="text" name="t3" id="t3" placeholder=""></td>
      <td>Date of Birth</td>
      <td><input type="text" name="t7" id="t7" placeholder=""></td>
    </tr>
    <tr>
      <td>Place of Birth</td>
      <td><input type="text" name="t8" id="t8" placeholder=""></td>
      <td>Educational Qualification</td>
      <td><input type="text" name="t6" id="t6" placeholder=""></td>
      <td>Identification Mark</td>
      <td><input type="text" name="t10" id="t10" placeholder=""></td>
    </tr>
    <tr>
      <td>Phone Number</td>
      <td><input type="text" name="t11" id="t11" placeholder=""></td>
      <td>Email</td>
      <td><input type="text" name="t9" id="t9" placeholder=""></td>
      <td>Housr Name</td>
      <td><input type="text" name="t13" id="t13" placeholder=""></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><input type="text" name="t14" id="t14" placeholder=""></td>
      <td>District</td>
      <td><input type="text" name="t12" id="t12" placeholder=""></td>
      <td>State</td>
      <td><input type="text" name="t16" id="t16" placeholder=""></td>
    </tr>
    <tr>
      <td>Nationalit</td>
      <td><input type="text" name="t17" id="t17" placeholder=""></td>
      <td>adharnumber</td>
      <td><input type="text" name="t15" id="t15" placeholder=""></td>
      <td>Adhar Front Side</td>
      <td><input type="file" name="file2" class=""></td>
    </tr> 
	  <tr>
      <td>Adhar Back Side</td>
      <td><input type="file" name="file3" class=""></td>
      <td>Eye Test</td>
      <td><input type="file" name="file4" class=""></td>
      <td></td>
      <td></td>
    </tr>
	   <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="button" value="submit" name="s2" id="s2" onClick="validation()"></td>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
						</table>
						</form>		
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
