<!DOCTYPE html>
<html lang="hy">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css?v22.08.2024--2">
        <link rel="stylesheet" href="assets/css/media.css?v22.08.2024--2">
	<script src="assets/js/index.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Armenian:wght@100..900&display=swap" rel="stylesheet">

        <title>Reborn Role Play</title>
    </head>
    <body class="pBody">
    	<?php
    	
            global $page_id;
            $page_id = ( isset( $_REQUEST['page'] ) ) ? (int) $_REQUEST['page'] : 1;

        ?>
    
        <div class="pWrapper">
            <?php include "assets/pages/modules/navigation.php"; ?>
            <?php include "assets/pages/modules/mobileNavigation.php"; ?>
            
            <?php 
            	$page = "assets/pages/";
               	switch($page_id) {
               		case 1:
               			$page = $page . "home.php";
               	}

                if ( file_exists( $page ) ) {
                    include $page; 
                } else {
                    
                    //include "404.php";
                    echo "error";

                }
                                
            ?>
            
            <?php include 'assets/pages/modules/footer.php';?>
        </div>
    </body>
</html>
