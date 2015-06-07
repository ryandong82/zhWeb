<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 2015/6/5
 * Time: 1:14
 */
require_once("../dbconn.php");
$pdo->beginTransaction();
try {
    $teacher_id = $_POST["id"];
    $teacher = $pdo->prepare("select a.teacher_photo, b.filename from teachers a join uploaded_res b on a.teacher_photo = b.Id where a.Id = :Id", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    //$teacher = $pdo->query("select a.teacher_photo, b.filename from teachers a join uploaded_res b on a.teacher_photo = b.Id where a.Id = $teacher_id");
    //$teacher->bindParam(1, $teacher_id, PDO::PARAM_INT);
    $succ = $teacher->execute(array(':Id' => $teacher_id));
    $teacher->bindColumn(1, $res_id);
    $teacher->bindColumn(2, $file_name);
    //$tmp = $teacher->fetch(PDO::FETCH_BOUND, );
    //$info = $pdo->errorInfo();
    //echo $info[2];
    if ($teacher->fetch(PDO::FETCH_BOUND))
    {
        $stat = $pdo->prepare("delete from uploaded_res where Id = :Id");
        $stat->bindValue(":Id", $res_id, PDO::PARAM_INT);
        $stat->execute();

        $stat = $pdo->prepare("delete from teachers where Id = :Id");
        $stat->bindValue(":Id", $teacher_id, PDO::PARAM_INT);
        $stat->execute();
        $pdo->commit();
        $arr = array("ok"=>"1");
        header("content-type: text/json;charset=UTF-8", true);
        echo json_encode($arr);
    }
}
catch (Exception $e)
{
    $pdo->rollBack();
    throw new $e;
}
if (isset($file_name) && file_exists($file_name))
    unlink("./statics/images/upload/$file_name");
?>