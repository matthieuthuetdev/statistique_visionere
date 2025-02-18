<?php
$result = exec("git pull");
foreach($result as $line){
    echo $line;
    sleep(0.1);
}