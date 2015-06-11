<?php
require_once("../dbconn.php");
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>List</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="./Content/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="./Content/prettify.css">
        <link rel="stylesheet" href="./Content/bootstrap.min.css">
        <link rel="stylesheet" href="Content/article.css">
        <link href="Content/font-awesome.css" rel="stylesheet">


        <style>
            #top_action {
                margin: 3px 3px 10px 3px;;
            }

            body {
                font-family: "Microsoft YaHei", "微软雅黑", "SimSun", "宋体";
            }

            #teacher_content {
                height: 200px;
                width: 350px;
            }

            #teacher_name {
                width: 80px;
            }

            #teacher_desc {
                width: 350px;
            }

            #order_num {
                width: 80px;
            }

            #dlg_fields {
                font-size: 12px;
            }

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
    <nav class="main_navigation" role="navigation" id="nav_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="collapse navbar-collapse">
                        <ul class="menu">
                            <li class="nav-active"><a href="teacher_admin.php">师资列表</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button"
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
    <div id="form_new" style="display: none" title="新增师资信息">
        <!--iframe id="hiddenframe" name="hiddenframe" style="display: none;" width="200" height="200"></iframe-->
        <form id="form_teacher">
            <input type="hidden" name="teacher_id" id="teacher_id"/>
            <table id="dlg_fields">
                <tr>
                    <th rowspan="6">头像图片：</th>
                    <td rowspan="6" width="100">

                        <img id="ImgPr" width="115" height="165" style='height:164px;'>

                    </td>
                    <th>
                        姓名：
                    </th>
                    <td colspan="1">
                        <input name="teacher_name" id="teacher_name" type="text" required="required"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input
                            name="myFile" type="file" id="upload_file" required="required"/>
                    </td>
                </tr>
                <tr>
                    <th>是否隐藏：</th>
                    <td><input name="teacher_hidden" type="checkbox" id="teacher_hidden"/></td>
                </tr>
                <tr>
                    <th>
                        在简介上显示
                    </th>
                    <td>
                        <input name="show_in_intro" type="checkbox" id="show_in_intro" checked="checked"/>
                    </td>
                </tr>
                <tr>
                    <th>
                        分组
                    </th>
                    <td>
                        <select name="group_id" id="group_id" required="required">
                            <?php
                            $res_group = $pdo->query("select * from teacher_group");
                            //echo '<option value="-1" selected="selected">---未分组---</option>';
                            while ($arr_group = $res_group->fetch()) {
                                echo '<option value="' . $arr_group["Id"] . '">' . $arr_group["group_name"] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        顺序号
                    </th>
                    <td>
                        <input name="order_num" type="number" id="order_num"/>
                    </td>
                </tr>
                <tr>
                    <th>
                        简介：
                    </th>
                    <td colspan="3">
                        <input name="teacher_desc" id="teacher_desc" type="text" required="required"/>
                    </td>
                </tr>
                <tr>
                    <th>内容</th>
                    <td colspan="3"><textarea name="teacher_content" id="teacher_content"
                                              required="required"></textarea></td>
                </tr>
                <tr style="display:none;">
                    <td>
                        <button type="submit" id="submit_btn"></button>
                    </td>
                    <td colspan="3">
                        <div id="error_msg"></div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    $res_teachers = $pdo->query("select a.Id, a.teacher_name, c.filename, a.teacher_descript, a.show_in_intro, a.teacher_photo, a.order_num, a.create_date,
      a.group_id, a.visible, a.content, teacher_group.group_name from teachers a left join teacher_group on a.group_id = teacher_group.Id
      left join uploaded_res c on a.teacher_photo = c.Id");
    ?>
    <div id="main" class="container">
        <div id="top_action">
            <a id="btn_new" href="#" class="btn btn-primary" role="button">新增</a>
        </div>
        <table id="table_list" class="table table-bordered">
            <tr>
                <th width="100px">
                    姓名
                </th>
                <th width="130px">
                    照片
                </th>
                <th width="100px">
                    所属组
                </th>
                <th width="100px">
                    顺序号
                </th>
                <th width="100px">
                    创建日期
                </th>
                <th width="100px">
                    隐藏
                </th>
                <th width="100px">
                    在简介上显示
                </th>
                <th width="150px">
                    操作
                </th>
            </tr>
            <?php
            while ($arr_teachers = $res_teachers->fetch()) {
                ?>
                <tr id="teacher_row_<?= $arr_teachers["Id"] ?>">
                    <td>
                        <?= $arr_teachers["teacher_name"] ?>
                    </td>
                    <td>
                        <img class='lazy'
                             src="../statics/images/boya/t-face.jpg"
                             data-original="../statics/images/upload/<?= $arr_teachers["filename"] ?>"
                             width="115"
                             height="165"
                             style='height:164px;'></td>
                    <td>
                        <?= $arr_teachers["group_name"] ?>
                    </td>
                    <td>
                        <?= $arr_teachers["order_num"] ?>
                    </td>

                    <td>
                        <?= $arr_teachers["create_date"] ?>
                    </td>
                    <td>
                        <?php
                        if ($arr_teachers["visible"] != 1) {
                            echo "是";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($arr_teachers["show_in_intro"] == 1) {
                            echo "是";
                        }
                        ?>
                    </td>

                    <td>
                        <a href="#" data-id="<?= $arr_teachers["Id"] ?>" class="modify_link btn btn-primary"
                           role="button">改</a>

                        <a href="#" data-id="<?= $arr_teachers["Id"] ?>" class="delete_link btn btn-primary"
                           role="button">删</a>

                        <a href="#" data-id="<?= $arr_teachers["Id"] ?>" class="view_link btn btn-primary"
                           role="button">阅</a>
                    </td>
                </tr>
            <?php
            }

            ?>
        </table>

    </div>

    <script src="./Scripts/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="./Scripts/jquery-ui.min.js" type="text/javascript"></script>
    <script src="./Scripts/jq_extends.js" type="text/javascript"></script>
    <script src="../statics/plugin/jquery.lazyload.min.js" type="text/javascript"></script>
    <script src="../statics/plugin/Bootstrap/js/bootstrap.min.js"></script>
    <script src="./Scripts/bootstrap-wysiwyg.js"></script>
    <script>
        function clear_dialog() {
            $("#upload_file").attr("required", true);
            $("#teacher_id").val("");
            $("#teacher_name").val("");
            $("#teacher_desc").val("");
            $("#teacher_content").val("");
            $("#group_id").val("-1");
            $("#order_num").val("");
            $("#show_in_intro").prop("checked", true);
            $("#teacher_hidden").prop("checked", false);
            $("#error_msg").val("");
            $("#ImgPr").attr("src", "");
            $("#upload_file").val("");
        }

        function create_opera_pane(teacher_id) {
            r_value = '<a href="#" data-id="' + teacher_id + '" class="modify_link btn btn-primary" role="button">改</a>';
            r_value += '<a href="#" data-id="' + teacher_id + '" class="delete_link btn btn-primary" role="button">删</a>';
            r_value += '<a href="#" data-id="' + teacher_id + '" class="view_link btn btn-primary" role="button">阅</a>';
            return r_value;
        }

        function bindNewTeacherSubmit() {
            $("#form_teacher").unbind("submit");
            $("#form_teacher").submit(
                function (event) {
                    event.preventDefault();
                    var _frm_data = new FormData(this);
                    $.ajax(
                        {
                            url: "new_teacher_ajax.php",
                            type: "POST",
                            data: _frm_data,
                            processData: false,  // 告诉jQuery不要去处理发送的数据
                            contentType: false,   // 告诉jQuery不要去设置Content-Type请求头
                            complete: function (data) {
                                $(".ui-widget-overlay").css({"z-index": "100"}).html("");
                            },
                            beforeSend: function () {
                                $(".ui-widget-overlay").css({"z-index": "102"}).html("正在增加，请稍候。。。");
                            },
                            error: function (data) {
                                alert("上传生产数据异常！");
                            },
                            success: function (data) {
                                if (data.success != 1) {
                                    alert("添加失败:" + data.msg);
                                    return;
                                }
                                $ele_tr = $("<tr id=\"teacher_row_" + data.teacher_id + "\"></tr>");

                                $tmptd = $("<td></td>");
                                $tmptd.text(data.teacher_name);
                                $ele_tr.append($tmptd);

                                $tmptd = $('<td><img class="lazy" src="../statics/images/boya/t-face.jpg"'
                                + ' data-original="../statics/images/upload/'
                                + data.photo_file + '" width="115" height="165" style="height:164px;"></td>');
                                $tmptd.children().eq(0).lazyload();
                                $ele_tr.append($tmptd);


                                $tmptd = $("<td></td>");
                                $tmptd.text(data.group_name);
                                $ele_tr.append($tmptd);

                                $tmptd = $("<td></td>");
                                $tmptd.text(data.order_num);
                                $ele_tr.append($tmptd);

                                $tmptd = $("<td></td>");
                                $tmptd.text(data.create_date);
                                $ele_tr.append($tmptd);

                                $tmptd = $("<td></td>");
                                if (data.visible != 1)
                                    $tmptd.text("是");
                                $ele_tr.append($tmptd);

                                $tmptd = $("<td></td>");
                                if (data.show_in_intro == 1)
                                    $tmptd.text("是");
                                $ele_tr.append($tmptd);

                                $tmptd = $("<td>" + create_opera_pane(data.teacher_id) + "</td>");
                                setLinks($tmptd);
                                $ele_tr.append($tmptd);

                                $("#table_list").append($ele_tr);
                                alert("添加完成");
                                clear_dialog();
                            },
                            dataType: "json"
                        }
                    )
                }
            );
        }

        function bindEditTeacherSubmit() {
            $("#form_teacher").unbind("submit");
            $("#form_teacher").submit(
                function (event) {
                    event.preventDefault();
                    var _frm_data = new FormData(this);
                    $.ajax(
                        {
                            url: "edit_teacher_ajax.php",
                            type: "POST",
                            data: _frm_data,
                            processData: false,  // 告诉jQuery不要去处理发送的数据
                            contentType: false,   // 告诉jQuery不要去设置Content-Type请求头
                            complete: function (data) {
                                $(".ui-widget-overlay").css({"z-index": "100"}).html("");
                            },
                            beforeSend: function () {
                                $(".ui-widget-overlay").css({"z-index": "102"}).html("正在提交，请稍候。。。");
                            },
                            error: function (data) {
                                alert("上传数据异常！");
                            },
                            success: function (data) {
                                if (data.success != 1) {
                                    alert("添加失败:" + data.msg);
                                    return;
                                }
                                $ele_tr = $("<tr id=\"teacher_row_" + data.teacher_id + "\"></tr>");

                                $tmptd = $("<td></td>");
                                $tmptd.text(data.teacher_name);
                                $ele_tr.append($tmptd);

                                $tmptd = $('<td><img class="lazy" src="../statics/images/boya/t-face.jpg"'
                                + ' data-original="../statics/images/upload/'
                                + data.photo_file + '" width="115" height="165" style="height:164px;"></td>');
                                $tmptd.children().eq(0).lazyload();
                                $ele_tr.append($tmptd);


                                $tmptd = $("<td></td>");
                                $tmptd.text(data.group_name);
                                $ele_tr.append($tmptd);

                                $tmptd = $("<td></td>");
                                $tmptd.text(data.order_num);
                                $ele_tr.append($tmptd);

                                $tmptd = $("<td></td>");
                                $tmptd.text(data.create_date);
                                $ele_tr.append($tmptd);

                                $tmptd = $("<td></td>");
                                if (data.visible != 1)
                                    $tmptd.text("是");
                                $ele_tr.append($tmptd);

                                $tmptd = $("<td></td>");
                                if (data.show_in_intro == 1)
                                    $tmptd.text("是");
                                $ele_tr.append($tmptd);

                                $tmptd = $("<td>" + create_opera_pane(data.teacher_id) + "</td>");
                                setLinks($tmptd);
                                $ele_tr.append($tmptd);

                                $('#teacher_row_' + data.teacher_id, "#table_list").replaceWith($ele_tr);

                                alert("修改完成");
                            },
                            dataType: "json"
                        }
                    )
                }
            );
        }

        $(document).ready(function () {
                $("img.lazy").lazyload({threshold: 50});
                $("#upload_file").uploadPreview({
                    Img: "ImgPr", Width: 116, Height: 165
                });


                setLinks();
            }
        );
        function setLinks(contxt) {
            $(".modify_link", contxt).unbind("click");
            $(".modify_link", contxt).click(function (event) {
                event.preventDefault();
                bindEditTeacherSubmit();
                prepareTeacher($(this).data("id"));
            });


            $(".delete_link", contxt).click(function (event) {
                event.preventDefault();
                if (confirm("是否要删除")) {
                    $tmp_this = $(this);
                    $.ajax({
                        dataType: "json",
                        data: {
                            id: $(this).data("id")
                        },
                        url: "delete_teacher_ajax.php",
                        type: "POST",
                        success: function (data) {
                            if (data.ok == 1)
                                $tmp_this.parent().parent().remove();
                        }
                    });
                }
            });
            $("#btn_new", contxt).click(function () {
                bindNewTeacherSubmit();
                newTeacher();
            });
        }


        function prepareTeacher(teacherId) {
            $.get("get_teacher.php", {teacher_id: teacherId}, function (data) {
                if (data.success == 1) {
                    fetchTeacher(data);
                    modifyTeacher();
                }
            });
        }

        function fetchTeacher(teacher) {
            clear_dialog();
            $("#ImgPr").attr("src", "../statics/images/upload/" + teacher.photo_file);
            $("#upload_file").attr("required", false);
            $("#teacher_name").val(teacher.teacher_name);
            $("#teacher_desc").val(teacher.teacher_desc);
            $("#teacher_content").val(teacher.teacher_content);
            $("#order_num").val(teacher.order_num);
            $("#group_id").val(teacher.group_id);
            $("#teacher_id").val(teacher.teacher_id);
            if (teacher.show_in_intro == 1)
                $("#show_in_intro").prop("checked", true);
            else
                $("#show_in_intro").prop("checked", false);
            if (teacher.visible == 0)
                $("#teacher_hidden").prop("checked", true);
            else
                $("#teacher_hidden").prop("checked", false);
        }

        function modifyTeacher() {
            $("#form_new").dialog({
                resizable: false,
                height: 600,
                width: 600,
                modal: true,
                //按钮
                buttons: {
                    "取消": function () {
                        //关闭按钮
                        $(this).dialog("close");
                    },
                    "确定": function () {
                        $("#submit_btn").click();
                    }
                }
            });
        }

        function newTeacher() {
            clear_dialog();
            $("#form_new").dialog({
                resizable: false,
                height: 600,
                width: 600,
                modal: true,
                //按钮
                buttons: {
                    "取消": function () {
                        //关闭按钮
                        $(this).dialog("close");
                    },
                    "确定": function () {
                        //$("#form_teacher").get(0).checkValidity();
                        $("#submit_btn").click();
                        //createNewTeacher();
                    }
                }
            });
        }
        ;
    </script>
    </body>
    </html>
<?php

?>