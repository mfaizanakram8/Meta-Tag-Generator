<?php error_reporting(0); 
include'check.php';
include'../function.php';
include'../db.php';
$title = "Admin Panel";


$ephppage = $_GET['pn'];
$edit = $_GET['edit'];
$id = $_POST['id'];
$delete = $_GET['delete'];
$add = $_GET['add'];

if($add){$title ="Add New Page"; }
if($edit) {$title ="Edit Page";}
if(!$add && !$edit) {$title ="Manage Pages";}




include'header.php';
include'menu.php';





if($delete){
$sql = "DELETE FROM page WHERE id=$delete";
if ($conn->query($sql) === TRUE) {
   echo'<div class="alert alert-success"> <strong>Success!</strong> Deleted successfully.</div>';
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
}




if ($id){
$title = $_POST['title'];
$post_content = $_POST['post_content'];
$sql = "UPDATE page SET post_content='$post_content' , title='$title' WHERE id=$id";
if (mysqli_query($conn, $sql)) {
echo'<div class="alert alert-success">  <strong>Success!</strong> updated successfully.</div>';
} else {
    echo "Error updating record: " . mysqli_error($conn);}
}






if ($edit){ 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}
$sql = "SELECT * FROM page WHERE id =$edit ";
$rs_result = $conn->query($sql); while($row = $rs_result->fetch_assoc()) {	
$ephp_post_content = $row["post_content"];
$title= $row["title"];}?>
<center><div class="bg-white border border-primary rounded p-3 my-3">  <script src="ckeditor/ckeditor.js"></script>
<form method="POST" >
<b>Page Title</b>
<input class="form-control " type="text" name="title" placeholder="Enter Page Title" size="100%" style="vertical-align:middle" value="<?php echo $title;?>">
<b><font color="red">*</font> <b>Post</b><br>  
<textarea class="form-control" id="editor"  cols="40" rows="4" name="post_content" placeholder="Type or Paste POST content here..."required><?php echo $ephp_post_content;?></textarea>
<br><script>    CKEDITOR.replace('editor');</script>
<input type="hidden"  name="id" value="<?php echo $edit;?>"><br> 
<button class="btn btn-sm btn-outline-primary mr-1" type="submit" name="update" <?=$disabled?>><b>Update </b></button>
</form>
</div></center>
<?php  }







if($add){ 
    if (isset($_POST['page'])) {
$title = $_POST['title'];
$post_content = $_POST['post_content'];
$sql = "INSERT INTO page (title, post_content)VALUES ('$title', '$post_content')";
if ($conn->query($sql) === TRUE) {
echo '<div class="alert alert-success">  <strong>Success!</strong> New Page created successfully </div>';
} else {    echo "Error: " . $sql . "<br>" . $conn->error;
}$conn->close();}?>
<center><div class="bg-white border border-primary rounded p-3 my-3"><script src="ckeditor/ckeditor.js"></script>
<form method="POST" action="">
<div class="p-1">
<b>Page Title</b>
<input class="form-control " type="text" name="title" placeholder="Enter Page Title" size="90%" style="vertical-align:middle">
</div><p></p><b><font color="red">*</font> <b>Page Content</b><br>  
<textarea class="form-control" id="editor" cols="40" rows="4" name="post_content" placeholder="Type or Paste PAGE content here..."required></textarea>
<br><script>    CKEDITOR.replace('editor');</script><br> 
<button class="btn btn-sm btn-outline-primary mr-1" type="submit" name="page"><b>Add Page </b></button>
</form></div></center>  
<?php } 



include'footer.php';
?>