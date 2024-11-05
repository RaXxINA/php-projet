<?php session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
<?php
 // Start the session

// Check if the form is submitted
if( isset($_POST['submit']) ) {
    $email = $_POST['emailname'];
    $password= $_POST['passname'];

    if( empty($email) ||empty($password)  ) {
    echo'<h3> empty values </h3>';
    }else{
        if(preg_match('/^\w+@emsi\.ma$/',$email)!=0){
      
            // Store data in session variables
            
            $_SESSION['emailname'] = $email;
            $_SESSION['passname'] = $password;
         // In a real application, never store passwords in plain text
    
            // Redirect to home.php
            header("Location: index2.php");
            exit();
        
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
        

        <label for="email">Email:</label>
        <input  type="email" id="email" name="emailname" ><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="passname"><br><br>

       

        <button type="submit" name="submit">Log in</button>
    </form>
</body>
</html>