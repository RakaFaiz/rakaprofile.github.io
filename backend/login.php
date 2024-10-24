<?php

        if(isset($_POST['email']) || isset($_POST['password'])) {
             $email = $_POST['email'];
             $password = $_POST['password'];

    
             if($email == 'power@gmail.com' && $password == '1234') {
                header('Location: ./../dashboard.php'); 
             } else {
                echo "Email atau password salah";
                  
             }
} 
?>
