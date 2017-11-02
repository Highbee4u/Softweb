              <?php
			  include('src/Header.php');
			  ?>
			  		<a rel="facebox" href="addPDetails.php">Add New Project Details</a>
				  <table cellpadding="1" cellspacing="1" id="resultTable">
					  <thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7" width="15%">Project ID </th>
								<th width="25%"> Project RegNo </th>
								<th width="25%"> Company Email </th>
								<th width="25%"> Title </th>
								<th width="45%">Company Name </th>
								<th width="45%">Company Address </th>
								<th width="45%">Start Date </th>
								<th width="15%">End Date </th>
								<th width="15%">Contact Person </th>
								<th width="15%">Completion Level(%) </th>
								<th width="45%">Officer In-Charge </th>
								<th width="45%">Platform in Use </th>
								<th width="45%">Action</th>
								
							</tr>
					</thead>
						<tbody>
						<?php
						include('db.php');
						$result = mysql_query("SELECT * FROM projectprogress");
						while($row = mysql_fetch_array($result))
							{
								echo '<tr class="record">';
								echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['projectID'].'</td>';
								echo '<td><div align="left">'.$row['projectRegNo'].'</div></td>';
								echo '<td><div align="left">'.$row['companyEmail'].'</div></td>';
								echo '<td><div align="left">'.$row['Title'].'</div></td>';
								echo '<td><div align="left">'.$row['companyName'].'</div></td>';
								echo '<td><div align="left">'.$row['companyAddress'].'</div></td>';
								echo '<td><div align="left">'.$row['startDate'].'</div></td>';
								echo '<td><div align="left">'.$row['endDate'].'</div></td>';
								echo '<td><div align="left">'.$row['contactPerson'].'</div></td>';
								echo '<td><div align="left">'.$row['percentageDone'].'</div></td>';
								echo '<td><div align="left">'.$row['officerInCHarge'].'</div></td>';
								echo '<td><div align="left">'.$row['platformInUse'].'</div></td>';
								echo '<td><div align="center"><a href="DeletePdetails.php?id='.$row['projectID'].'" class="delbutton" title="Click To Delete">delete</a> | <a href="EditPDetails.php?id='.$row['projectID'].'" class="delbutton" title="Click To Edit">Edit</a></div></td>';
								echo '</tr>';
							}
						?> 

						</tbody>
				  </table>
			  </div>
<?php
  include('src/footer.html');
?>