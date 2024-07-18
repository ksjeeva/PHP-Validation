<?php
include('config.php');

if(isset($_POST['login'])){
    $name = $_POST['name'];
    $password =$_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT `name`, `password` FROM `formdetails` WHERE `name` = ? AND `password` = ?");
    $stmt->bind_param("ss", $name, $password);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0){
        echo header('Location:test.html');
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
