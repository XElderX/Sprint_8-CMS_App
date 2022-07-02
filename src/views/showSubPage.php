<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="src\assets\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav> 
         <?php showNav($pages, $path) ?>
 </nav>
<section>
     <?php $goto ?  print '<h3>' . $goto->getTitle() .  '</h3>' and print '<div class=\'content\'>' . $goto->getContent() . '</div>'
     : print '<p class=\'notice\'>Unfortunetly, but there is no content to show</p>';            
?>
</section>

<footer>
<?php require "src/views/footer.php"; ?>
</footer>

</body>
</html>



