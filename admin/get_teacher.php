<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 2015/6/3
 * Time: 0:46
 */

require_once("../dbconn.php");
$res_teachers = $pdo->query("select a.Id, a.teacher_name, c.filename, a.teacher_descript, a.show_in_intro, a.teacher_photo, a.order_num, a.create_date,
      a.group_id, a.visible, a.content, teacher_group.group_name from teachers a left join teacher_group on a.group_id = teacher_group.Id
      left join uploaded_res c on a.teacher_photo = c.Id where a.Id = " . $_REQUEST["teacher_id"]);

if ($res_teachers = $res_teachers->fetch())
{
    $arr = array(
        "success" => 1,
        "teacher_name" => $res_teachers["teacher_name"],
        "teacher_desc" => $res_teachers["teacher_descript"],
        "teacher_content" => $res_teachers["content"],
        "teacher_id" => $res_teachers["Id"],
        "photo_file" => $res_teachers["filename"],
        "create_date" => $res_teachers["create_date"],
        "order_num" => $res_teachers["order_num"],
        "visible" => $res_teachers["visible"],
        "show_in_intro" => $res_teachers["show_in_intro"],
        "group_id" => $res_teachers["group_id"],
        "group_name" => $res_teachers["group_name"]);
} else
{
    $arr = array("success" => 0);
}
header("content-type: text/json;charset=UTF-8", true);
echo json_encode($arr);
?>