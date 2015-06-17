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

require_once 'pub_funcs';

//$msec = explode(" ", microtime());
//$file_info = pathinfo($_FILES['myFile']['tmp_name']);
$photo_file = gen_file_name(get_extension($_FILES["myFile"]["name"])); 
//date("Y_m_d_H_i_s") . $msec[1] . "." . get_extension($_FILES["myFile"]["name"]);

$teacher_name = $_POST["teacher_name"];
$teacher_desc = $_POST["teacher_desc"];
$teacher_content = $_POST["teacher_content"];
$visible =  isset($_POST["teacher_hidden"]) && $_POST["teacher_hidden"] == "On" ? 0:1;
$order_num = $_POST["order_num"];
if ($order_num == "")
    $order_num = "null";

$show_in_intro = $_POST["show_in_intro"] == "on" ? 1 : 0;
$group_id = $_POST["group_id"];

require_once("../dbconn.php");
$new_file = "/statics/images/upload/$photo_file";
header("content-type: text/json;charset=UTF-8", true);

if (!move_uploaded_file($_FILES["myFile"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . $new_file))
{
    $arr = return_error("文件上传失败");
    echo json_encode($arr);
    return;
}
$file_mime = $_FILES["myFile"]["type"];

$pdo->exec("insert into uploaded_res(filename, create_time, mime_type) values('$photo_file', now(), '$file_mime')");

$res_id = $pdo->lastInsertId();

$sql = "insert into teachers(teacher_name, teacher_descript, teacher_photo, order_num, create_date, group_id, visible, content, show_in_intro)
  VALUES ('$teacher_name', '$teacher_desc', $res_id, $order_num, now(), $group_id, 1, '$teacher_content', $show_in_intro)";

if (!$pdo->exec($sql))
{
    $err_text = $pdo->errorInfo();
    return_error($err_text[2]);
    echo json_encode($err_text);
    return;
}

$result = $pdo->query("select a.Id, a.create_date, b.group_name from teachers a
  left join teacher_group b on a.group_id = b.Id where a.id = LAST_INSERT_ID()");

if ($arr_row = $result->fetch()) {

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
?>