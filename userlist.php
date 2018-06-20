<?php
include "dbconnect.php";
$run=mysqli_query($conn,"select * from borrowed_books");?>

<html>
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

            /*
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
            */
            table{
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
                            <a href="booklist.php">Booklist</a>
                        </li>
                        <li>
                            <a href="logout.php?logout">Logout</a>
                        </li>
                        <li>
                            <a href="userlist.php">User Info</a>
                        </li>
                    </ul>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        
        <table class="table" align="center">
            
            <tr>
                <th>User Name</th>
                <th>NID</th>
                <th>Book Id</th>
                <th>Book Name</th>
                <th>Borrow Date</th>
                <th>Return Date</th>

            </tr>
            <?php
            while($row=mysqli_fetch_assoc($run)){
                $username=$row["user_name"];
                $nid=$row["user_nid"];
                $bookid=$row["book_id"];
                $bookname=$row["book_name"]; 
                $borrow=$row['borrow_date'];
                $return=$row['return_date'];
            ?>

            <tr>
                <td><?php echo "$username";?></td>
                <td><?php echo "$nid";?></td>
                <td><?php echo "$bookid";?></td>
                <td><?php echo "$bookname";?></td>
                <td><?php echo "$borrow";?></td>
                <td><?php echo "$return";?></td>

            </tr>

            <?php
            }
            ?>
        </table>
    </body>
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2017</p>
            </div>
        </div>
    </footer>
    
</html>

