<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajay";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(!empty($_POST['g-recaptcha-response'])) {
  $secret = '6LdBjBcUAAAAAGeJ_t8IkvDq454cnsjZd_juycJZ';
  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
  $responseData = json_decode($verifyResponse);
  if($responseData->success){ 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO contact ".
           "(id, name, email, telephone, dob, gender) ".
           "VALUES ".
           "('','$name','$email','$telephone','$dob','$gender')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }else {
      $errMsg = 'Robot verification failed, please try again.';
    }
}else {
      $errMsg = 'Please click on the reCAPTCHA box.';
}
mysqli_close($conn);
?>