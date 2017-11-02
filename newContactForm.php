<html>
<body>
<DIV style="width: auto; height:auto; position:relative; margin:0px; padding:0px; overflow: hidden; align:center; background-color: lightblue;">
<table align=center width="auto" height="auto"> 
    <DIV class="row">
   	   <div class="col-md-6">
                <div class="card contact_form">
                    <form id="" class="form" method="POST" autocomplete="off">
                        <h3 class="text-center" align=center>CONTACT DETAILS</h3>
						<tr>
						<td><input type="text" placeholder="Name" id="Name" required="required" name="Name"></td>
						</tr>
                        <tr>
                        <td><input type="email" placeholder="Email" id="email" requireds="required" name="Email"></td>
                        </tr>
						<tr>
                        <td><input type="text" placeholder="Subject" id="Subject" required="required" name="Subject"></td>
						</tr>
						<tr>
                        <td><textarea placeholder="Message" id="message" required="required" name="Message"></textarea></td>
						</tr>
                        <tr>
				<td><input type="submit" name="Add" value="SEND" /></td>
                        </tr>
                    </form>
                </div>
        </div>
	</DIV>
	</table>
</DIV>
</DIV>
<?php
include('connection.php');
?>
<?php
	if (isset($_POST["Add"]) )
	{

				$Name = $_POST['Name'];
				$Email = $_POST['Email'];
				$Subject = $_POST['Subject'];
				$Message = $_POST['Message'];                       
					  


					  $sql = "INSERT INTO `contact`(`contactID`, `Name`, `Email`, `Subject`, `Message`) VALUES (null,'$Name','$Email','$Subject','$Message')";


						  if(!mysql_query($sql)){
							echo (mysql_error());
						  }
						  else{
						  echo "<Center><h2>Successfully Sent, Thanks for cheking in. We would get back to you Soon</h2></Center>";

						}
	} 
?>
</body>
</html>