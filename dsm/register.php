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
                  <tbody>
                    <tr>
                      <td align="left" valign="top">
						
						<script language="javascript">
				  function validation()
				  { 
					  var a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,a13;
				   a1=reg.t1.value;
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
				  
					if(a1=="")
						{
							alert("Enter Full Name");
							reg.t1.focus();
							return true;
						}
				   if(a2=="")
						{
							alert("Enter Date Of Birth");
							reg.t2.focus();
							return true;
						}
				   if(a3=="")
						{
							alert("Enter Sex");
							reg.t3.focus();
							return true;
						}
				   if(a4=="")
						{
							alert("Enter Blood Group");
							reg.t4.focus();
							return true;
						}
				   if(a5=="")
						{
							alert("Enter Name Of Guardian");
							reg.t5.focus();
							return true;
						}
				   if(a6=="")
						{
							alert("Enter Email");
							reg.t6.focus();
							return true;
						}
					  if(a6.indexOf(".")<0)
					   {
						   alert("Enter Valid Email Id");
							reg.t6.focus();
							return true;
					   }
					  if(a6.indexOf("@")<0)
					   {
						   alert("Enter Valid Email Id");
							reg.t6.focus();
							return true;
					   }
				    
					    if(a7=="")
						{
							alert("Enter Phone No");
							reg.t7.focus();
							return true;
						}
					  if(isNaN(a7))
					  	{
						  alert("enter a valid phone number");
						  reg.t7.focus();
							return true;
					  	}
					
					 if(a7.length!=10)
					   {
						   alert("Enter Valid Phone No");
							reg.t7.focus();
							return true;
					   }
					 if(a8=="")
						{
							alert("Enter Username");
							reg.t8.focus();
							return true;
						}
					 if(a9=="")
						{
							alert("Enter Password");
							reg.t9.focus();
							return true;
						}
				   	 if(a10=="")
						{
							alert("Confirm Password");
							reg.t10.focus();
							return true;
						}
				   	 if(a9!=a10)
					    {
						   alert("Password Mismatch");
							reg.t10.focus();
							return true;
					    }
				   	 if(a11=="")
						{
							alert("Enter Adhar No");
							reg.t11.focus();
							return true;
						}
					  
				   	 if(isNaN(a11))
					    {
						   alert("Enter Numeric Value");
							reg.t11.focus();
							return true;
					    }
					  if(a11.length!=12)
					    {
						   alert("Enter Valid Adhar Number");
							reg.t11.focus();
							return true;
					   }
				   	if(t12=="")
						{
							alert("Enter Type");
							reg.t12.focus();
							return true;
						}
					  
				   	if(a13=="")
						{
							alert("Enter Address");
							reg.t13.focus();
							return true;
						}
					  else
						  {
							   reg.submit();
						  }
				  }
				  </script>
				  
				  
				  
				  
				  <center>
				  <h2>REGISTER NOW</h2>
				  </center>
				  <table width="50%"  border="0" cellpadding="2" align="center">
					  <form action="register1.php" method="post" name="reg">
						  
                <tbody>
                  <tr>
                    <td><input  type="text" name="t1" id="t1" placeholder="FULL NAME"> </td>
                    <td><input  class="" type="date"  name="t2" id="t2" placeholder="DD-MM-YYYY"> </td>
                  </tr>
                  <tr>
                    <td><select name="t3" id="t3">
<option value="" selected disabled>SEX</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Transgender">Transgender</option>
</select>

</td>
                    <td>
						<input type="text" name="t4" id="t4" placeholder="BLOOD GROUP"> </td>
                  </tr>
                  <tr>
                    <td><input type="text" name="t5" id="t5" placeholder="NAME OF GUARDIAN"> </td>
                    <td><input type="text" name="t6" id="t6" placeholder="EMAIL"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="t7" id="t7" placeholder="PHONE NO"></td>
                    <td><input type="text" name="t8" id="t8" placeholder="USERNAME"></td>
                  </tr>
                  <tr>
                    <td><br><input type="password" name="t9" id="t9" placeholder="PASSWORD"></td>
                    <td><input type="text" name="t10" id="t10" placeholder="CONFIRM PASSWORD"> </td>
                  </tr>
                  <tr>
                    <td><input type="text" name="t11" id="t11" placeholder="ADHAR NUMBER"> </td>
					  
                    <td><select name="t12" class="smalldrop" id="t12">
						<option value="user">User</option>
						<option value="trainer">Trainer</option>
						</select>
					  </td>
						
  

                  </tr>
                  <tr>
                    <td>
	                   <textarea  class="smalldrop" id="t13" name="t13" placeholder="ADDRESS"></textarea>
	                </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center">
  <p>
    <input type="RESET" name="reset" value="RESET" id="s1" onClick="clear()">
	 	    	
  </p></td>
                    <td>
  <p>
    <input type="button" value="SUBMIT" id="s2" onClick="validation()">
	 	    	
  </p></td>
                  </tr>
                  <tr>
                    <td align="center">&nbsp;</td>
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
