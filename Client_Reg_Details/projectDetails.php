<?php
include('Head.php');
?>

<div id="site_content">
      <div class="content">
      	<form action="viewProjectDetails.php" method="POST" autocomplete="off">
        		<div align="Center">
                <table align = "center" bgColor="transparent">
        			<tr>
        				<td>Enter Project Registration No:</td>
        				<td><input type="text" name="txtpRegNo" placeholder="Project Reg. No." required cols="100" rows="50" /></td>
        			</tr>
        			<tr>
        				<td>&nbsp;</td>
        				<td><input type="submit" name="btnSubmit" Value = "View"></td>
        			</tr>
        		</table>
                </div>
        </form>
			  </div>
      </div>
    <?php
include('footer.php');
    ?>
   








