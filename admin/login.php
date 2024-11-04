<?php session_start();
include'../function.php';

$title = "Admin Panel";
include'header.php';




if(isset($_POST['user_name']) && isset($_POST['user_password'])){
$sql = "SELECT COUNT(*) FROM users WHERE user_name = '".$_POST['user_name']."' AND password ='".$_POST['user_password']."'";
$result = mysqli_query($conn, $sql);
$count = mysqli_fetch_assoc($result)['COUNT(*)'];

if($count == 1){
     session_start();
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $_POST['user_name'];
    echo "<script> window.location = 'index.php';</script>";
    print_r($_SESSION);
}



}

?> 

 <div class="text-center bg-white p-4 border rounded border-dark" style="max-width:400px; margin:auto;">
        <h1>Login</h1>
        <p>Please fill in your credentials to login.</p>

         <form action="" method="post">
            <div class="form-group mt-3">
                <label class="text-muted">Username</label>
                <input type="text" name="user_name" class="form-control">
               </div>    
            <div class="form-group mt-3">
                <label class="text-muted">Password</label>
                <input type="password" name="user_password" class="form-control">
               
            </div>
            <div class="form-group  mt-3">
                <input type="submit" class="btn btn-primary btn-lg m-2" value="Login">
            </div>
           
           <?php if($demoMode){?>
                     <div class="form-group  mt-3 text-muted">
                <p>Username: <b>admin</b><br>
                Password: <b>admin</b></p>
            </div>
            <?php } ?>
            
        </form>
    </div>
    
    
    <?php

include 'footer.php';

?>
