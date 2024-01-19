<?php
include ('dbc.php');

if (isset($_POST["submit"])) {
    $name = $_POST["User_Name"];
    $phone = $_POST["Phone_Number"];
    $email = $_POST["Email"];

    $query = mysqli_query($con, "INSERT INTO appointment (User_Name, Phone_Number, Email) VALUES ('$name', '$phone', '$email')");

    if ($query){
        echo "<script>alert('APPOINTMENT FIXED')</script>";
    } else {
        echo "<script>alert('APPOINTMENT NOT FIXED')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Appointment</title>
    <link rel="icon" href="my images/top.png">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>

<body>

    <div class="wrapper">
        <div class="form-box Appointment">
            <h2>Appointment</h2>
            <a class="home" href="index.php">home</a>

            <form id="appointmentsForm" class="" action="" method="POST" autocomplete="off">
                <div class="input-box">
                    <input type="text" name="User_Name" required>
                    <label>Name</label>
                </div>

                <div class="input-box">
                    <input type="tel" name="Phone_Number" required>
                    <label>Phone Number</label>
                </div>

                <div class="input-box">
                    <input type="email" name="Email" required>
                    <label>Email</label>
                </div>

                <button type="submit" name="submit" class="btn" >Submit</button>
            </form>
        </div>
    </div>
    <script src="script2.js"></script>

</body>

</html>
