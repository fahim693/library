<?php
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
    header("Location: login.php");
    exit;
}

if (isset($_POST['btn-login'])) {

    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);

    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);
    if($email=='admin@gmail.com' && $password=='admin'){
        header("Location: home.php");   
    }else{
        $query = $conn->query("SELECT user_id, email, password FROM tbl_users WHERE email='$email'");
        $row=$query->fetch_array();

        $count = $query->num_rows; // if email/password are correct returns must be 1 row

        if (password_verify($password, $row['password']) && $count==1) {
            $_SESSION['userSession'] = $row['user_id'];
            $_SESSION['userName'] = $row['username'];

            header("Location: booklist.php");
        }
        else {
            $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
    </div>";
        }

    }
}




$conn->close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Coding Cage - Login & Registration System</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
        <link rel="stylesheet" href="style.css" type="text/css" />
        <style>
            .main{
                margin-top: 80px;
            }
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


                <form class="form-signin" method="post" id="login-form">

                    <h2 class="form-signin-heading">Sign In.</h2><hr />

                    <?php
                    if(isset($msg)){
                        echo $msg;
                    }
                    ?>

                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email address" name="email" required />
                        <span id="check-e"></span>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required />
                    </div>

                    <hr />

                    <div class="form-group">
                        <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
                            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
                        </button> 

                        <a href="register.php" class="btn btn-default" style="float:right;">Sign UP Here</a>

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