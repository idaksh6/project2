<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="<?php bloginfo('/themes/custom-theme/style.css'); ?>" rel = "stylesheet">

    <?php wp_head();?>

    <title>E Commerce</title>
</head>
<body>
   <div>
   <?php  wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'nav')) ?>
   </div>
</body>
</html>