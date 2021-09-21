<?php
$insert = false;
if(isset($_POST['name'])){

    $server = 'localhost';
    $username = 'root';
    $password = '';

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection to this databse failed due to".mysqli_connect_error());
    }
    // echo"Sucessfully connected";
    
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    
    $sql = "INSERT INTO `form`.`students` ( `Name`, `age`, `gender`, `email`, `phone`, `date`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', current_timestamp());";
    // echo $sql;

    if($con->query($sql)==true){
        // echo"Successfully Inserted";
        $insert = true;
    }
    else{
        echo"Error: $sql <br> $con->error";
    }
    $con->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <img class="bg" src="MITWPU.jpg" alt="MITWPU">
    <div class="container">
        <h1>Welcome to MIT WPU (DEMO)</h1>
        <p>Enter your details and submit this form</p>
    <?php
        if($insert == true){
            echo "<p class='submitmsg'> Thankyou for submitting</p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter Gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter Phone no.">
            <button class="btn">SUBMIT</button>
        </form>

    </div>
    <script src="index.js"></script>
</body>
</html>



<!--  -->

