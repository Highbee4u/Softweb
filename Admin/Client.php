              <?php
			  include('src/Header.php');
			  ?>
			  		<a rel="facebox" href="#">All Client</a>
				  <table cellpadding="1" cellspacing="1" id="resultTable">
					  <thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7" width="15%">User ID </th>
								<th width="15%"> Company Name </th>
								<th width="15%">Address </th>
								<th width="15%">Username </th>
								<th width="15%">Password </th>
								<th width="15%">Email </th>
								<th width="15%">Status </th>
								<th width="15%">Contact Person </th>
								<th width="15%">Phone </th>
								
							</tr>
					</thead>
						<tbody>
						<?php
						include('db.php');
						$result = mysql_query("SELECT * FROM client");
						while($row = mysql_fetch_array($result))
							{
								echo '<tr class="record">';
								echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['UserID'].'</td>';
								///echo '<td><div align="left">'.$row['projectRegNo'].'</div></td>';
								echo '<td><div align="left">'.$row['companyName'].'</div></td>';
								echo '<td><div align="left">'.$row['address'].'</div></td>';
								echo '<td><div align="left">'.$row['userName'].'</div></td>';
								echo '<td><div align="left">'.$row['password'].'</div></td>';
								echo '<td><div align="left">'.$row['userEmail'].'</div></td>';
								echo '<td><div align="left">'.$row['userStatus'].'</div></td>';
								echo '<td><div align="left">'.$row['contactPerson'].'</div></td>';
								echo '<td><div align="left">'.$row['Phone'].'</div></td>';
								echo '</tr>';
							}
						?> 

						</tbody>
				  </table>
			  </div>
<?php
  include('src/footer.html');
?>
