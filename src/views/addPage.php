<?php 
session_start();
include_once 'bootstrap.php';

?>
<form <?php isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true
                                                            ? print("style = 'display: block'")
                                                            : print("style = 'display: none'") ?>
action="/Sprint_8-CMS_App/admin" method="POST"> 
    <label>
        Sub Page Title
        <input type="text" name="title" id="title">
    </label>
    <label>
        Content:
        <textarea name="content" id="content" ></textarea>
    </label>
    <input type="submit" value="Add">
</form>

<?php require 'footer.php';?>