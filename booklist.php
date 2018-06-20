<?php
session_start();
include "dbconnect.php";
//if (!isset($_SESSION['userSession'])) {
// header("Location: index.php");
//}
$run=mysqli_query($conn,"select * from book");?>

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
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            table{
                margin-top: 60px;
                margin-bottom: 100px;
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
            .buttons{
                text-align: center;
                margin: 30px;
                margin-top: 80px;
            }
            a{  
                text-decoration: none;
                color: white
            }
            a:visited{  
                text-decoration: none;
                color: white
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
                            <a href="logout.php?logout">Logout</a>
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
                <th>Book Name</th>
                <th>Author's Name</th>
                <th>Category/Genre</th>
                <th>Shelf No.</th>
                <th>No. of copies available</th>
                <th>Action</th>
            </tr>
            <?php
            while($row=mysqli_fetch_assoc($run)){
                $bookname=$row["book_name"];
                $author=$row["authors_name"];
                $category=$row["book_category"];
                $shelf=$row["shelf_no"];
                $copies=$row["no_of_copies"]; ?>

            <tr>
                <td><?php echo "$bookname";?></td>
                <td><?php echo "$author";?></td>
                <td><?php echo "$category";?></td>
                <td><?php echo "$shelf";?></td>
                <td><?php echo "$copies";?></td>
                <td><button class="btn btn-primary"><a href="borrow.php?id=<?php echo $row['book_id']?>">Borrow</a></button></td>
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

