<?php

if (isset($_POST['email']) && isset($_POST['password'])){
    echo "Hello";
}else{
    header("Location: index.php?error");
    exit();
}