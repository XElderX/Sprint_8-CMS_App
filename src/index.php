<?php
use Models\AppTab;
require 'pageTamplates/header.php';


include_once "bootstrap.php";

// Helper functions
function redirect_to_root(){
    header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="src\assets\style.css"
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <nav>
        <?php showNav($pages, $path) ?>
        </nav>
        <section>


        </section>

      


  


    
</body>
</html>