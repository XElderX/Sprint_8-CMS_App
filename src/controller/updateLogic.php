<?php use Models\appTab;
include_once 'bootstrap.php';
// require  'src/admin.php';

if (isset($_POST['id'])){
    
    $id = $_POST['id'];
    $title = $_POST['updatableTitle'];
    $content = $_POST['updatableContent'];
    var_dump($_POST['updatableTitle']);
    $page = $entityManager->find('models\appTab', $id);
    $page->setTitle($title);
    $page->setContent($content);
    $entityManager->persist($page);
    $entityManager->flush();
 
}
?>