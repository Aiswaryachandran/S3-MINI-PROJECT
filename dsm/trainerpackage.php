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
      <td><!-- InstanceBeginEditable name="EditRegion1" --><table  width="100%" border="0">
  <tbody>
    <tr>
      <td>
		
		
		  <center><h2>Available Package</h2></center>
				  
			  
			  <?php
			  $result1=mysqli_query($link,"select * from package");
			//$row1=mysqli_fetch_array($result1);
		 while($row1=mysqli_fetch_array($result1))
		 {
		 
			  ?>
			  
			  
	     
	 	     
	 	    	
	 	    		
					<img src="images/pic.jpg" alt=""/>
					
						<h3><?php echo $row1['pack name'] ?></h3>
						<table align="center" width="63%" border="2" cellpadding="0">
  <tbody>
    <tr align="center" valign="middle" bgcolor="#FB9E9E">
      <td width="46%">Type</td>
		<td width="54%"><h5><?php echo $row1['typeofpack'] ?></h5></td>
    </tr>
    <tr align="center" valign="middle">
      <td>Details</td>
      <td><?php echo $row1['details'] ?></td>
    </tr>
     <tr align="center" valign="middle" bgcolor="#FB9E9E">
      <td>duration</td>
      <td><?php echo $row1['duration'] ?></td>
    </tr>
	  
    <tr align="center" valign="middle">
      <td>Time</td>
      <td><?php echo $row1['time slot'] ?></td>
    </tr>
    <tr align="center" valign="middle" bgcolor="#FB9E9E">
      <td>Amount</td>
      <td><?php echo $row1['amount'] ?></td>
    </tr>
  </tbody>
</table>
						<br><?php
				  
				  ?>
						

			 
				<?php }
			  ?>
		
		
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
