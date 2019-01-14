<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>




<body style="background-color:#eeeeee;">

  <div class="container">

  <div style="text-align:center;padding:20px;color:blue;font-size:50px;font-weight:bold;">Welcome to My Personal Accountant...</div>
   <div class="card card-login mx-auto mt-5">

      <div class="card-header"><b>Login</b></div>

      <div class="card-body">

        <form method="post" action="controllers/authentication.php">

          <div class="form-group">

            <label>Userid</label>

            <input class="form-control" name="login" type="text" placeholder="Enter username" value="">

          </div>

          <div class="form-group">

            <label>Password</label>

            <input class="form-control" name="password" type="password" placeholder="Password" value="">

          </div>
<input class="btn btn-primary btn-block" type="submit" name="commit" value="Login">

        </form>

        <div class="text-center">

          <a class="d-block small mt-3" href="register.php">New User? Register an Account</a>

        </div>

      </div>

    </div>


<div align="center">
                                 <?php
                                 if(isset($_GET['msg'])){
		  if($_GET['msg']=="login_blank"){
                                    ?>
                                    <script type="text/javascript" language="javascript">
                                    alert('Userid and password cannot be blank');
                                    </script>
                                    <?php
                                    }
                                    if($_GET['msg']=="add"){
                                    ?>
                                    <script type="text/javascript" language="javascript">
                                    alert('User Successfully Registered.\nNow you can login.');
                                    </script>
                                    <?php
                                    }
                                    if($_GET['msg']=="update"){
                                    ?>
                                    <script type="text/javascript" language="javascript">
                                    alert('Profile Successfully Updated\nNow you have to login again.');
                                    </script>
                                    <?php
                                    }
                                    if($_GET['msg']=="login_error"){
                                    ?>
                                    <script type="text/javascript" language="javascript">
                                    alert('Incorrect username or password.');
                                    </script>
                                    <?php
                                    }
                                    if($_GET['msg']=="logout"){
                                    ?>
                                    <script type="text/javascript" language="javascript">
                                    alert('Successfully Logout.');
                                    </script>
                                    <?php
                                    }
                                 }
                                 ?>
                            </div>

  </div>

  <!-- Bootstrap core JavaScript-->

  <script src="vendor/jquery/jquery.min.js"></script>

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>


</html>
