<?php
include('db.php');
?>
<?php 
if (isset($_POST["submit"]) )
{                       
                      
                       $NewsId = $_POST['NewsId'];
	$Tittle=$_POST['Tittle'];
	$Description=$_POST['Description'];
	$Photo=$_POST['Photo'];

                       
    $temp_name=$_FILES['Photo']['tmp_name'];
    $type= $_FILES['Photo']['type']; 
    $image=addslashes(file_get_contents($_FILES['Photo']['tmp_name']));
    $image_name=addslashes($_FILES['Photo']['name']);
    
    //Check Image Size
    list($width,$height) = getimagesize($temp_name);
    $newwidth=100;
    $newheight1<=100;
    $newheight2<=120;
    
    //Check for image type
    if (($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp") || ($type=="image/png")){
    echo"";
    }
    else{
    echo "Your File Must be in jpeg, jpg or bmp";
     exit;
    }

$target = "Gallery/";
  $target = $target .$image_name; 
    if (move_uploaded_file($_FILES['Photo']['tmp_name'], $target)) {
          echo "";
        }
        else{
          echo "<h2>your image was not uploaded successfully</h2>";
          exit;
        }
                       $sql = "UPDATE news SET Tittle='".$Tittle."', Description='".$Description."', Photo='".$Photo."' WHERE NewsId='".$NewsId."'";
                        
                        if(!mysql_query($sql)){
                        echo (mysql_error());
                      }
                      else{
                      
					  header("location: Dashboard.php");
                    }
} 
?> 