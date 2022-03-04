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
		  <?php

session_start();?>
		  <script language="javascript">
			function v()
				  { 
					  var a1,a2,a3;
				   a1=reg.t1.value;
				   a2=reg.t2.value;
				   a3=reg.t3.value;
					   if(a1=="")
						{
							alert("Enter  Type of notification");
							reg.t1.focus();
							return true;
						}
					  if(a2=="")
						{
							alert("Enter  Title");
							reg.t2.focus();
							return true;
						}
					  if(a3=="")
						{
							alert("Enter  Detail ");
							
							return true;
						}
					  reg.submit();
				  }
		  </script>
  <tbody>
    <tr>
	  
      <td>
		  
		  <center><h1>Update Notification</h1></center>
		<div class="admin">
	<table align="center" width="50%" border="0" cellpadding="0">
  <tbody>
	  <form action="adminnotification1.php" method="post" name="reg">
    <tr>
      <td>
		<select class="dp" name="t1" id="t1">
<option value="" selected disabled>Notification</option>
  <option value="Govmt Notification">Govmt Notification</option>
  <option value="Admin Notification">Admin Notification</option>
</select>
		
		
		
		</td>
      <td><div class="to"><input type="text" name="t2" id="t2" placeholder="Title"> </div></td>
    </tr>
    <tr>
      <td colspan="2"><br><br>
	                   <textarea id="t13" name="t3" placeholder="Subject"></textarea>
	              </td>
      <td><div class="to"> </div></td>
    </tr>
    <tr>
      <td><div class="contatct-top332">
  
    <input type="button" value="submit" id="s2" onClick="v()">
	 	    	</div></td>
      <td><div class="msg">
		  <?php
		  
if(isset($_SESSION['m1']))
            {
               // echo $_SESSION['m1'];
                unset($_SESSION['m1']);
}?></div>
			  </td>
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
