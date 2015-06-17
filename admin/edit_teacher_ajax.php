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

require_once 'pub_funcs.php';

$teacher_id = $_POST["teacher_id"];
$teacher_name = $_POST["teacher_name"];
$teacher_desc = $_POST["teacher_desc"];
$teacher_content = $_POST["teacher_content"];
$visible = isset($_POST["teacher_hidden"]) && $_POST["teacher_hidden"] == "On" ? 0 : 1;
$order_num = $_POST["order_num"];
if ($order_num == "")
    $order_num = "null";

$show_in_intro = isset($_POST["show_in_intro"]) &&  $_POST["show_in_intro"] == "on" ? 1 : 0;
$group_id = $_POST["group_id"];

require_once("../dbconn.php");

if ($_FILES["myFile"]["name"] != "") {
    $photo_file = gen_file_name(get_extension($_FILES["myFile"]["name"]));
    
    $new_file = $_SERVER['DOCUMENT_ROOT'] . "/statics/images/upload/$photo_file";
    $file_mime = $_FILES["myFile"]["type"];

    if (!move_uploaded_file($_FILES["myFile"]["tmp_name"], $new_file)) {
        $arr = return_error("文件上传失败");
        echo json_encode($arr);
        return;
    }
    $res_stat = $pdo->prepare("update uploaded_res set filename = '$photo_file', mime_type = '$file_mime'
        where Id = (select teacher_photo from teachers where Id = $teacher_id)");
    $res_stat->execute();
}

header("content-type: text/json;charset=UTF-8", true);

$sql = "update teachers set teacher_name = '$teacher_name', teacher_descript = '$teacher_desc', order_num = '$order_num',
      group_id = $group_id, visible = $visible, content = '$teacher_content', show_in_intro = $show_in_intro
      where Id = $teacher_id";
//VALUES ('$teacher_name', '$teacher_desc', $res_id, $order_num, now(), $group_id, 1, '$teacher_content', $show_in_intro)";
//teacher_photo,
$stat = $pdo->prepare($sql);
/*$stat->bindValue(":teacher_name", $teacher_name);
$stat->bindValue(":teacher_descript", $teacher_desc);
$stat->bindValue(":order_num", $order_num);
$stat->bindValue(":group_id", $group_id);
$stat->bindValue(":visible", $visible);
$stat->bindValue(":content", $teacher_content);
$stat->bindValue(":show_in_intro", $show_in_intro);
$stat->bindValue(":Id", $teacher_id);*/

if (!$stat->execute()) {
    $err_text = $pdo->errorInfo();
    return_error($err_text[2]);
    echo json_encode($err_text);
    return;
}

$result = $pdo->query("select a.Id, a.create_date, b.group_name, c.filename photo_file from teachers a
  left join teacher_group b on a.group_id = b.Id left join uploaded_res c on a.teacher_photo = c.Id where a.id = $teacher_id");

if ($arr_row = $result->fetch()) {

    $arr = array(
        "success" => 1,
        "teacher_name" => $teacher_name,
        "teacher_desc" => $teacher_desc,
        "teacher_id" => $arr_row["Id"],
        "photo_file" => $arr_row["photo_file"],
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