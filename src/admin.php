<?php
session_start();
use Models\AppTab;
require 'views/header.php';
require 'controller/addLogic.php';
require 'controller/deleteLogic.php';
require 'controller/updateLogic.php';
require 'controller/loginLogic.php';
// if (isset($_POST['title'])){
    
//         $title = $_POST['title'];
//         $content = $_POST['content'];
//         var_dump($_POST['title']);
//         $page = new AppTab();
//         $page->setTitle($title);
//         $page->setContent($content);
//         $entityManager->persist($page);
//         $entityManager->flush();
    
        
//     }
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
        <section <?php isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true
                                                            ? print("style = 'display: block'")
                                                            : print("style = 'display: none'") ?>>
<form method="post" action=''>
<input type='submit' name='logout' value='Logout'>


</form>

<?php
$page = $entityManager->getRepository('Models\AppTab')->findAll();
print("<table>");
foreach($page as $p)
    print("<tr>" 
            . "<td>" . $p->getId()  . "</td>" 
            . "<td>" . $p->getTitle() . "</td>" 
            . "<td><a href=\"src/controller/deleteLogic.php?delete={$p->getId()}\">DELETE</a>☢️</td>" 
            . "<td><a href=\"route.php?update={$p->getId()}\">UPDATE</a>♻️</td>"
        . "</tr>");
print("</table>"); 
print("</pre><hr>");
?>
<div>
        <a href='/Sprint_8-CMS_App/addPage'>Add Page</a>
</div>


        </section>
        <footer>
        <?php require "src/views/footer.php"; ?>
        </footer>

      


  


    
</body>
</html>