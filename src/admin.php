<?php
session_start();
use Models\AppTab;
require 'views/header.php';
require 'controller/addLogic.php';
require 'controller/deleteLogic.php';
require 'controller/updateLogic.php';
require 'controller/loginLogic.php';
(!isset($_SESSION['logged_in'])) 
? header("Location: " . '/Sprint_8-CMS_App')                                  
: null 
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
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css" integrity="sha512-1hsteeq9xTM5CX6NsXiJu3Y/g+tj+IIwtZMtTisemEv3hx+S9ngaW4nryrNcPM4xGzINcKbwUJtojslX2KG+DQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.css" integrity="sha512-/68JX40JZmfjNsYvlRTDn0tFfUtRKNL8RHdOT4CSIuNDWDSpNAZ1Td+qYMiYZWGIFjLuYjuEuQfMZlNwg+wX5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Application</title>
</head>

        <nav>
        <div class='navContainer'>
                <div class='navTab'><a href='/Sprint_8-CMS_App'>Home</a></div>
                <div class='navTab'><a href='/Sprint_8-CMS_App/admin'>Admin panel</a></div>
                <div class='logOutContainer' style='margin-left: auto'>
        <form class='logout' method='post' action=''>
        <input type='submit' name='logout' value='Logout'>
        </form>
        </div>
        </div>
        <div class=<?= isset($_SESSION['success']) || isset($_SESSION['error']) 
        ? (isset($_SESSION['success']) 
        ? 'actionMsg' : 'errorMsg')  
        : ''?>>

         <?= isset($_SESSION['success']) || isset($_SESSION['error']) 
         ? (isset($_SESSION['success']) 
         ?  $_SESSION['success'] : $_SESSION['error'])
         : ''; 
         unset($_SESSION['success']);
         unset($_SESSION['error']);
                ?>
        </div>

        </nav>
        <section>

<?php
$pages = $entityManager->getRepository('Models\AppTab')->findAll();

print("<div class='tableCointainer'>
<div class='tableBox'>
<table class='adminTable'>");
$count = 1;
foreach($pages as $p){
        print("<tr>" 
                . "<td>" . $count . "</td>" 
                . "<td>" . $p->getTitle() . "</td>" 
                . "<td><a href=\"src/controller/deleteLogic.php?delete={$p->getId()}\"><div class='btn'><i class=\"fa-solid fa-delete-left\"> Delete</i></i></a></i></div><div class='btn'><a href=\"route.php?update={$p->getId()}\"><i class=\"fa-solid fa-pen\"> Edit</i></a></div></td>"
            . "</tr>");
        $count++;
}
print("</table></div></div>");


?>
<div class='addPageDiv' >
        <a href='/Sprint_8-CMS_App/addPage'><i class="fa-solid fa-file-circle-plus"> Add Page</i></a>
</div>


        </section>
        <footer>
        <?php require "src/views/footer.php"; ?>
        </footer>
  
</body>
</html>
