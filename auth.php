<?php

    if(isset($_POST['name'])){
        echo "Hello ".$_POST['name'];
    }

    if(isset($_GET['name'])){
        echo "Hello ".$_GET['name'];
    }
?>