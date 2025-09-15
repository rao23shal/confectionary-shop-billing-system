<?php 
$con = mysqli_connect('localhost','root','','user_data');

// check database connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['sign_up'])) {
    $full_name = $_POST['full_name'];
    $username  = $_POST['username'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $country   = $_POST['country'];

    // check if email already exists
    $Dup_email = mysqli_query($con, "SELECT * FROM `user` WHERE email='$email'");
    if ($Dup_email && mysqli_num_rows($Dup_email) > 0) {
        echo "
        <script>
        alert('This email is already taken!');
        window.location.href='register.php';
        </script>";
        exit();
    }

    // check if username already exists
    $Dup_username = mysqli_query($con, "SELECT * FROM `user` WHERE username='$username'");
    if ($Dup_username && mysqli_num_rows($Dup_username) > 0) {
        echo "
        <script>
        alert('This username is already taken!');
        window.location.href='register.php';
        </script>";
        exit();
    }

    // insert new user
    $query = "INSERT INTO `user` (`full_name`, `username`, `email`, `password`, `country`) 
              VALUES ('$full_name','$username','$email','$password','$country')";
    
    if (mysqli_query($con, $query)) {
        echo "
        <script>
        alert('Register successfully!');
        window.location.href='login.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
