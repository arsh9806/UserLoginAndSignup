<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
    /* #exampleInputPassword1{
    background-color:lightgreen;
    } */
    </style>
</head>
<body>
<form action= "server.php" method="post">
<div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" name="firstname" id="fname" class="form-control" aria-describedby="emailHelp" placeholder="Enter Firstname" required>
  </div>
  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" name="lastname" id="lname" class="form-control" aria-describedby="emailHelp" placeholder="Enter Lastname" required>
  </div>
  <div class="form-group">
    <label for="uname">Username</label>
    <input type="text" name="Uname" class="form-control" id="uname" aria-describedby="emailHelp" placeholder="Enter Username" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="Pass" class="form-control" id="exampleInputPassword1" onkeyup="check()" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="CPass" class="form-control" id="confirmPassword" onkeyup="check()" placeholder="Confirm Password" required>
    
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
  <div class="form-group">
  <p>Already a User? Login <a href="form.php">HERE</a></p>
  </div>
  
</form>
<script>
function check(){
  if(document.getElementById('exampleInputPassword1').value != "" && document.getElementById('confirmPassword').value){
    if (document.getElementById('exampleInputPassword1').value ==document.getElementById('confirmPassword').value){
          document.getElementById('exampleInputPassword1').style.background = 'lightgreen';
          document.getElementById('confirmPassword').style.background = 'lightgreen';
         
          }
  else{
    document.getElementById('confirmPassword').style.background = 'pink';
    
  }
}
else{
  document.getElementById('exampleInputPassword1').style.background = 'pink';
  document.getElementById('confirmPassword').style.background = 'pink';
}
}
</script>
</body>
</html>