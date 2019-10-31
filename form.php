<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action= "validation.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="Uname" class="form-control" aria-describedby="emailHelp" placeholder="Enter Username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your Username with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="Pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
  <p>Don't Have an accout? Sign up <a href="signup.php">HERE</a></p>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>