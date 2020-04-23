<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, ".")); ?>
<header id="pageHeader">
    <form method="post" action="">
        <input type="text" name="username" id="username" placeholder="Username" value="<?= isset($_POST['something']) ? htmlspecialchars($_POST['something']) : '' ?>" />
        <input type="submit" name="submit" value="Login"/>
    </form></aside>
    <?php
    if(isset($_POST['submit'])) {
        $count = 0;
        $dots = ".";
        while ($count <= 4){
            echo "" .$dots;
            $dots .= ".";
            ++$count;
        }
    }
    ?>

    <a href="index.php"><h1><span class="glyphicon glyphicon-ok"></span> The Advice Shop</h1></a>


</header>
