<?php
require("QuadraticEquation.php");

function Equal(){

    $_a = $_POST['num_a'];
    $_b = $_POST['num_b'];
    $_c = $_POST['num_c'];

    if ($_SERVER['REQUEST_METHOD'] == "POST" && $_a && $_b && $_c){

        $equal = new QuadraticEquation($_a,$_b,$_c);

        $delta = $equal->getDiscriminant();


        if ($delta > 0){
            return $equal->getRoot1()."<br>".$equal->getRoot2();
        }elseif ($delta == 0 ){
            return $equal->getRoot2();
        }else{
            return "Vo nghiem";
        }
    }else{
        return " Vui long nhap so can tinh vao !";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <meta name="author" content="nguyencuong">
    <title>Page Title</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="" method="post" role="form">
                <legend>Tinh phuong trinh bac 2</legend>

                <div class="form-group">
                    <label for=""></label>
                    <input type="number" class="form-control" name="num_a" id="" placeholder="Nhap so a">
                    <input type="number" class="form-control" name="num_b" id="" placeholder="Nhap so b">
                    <input type="nubmer" class="form-control" name="num_c" id="" placeholder="Nhap so c">
                </div>
                <button type="submit" class="btn btn-primary">Equal</button>
                <?php if($_SERVER['REQUEST_METHOD'] == "POST") {?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?=  Equal() ;?>
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
