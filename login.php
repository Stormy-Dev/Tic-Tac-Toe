<?php      
        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "login";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
        $username = $_POST['user'];  
        $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'"; 
        $result = mysqli_query($con, $sql); 
        $count = mysqli_num_rows($result); 
                      
        if($count > 0){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1><center> Login failed. Invalid username or password.</center></h1>";  
        }    
?>