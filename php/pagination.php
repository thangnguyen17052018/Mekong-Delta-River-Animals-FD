<?php 
    include_once("config.php");

    $limit = 5;
    $page = 0;
    $output = "";

    if (isset($_POST['page'])){
        $page = $_POST["page"];
    } else {
        $page = 1;
    }

    $start_from = ($page -1) * $limit;
    $query = mysqli_query($conn, "SELECT * from hinhanhdv ORDER BY MaHinh DESC LIMIT $start_from, $limit");
    


    if (mysqli_num_rows($query) > 0){
        while ($row = mysqli_fetch_array($query)){
            $output .= '<div class="image"><span><img src="./assets/images/'.$row['TenHinh'].'" alt=""></span><a href="" class="img-title">Ếch đồng</a></div>';
        }
    }
    echo $output;
?>