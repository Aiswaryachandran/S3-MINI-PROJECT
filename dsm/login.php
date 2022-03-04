<!doctype html>
<html><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
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
         
              
                 
                    <p>2321 king street ,
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
              <td height="34" align="center" valign="middle"><a href="home.php">Home</td>
              <td align="center" valign="middle"><a href="packageinfo.php">Package Info</td>
              <td align="center" valign="middle"><a href="about.php">About As</td>
              <td align="center" valign="middle"><a href="feedback.php">Feedback</td>
              <td align="center" valign="middle"><a href="contact.php">Contact Us</td>
              <td align="center" valign="middle"><a href="register.php">Register</td>
              <td align="center" valign="middle"><a href="login.php">Login</td>
            </tr>
          </tbody>
        </table>
        <table width="100%" border="0" cellpadding="0">
          <tbody>
            <tr>
              <td height="457" align="left" valign="top"><!-- InstanceBeginEditable name="EditRegion1" -->
                <table width="100%" height="438" border="0" cellpadding="0">
					   <?php 
		   session_start();
		   ?>
		   <script language="javascript">
				  function validation()
				  { 
					  var a1,a2;
				   a1=reg.t1.value;
				   a2=reg.t2.value;
				 
					  
					if(a1=="")
						{
							alert("Enter Username");
							reg.t1.focus();
							return true;
						}
				   if(a2=="")
						{
							alert("Enter Password");
							reg.t2.focus();
							return true;
						}  
				   else
						  {
							   reg.submit();
						  }
				  }
		   </script>
                  <tbody>
                    <tr>
                      <td align="left" valign="top">
						  <center>
						
						<h2>Login</h2>
				  <center><?php
                               if(isset($_SESSION['m1']))
            {
                echo $_SESSION['m1'];
                unset($_SESSION['m1']);
							   }
               
  
                             ?>
					  </center>
							  
				  </center>
					<form action="login1.php" method="post" name="reg">	 
				



				
				<table width="100%" border="0" >
					
						
  <tbody>
    <tr>
      <td align="center"><input type="text" name="t1" id="t1" placeholder="Username"> </td>
    </tr>
    <tr>
		<td align="center"><input type="password" name="t2" id="t2" placeholder="Password"></td>
    </tr>
    <tr>
      <td align="center">

  <p>
    <input type="button" value="submit" id="s" onClick="validation()"> &nbsp; 
	 	    	
  </p>
	
</td>
  </tbody>
	</form>
</table>
						
						
						
						</td>
                    </tr>
                  </tbody>
                </table>
              <!-- InstanceEndEditable --></td>
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
