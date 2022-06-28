<!DOCTYPE html>
<html lang="en">
<head>
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

</body>
</html>



