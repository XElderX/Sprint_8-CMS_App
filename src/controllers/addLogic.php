<?php
use Models\PageModel;
require_once 'functions.php';


// require  'src/admin.php';

if (isset($_POST['title'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    try{
        titleContentValidation($title);
        
    } catch (InvalidArgumentException $e){
        $_SESSION['error'] = $e->getMessage();
        redirect();

    }
    
    // var_dump($_POST['title']);
    // var_dump($_POST['content']);
    $page = new PageModel();
    $page->setTitle($title);
    $page->setContent($content);
    $entityManager->persist($page);
    $entityManager->flush();
    $_SESSION['success'] = '<p> Page has been added </p>';
    redirect();
}
?>







