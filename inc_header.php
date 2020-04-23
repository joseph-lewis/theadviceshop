<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, ".")); ?>
<header id="pageHeader">
  <aside id="login"><form action="login.php?page=<?php echo $name; ?>" method="post"><input name="username" id="username" type="text" placeholder="Username"><input name="submit" type="submit" value="Login">q</form></aside>

    <form method="post" action="">
        <input type="text" name="something" value="<?= isset($_POST['something']) ? htmlspecialchars($_POST['something']) : '' ?>" />
        <input type="submit" name="submit" />
    </form>
    <?php
    if(isset($_POST['submit'])) {
        echo 'You entered: ', htmlspecialchars($_POST['something']);
    }
    ?>
    <a href="index.php"><h1><span class="glyphicon glyphicon-ok"></span> The Advice Shop</h1></a>


</header>
