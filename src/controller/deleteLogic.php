<?php

if(isset($_GET['delete'])){
  session_start();
    include '../../bootstrap.php';
    $page = $entityManager->find('Models\AppTab', $_GET['delete']);
    $entityManager->remove($page);
    $entityManager->flush();
    $_SESSION['success'] = '<p> Page has been deleted </p>';
    header("Location: " . '/Sprint_8-CMS_App/admin');
  }
  ?>