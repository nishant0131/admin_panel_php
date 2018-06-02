<?php
    session_start();
    // error_reporting(0);
    include_once('config.php');
    include_once('../includes/functions.php');
    $connect = createConnection::connectToDatabase();

    if(isset($_POST['registration'])){
        $firstName = $_POST['f_name'];
        $lastName = $_POST['l_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $address = $_POST['address'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $mobile_no = $_POST['mobile_no'];
      
       if(checkMail($email))
       {
              //$query is a variable whcih contain the insert query to be roll on database
            $query = "insert into login_detail set username='".$email."', password='".$password."', role = 'user'";
            // perform a query on database
            mysqli_query($connect,$query);
            //$query for selection inside login_detail 
            $query = "select * from login_detail where username = '".$email."'";
            //perform a selection on database
            $query_result = mysqli_query($connect,$query);
            //get inserted data
            $query_data =  mysqli_fetch_assoc($query_result);
            //get id from data array and save in variable 
            $userId = $query_data['id'] ;
            //set userid to registration table loginId
            $query =  "insert into registration set login_id = '$userId', first_name ='".$firstName."',last_name  = '".$lastName."', email_id = '".$email."',
            address = '".$address."', city = '".$city."', country = '".$country."', mobile_no = '".$mobile_no."'"; 
                     
            if(mysqli_query($connect,$query)){
                showSuccessMsg("Registered Successfully");
                header("location: ../login.php");
            }
        }
        else {
            showMsg("Email Address already exists.");
            header("location: ../register.php");
        }
    }
?>