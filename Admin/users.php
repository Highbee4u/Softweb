<?php
  include('src/Header.php');
?>
					
					<a rel="facebox" href="adduser.php">Add New User</a>
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7">ID</th>
								<th>NAME</th>
								<th>USERNAME</th>
								<th>PASSWORD</th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('db.php');
							$result = mysql_query("SELECT * FROM admin");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['id'].'</td>';
									echo '<td><div align="left">'.$row['name'].'</div></td>';
									echo '<td><div align="left">'.$row['username'].'</div></td>';
									echo '<td><div align="left">********</div></td>';
									echo '<td><div align="center"><a href="DeleteAdmin.php?id='.$row['id'].'" class="delbutton" title="Click To Delete">delete</a> | <a href="EditAdminDetails.php?id='.$row['id'].'" class="delbutton" title="Click To Edit">Edit</a></div></td>';
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
				</div>
<?php
  include('src/footer.html');
?>