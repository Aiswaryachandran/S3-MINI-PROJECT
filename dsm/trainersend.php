<?php
session_start();
if(isset($_SESSION['id']))
{
	 $id = $_SESSION['id'];
	  $link=mysqli_connect("localhost","root","","dsm");
		 if($link===false)
		 {
			 die("ERROR : Could not connect . " . mysqli_connect_error());
		 }
		  else
		  {
		  
		  $result=mysqli_query($link,"select * from reg where id=$id");
			$row=mysqli_fetch_array($result);
			  $username=$row['username'];
		  }
}
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/trainerhome.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
             <td height="34" align="center" valign="middle"><a href="trainerhome.php"> Home</a></td>
				<td align="center" valign="middle"><a href="trainerstud.php">Alloted Students</a></td>
				<td align="center" valign="middle"><a href="trainermessage.php">Collect Message</a></td>
				<td align="center" valign="middle"><a href="trainerpackage.php">Packages</a></td>
			  <td align="center" valign="middle"><a href="trainersend.php">Send Message</a></td>
				<td align="center" valign="middle"><a href="logout.php">Log Out</a></td>
				
            </tr>
          </tbody>
        </table>
		  <table width="100%" border="0">
  <tbody>
    <tr>
      <td><!-- InstanceBeginEditable name="EditRegion1" --><table width="100%" border="0">
  <tbody>
    <tr>
      <td>
		
		<script language="javascript">
				  function validation()
				  { 
					  var a1,a2,a3;
					  a1=reg.t1.value;
				   a2=reg.t2.value;
				   a3=reg.t3.value;
					  if(a1=="")
						{
							alert("Select any one to send message");
							reg.t1.focus();
							return true;
						}
				   if(a2=="")
						{
							alert("Enter Title");
							reg.t2.focus();
							return true;
						}
				   if(a3=="")
						{
							alert("Enter message");
							reg.t3.focus();
							return true;
						}
					   else
						  {
							   reg.submit();
						  }
				  }
				  </script>
					  
					 <?php
						
						//echo date("d-m-y h:i:sa")
							
							?>  
					  
				  <center><h2>Compose Message</h2></center>
				 
		  <br>
						<br>
				<form action="trainersend1.php" method="post" name="reg">
				<table  align="center" width="50%" border="0">
				  <tbody>
				    <tr>
						
				      <td><select name="t1" id="t1">
<option value="" selected disabled>Select</option>
  <option value="admin">Admin</option>

  
</select>
						  
						</td>
						<td><input type="text" name="t2" id="t2" placeholder="Title">
						</td>
					  </tr>
				      <tr>
				      <td></td>
				      </tr>
				    <tr>
				      <td>
						  
	                   <textarea  id="t3" name="t3" placeholder="MESSAGE"></textarea>
	                </td>
				      </tr>
				    <tr>
				    
				      <td>
  <p>
    <input type="button" value="SUBMIT" id="s2" onClick="validation()">
	 	    	
  </p></td>
				     
				      </tr>
				    <tr>
				      <td>&nbsp;</td>
				     
				      </tr>
				    <tr>
				      <td>&nbsp;</td>
				      
				      </tr>
				    </tbody>
			    </table>
		</td>
    </tr>
  </tbody>
</table>
		
		
		
		
		
		</td>
    </tr>
  </tbody>
</table>
<!-- InstanceEndEditable -->
		</td>
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
