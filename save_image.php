<?php
    require 'db_config.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
        $imageName = $_FILES['image']['name'];
        $imageTmp = $_FILES['image']['tmp_name'];
        $imageContent = file_get_contents($imageTmp);

        
    }
?>