<html >
<head>
  <meta charset="UTF-8">
  <title>Login CMS</title>   
  <link rel="stylesheet" href='../assets/bootstrap/css/bootstrap.css'>
  <link rel="stylesheet" href="../assets/bootstrap/css/style.css">
</head>
<body>

  <div class="container wrapper">
    <form class="form-signin" method="POST" action="proses_login.php">       
      <h2 class="form-signin-heading text-center">Login <small>cms</small></h2>
        <div class="form-group">
          <label>User</label>
          <input type="text" class="form-control" name="user" placeholder="User" required autofocus="" />
        </div>
        <div class="form-group">
          <label>Kata Sandi</label>
          <input type="password" class="form-control" name="password" placeholder="Kata Sandi" required/>      
        </div>          
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>

</body>
</html>
