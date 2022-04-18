<?php 

session_start(); 
require "DBConnection.php";

    $uname = $_POST['uname'];
    $pass = $_POST['password'];

    
    if (empty($uname) or empty($pass)) {
            header("Location: result.php?error=Username and Password are required");
            exit();
        }

    else{

        $q = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
        $result = mysqli_query($dbc, $q);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['username'] == $uname && $row['password'] == $pass) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['id'] = $row['id'];
                setcookie("username",$row['username']);
                setcookie("password",$row['password']);

                header("Location: table.php");
                exit();

            }else{

                header("Location: result.php?error=Incorect User name or password");
                exit();
            }

        }else{

            header("Location: result.php?error=Incorect User name or password");
            exit();

        }

    }

