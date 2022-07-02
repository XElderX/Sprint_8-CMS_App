<?php
if(isset($_GET['delete'])){
    include '../../bootstrap.php';
    $page = $entityManager->find('Models\AppTab', $_GET['delete']);
    $entityManager->remove($page);
    $entityManager->flush();
    header("Location: " . '/Sprint_8-CMS_App/admin');
  
  }