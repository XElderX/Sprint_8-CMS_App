<?php 
session_start();
include_once 'bootstrap.php';

?>
<?php (!isset($_SESSION['logged_in'])) 
? header("Location: " . '/Sprint_8-CMS_App')                                  
: null ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Update</h2>

<form  action="/Sprint_8-CMS_App/admin" method="POST"> 
    <label>
        Title
        <input type="text" name="updatableTitle" id="title" value="<?php echo $page->getTitle()?>">
    </label>
    <label>
        Label
        <input type="text" name="updatableContent" id="content" value="<?php echo $page->getContent()?>">
    </label>
    <input type="hidden" name="id" value="<?php echo($page->getId())?>">
    <input type="submit" value="Edit">
</form>
<?php require 'footer.php';?>
</body>
</html>
