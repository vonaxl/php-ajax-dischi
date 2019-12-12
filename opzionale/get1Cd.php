<?php 
    header('Content-Type: application/json');  
    include 'data.php';
    $author = $_GET['author'];
    $res = [];
    foreach ($database as $cd) {
        if ($cd['author']==$author) {
            $res[] = $cd;
        }
    }
    echo json_encode($res);
?>
