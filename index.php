<?php
$email   = "machado.juanmartin@gmail.com";
$default = "http://www.somewhere.com/homestar.jpg";
$size    = 700;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frontera2 Mocker</title>

    <!-- CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/principal.css" rel="stylesheet">

    <!-- FUENTES -->
    <link href='https://fonts.googleapis.com/css?family=Inconsolata:700,400' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <nav class="navbar navbar-default container">
        <div class="container-fluid">
            <div class="navbar-header">
                <p class="navbar-text titulo"><b>&lt;?php</b> echo "Juan Martin Machado" <b>?&gt;</b></p>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <img src="<?php echo $grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;?>" alt="..." class=" responsive center-block" style="width: 100%;">
            </div>
            <div class="col-md-9">ACTUALMENTE TRABAJO EN SONDEOS COMO DESARROLLADOR WEB.
                Como desarrollador web freelance ofrezco un servicio completo de diseño, desarrollo y mantenimiento de sitios web para individuos y de pequeñas a grande organizaciones.
                Tengo un amplio espectro de habilidades y un amplio rango de experiencia en MYSQL, PHP, HTML/HTML5, CSS/CSS3, Javascript, AngularJS, Bootstrap y Linux.
                Me gusta crear sitios únicos y creativos compatiblew con las últimas tendencias y técnicas para hacer que el sitios web sea más usable y agradable.
            </div>
        </div>
    </div>
    <!-- JQUERY -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>