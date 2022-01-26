<?php 

function getLayout($layoutName = false, $data = false) {
    if ($layoutName) {
        $data = $data;
        include("wp-content/themes/roterfaden-html/layouts/$layoutName.php");
    }
}




?>