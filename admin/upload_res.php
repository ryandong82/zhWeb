<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 2015/5/31
 * Time: 8:45
 */
function get_extension($file)
{
    return substr(strrchr($file, '.'), 1);
}

if ($_FILES['myFile']['error'] == UPLOAD_ERR_OK) {
    $msec = explode(" ", microtime());
    //$file_info = pathinfo($_FILES['myFile']['tmp_name']);
    $filename = date("Y_m_d_H_i_s") . $msec[1] . "." . get_extension($_FILES['myFile']['name']);
    $mime_type = $_FILES['myFile']['type'];
    $suecc = move_uploaded_file($_FILES['myFile']['tmp_name'], "./tmp_uploaded/" . $filename);

    if ($suecc)
    {
        ?>
        <script>
            window.onload = function()
            {
                parent.window.upload_completed("<?=$filename?>");
            }
        </script>
<?php
    }
    else{
        ?>
        <script>
            window.onload = function()
            {
                parent.upload_error();
            }
        </script>
    <?php
    }
}
?>