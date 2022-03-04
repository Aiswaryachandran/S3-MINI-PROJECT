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
<html><!-- InstanceBegin template="/Templates/userhome.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
                      Trivandrum,Kerala.</p>
				

                   <p>phone Number : +2321 256 651</p>
            
                    <p>Email address :- dsmdrive@gmail.com</p></font> 
              </td>
          </tr>
        </tbody>
      </table>
        <table width="100%" border="0" cellpadding="0">
          <tbody>
            <tr bgcolor="#FFD05B">
              <td height="34" align="center" valign="middle"><a href="userhome.php">Home</a></td>
              <td align="center" valign="middle"><a href="userPorf1.php">Profile</a></td>
              <td align="center" valign="middle"><a href="userpackagefist.php">Selected Package</a></td>
              <td align="center" valign="middle"><a href="userpayment.php">QuickPay</a></td>
              <td align="center" valign="middle"><a href="userinbox.php">Inbox</a></td>
              <td align="center" valign="middle"><a href="usernot.php">Notification</a></td>
              <td align="center" valign="middle"><a href="logout.php">Logout</a></td>
            </tr>
          </tbody>
      </table>
        <table width="100%" border="0" cellpadding="0">
          <tbody>
            <tr>
              <td width="20%" align="center" valign="middle" bgcolor="#FFD05B"><a href="usertrainprac.php">Apply Training Practice</a></td>
              <td width="80%" rowspan="7" align="left" valign="top"><!-- InstanceBeginEditable name="EditRegion1" -->
                <table width="100%" border="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td>&nbsp;  
				  <?php
				   /*$a7=$_POST["t7"];
				  if(isset($_POST["s2"]))
	{*/
				  echo $id;
					 $da=date('dd-MM-yy'); 
				  $a2=$_POST["t2"];
				  $a3=$_POST["t3"];
				  $a4=$_POST["t4"];
				  $a5=$_POST["t5"];
				  $a6=$_POST["t6"];
				  $a7=$_POST["t7"];
				  $a8=$_POST["t8"];
				  $a9=$_POST["t9"];
				  $a10=$_POST["t10"];
				  $a11=$_POST["t11"];
				  $a12=$_POST["t12"];
				   $a13=$_POST["t13"];
				   $a14=$_POST["t14"];
				   $a15=$_POST["t15"];
				   $a16=$_POST["t16"];
				   $a17=$_POST["t17"];
					  
					  $file1 = rand(1000,100000)."_".$_FILES['file1']['name'];
	                  $file_loc = $_FILES['file1']['tmp_name'];
	                  $folder="upload/";
	                  move_uploaded_file($file_loc,$folder.$file1);
					  
					   $file2 = rand(1000,100000)."_".$_FILES['file2']['name'];
	                  $file_loc = $_FILES['file2']['tmp_name'];
	                  $folder="upload/";
	                  move_uploaded_file($file_loc,$folder.$file2);
					  
					   $file3 = rand(1000,100000)."_".$_FILES['file3']['name'];
	                  $file_loc = $_FILES['file3']['tmp_name'];
	                  $folder="upload/";
	                  move_uploaded_file($file_loc,$folder.$file3);
					  
					  $file4 = rand(1000,100000)."_".$_FILES['file4']['name'];
	                  $file_loc = $_FILES['file4']['tmp_name'];
	                  $folder="upload/";
	                  move_uploaded_file($file_loc,$folder.$file4);
				
				 // echo "insert into lcreg values($id,'$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10',$a11,'$a12','$a13','$a14',$a15,'$a16','$a17','$file1','$file2','$file3','$file4','$da',0)";
					  mysqli_query($link,"insert into lcreg values($id,'$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10',$a11,'$a12','$a13','$a14',$a15,'$a16','$a17','$file1','$file2','$file3','$file4','$da',0)");
				  
				  
				  mysqli_query($link,"update login set status=1 where id=$id");
				  
				  header("Location: userprofil.php");
							   
				  
				  //}
				  ?>
				 
				  <br>
				  <br>
				</td>
                    </tr>
                  </tbody>
                </table>
              <!-- InstanceEndEditable --></td>
            </tr>
            <tr align="center" valign="middle" bgcolor="#FFD05B">
              <td><a href="userpaystatus.php">Payment Status</a></td>
            </tr>
            <tr align="center" valign="middle" bgcolor="#FFD05B">
              <td><a href="userpupdate.php">Training Practice Status</a></td>
            </tr>
            <tr align="center" valign="middle" bgcolor="#FFD05B">
              <td><a href="usercomm.php">Compose Message</a></td>
            </tr>
            <tr align="center" valign="middle" bgcolor="#FFD05B">
              <td><a href="userenquiry.php">Sent Enquiry</a></td>
            </tr>
            <tr align="center" valign="middle" bgcolor="#FFD05B">
              <td><a href="userenqview.php">Enquiry Status</a></td>
            </tr>
			  <tr align="center" valign="middle" bgcolor="#FFD05B">
              <td><a href="userreplyview.php">View Reply</a></td>
            </tr>
            <tr align="center" valign="middle" bgcolor="#FFD05B">
              <td height="246">&nbsp;<?php 
				  
				 
				 
				   $result1=mysqli_query($link,"select * from lcreg where id=$id");
				   if(mysqli_num_rows($result1)>0)
				  {
				  
				   $row1=mysqli_fetch_array($result1);
				 	echo "<img  height=150 width=200  src='upload/".$row1['photo']."' >";
				  }
				  else
				  {
					  ?>
				  <img  height=150 width=200  src="image/depositphotos_72350117-stock-illustration-no-user-profile-picture-hand.jpg" >
				  <?php
				  }
				  ?>
					<?php echo "<b>Welcome &nbsp;&nbsp;". $username."</b>";?></td>
            </tr>
          </tbody>
      </table></td>
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
