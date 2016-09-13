<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Login CMS</title>  
  <link rel="stylesheet" href='../assets/bootstrap/css/bootstrap.css'>
  <link rel="stylesheet" href="../assets/bootstrap/css/style.css">
</head>
<body>

  <div class="container-fluid mar-top">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
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
  </div>

</body>
</html>
