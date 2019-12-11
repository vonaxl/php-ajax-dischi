<?php 
    header('Content-Type: application/json');  
    include 'data.php';
    
    foreach ($database as $cd) {
        if ($cd['author']=='Queen') {
            $album = $cd;
        }
    }
    echo json_encode($album);
?>
