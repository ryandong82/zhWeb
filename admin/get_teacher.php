<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 2015/6/3
 * Time: 0:46
 */

require_once("../dbconn.php");
$res_teachers = mysql_query("select a.Id, a.teacher_name, c.filename, a.teacher_descript, a.show_in_intro, a.teacher_photo, a.order_num, a.create_date,
      a.group_id, a.visible, a.content, teacher_group.group_name from teachers a left join teacher_group on a.group_id = teacher_group.Id
      left join uploaded_res c on a.teacher_photo = c.Id where a.Id = " . $_REQUEST["teacher_id"]);

if ($arr_row = mysql_fetch_array($res_teachers))
{
    $arr = array(
        "success" => 1,
        "teacher_name" => $arr_row["teacher_name"],
        "teacher_desc" => $arr_row["teacher_descript"],
        "teacher_id" => $arr_row["Id"],
        "photo_file" => $arr_row["filename"],
        "create_date" => $arr_row["create_date"],
        "order_num" => $arr_row["order_num"],
        "visible" => $arr_row["visible"],
        "show_in_intro" => $arr_row["show_in_intro"],
        "group_id" => $arr_row["group_id"],
        "group_name" => $arr_row["group_name"]);


} else
{
    $arr = array("success" => 0);
}
header("content-type: text/json;charset=UTF-8", true);
echo json_encode($arr);
mysql_close();
?>