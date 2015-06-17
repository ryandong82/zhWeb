<?php
function get_extension($file)
{
    return substr(strrchr($file, '.'), 1);
}

function gen_file_name($file_ext = '')
{
    $msec = explode(" ", microtime());
    if (!empty($file_ext))
        $photo_file = date("Y_m_d_H_i_s") . $msec[1] . "." . $file_ext;
    else
        $photo_file = date("Y_m_d_H_i_s") . $msec[1];        
    return $photo_file;
}