<?php
    require "database.php";
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $result = mysqli_query($conn, "SELECT * FROM registration WHERE email = '$email'");
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) > 0){
          if($password == $row['password']){
            $_SESSION["login"] = "yes";
            header("Location: dash.php");
            die();
          }
          else{
            echo
            "<script> alert('Wrong Password'); </script>";
            }
        }
        else{
          echo
          "<script> alert('User Not Registered'); </script>";
        }
    }
?>
      