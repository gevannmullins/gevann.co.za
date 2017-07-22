<?php

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gevann Portfolio - Home</title>

    <!-- fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Clicker+Script&subset=latin-ext');
    </style>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="assets/css/custom_styles.css" /> -->

    <style>

        body {
            color: #000;
            height: 1000vh;
            background-image: url("assets/images/bg6.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>


</head>
<body>

<header>
    <a href='/php_mvc_blog'>Home</a>
    <a href='?controller=posts&action=index'>Posts</a>
</header>

<?php require_once $GLOBALS['base_url'] . 'routes.php'; ?>

<footer>
    Copyright
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.js"></script>
<script language="javascript">
    $(document).ready(function(){



    });
</script>
</body>
</html>
