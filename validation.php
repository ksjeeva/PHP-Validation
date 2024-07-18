<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Success</title>
            <link rel="stylesheet" href="style.css">
            <link
              href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
              rel="stylesheet"
            />
        
        </head>
        <body>
            <div class="container">
            <div class="success-popup" id="success-popup">
                <i class="success-icon bx bxs-check-circle"></i>
                <h1>Complete.!</h1>
                <p>Your registration successfull click here to login</p>
          <a href="index.php"><button class="go-login">OK</button></a>      
              </div>
            </div>
            <script src="script.js"></script>
        </body>
        </html>
<?php

include('config.php');
// store data in the data base register form code 

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `formdetails`( `name`, `email`, `phone`, `password`) VALUES ('$name','$email','$phone','$password')";

    if($conn->query($sql)){
        echo '<script>document.getElementById("success-popup").style.top="50%";
        document.getElementById("success-popup").style.visibility="visible";</script>';
    }else{
        echo "Something wrong";
    }


}


?>


