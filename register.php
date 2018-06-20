<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
    header("Location: login.php");
}
require_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {

    $uname = strip_tags($_POST['username']);
    $email = strip_tags($_POST['email']);
    $upass = strip_tags($_POST['password']);
    $phone = strip_tags($_POST['phone']);
    $nid = strip_tags($_POST['nid']);

    $uname = $conn->real_escape_string($uname);
    $email = $conn->real_escape_string($email);
    $upass = $conn->real_escape_string($upass);
    $phone = $conn->real_escape_string($phone);
    $nid = $conn->real_escape_string($nid);

    $hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version

    $check_email = $conn->query("SELECT email FROM tbl_users WHERE email='$email'");
    $count=$check_email->num_rows;

    if ($count==0) {

        $query = "INSERT INTO tbl_users(username,email,password,NID,Phone_no) VALUES('$uname','$email','$hashed_password','$nid','$phone')";

        if ($conn->query($query)) {
            $msg = "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
     </div>";
        }else {
            $msg = "<div class='alert alert-danger'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
     </div>";
        }

    } else {


        $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
    </div>";

    }

    $conn->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login & Registration System</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
        <link rel="stylesheet" href="style.css" type="text/css" />
        <style>
            footer{
                padding: 12px;
                text-align: center;
                background-color: black;
                color: white;
                position: absolute;
                right: 0;
                bottom: 0;
                left: 0;
            }
            .main{
                margin-top: 80px;
            }
        </style>

    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Library System</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php">Main Page</a>
                        </li>
                    </ul>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <div class="signin-form main">

            <div class="container">


                <form class="form-signin" method="post" id="register-form">

                    <h2 class="form-signin-heading">Sign Up</h2><hr />

                    <?php
                    if (isset($msg)) {
                        echo $msg;
                    }
                    ?>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="username" required  />
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email address" name="email" required  />
                        <span id="check-e"></span>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required  />
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="NID" name="nid" required  />
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone no" name="phone" required  />
                    </div>


                    <hr />

                    <div class="form-group">
                        <button type="submit" class="btn btn-default" name="btn-signup">
                            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
                        </button> 
                        <a href="login.php" class="btn btn-default" style="float:right;">Log In Here</a>
                    </div> 

                </form>

            </div>

        </div>

    </body>
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2017</p>
            </div>
        </div>
    </footer>
</html>