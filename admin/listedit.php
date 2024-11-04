<?php error_reporting(0); 
include'check.php';
include'../function.php';
$title = "Edit Post";

include'header.php';







if (isset($_POST['update_id'])){ 

 
$number = $_POST["number"];
$city = $_POST["city"];
$state = $_POST["state"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];
$info = $_POST["info"];
$uid = $_POST["update_id"];

$sql = "UPDATE rtolist SET  number='$number' , city='$city' , state='$state', phone='$phone' , email='$email', address='$address', info='$info' WHERE id= $uid";



if (mysqli_query($conn, $sql)) {
echo'<div class="alert alert-success">  <strong>Success!</strong> updated successfully.</div>';
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

}






if (isset($_GET['id'])){ 
 
$sql = "SELECT * FROM rtolist WHERE id =".$_GET['id'];
$rs_result = $conn->query($sql);
while($row = $rs_result->fetch_assoc())
{	

$id = $row["id"];
$number = $row["number"];
$city = $row["city"];
$state = $row["state"];
$phone = $row["phone"];
$email = $row["email"];
$address = $row["address"];
$info = $row["info"];

}?>


 
   <div class="shadow-sm rounded p-3 my-3">
 
      <form method="POST" >
         
        
   <div class="row">      


 <div class="col-sm-4 mt-4"> 
<label for="number" class="text-muted form-label text-capitalize">number</label>
<input type="text" class="form-control" id="number" name ="number" value="<?=$number?>">
</div>


 <div class="col-sm-4 mt-4">  
<label for="city" class="text-muted form-label text-capitalize">city</label>
<input type="text" class="form-control" id="city" name ="city" value="<?=$city?>">
</div>


 <div class="col-sm-4 mt-4">  
<label for="state" class="text-muted form-label text-capitalize">state</label>
<input type="text" class="form-control" id="state" name ="state" value="<?=$state?>">
</div>

 <div class="col-sm-4 mt-4">  
<label for="phone" class="text-muted form-label text-capitalize">phone</label>
<input type="text" class="form-control" id="phone" name ="phone" value="<?=$phone?>">
</div>


 <div class="col-sm-4 mt-4">  
<label for="email" class="text-muted form-label text-capitalize">email</label>
<input type="text" class="form-control" id="email" name ="email" value="<?=$email?>">
</div>

 <div class="col-sm-4 mt-4">  
<label for="address" class="text-muted form-label text-capitalize">address</label>
<input type="text" class="form-control" id="address" name ="address" value="<?=$address?>">
</div>


</div>


 <div class="mt-4"> <label for="editor" class="text-muted form-label text-capitalize">post</label>
<textarea class="form-control" id="editor"  cols="40" rows="4" name="info" placeholder="Type or Paste POST content here..."required><?php echo $info;?></textarea>
  </div>





         <input type="hidden"  name="update_id" value="<?php echo $id;?>"> 


         <?php if($demoMode){?>
   
<div class="text-danger small p-3 text-center">You can't Update into demo mode. please turn off demo mode</div>
 <?php } else{

echo '<center><button class="btn btn-sm btn-outline-primary m-1" type="submit" name="update">Update</button></center> ';
 } ?>


        
      </form>
   </div>
 



<script>    CKEDITOR.replace('editor');</script>
<?php  }







include'footer.php';
?>