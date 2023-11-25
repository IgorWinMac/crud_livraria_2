<?php

function handleMessage($type, $text){
    echo "<div class='alert alert-$type' role='alert'>
    $text
  </div>";
}

?>