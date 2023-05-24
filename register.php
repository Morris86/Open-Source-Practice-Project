<?php
	if (isset($_POST["submit"])){
		$name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

		$errors = array();
           
        if (empty($name) OR empty($email) OR empty($password)) {
        array_push($errors, "<script> alert('All fields are required'); </script>");
        }
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "<script> alert('Email is not valid'); </script>");
        }

		//Check if the email is already being used
		require_once "database.php";
        $sql = "SELECT * FROM registration WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount>0) {
        array_push($errors, "<script> alert('Email already existed'); </script>");
        }
		//----------------------------------------

		if (count($errors)>0) {
        foreach ($errors as  $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
        }else{
		$sql = "INSERT INTO registration (name, email, password) VALUES ( ?, ?, ? )";
		$stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
        if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt,"sss",$name, $email, $password);
            mysqli_stmt_execute($stmt);
            echo "<script> alert('You have successfully created the account'); </script>";
        }else{
            die("Something went wrong");
        }
		}
	}
?>