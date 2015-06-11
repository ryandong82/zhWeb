<?php
//if ($("#article_title").val() == "") return;
//if ($("#article_content").val() == "") return;
//if ($("#article_category").cleanHtml() == "") return;
$title = $_POST["article_title"];
$content = $_POST["article_content"];
$category = $_POST["article_category"];
require_once("../dbconn.php");
//$result = $pdo->query("select * from articles a join article_category b on a.category = b.Id");
$sql = "insert into articles(title, content, create_time, category, keywords)
        VALUES('$title', '$content', now(), $category, null) ";
if ($pdo->exec($sql)) {
    echo json_encode(array("success" => "1", "new_id" => $pdo->lastInsertId()));
} else {
    echo json_encode(array("success" => "0", "error" => $pdo->errorInfo()));
}
?>