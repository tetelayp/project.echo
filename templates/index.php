<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=$title?></title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../scripts/html5shiv.min.js"></script>
    <script src="../scripts/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-default">
            <div>
                <ul class="nav navbar-nav">
                    <?php foreach ($menu as $item):?>
                        <li><a href="#"> <?php echo $item->title ?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </nav>
    </div>

</header>
<main>
    <div class="container">
        <?php foreach ($news as $i):?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                        <?php echo $i->title ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <p>
                        <?php echo $i->text ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div>Info</div>
</main>
<div class="alert alert-danger">end index.php</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../scripts/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../scripts/bootstrap.min.js"></script>
</body>
</html>