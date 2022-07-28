<?php

  $conn = mysqli_connect("localhost", "root", "") or die("cannot connect");
  mysqli_select_db($conn, "skripsi") or die("cannot select DB");
  
  if(isset($_POST['submit']))
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $data_user=mysqli_query($conn, "SELECT * FROM user where username='$username' and password='$password'");
    $r = mysqli_fetch_array($data_user);
    $username = $r['username'];
    $password = $r['password'];
    
      if ($row['username']==$username &&  $row['password']==$password)
        // $_SESSION['statusakun'] == "1";
      {
      header("Location : admin.html");
    }
    else
  { header("Location : utama.html");}
}

?>

<html>
<head>
<title>RADAR | Login</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/signin.css" rel="stylesheet">
<link rel="icon" type="images/png" href="images/icon.png" />
</head>
<body background="images/bg.jpg">
 <div class="container-fluid">
<form action="login1.php" method="post" class="form-signin">
  <div class="row">
    <div class="col-md-12">
      <img src="images/bmkg.png" width="90px" height="90px" style="display: block; margin: auto;">
    </div>
    </div>
    <p></p>
  <h1 class="h6 mb-3 font-weight-bold" style="text-align: center;">Masuk ke Sistem Monitoring Radar</h1>
  <p></p>

  <label for="inputEmail" class="sr-only">Nama Pengguna</label>
  <input type="text" id="inputEmail" class="form-control" name="username" placeholder="username" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Ingat Saya!
    </label>
    <br>
    <a href="lupapw.html" class="badge badge-danger">Lupa Password?</a>
  </div>
 <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit"><a class="btn btn-lg btn-primary btn-block"  role="button">Masuk</a></button>

  <p class="mt-5 mb-3 text-muted">&copy; 2020-Radar EEC BMKG</p>

</form>
</body>

</html>

