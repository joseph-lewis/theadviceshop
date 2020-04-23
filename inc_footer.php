<footer><p class="copyright">&copy; 2016, The Advice Shop.</p>
    <p class="user"><?php
// echo $_SESSION['blah']; // demo undefined variable
if (isset($_SESSION['username'])) {
    echo "Hello " . $_SESSION['username']. " Welcome to the Advice Site";
    echo " - <a href=\"logout.php?page=$name\">Logout</a>";
}
else {
    echo "Please Login to our Site";
}
?></p>
</footer>
<?php if (isset($dbh)) {
    $dbh = null;
} ?>
