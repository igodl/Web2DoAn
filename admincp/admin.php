<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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