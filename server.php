<?php
session_start();

$db = mysqli_connect('localhost','root','mehta1234','NewUser') or die("Unable to connect");

//register users

$username = mysqli_real_escape_string($db, $_POST['Uname']);
$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
$Pass = mysqli_real_escape_string($db, $_POST['Pass']);
$CPass = mysqli_real_escape_string($db, $_POST['CPass']);

//handling errors
$errors = array(); 
//check if user already exists
$user_select_query = "select * from UserRegistration where username = '$username' limit 1";
$result = mysqli_query($db, $user_select_query);
$user = mysqli_fetch_assoc($result);

if($user){
    if($user['username'] === $username){array_push($errors,"username already taken");}
}
if(count($errors) == 0){
    $password = md5($Pass);
    mysqli_query($db,"INSERT INTO UserRegistration(username,firstname,lastname,password) VALUES('$username','$firstname','$lastname','$password')");
    echo "<script>alert(\"Successfully registered. Redirecting to Login page\"";
    header("location:form.php");
}
else{
    echo "<script>alert(\"username already taken!\")</script>";
    header("location: signup.php");
}
?>
