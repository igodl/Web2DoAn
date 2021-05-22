<div class="main">
    <?php

    if (isset($_GET['action']) && $_GET['query']) {
        $tam = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $tam = '';
        $query = '';
    }
    if ($tam == 'quanlysanpham' && $query == 'them') {
        include('moudules/quanlysanpham/them.php');
        include('moudules/quanlysanpham/lietke.php');
    } else if ($tam == 'quanlysanpham' && $query == 'sua') {
        include('moudules/quanlysanpham/sua.php');
    } else {
        include("moudules/dashboard.php");
    }

    ?>

</div>