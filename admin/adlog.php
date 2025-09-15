<?php 
session_start();
$con = mysqli_connect('localhost','root','','user_data');

if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $con->prepare("SELECT * FROM admin WHERE username=? AND password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
    echo "
    <script>
    alert('Successfully login!');
    window.location.href='admin_panel.php';
    </script>";
} else {
    echo "
    <script>
    alert('Incorrect username/email/password!');
    window.location.href='login.php';
    </script>";
}
?>
