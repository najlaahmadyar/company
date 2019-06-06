<!DOCTYPE html>
<html lang="en">

    <head>
        <title>AACS MIS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Style sheet links -->
        <link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>css/plugins/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"> -->
   
        <?php 
            foreach ($styles as $stylesheet) {
                echo '<link href="'.$stylesheet.'" rel="stylesheet" type="text/css">';
            }
        ?>  
        <link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>css/style.css">
        
    </head>
    <body onload="">