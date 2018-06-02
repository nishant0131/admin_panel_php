<?php 
session_start();

include_once("connection/config.php");
include_once('includes/functions.php');

$connect = createConnection::connectToDatabase();

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        header("location: login.php");
      exit();
    }
    else{
    $query = "SELECT * FROM login_detail WHERE username='".$username."' AND password='".$password."'";

    $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
    $count = mysqli_num_rows($result);
    echo $count;

        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
                $userId = $_SESSION['uid'] = $row['id'];
                $user = $_SESSION['user'] = $row['username'];
                echo $_SESSION['uid'];
               header("location: index.php");
            }
        }
        else{
            showMsg("Entered wrong credentials.");
            header("location: login.php");
            // unset($_SESSION['error']);
        }
        
    }
}
?>



