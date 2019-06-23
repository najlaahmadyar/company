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

function show_date($date){
    $lang = $_SESSION['lang'];
    $ci =& get_instance();

    if($lang == 'eng'){
        $date = strtotime($date);
        return date('Y M d', $date);
    }else{

        $date = strtotime($date);
        $date = date('Y M d', $date);

        $jdate = new Jdatetime_lib(true, true, 'Asia/kabul');
        return $jdate->convertFormatToFormat('Y F d', 'Y M d', $date);

    }
}


function show_date_time($date){
    $lang = $_SESSION['lang'];
    $ci =& get_instance();

    if($lang == 'eng'){
        $date = strtotime($date);
        return date('Y M d (H:i:s A)', $date);
    }else{

        $date = strtotime($date);
        $date = date('Y M d (H:i:s A)', $date);

        $jdate = new Jdatetime_lib(true, true, 'Asia/kabul');
        return $jdate->convertFormatToFormat('Y F d (H:i:s A)', 'Y M d (H:i:s A)', $date);

    }
}