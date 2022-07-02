<?php
use Models\AppTab;
require "bootstrap.php";
require "src/views/header.php";

// if(isset($_GET['delete'])){
//   $page = $entityManager->find('Models\AppTab', $_GET['delete']);
//   $entityManager->remove($page);
//   $entityManager->flush();
//   header("Location: " . '/Sprint_8-CMS_App/admin');

// }
if(isset($_GET['update'])){
  $page = $entityManager->find('Models\AppTab', $_GET['update']);
  require __DIR__ .'/src/views/updatePage.php';
 
}


(isset($_GET['goto'])) ? $title = $_GET['goto'] and $goto = $entityManager->getRepository('Models\AppTab')->findOneBy(array('title' => $title))
  // var_dump($_GET['goto']);
: $goto = false;





// $page = $entityManager->getRepository('Models\AppTab')->findBy(['title' => $_GET['goto']]);
// // ... SELECT + WHERE Name : SELECT * FROM products WHERE name = "Batai" AND id = 16;
// // $products = $entityManager->getRepository('Models\Product')->findBy(array('name' => 'Batai', 'id' => 16));
// $page[0] !== NULL ? print $page[0]->getId() . ' ' . $page[0]->getTitle() . ' ' . $page[0]->getContent() : '';
// print("<hr>");
require __DIR__ .'/src/views/showSubPage.php';
