<?php 
include_once("connection/config.php");
// class Admin{

//      function adminConnect(){ 
       
//        if(!$connect){
//             $this->error = 1; //raised a flag of 1 if error found and return null
//             return NULL;
//         }
//         //selecting the database if everything goes fine 
//         $selct_db = mysqli_select_db($connect,$database);
//         return $conn;
//     }
// }


// class User{

//     function adminConnect(){ 
//       $connect = createConnection::connectToDatabase();

//        if(!$connect){
//            $this->error = 1; //raised a flag of 1 if error found and return null
//            return NULL;
//        }
       
//        //selecting the database if everything goes fine 
//        $selct_db = mysqli_select_db($connect,$database);
//        return $conn;
//    }

 

// }

function showMsg($msg){
    $_SESSION['error'] = $msg;
}

function showSuccessMsg($msg){
    $_SESSION['success'] = $msg;
}

function checkMail($email){
   $result = mysqli_query($connect, "SELECT * FROM login_detail where username = '$email'");
   $count = mysqli_num_rows($result);
   if($count == 0)
    return true;
    else
    return false;
  }

    function getUsersList(){
      
        $query = mysqli_query($connect, "SELECT * FROM login_detail");
        if(!$query)
        die('SQL Error'.mysqli_error($connect));
        else
        return $query;
    }
   


?>