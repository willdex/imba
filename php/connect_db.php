<?php
    $link = mysql_connect("grayhatcorp.com", "grayhatc", "");
    if ($link){
            mysql_select_db("grayhatc_site", $link);
        
    }

?>