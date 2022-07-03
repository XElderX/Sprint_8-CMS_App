<?php
use Models\AppTab;
require "bootstrap.php";
require "src/views/header.php";
if(isset($_GET['update'])){
  $page = $entityManager->find('Models\AppTab', $_GET['update']);
  require __DIR__ .'/src/views/updatePage.php';
  die;
}
(isset($_GET['goto'])) ? $title = $_GET['goto'] and $goto = $entityManager->getRepository('Models\AppTab')->findOneBy(array('title' => $title))
  // var_dump($_GET['goto']);
: $goto = false;

require __DIR__ .'/src/views/showSubPage.php';
