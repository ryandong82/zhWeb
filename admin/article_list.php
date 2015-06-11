<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./Content/prettify.css">
    <link rel="stylesheet" href="./Content/bootstrap.min.css">
    <link rel="stylesheet" href="Content/article.css">
    <link href="Content/font-awesome.css" rel="stylesheet">
    <title></title>
    <style>
        /*body{background-color:midnightblue;}*/

        .main_navigation {
            text-align: center;
            border-top: 1px solid #1b1b1b;
            border-bottom: 2px solid #e1e1e1;
            margin-bottom: 35px;

        }

        .main_navigation .menu {
            padding: 0px;
            margin: 0px;
        }
        body {
            font-family: "Microsoft YaHei", "微软雅黑", "SimSun", "宋体";
        }
        #nav_main.main_navigation .menu li {
            list-style: none;
            display: inline-block;
            position: relative;
        }

        #nav_main.main_navigation .menu li a {
            color: #505050;
            line-height: 3em;
            display: block;
            padding: 0px 21px;
        }

        #nav_main.main_navigation .menu li.nav-active {
            border-bottom: 2px solid #e67e22;
            color: #ffffff;
            margin-bottom: -2px;
        }

        #form_btn.form-group {
            margin-top: 1em;
            text-align: center;
        }

    </style>
</head>
<body>
<?php
//if ($("#article_title").val() == "") return;
//if ($("#article_content").val() == "") return;

require_once("../dbconn.php");
$result = $pdo->query("select a.Id, a.title, a.create_time, b.cate_name from articles a join article_category b on a.category = b.Id");

?>
<nav class="main_navigation" role="navigation" id="nav_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="collapse navbar-collapse">
                    <ul class="menu">
                        <li><a href="teacher_admin.php">师资列表</a></li>
                        <li class="nav-active dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-expanded="false" href="#">主题活动<b
                                    class="caret"></b></a>

                            <ul class="dropdown-menu" role="menu" id="navbody">
                                <li><a href="admin_articles.php">发布</a></li>
                                <li><a href="article_list.php">全部</a></li>
                            </ul>

                        </li>
                        <li><a href="#">主页横幅过渡图</a></li>
                        <li><a href="#">底部滚动图</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <table class="table table-bordered">
        <tr>
            <th width="70%">
                标题
            </th>
            <th width="20%">
                创建时间
            </th>
            <th width="10%">
                分组
            </th>
        </tr>
        <?php
        while ($arr_row = $result->fetch()) {
            ?>
            <tr>
                <td>
                    <?=$arr_row["title"]?>
                </td>
                <td>
                    <?=$arr_row["create_time"]?>
                </td>
                <td>
                    <?=$arr_row["cate_name"]?>
                </td>
            </tr>
        <?php

        }
        ?>

    </table>
</div>
</body>
<script src="./Scripts/jquery-2.1.3.min.js"></script>
<script src="../statics/plugin/Bootstrap/js/bootstrap.min.js"></script>
<script src="./Scripts/bootstrap-wysiwyg.js"></script>
<script src="./Scripts/jquery.hotkeys.js"></script>
<script>
    function post_article() {
        var form_data = new FormData();
        if ($("#article_title").val() == "") return;
        if ($("#editor").cleanHtml() == "") return;
        if ($("#article_category").val() == "") return;

        form_data.append("article_category", $("#article_category").val());
        form_data.append("article_title", $("#article_title").val());
        form_data.append("article_content", $("#editor").cleanHtml());
        $.ajax({
            url: "new_article.php",
            type: "POST",
            data: form_data,
            processData: false,  // 告诉jQuery不要去处理发送的数据
            contentType: false,   // 告诉jQuery不要去设置Content-Type请求头
            success: function (_data) {
                if (_data.success == 1) {
                    location = "article_list.php";
                }
            },
            error: function (_data) {
                alert("保存数据失败！");
            }

        });
    }


    $(
        function () {
            function initToolbarBootstrapBindings() {
                var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                        'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                        'Times New Roman', 'Verdana'],
                    fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                $.each(fonts, function (idx, fontName) {
                    fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                });
                $('a[title]').tooltip({container: 'body'});
                $('.dropdown-menu input').click(function () {
                    return false;
                })
                    .change(function () {
                        $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                    })
                    .keydown('esc', function () {
                        this.value = '';
                        $(this).change();
                    });

                $('[data-role=magic-overlay]').each(function () {
                    var overlay = $(this), target = $(overlay.data('target'));
                    overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                });
                $('#voiceBtn').hide();
                // if ("onwebkitspeechchange"  in document.createElement("input")) {
                //   var editorOffset = $('#editor').offset();
                //   $('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#editor').innerWidth()-35});
                // } else {
                //   $('#voiceBtn').hide();
                // }
            };
            initToolbarBootstrapBindings();
            $('#editor').wysiwyg();
            $("#btn_ok").click(post_article);
            window.prettyPrint && prettyPrint();
        }
    );
</script>
</html>