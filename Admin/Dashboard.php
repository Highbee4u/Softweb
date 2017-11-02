              <?php
			  include('src/Header.php');
			  ?>
			  		<a rel="facebox" href="#">All Projects</a>
				  <table cellpadding="1" cellspacing="1" id="resultTable">
					  <thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7" width="15%">Project ID </th>
								<th width="15%"> Title </th>
								<th width="15%">Start Date </th>
								<th width="15%">End Date </th>
								<th width="15%">Officer In-Charge </th>
								<th width="15%">Platform in Use </th>
								<th width="15%">Action</th>
								
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
								echo '<td><div align="left">'.$row['Title'].'</div></td>';
								echo '<td><div align="left">'.$row['startDate'].'</div></td>';
								echo '<td><div align="left">'.$row['endDate'].'</div></td>';
								echo '<td><div align="left">'.$row['officerInCHarge'].'</div></td>';
								echo '<td><div align="left">'.$row['platformInUse'].'</div></td>';
								echo '<td><div align="center"><a href="ViewPdetails.php?id='.$row['projectID'].'" class="delbutton" title="Click To View">View Details</a></div></td>';
								echo '</tr>';
							}
						?> 

						</tbody>
				  </table>
			  </div>
<?php
  include('src/footer.html');
?>