<?php
$num = $_POST['num'];
if(isset($_POST['submit'])) {
    $count = 0;
    while($count <= $num){
        ++$count;
        echo $count, "<br>";
    }

}
?>