<?php session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
 // Start the session

// Check if the form is submitted
if( isset($_POST['submit']) ) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['emailname'];
    $password= $_POST['passname'];
    $confirmPassword =$_POST['confirm_password'];
    if( empty($email) ||empty($password) || empty($firstName) ||empty($lastName) || empty($confirmPassword)   ) {
    echo'<h3> empty values </h3>';
    }else{
        if(preg_match('/^\w+@emsi\.ma$/',$email)!=0){
        if ($password === $confirmPassword) {
            // Store data in session variables
            $_SESSION['first_name'] = $firstName;
            $_SESSION['last_name'] = $lastName;
            $_SESSION['emailname'] = $email;
            $_SESSION['passname'] = $password;
            $_SESSION['confirm_password'] = $confirmPassword; // In a real application, never store passwords in plain text
    
            // Redirect to home.php
            header("Location: index2.php");
            exit();
        } else {
            echo "<h3 >Passwords do not match.<h3>";
        }
    }else{
        echo "<h3>invalid email</h3>";
    }
   }
}else{
    echo " <h3>Please Log In!<h3>";
   }

?>
    <h2>Login Form</h2>
    <form method="POST" action="">
        <label for="first_name">First Name:</label>
        <input   type="text" id="first_name" name="first_name" ><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" ><br><br>

        <label for="email">Email:</label>
        <input  type="email" id="email" name="emailname" ><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="passname"><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input  type="password" id="confirm_password" name="confirm_password" ><br><br>

        <button type="submit" name="submit">Log in</button>
    </form>
</body>
</html>