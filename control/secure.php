<?php


function secure($data){
    $data= htmlentities(strip_tags(trim($data)));
$search = array('@<script[^>]*?>.*?</script>@si',  // Strip out javascript
               '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
               '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
               '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments including CDATA
); 
$data = preg_replace($search, '', $data); 
    return $data;
}







?>