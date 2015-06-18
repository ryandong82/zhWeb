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

function get_ellipsed_content($content, $max_len)
{
    $txt_content = preg_replace("/<.*?>/", "", $content);
    $len = strlen($txt_content);
    $result = $txt_content;
    if ($len + 3 > $max_len)
        $result = mb_strcut($txt_content, 0, $max_len - 3, 'UTF-8') . "...";
    return $result;
}