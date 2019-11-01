<?php
//mysqli_report(MYSQLI_REPORT_ALL);
session_start();
$db = new mysqli('localhost','root','mehta1234','NewUser') or die("Unable to connect");
$username = mysqli_real_escape_string($db,$_POST['Uname']);
$Pass = md5(mysqli_real_escape_string($db,$_POST['Pass']));

if(isset($_SESSION['Uname'])){
    echo "weclome : ".$_SESSION['Uname']."<br>";
    echo "You Are Now Logged in !<br>";
    echo "To Logout press button below :<br>";
    echo "<a href='logout.php'><button>Logout</button></a>";
}
else{
    if(isset($_POST['Uname']) && isset($_POST['Pass'])){
        $user_select_query = "SELECT * FROM UserRegistration WHERE username='$username' AND password='$Pass'";
        $result = mysqli_query($db, $user_select_query);
        if(mysqli_num_rows($result) == 1)
        {
            echo "<script>alert(\"uname = $username and pass = $Pass\")</script>";
        }
    else{
        echo "<script>alert(\"username or password incorrect\");</script>";
        echo "<script>location.href = 'form.php'</script>";

    }
    }
    else{
        echo "<script>location.href = 'form.php'</script>";
    }

}
?>
