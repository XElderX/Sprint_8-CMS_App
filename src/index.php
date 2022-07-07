<?php
session_start();
use Models\PageModel;
require 'views/header.php';
include_once "bootstrap.php";
require 'controllers/loginLogic.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="src\style\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Application</title>
</head>
<body>
        <nav>
        <div class='logOutContainer' <?php isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true
                                                  ? print("style = 'display: flex'")
                                                  : print("style = 'display: none'") ?>>
        <h4>Welcome back, <span style='color: rgb(171,78,82); font-size: 24px'><?= $_SESSION['username'] ?><span></h4>
        <form class='logout' method='post' action=''>
        <input type='submit' name='logout' value='Logout'>
        </form>
</div>

    <?php showNav($pages, $path) ?>  
        </nav>
        <section>
        <div class='logInContainer'>
            <form class='login' action="" method="post" <?php isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true
                                                            ? print("style = 'display: none'")
                                                            : print("style = 'display: flex'") ?>>
                <h4>You have to log in to see content</h4>
                <h6><?php echo $note; ?></h6>
                <label for="username">User</label>
                <input type="text" name="username" placeholder="Please enter username" required autofocus></br>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Please enter password" required>
                <button type="submit" name="login">Login</button>
            </form>
        </div>

        <div class='section-container' <?php isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true
                                                            ? print("style = 'display: block'")
                                                            : print("style = 'display: none'") ?>>
        <a class='adminLink' href="/Sprint_8-CMS_App/admin">Go to admin panel</a>
        <div>

        </section>
        <footer>
        <?php require "src/views/footer.php"; ?>
        </footer>

      


  


    
</body>
</html>
