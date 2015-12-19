<?php
/**
 * Created by PhpStorm.
 * User: NAT-PC
 * Date: 12/19/2015
 * Time: 12:07 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>โครงการสร้างความเข้มแข็งให้แก่เกษตรกรชาวสวนยาง</title>

    <!-- Bootstrap core CSS-->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Just for debugging purposes. Don't actually copy these  lines! -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>


    <style>
        body {
            min-height: 1000px;
            padding-top: 70px;
        }

    </style>
</head>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">โครงการสร้างชาวสวนยาง</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <!--
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
        -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">user login <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="list-group">
                <a href="#" class="list-group-item active">get from การยาง</a>
                <a href="#" class="list-group-item">send to CIF</a>
                <a href="#" class="list-group-item">get from CIF</a>
                <a href="#" class="list-group-item">send to การยาง </a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>

            </div>
        </div>
        <!--/.sidebar-offcanvas-->
        <div class="col-xs-12 col-sm-9">

            <div class="row">
                <div class="col-xs-12">
                    <h2>Heading</h2>

                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
                        magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <!--/.col-xs-6.col-lg-4-->
                <div class="col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1,001</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                        </tr>
                        <tr>
                            <td>1,002</td>
                            <td>amet</td>
                            <td>consectetur</td>
                            <td>adipiscing</td>
                            <td>elit</td>
                        </tr>
                        <tr>
                            <td>1,003</td>
                            <td>Integer</td>
                            <td>nec</td>
                            <td>odio</td>
                            <td>Praesent</td>
                        </tr>
                        <tr>
                            <td>1,003</td>
                            <td>libero</td>
                            <td>Sed</td>
                            <td>cursus</td>
                            <td>ante</td>
                        </tr>
                        <tr>
                            <td>1,004</td>
                            <td>dapibus</td>
                            <td>diam</td>
                            <td>Sed</td>
                            <td>nisi</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                </div>
                <!--/ .col-xs-12 col-lg-4-->

            </div>
            <!--/row-->
        </div>
        <!--/.col-xs-12.col-sm-9-->


    </div>
    <!--/row-->
    <!-- /container -->
    <hr>
    <footer>
        <p class="text-muted">&copy; 2015 Company, Inc.</p>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>