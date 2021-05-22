<!DOCTYPE html>
<?php
include('../module/myClass.php');
$p=new myClass();

	session_start();
	if(isset($_SESSION["myuser"]) && isset($_SESSION["mypass"]))
	{
		$p->confirmlogin($_SESSION["myuser"],$_SESSION["mypass"]);
	}
	else
	{
		header('location:../index.php');
	}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <h1>Wellcome To Admin Page</h1>
    <div class="wrap">
        <?php
        include("config/connect.php");
        include("moudules/menu.php");
        include("moudules/main.php");

        ?>
    </div>

</body>

</html>