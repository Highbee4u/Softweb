<?php
include('connection.php');
?>
<?php
	if (isset($_POST) )
	{

				$Name = $_POST['Name'];
				$Email = $_POST['Email'];
				$Subject = $_POST['Subject'];
				$Message = $_POST['Message'];                       
					  


					  $sql = "INSERT INTO `contact`(`id`, `Name`, `Email`, `Subject`, `Message`) VALUES (null,'$Name','$Email','$Subject','$Message')";


						  if(!mysql_query($sql)){
							echo (mysql_error());
						  }
						  else{
						  echo "<Center><h2>Successfully Sent</h2></Center>";

						}
	} 
?>
<?php
	include('Head.php');
?>

<div>
<img src="Images/map.png" class="w3-border w3-padding w3-padding-16" alt="SoftwebBanner" style="width:100%" height="350px">
</div>

<Div class="containeer">	
<DIV style="width: 100%; height:auto; position:relative; margin:0px; padding:29px; overflow: hidden; background-color: #778899;"> 
    <DIV class="row">
   	   <div class="col-md-6">
                <div class="card contact_form">
                    <form id="" class="form" method="POST" autocomplete="off">
                        <h3 class="text-center">CONTACT DETAILS</h3>
                        <input type="text" placeholder="Name" id="Name" required="required" name="Name">

                        <input type="email" placeholder="Email" id="email" requireds="required" name="Email">

                        <input type="text" placeholder="Subject" id="Subject" required="required" name="Subject">
                        <textarea placeholder="Message" id="message" required="required" name="Message"></textarea>
                        <div>
			<input type="submit" name="Add" value="SEND" />
                        </div>
                    </form>
                </div>

        </div>
		</div>

              <div class="contact_Details card">
                    <div class="Details text-center">
					 <p class="text-center">Plot 117 Suite 214 Bethel Plaza Beside, Mobile Filling Station
					 <br>by Jimoh BusStop, Shasha Road, Alimosho Lagos, Nigeria.</p>
                        <span><i class="fa fa-phone"></i>(+234) 8065230879,  (+234) 8093932505</span>
                        <span><i class="fa fa-envelope"></i> admin@Softwebsystem.com , info@softwebsystemtechnologies.com</span>
						<h2>Please contact us we would like to get feedback from you.</h2>
                    </div>
                </div>
				<div align=center><img src="Images/gallery1.jpg" class="w3-border w3-padding w3-padding-16" alt="SoftwebBanner" style="width:350px" height="300px"></div>
		</Div>		
	<?php
  include('Foot.php');
?>
