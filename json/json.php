<?php
function json($json1){
    $json = file_get_contents($json1);
    $json_data = json_decode($json, true);
    
    return $json_data["videos"];
}

?>
