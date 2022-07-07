<?php use Models\PageModel;
include_once 'bootstrap.php';
require_once 'functions.php';

// require  'src/admin.php';

if (isset($_POST['id'])){
    
    $id = $_POST['id'];
    $title = $_POST['updatableTitle'];
    $content = $_POST['updatableContent'];
    // var_dump($_POST['updatableTitle']);
      try{
        titleContentValidation($title);
        
    } catch (InvalidArgumentException $e){
        $_SESSION['error'] = $e->getMessage();
        redirect();

    }
    $page = $entityManager->find('models\PageModel', $id);
    $page->setTitle($title);
    $page->setContent($content);
    $entityManager->persist($page);
    $entityManager->flush();
    $_SESSION['success'] = '<p> Page has been updated successfully </p>';
    redirect();
 
}
?>