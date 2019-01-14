<!DOCTYPE html>
<?php
 require_once './beans/Users.php';

session_start();

$ub = unserialize($_SESSION['user']);

if ($ub == NULL)
{

header("Location: index.php");

}

?>

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

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

  <!-- Navigation-->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

    <a class="navbar-brand" href="home.php">My Personal Accountant</a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false">

      <span class="navbar-toggler-icon"></span>

    </button>


    <div class="collapse navbar-collapse" id="navbarResponsive">

      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right">

          <a class="nav-link" href="expensescategory/expensecategoryview.php">

            <i class="fa fa-fw fa-dashboard"></i>

            <span class="nav-link-text">Expenses Category</span>

          </a>

        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right">

          <a class="nav-link" href="incomecategory/incomecategoryview.php">

            <i class="fa fa-fw fa-area-chart"></i>

            <span class="nav-link-text">Income Category</span>

          </a>

        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right">

          <a class="nav-link" href="expenses/expensesadd.php">

            <i class="fa fa-fw fa-table"></i>

            <span class="nav-link-text">Expense</span>

          </a>

        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">

          <a class="nav-link" href="income/incomeadd.php">

            <i class="fa fa-fw fa-table"></i>

            <span class="nav-link-text">Income</span>

          </a>

        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right">

          <a class="nav-link" href="cashbook/cashbookview.php">

            <i class="fa fa-fw fa-table"></i>

            <span class="nav-link-text">Cash Book</span>

          </a>

        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right">

          <a class="nav-link" href="bankbook/bonkbookview.php">

            <i class="fa fa-fw fa-table"></i>

            <span class="nav-link-text">Bank Book</span>

          </a>

        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right">

          <a class="nav-link" href="daybook/daybookview.php">

            <i class="fa fa-fw fa-table"></i>

            <span class="nav-link-text">Day Book</span>

          </a>

        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right">

          <a class="nav-link" href="balancesheet/balancesheetview.php">

            <i class="fa fa-fw fa-table"></i>

            <span class="nav-link-text">Balance Sheet</span>

          </a>

        </li>

       </ul>

      <ul class="navbar-nav sidenav-toggler">

        <li class="nav-item">

          <a class="nav-link text-center" id="sidenavToggler">

            <i class="fa fa-fw fa-angle-left"></i>

          </a>

        </li>

      </ul>
   


       
<ul class="navbar-nav ml-auto">
<li class="nav-item">

          <a class="nav-link" href="home.php">

            <i class="fa fa-fw fa-sign-out"></i>
Home
         </a>

</li>
 
<li class="nav-item">

          <a class="nav-link" href="profile.php">

            <i class="fa fa-fw fa-sign-out"></i>
Profile
         </a>

</li>
 
<li class="nav-item">

          <a class="nav-link" href="controllers/authentication.php?opn=logout">

            <i class="fa fa-fw fa-sign-out"></i>
Logout
         </a>

</li>
 
</ul>

</div>

</nav>
  


<div class="content-wrapper">

    <div class="container-fluid">


<div class="card card-login mx-auto mt-5">

      <div class="card-header">User Profile</div>

      <div class="card-body">


      <form name="myForm" action="controllers/userform.php" method="post">

                            <input type="hidden" name="userid" value="<?php echo $ub->getUid(); ?>">

                            <input type="hidden" name="opn" value="update">

                            <table>

                                <tbody>

                                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>

                                    <tr>

                                        <td>UserName*</td>

                                        <td><input type="text" name="username" value="<?php echo '' . $ub->getUsername(); ?>"</td>

                                    </tr>

                                    <tr>

                                        <td>Password*</td>

                                        <td><input type="password" name="password" value="<?php echo ''.$ub->getPasword(); ?>"</td>

                                    </tr>

                                    <tr>

                                        <td>Name*</td>

                                        <td><input type="text" name="name" value="<?php echo '' . $ub->getName(); ?>"</td>

                                    </tr>

                                    <tr>

                                        <td>Address*</td>

                                        <td><input type="text" name="address" value="<?php echo '' . $ub->getAddress(); ?>"</td>

                                    </tr>

                                    <tr>

                                        <td>Mobile*</td>

                                        <td><input type="text" name="mobile" value="<?php echo '' . $ub->getMobile(); ?>"</td>

                                    </tr>

                                    <tr>

                                        <td>Email*</td>

                                        <td><input type="text" name="email" value="<?php echo '' . $ub->getEmail(); ?>"</td>

                                    </tr>

                                    <tr>

                                        <td>&nbsp;</td>
		      <td>&nbsp;</td>

                                    </tr>

                                    <tr>

                                        <td>

                                            <button type="submit">Update</button>

                                        </td>

                                        <td>

                                            <button type="button" onclick="history.go(-1)">Cancel</button>

                                        </td>

                                </tbody>

                            </table>

                        </form>

</div></div>


</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    



<footer class="sticky-footer">

      <div class="container">

        <div class="text-center">

          <small>Copyright © Your Website 2018</small>

        </div>

      </div>

</footer>






    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
