              <?php
			  include('src/Header.php');
			  ?>

				  <table cellpadding="1" cellspacing="1" id="resultTable">
					  <thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7" width="15%"> ID </th>
								<th width="15%"> NAME </th>
								<th width="15%"> Subject </th>
								<th width="25%"> E-MAIL </th>
								<th width="45%">MESSAGE </th>
								
							</tr>
					</thead>
						<tbody>
						<?php
						include('db.php');
						$result = mysql_query("SELECT * FROM contact");
						while($row = mysql_fetch_array($result))
							{
								echo '<tr class="record">';
								echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['contactID'].'</td>';
								echo '<td><div align="left">'.$row['name'].'</div></td>';
								echo '<td><div align="left">'.$row['Email'].'</div></td>';
								echo '<td><div align="left">'.$row['Subject'].'</div></td>';
								echo '<td><div align="left">'.$row['message'].'</div></td>';
								echo '</tr>';
							}
						?> 

						</tbody>
				  </table>
			  </div>
<?php
  include('src/footer.html');
?>