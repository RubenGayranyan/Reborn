<!DOCTYPE html>
<html lang="hy">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css?v26.08.2024">
	<script src="assets/js/index.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Armenian:wght@100..900&display=swap" rel="stylesheet">
    </head>
    <body class="pBody">
    	<?php
            global $page_id;
            $page_id = ( isset( $_REQUEST['page'] ) ) ? (int) $_REQUEST['page'] : 1;
        ?>
        <div class="pWrapper">
            <?php include "assets/pages/modules/navigation.php"; ?>
            <?php include "assets/pages/modules/mobileNavigation.php"; ?>
            <div class="pContent">
    		    <?php 
    		       	$page = "assets/pages/page" . $page_id . ".php";

    		        if ( file_exists( $page ) ) {
    		            include $page; 
    		        } else {
    		            
    		            include "assets/pages/404.php";

    		        }
    		                        
    		    ?>
            </div>
            <?php include 'assets/pages/modules/footer.php';?>
        </div>
    </body>
</html>
