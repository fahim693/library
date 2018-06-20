<?php
session_start();
include "dbconnect.php";

if(isset($_POST['btn-book'])){
    $bookname = mysqli_real_escape_string($conn,$_POST['book_name']);
    $author = mysqli_real_escape_string($conn,$_POST['author']);
    $publish = mysqli_real_escape_string($conn,$_POST['publish']);
    $shelf = mysqli_real_escape_string($conn,$_POST['shelf_no']);
    $category = mysqli_real_escape_string($conn,$_POST['category']);
    $copies = mysqli_real_escape_string($conn,$_POST['copies']);

    mysqli_query($conn,"INSERT INTO book(book_name,authors_name,publish_date,shelf_no,book_category,no_of_copies) VALUES('$bookname','$author','$publish','$shelf','$category','$copies')");

}

mysqli_close($conn);
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin</title>

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
            .form{

                margin: 0 auto;
                margin-top: 80px;
                width: 40%;
                text-align: center;
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
        <form class="form" method="post" action="home.php">
            <h3>Enter Book</h3><hr>
            <input type="text" class="form-control" placeholder="Book Name" name="book_name">
            <input type="text" class="form-control" placeholder="Author" name="author">
            <input type="date" class="form-control" placeholder="Publish date" name="publish">
            <input type="text" class="form-control" placeholder="Shelf No." name="shelf_no">
            <input type="text" class="form-control" placeholder="No. of copies" name="copies">
            <select class="form-control" name="category">
                <option>Science fiction</option>
                <option>Mystery</option>
                <option>Horror</option>
                <option>Journals</option>
                <option>Travel</option>
                <option>Fantasy</option>
            </select><br>
            <button type="submit" class="btn btn-default" name="btn-book">Submit</button>
        </form>

    </body>
</html>