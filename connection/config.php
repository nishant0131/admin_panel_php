<?php 
/* 
@author :
@copyright: 
*/

class createConnection //create a class for make connection
{
   var $site_host = "localhost";
   var $db_username = "root";    // specify the sever details for mysql
   var $db_password = "";
   var $db_name = "cyno_portal";
   
    function connectToDatabase(){ 
        $db_instance = new createConnection();
        $host = $db_instance->site_host;
        $username = $db_instance->db_username;
        $password = $db_instance->db_password;
        $database = $db_instance->db_name;

        //create a function for connect database
        $conn= mysqli_connect($host,$username,$password) or die("Database couldn't connect").mysqli.error();

        if(!$conn){
            $this->error = 1; //raised a flag of 1 if error found and return null
            return NULL;
        }
        
        //selecting the database if everything goes fine 
        $selct_db = mysqli_select_db($conn,$database);
        return $conn;
    }
}
?>
