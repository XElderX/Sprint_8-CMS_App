<?php 
session_start();
include_once 'bootstrap.php';
 (!isset($_SESSION['logged_in'])) 
? header("Location: " . '/Sprint_8-CMS_App')                                  
: null 
?>
<!DOCTYPE html>
<html lang="en">
<head>
       <link rel="stylesheet" href="src\assets\style.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css" integrity="sha512-1hsteeq9xTM5CX6NsXiJu3Y/g+tj+IIwtZMtTisemEv3hx+S9ngaW4nryrNcPM4xGzINcKbwUJtojslX2KG+DQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.css" integrity="sha512-/68JX40JZmfjNsYvlRTDn0tFfUtRKNL8RHdOT4CSIuNDWDSpNAZ1Td+qYMiYZWGIFjLuYjuEuQfMZlNwg+wX5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
        <div class='navContainer'>
                <div class='navTab'><a href='/Sprint_8-CMS_App'>Home</a></div>
                <div class='navTab'><a href='/Sprint_8-CMS_App/admin'>Admin panel</a></div>
                <div class='logOutContainer' style='margin-left: auto'>
        <form class='logout' method='post' action=''>
        <input type='submit' name='logout' value='Logout'>
        </form>
        </div>
        </div>

    </nav>
    <h2>Edit page : <?= $page->getTitle()?> </h2>
    <div>
        <div class='newPageContainer'>
            <form action="/Sprint_8-CMS_App/admin" method="POST"> 
                <div class='title'>
        <label class='label'>Title</label><br>
        <input type="text" name="updatableTitle" id="title" value="<?php echo $page->getTitle()?>">
    </div>
<div class='content'>
    <label class='label'>Content</label><br>
        <textarea name="updatableContent" id="content"><?php echo $page->getContent()?></textarea>
    
    
</div>
<div class='addBtn'>

<input type="hidden" name="id" value="<?php echo($page->getId())?>">
    <input type="submit" value="Edit">
</div>

</form>
</div>
</div>

<footer>
    <?php require 'footer.php';?>

</footer>
</body>
</html>
