<?php
session_start();
use Models\appTab;
require 'views/header.php';
include_once "bootstrap.php";
require 'controller/loginLogic.php';
// Helper functions
function redirect_to_root(){
    header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="src\assets\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
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
        <div class='logIn'>
            <form class='login' action="" method="post" <?php isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true
                                                            ? print("style = 'display: none'")
                                                            : print("style = 'display: block'") ?>>
                <h4>You have to log in to see content</h4>
                <h6><?php echo $note; ?></h6>
                <input type="text" name="username" placeholder="Please enter username" required autofocus></br>
                <input type="password" name="password" placeholder="Please enter password" required>
                <button type="submit" name="login">Login</button>
            </form>
        </div>

        <div <?php isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true
                                                            ? print("style = 'display: block'")
                                                            : print("style = 'display: none'") ?>>
        <form class='logout' method='post' action=''>
        <input type='submit' name='logout' value='Logout'>
    </form><a href="/Sprint_8-CMS_App/admin">Go to admin panel</a>
            
        <div>

        </section>
        <footer>
        <?php require "src/views/footer.php"; ?>
        </footer>

      


  


    
</body>
</html>
