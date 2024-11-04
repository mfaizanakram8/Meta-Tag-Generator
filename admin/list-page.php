<?php error_reporting(0); 
include'check.php';
include'../function.php';
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


<?php if($demoMode){?>
    
<div class="text-danger small p-3">You can't update into demo mode. please turn off demo mode</div>
 <?php } else{

echo '<button class="btn btn-sm btn-outline-primary mr-1" type="submit" name="update"><b>Update </b></button>';
 } ?>

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



?>





 <div class="row"> <div class="col-sm-8">
<a href="?add=new" class="btn btn-primary" role="button"> 
Create New Page
</a></div>


<div class="col-sm-4">
 
 
</div>
</div><br>




<?php $sql = "SELECT COUNT(id) FROM page";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($query);
$rows = $row[0];
// This is the number of results we want displayed per page
$page_rows = 10;
// This tells us the page number of our last page
$last = ceil($rows/$page_rows);
// This makes sure $last cannot be less than 1
if($last < 1){
	$last = 1;
}
// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($ephppage)){
	$pagenum = preg_replace('#[^0-9]#', '', $ephppage);
}
// This makes sure the page number isn't below 1, or more than our $last page
if ($pagenum < 1) { 
    $pagenum = 1; 
} else if ($pagenum > $last) { 
    $pagenum = $last; 
}
// This sets the range of rows to query for the chosen $pagenum
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
// This is your query again, it is for grabbing just one page worth of rows by applying $limit



    $sql = "SELECT * FROM page ORDER BY id DESC $limit";;


$query = mysqli_query($conn, $sql);
// This shows the user what page they are on, and the total number of pages
$textline1 = "Total Files (<b>$rows</b>)";
$textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
// Establish the $paginationCtrls variable
$paginationCtrls = '';
// If there is more than 1 page worth of results
if($last != 1){
	/* First we check if we are on page one. If we are then we don't need a link to 
	   the previous page or the first page so we do nothing. If we aren't then we
	   generate links to the first page, and to the previous page. */
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
        
       
        
        
		$paginationCtrls .= '<a  href="?pn='.$previous.'"><span class="btn btn-sm btn-outline-primary m-1">Previous</span></a>';
		// Render clickable number links that should appear on the left of the target page number
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a  href="?pn='.$i.'"><span class="btn btn-sm btn-outline-primary m-1">'.$i.'</span></a>';
			}
	    }
    }
	// Render the target page number, but without it being a link
	$paginationCtrls .= '<span class="btn btn-sm btn-outline-dark m-1 disabled">'.$pagenum.'</span>';
	// Render clickable number links that should appear on the right of the target page number
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a  href="?pn='.$i.'"><span class="btn btn-sm btn-outline-primary m-1">'.$i.'</span></a>';
		if($i >= $pagenum+4){
			break;
		}
	}
	// This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= '<a  href="?pn='.$next.'"><span class="btn btn-sm btn-outline-primary m-1">Next</span></a> ';
    }
}

echo'<div class="table-responsive"><table class="bg-white  table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>';


while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
$post_title= $row["title"];
$post_id= $row["id"];

$ephpurl=cleanurl($post_title);
$ephpurl = str_replace(' ', '-', $ephpurl);
$page_link  ="/page/$ephpurl.html"; 



echo'

 <tr>
<th scope="row" style="width:50px">'.$post_id.'</th>

<td>'.u($post_title).'</td>



<td style="width:150px"><button type="button" class="btn-sm  btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete'.$post_id.'"> Delete</button>



<a href="?edit='.$post_id.'" class="btn-sm btn btn-warning float-right space" role="button">Edit</a>

</td>

 </tr>


'; ?>




<div class="modal fade" id="delete<?=$post_id?>" tabindex="-1" aria-labelledby="delete<?=$post_id?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete<?=$post_id?>">Delete <?=$post_title?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <center>


            <?php if($demoMode){?>
   
<div class="text-danger small p-3">You can't Delete into demo mode. please turn off demo mode</div>
 <?php } else{

echo ' <a class="btn btn-danger btn-lg space" href="?delete='.$post_id.'" >YES</a>';
 } ?>


     
       <button class="btn btn-danger btn-lg space" disabled>YES</button>
       <button type="button" class="btn btn-secondary btn-lg space" data-bs-dismiss="modal" aria-label="Close">No</button>
       </center>
      </div>
       
    </div>
  </div>
</div>











<?php } ?>


 </tbody>
</table>
</div>

<div class="main_box mt-2 text-center">
<?php echo' '.$textline1.'  '.$textline2.' ';?>
<div id="pagination_controls"><?php echo $paginationCtrls; ?></div></div>


 
 
 
 
 
 
 
 
 

<?php
include'footer.php';
?>