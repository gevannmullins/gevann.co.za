<?php
unset($_SESSION);

$GLOBAL['base_url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$baseUrl = 'http://localhost:8888/gevann.co.za/cms4';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
    <link rel="stylesheet" href="resources/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="resources/css/custom_styles.css" /> -->

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


<form action="" method="POST">
    <p>
        <label>Username</label>
        <input id="username" value="" name="username" type="text" required="required" /><br>
    </p>

    <p>
        <label>Password</label>
        <input id="password" name="password" type="password" required="required" />
    </p>
    <br />
    <p>

        <button type="submit" class="green big" name="submit"><span>Login</span></button> <button type="reset" class="grey big"><span>Cancle</span></button>
    </p>
</form>


<?php

//$data = hash('sha1', '21a32b43c', false);
//echo '<br /><hr />' . $data . '<hr /><br />';

?>


<?php
//// Usage
//require_once $GLOBALS['base_url'] . 'includes/UUID.php';
//// Named-based UUID.
//$uuid = new \UUID\UUID();
//$v3uuid = $uuid::v3('1546058f-5a25-4334-85ae-e68f2a44bbaf', 'SomeRandomString');
//echo $v3uuid . '<br />';
//$v5uuid = $uuid::v5('1546058f-5a25-4334-85ae-e68f2a44bbaf', 'SomeRandomString');
//echo $v5uuid . '<br />';
//// Pseudo-random UUID
//$v4uuid = $uuid::v4();
//echo $v4uuid . '<br />';
?>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="resources/js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="resources/js/bootstrap.js"></script>

<script type="text/javascript">
    $(document).ready(function(){


    });
</script>


</body>
</html>