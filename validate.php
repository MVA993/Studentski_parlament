<?php      
    include('connection.php');  
    $username = $_POST['uid'];  
    $password = $_POST['pwd'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql    = "SELECT * FROM members WHERE membername = '$username' AND password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row    = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count  = mysqli_num_rows($result);  
          
        if($count == 1){  
            session_start();
            $_SESSION['login'] = true;
            header("location: Home.php");
            exit();
        }  
        else{  
            header("location: Login.php?error=wronglogin");
            exit(); 
        }
        
?>  