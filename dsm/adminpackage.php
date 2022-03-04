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
      <td><?php session_start();?>
		<script language="javascript">
			function validation()
				  { 
					  var a1,a2,a3,a4,a5,a6,a7;
				   a1=reg.t1.value;
				   a2=reg.t2.value;
				   a3=reg.t3.value;
				   a4=reg.t4.value;
				   a5=reg.t5.value;
				   a6=reg.t6.value;
				   a7=reg.t7.value;
				  
					  if(a1=="")
						{
							alert("Enter  Type of Pack");
							reg.t1.focus();
							return true;
						}
					  if(a2=="")
						{
							alert("Enter  Pack Name");
							reg.t2.focus();
							return true;
						}
					  if(a3=="")
						{
							alert("Enter  Detail ");
							reg.t3.focus();
							return true;
						}
					  if(a4=="")
						{
							alert("Enter Period From");
							reg.t4.focus();
							return true;
						}
					  if(a5=="")
						{
							alert("Enter Period Till");
							reg.t5.focus();
							return true;
						}
					  if(a6=="")
						{
							alert("Enter Time Slot ");
							reg.t6.focus();
							return true;
						}
					  if(a7=="")
						{
							alert("Enter Amount");
							reg.t7.focus();
							return true;
						}
					  
					   reg.submit();
				  }
					 
			
			
			
			
		  </script>
		  <center><h1>Package Update</h1></center>
		<div class="admin">
			<?php
		  
if(isset($_SESSION['m1']))
            {
                //echo $_SESSION['m1'];
         
               
                unset($_SESSION['m1']);
            }?>
	<table align="center" width="50%" border="0" cellpadding="0">
  <tbody>
	  <form action="adminpackage1.php" method="post" name="reg">
    <tr>
      <td><div class="to"><input type="text" name="t1" id="t1" placeholder="Type of Pack"> </div></td>
      <td><div class="to"><input type="text" name="t2" id="t2" placeholder="Pack Name"> </div></td>
    </tr>
    <tr>
      <td><div><textarea class="smalldrop" name="t3" id="t3" placeholder="Details"></textarea></div></td>
      <td><div class="to"><input type="text" name="t4" id="t4" placeholder="Duration"> </div></td>
    </tr>
    <tr>
      <td><div class="to"><input type="text" name="t5" id="t5" placeholder="Time Slot"> </div></td>
      <td><div class="to"><input type="text" name="t6" id="t6" placeholder="Amount"> </div></td>
    </tr>
    <tr>
      <td><div class="to"><input type="text" name="t7" id="t7" placeholder="Condition"> </div></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><div class="contatct-top332">
  <p>
    <input type="button" value="submit" id="s2" onClick="validation()">
	 	    	</div></td>
      <td></td>
    </tr>
	  </form>
  </tbody>
</table>
		  </div>
		  <br>
		  <br>
		  <br>
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
