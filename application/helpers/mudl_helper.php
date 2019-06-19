<?php 
function lang($name){
    $ci = & get_instance();
    return $ci->lang->line($name); 
}

function get_document($cat_id){
    $ci =& get_instance();
    $ci->db->where('doc_cat_id = '.$cat_id);
    return $ci->db->get('official_documents')->result();
}