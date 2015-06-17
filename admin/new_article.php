<?php
//if ($("#article_title").val() == "") return;
//if ($("#article_content").val() == "") return;
//if ($("#article_category").cleanHtml() == "") return;
$title = $_POST["article_title"];
$content = $_POST["article_content"];
$category = $_POST["article_category"];
require_once 'pub_funcs.php';
$is_matched = preg_match('/<img\ssrc="data:(?P<contenttype>.*?);base64,(?P<content>.*?)">/', $content, $matches);
require_once("../dbconn.php");

//$is_matched = preg_match('/data:(?P<contenttype>.*?);base64/', $aa, $matches);
if ($is_matched)
{
    $mime_type = $matches['contenttype'];
    $img = base64_decode($matches['content']);
    $photo_file = gen_file_name();
    $new_file = $_SERVER['DOCUMENT_ROOT'] . "/statics/images/upload/$photo_file";
    if (file_put_contents($new_file, $img))
    {
        $img_type = exif_imagetype($new_file);
        $ext = image_type_to_extension($img_type, TRUE);
        rename($new_file, $new_file . $ext);
        $new_file = $new_file . $ext;
        $content_nopic = preg_replace('/<img\ssrc="data:.*?;base64,.*?">/', "<img src=\"statics/images/upload/$photo_file" . "$ext\"", $content);
        $sql = "insert into uploaded_res(filename, create_time, mime_type)
        VALUES('$photo_file', now(), '$mime_type') ";
        $pdo->exec($sql);
    }
}

//preg_replace('<img src="data:image/jpeg;base64,', $replacement, $subject)

//$result = $pdo->query("select * from articles a join article_category b on a.category = b.Id");
$sql = "insert into articles(title, content, create_time, category, keywords)
        VALUES('$title', '$content_nopic', now(), $category, null) ";
if ($pdo->exec($sql)) {
    echo json_encode(array("success" => "1", "new_id" => $pdo->lastInsertId()));
} else {
    echo json_encode(array("success" => "0", "error" => $pdo->errorInfo()));
}
?>