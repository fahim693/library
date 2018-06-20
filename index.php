<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Modern Business - Start Bootstrap Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/modern-business.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
        <style>
            #login{
/*               ? position: absolute;*/
                background-color: cornflowerblue;
                color: white;
                width: 17%;
                margin-top: 120px;
                margin-left: 40%;
                top: 25%;
                padding: 23px;
                font-size: 18pt;
                text-align: center;
                
            }
            #register{
/*                position: absolute;*/
                background-color: cornflowerblue;
                color: white;
                width: 17%;
                margin-top: 40px;
                margin-left: 40%;
                top: 25%;
                padding: 23px;
                font-size: 18pt;
                text-align: center;
            }
            #admin{
/*                position: absolute;*/
                background-color: cornflowerblue;
                color: white;
                width: 17%;
                margin-top: 40px;
                margin-left: 40%;
                top: 25%;
                padding: 23px;
                font-size: 18pt;
                text-align: center;
            }
            a{
                text-decoration: none;
            }
            a:visited{
                text-decoration: none;
                color: white;
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

        <!-- Navigation -->
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
                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>


        <div id="login">
            <a href="login.php">Login</a>    
        </div>

        <div id="register">
            <a href="register.php">Register</a>
        </div>

        <div id="admin">
            <a href="login.php">Admin</a>
        </div>


    </body>



    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2017</p>
            </div>
        </div>
    </footer>

    </div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
