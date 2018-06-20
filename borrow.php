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
            div{
                text-align: center;
            }
            a{  
                text-decoration: none;
                color: white
            }
            a:visited{  
                text-decoration: none;
                color: white
            }
            .buttons{
                text-align: center;
                margin: 30px;
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
                            <a href="logout.php?logout">Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <div class="buttons">
            <button type="button" class="btn btn-primary"><a href="booklist.php">Borrow more Books</a></button>
            <button type="button" class="btn btn-primary"><a href="logout.php?logout">Logout</a></button>
        </div>
    </body>

    <?php
    session_start();
    include "dbconnect.php";
    
    if(isset($_GET['id'])){
        $run=mysqli_query($conn,"select * from book where book_id=".$_GET['id']);

        while($row=mysqli_fetch_assoc($run)){
            $bookname=$row['book_name'];
            $bookid=$row['book_id'];
            $copies=$row['no_of_copies'];
        }

        $userinfo=mysqli_query($conn,"select * from tbl_users where user_id=".$_SESSION['userSession']);

        while($usl=mysqli_fetch_assoc($userinfo)){
            $usernid=$usl['NID'];
            $username=$usl['username'];

        }

        $borrowdate=date('Y-m-d');
        //    var_dump($borrowdate);
        $returndate=date( 'Y-m-d', strtotime( "$borrowdate +7 days" ));
        if($copies<=0){
            echo "<div>Sorry no more books left!</div>";
        }else{
            mysqli_query($conn,"INSERT INTO borrowed_books(book_id,book_name,borrow_date,return_date,user_name,user_nid) VALUES('$bookid','$bookname','$borrowdate','$returndate','$username','$usernid')");
            $copies=$copies-1;

            mysqli_query($conn,"update book set no_of_copies='$copies' where book_id='$bookid'"); 

    ?>
    <div>Successfully Added!!</div>
    <?php
        }

        //    $borrowed=mysqli_query($conn,"select * from borrowed_books where user_nid=".$usernid);
        //    while($bor=mysqli_fetch_assoc($borrowed)){
        //        $check=$bor['book_id'];
        //        if($check!=$bookid){
        //            mysqli_query($conn,"INSERT INTO borrowed_books(book_id,book_name,borrow_date,return_date,user_name,user_nid) VALUES('$bookid','$bookname','$borrowdate','$returndate','$username','$usernid')");
        //        echo "Successfully Added";   
        //        break;
        //
        //        }else{
        //            echo "Sorry";
        //            break;
        //        }

        mysqli_close($conn);
    }



    ?>
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2017</p>
            </div>
        </div>
    </footer></html>