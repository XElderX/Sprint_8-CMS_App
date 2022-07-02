<?php
use Models\appTab;

// require  'src/admin.php';

if (isset($_POST['title']) && ($_POST['content'])){
    
    $title = $_POST['title'];
    $content = $_POST['content'];
    var_dump($_POST['title']);
    $page = new AppTab();
    $page->setTitle($title);
    $page->setContent($content);
    $entityManager->persist($page);
    $entityManager->flush();
 
}
?>







