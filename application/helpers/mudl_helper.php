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


function get_journal($cat_id){
    $ci =& get_instance();
    $ci->db->where('j_category = '.$cat_id);
    return $ci->db->get('journal')->result();
}

function get_presidency($cat_id){
    $ci =& get_instance();
    $ci->db->where('pr_exe_id = '.$cat_id);
    return $ci->db->get('presidencies')->result();
}