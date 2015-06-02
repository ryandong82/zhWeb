<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 2015/5/31
 * Time: 7:40
 */
function return_error($msg)
{
    $rel_arr = array(
        "success" => 0,
        "msg" => $msg
    );
    return $rel_arr;
}
function get_extension($file)
{
    return substr(strrchr($file, '.'), 1);
}
$msec = explode(" ", microtime());
//$file_info = pathinfo($_FILES['myFile']['tmp_name']);
$photo_file = date("Y_m_d_H_i_s") . $msec[1] . "." . get_extension($_POST["photo_file"]);

$teacher_name = $_POST["teacher_name"];
$teacher_desc = $_POST["teacher_desc"];
$teacher_content = $_POST["teacher_content"];
$visible = $_POST["visible"];
$order_num = $_POST["order_num"];
if ($order_num == "")
    $order_num = "null";
$show_in_intro = $_POST["show_in_intro"];
$group_id = $_POST["group_id"];


require_once("../dbconn.php");
$new_file = "../statics/images/upload/$photo_file";
header("content-type: text/json;charset=UTF-8", true);
if (!rename("./tmp_uploaded/" . $_POST["photo_file"], $new_file))
{
    $arr = return_error("文件上传失败");
    echo json_encode($arr);
    return;
}
$file_mime = image_type_to_mime_type(exif_imagetype($new_file));

mysql_query("insert into uploaded_res(filename, create_time, mime_type) values('$photo_file', now(), '$file_mime')");

$result = mysql_query("SELECT LAST_INSERT_ID()");

if ($result)
    $arr_res_id = mysql_fetch_array($result);

$res_id = $arr_res_id[0];

$sql = "insert into teachers(teacher_name, teacher_descript, teacher_photo, order_num, create_date, group_id, visible, content, show_in_intro)
  VALUES ('$teacher_name', '$teacher_desc', $res_id, $order_num, now(), $group_id, 1, '$teacher_content', $show_in_intro)";

if (!mysql_query($sql))
{
    return_error(mysql_error());
    echo json_encode($arr);
    mysql_close();
    return;
}

$result = mysql_query("select a.Id, a.create_date, b.group_name from teachers a
  left join teacher_group b on a.group_id = b.Id where a.id = LAST_INSERT_ID()");

if ($result) {
    $arr_row = mysql_fetch_array($result);

    $arr = array(
        "success" => 1,
        "teacher_name" => $teacher_name,
        "teacher_desc" => $teacher_desc,
        "teacher_id" => $arr_row["Id"],
        "photo_file" => $photo_file,
        "create_date" => $arr_row["create_date"],
        "order_num" => $order_num,
        "visible" => $visible,
        "show_in_intro" => $show_in_intro,
        "group_id" => $group_id,
        "group_name" => $arr_row["group_name"]);


} else
{
    $arr = return_error("没有查询到");
}
echo json_encode($arr);
mysql_close();
?>