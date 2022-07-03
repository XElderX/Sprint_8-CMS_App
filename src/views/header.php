<?php
include_once "bootstrap.php";

        isset($_GET['goto'])
        ? $path = ''
        : $path = 'route.php';
        $pages = $entityManager->getRepository('Models\AppTab')->findAll(); 
        function showNav($pages, $path){
            print("<div class='navContainer'><div class='navTab'><a href='/Sprint_8-CMS_App'>Home</a></div>");
            foreach($pages as $p):
                //  $uri = ($_SERVER)['REQUEST_URI'];
                //  $modifiedUri = str_replace("subPage.php", "", $uri);
                //  var_dump ($modifiedUri);
                print("<div class='navTab'><a href='" . $path . "?goto={$p->getTitle()}'> {$p->getTitle()}" . "</a></div>");
            endforeach;
            print("</div>");
        }
        function redirect(){
            header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
            die();
        }
        
?>