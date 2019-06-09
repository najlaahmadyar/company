<?php 
function lang($name){
    $ci = & get_instance();
    return $ci->lang->line($name); 
}