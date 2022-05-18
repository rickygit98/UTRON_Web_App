<?php

//Check if any session is exist
if(!session_id()){
    session_start();
}

require_once "../app/init.php";

$app = new App();
