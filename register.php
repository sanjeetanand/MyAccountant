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


        <script type="text/javascript">
            function validateForm() {
                // var elem = document.getElementById('numbers');
                var numericExpression = /^[0-9]+$/;
                var x = document.forms["myForm"]["username"].value;
                var y = document.forms["myForm"]["password"].value;
                var z = document.forms["myForm"]["name"].value;
                var p = document.forms["myForm"]["address"].value;
                var a = document.forms["myForm"]["email"].value;
                var m = document.forms["myForm"]["mobile"].value;
                var atpos = a.indexOf("@");
                var dotpos = a.lastIndexOf(".");
                if (x == null || x == "") {
                    alert("User name must be filled out");
                    return false;
                }
                if (y == null || y == "") {
                    alert("Password must be filled out");
                    return false;
                }
                if (z == null || z == "") {
                    alert("Name must be filled out");
                    return false;
                }
                if (p == null || p == "") {
                    alert("Address must be filled out");
                    return false;
                }

                if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= a.length)
                {
                    alert("Not a valid e-mail address");
                    return false;
                }
                if (elem.value.match(numericExpression) && elem.value.length == 10) {
                    return true;
                } else {
                    alert("Not a valid mobile number");
                    return false;
                    elem.focus();
                }
            }
        </script>


</head>





<body class="bg-dark">

  <div class="container">

    <div class="card card-login mx-auto mt-5">

      <div class="card-header">Register an Account</div>

      <div class="card-body">

        <form name="myForm" action="controllers/userform.php" method="post" onsubmit="return  validateForm()">

	<input type="hidden" name="opn" value="add">
          <div class="form-group">
                <label>Userid</label>

                <input class="form-control" name="username" type="text" placeholder="Enter userid" value="">

          </div>

          <div class="form-group">

                              <label>Password</label>

                <input class="form-control" name="password" type="password" placeholder="Password" value="">

          </div>

          <div class="form-group">
                <label>Name</label>

                <input class="form-control" name="name" type="text" placeholder="Enter name" value="">

          </div>
          <div class="form-group">
                <label>Address</label>

                <input class="form-control" name="address" type="text" placeholder="Enter address" value="">

          </div>
          <div class="form-group">
   
            <label>Phone number</label>

            <input class="form-control" name="mobile" type="text" placeholder="Enter 10 digit number" value="">

           </div>
          <div class="form-group">

            <label>Email address</label>

            <input class="form-control" name="email" type="email" placeholder="Enter email" value="">

          </div>

          <input class="btn btn-primary btn-block" type="submit" name="reg" value="Register">

        </form>
      </div>

    </div>

  </div>





  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
