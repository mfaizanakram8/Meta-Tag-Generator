<?php error_reporting(0); 
 
include '../function.php';

print_r($_REQUEST);


if ($_GET['event'] == "home_post")
{
   echo'hello'; 
    if($demoMode){
    die("<div style='color:red; padding:5px;'>Error: Not Allowed in Demo Mode</div>");
    }
    

   
    
}















if ($_GET['event'] == "changeIDpass")
{
    
    if($demoMode){
    die("<div style='color:red; padding:5px;'>Error: Not Allowed in Demo Mode</div>");
    }
    $ni = trim($_GET['eventId']);
    $np = trim($_GET['eventPass']);
    
     if($np){
        $sql = "UPDATE users SET password='$np' WHERE id=1"; 
    }
    
    
     if($ni){
        $sql = "UPDATE users SET user_name='$ni' WHERE id=1"; 
    }
    
    if($ni && $np){
        $sql = "UPDATE users SET password='$np' , user_name='$ni' WHERE id=1"; 
    }
   

   
    if ($conn->query($sql) === true)
    {
        echo '<div class="alert alert-success"> <strong>Success!</strong> Updated successfully.</div>';
    }
    else
    {
        echo "Error updating record: " . $conn->error;
    }
}






if ($_GET['event'] == "pageDelete")
{
     if($demoMode){
    die("<div style='color:red; padding:5px;'>Error: Not Allowed in Demo Mode</div>");
    }
    
    $id = $_GET['eventId'];
    $sql = "DELETE FROM page WHERE id=$id";
    if ($conn->query($sql) === true)
    {
        echo '<div class="alert alert-success"> <strong>Success!</strong> Deleted successfully.</div>';
    }
    else
    {
        echo "Error deleting record: " . $conn->error;
    }
}








if ($_GET['event'] == "Newpage")
{
    if ($_GET['title'] && $_GET['post_content'])
    {
        $title = $_GET['title'];
        $post_content = $_GET['post_content'];
        $sql = "INSERT INTO page (title, post_content)VALUES ('$title', '$post_content')";
        if ($conn->query($sql) === true)
        {
            echo '<div class="alert alert-success">  <strong>Success!</strong> New Page created successfully </div>';
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }else
        {
             echo '<div class="alert alert-danger">  <strong>Error!</strong> Please Enter Title And Page Content</div>';
        }
}

if ($_GET['event'] == "pageEdit")
{
    
    $sql = "UPDATE page SET post_content='{$_GET['post_content']}' , title='{$_GET['eventTitle']}' WHERE id=".$_GET['eventId'];

if ($conn->query($sql) === TRUE) {
  echo '<div class="alert alert-success" role="alert"> Success! Page Updated Succesfully</div>';
} else {
  echo "Error updating record: " . $conn->error;
}


 
}



