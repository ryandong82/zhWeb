<?php
require_once("../dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>List</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="./Content/Site.css" rel="stylesheet" type="text/css"/>
    <link href="./Content/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../statics/plugin/Bootstrap/css/bootstrap.min.css?version=3.3.2">
    <script src="./Scripts/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="./Scripts/jquery-ui.min.js" type="text/javascript"></script>
    <script src="./Scripts/jq_extends.js" type="text/javascript"></script>
    <script src="../statics/plugin/jquery.lazyload.min.js" type="text/javascript"></script>

    <style>
        #top_action {
            margin: 3px 3px 10px 3px;;
        }

        body {
            background-color: #5c87b2;
            font-family: "Microsoft YaHei", "微软雅黑", "SimSun", "宋体";
        }

    </style>
    <script>
        function clear_dialog()
        {
            $("#teacher_name").val("");
            $("#teacher_desc").val("");
            $("#photo_file").val("");
            $("#teacher_content").val("");
            $("#group_id").val("-1");
            $("#order_num").val("");
            $("#show_in_intro").prop("checked", true);
            $("#teacher_hidden").prop("checked", false);
            $("#error_msg").val("");
            $("#ImgPr").attr("src", "");
            $("#upload_file").val("");

        }

        function create_opera_pane(teacher_id)
        {
            r_value = '<a href="#" data-id="' + teacher_id + '" class="modify_link btn btn-primary" role="button">改</a>';
            r_value += '<a href="#" data-id="' + teacher_id + '" class="delete_link btn btn-primary" role="button">删</a>';
            r_value += '<a href="#" data-id="' + teacher_id + '" class="view_link btn btn-primary" role="button">阅</a>';
            return r_value;
        }

        function upload_completed(file_name) {
            $("#photo_file").val(file_name);
            $("#error_msg").val("");
        }
        function upload_error() {
            $("#photo_file").val("");
            $("#error_msg").val("上传到服务器失败");
        }
        $(document).ready(function () {
                $("img.lazy").lazyload({ threshold : 50 });
                $("#upload_file").uploadPreview({
                    Img: "ImgPr", Width: 116, Height: 165,
                    Callback: function () {
                        $("#frmUpload").submit();
                    }
                });
                $(".modify_link").click(function(){
                    alert($(this).data("id"));
                });

                $("#btn_new").click(function () {
                    newTeacher();
                })
            }
        );

        function validate_dialog(teacher)
        {
            if (teacher.photo_file == "")
            {
                alert("未选择图片");
                return false;
            }
            if (teacher.teacher_name == "")
            {
                alert("未输入姓名");
                return false;
            }
            if (teacher.teacher_desc == "")
            {
                alert("未输入简介");
                return false;
            }
            if (teacher.teacher_content == "")
            {
                alert("未输入内容");
                return false;
            }
            return true;
        }

        function prepareTeacher(teacher_id){

        }

        function createNewTeacher() {
            teacher = {
                teacher_name: $("#teacher_name").val(),
                teacher_desc: $("#teacher_desc").val(),
                photo_file:$("#photo_file").val(),
                teacher_content:$("#photo_file").val(),
                order_num : $("#order_num").val(),
                group_id : $("#group_id").val(),
                show_in_intro: $("#show_in_intro").is(':checked')?1:0,
                visible: $("#teacher_hidden").is(':checked')?0:1
            };
            if (!validate_dialog(teacher))
                return;
            $.ajax(
                {
                    url: "new_teacher_ajax.php",
                    type: "POST",
                    data: teacher,
                    complete:function(data) {
                        $(".ui-widget-overlay").css({"z-index":"100"}).html("");
                    },
                    beforeSend:function() {
                        $(".ui-widget-overlay").css({"z-index":"102"}).html("正在增加，请稍候。。。");
                    },
                    error: function(data) {
                        alert("上传生产数据异常！");
                    },
                    success: function (data) {
                        if (data.success != 1)
                        {
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
                        $ele_tr.append($tmptd);

                        $("#table_list").append($ele_tr);
                        alert("添加完成");
                        clear_dialog();
                    },
                    dataType: "json"
                }
            )

        }

        function updateTeacher(teacher)
        {

        }

        function fetchTeacher(teacher)
        {
            clear_dialog();
            $("#teacher_name").val(teacher.teacher_name);
            $("#teacher_desc").val(teacher.teacher_desc);
            $("#photo_file").val(teacher.photo_file);
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

        function modifyTeacher(teacher){
            fetchTeacher(teacher);
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
                        updateTeacher(teacher);
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
                        createNewTeacher();
                    }
                }
            });
        }
        ;
    </script>
    <style>

        #teacher_content{
            height: 200px;
            width:350px;
        }
        #teacher_name{
            width:80px;
        }
        #teacher_desc{
            width:350px;
        }
        #order_num
        {
            width:80px;
        }
        #dlg_fields
        {
            font-size:12px;
        }
    </style>
</head>
<body>
<div id="form_new" style="display: none" title="新增师资信息">
    <iframe id="hiddenframe" name="hiddenframe" style="display: none;" width="200" height="200"></iframe>
    <table id="dlg_fields">
        <tr>
            <th rowspan="6">头像图片：</th>
            <td rowspan="6" width="100">

                <img id="ImgPr" width="115" height="165" style='height:164px;'>
                <div id="photo_file">
            </td>
            <th>
                姓名：
            </th>
            <td colspan="1">
                <input id="teacher_name" type="text"/>
            </td>
        </tr>
        <tr><td colspan="2">
            <form method="post" id="frmUpload" target="hiddenframe" action="upload_res.php" enctype="multipart/form-data"><input
                    name="myFile" type="file" id="upload_file" /></form></td>
        </tr>
        <tr><th>是否隐藏：</th>
        <td><input type="checkbox" id="teacher_hidden"/></td>
        </tr>
        <tr>
            <th>
                在简介上显示
            </th>
            <td>
                <input type="checkbox" id="show_in_intro" checked="checked"/>
            </td>
        </tr>
        <tr>
            <th>
                分组
            </th>
            <td>
                <select id="group_id">
                    <?php
                    $res_group = mysql_query("select * from teacher_group");
                    echo '<option value="-1" selected="selected">---未分组---</option>';
                    while ($arr_group = mysql_fetch_array($res_group))
                    {
                        echo '<option value="'. $arr_group["Id"] . '">'. $arr_group["group_name"] . '</option>';
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
                <input type="number" id="order_num" />
            </td>
        </tr>
        <tr>
            <th>
                简介：
            </th>
            <td colspan="3">
                <input id="teacher_desc" type="text"/>
            </td>
        </tr>
        <tr>
            <th>内容</th>
            <td colspan="3"><textarea id="teacher_content"></textarea></td>
        </tr>
        <tr>
            <td colspan="4"><div id="error_msg"></div></td>
        </tr>
    </table>
</div>
<div class="page">
    <div id="header">
        <div>
            <h1>师资列表</h1>
        </div>
    </div>
    <?php
    $res_teachers = mysql_query("select a.Id, a.teacher_name, c.filename, a.teacher_descript, a.show_in_intro, a.teacher_photo, a.order_num, a.create_date,
      a.group_id, a.visible, a.content, teacher_group.group_name from teachers a left join teacher_group on a.group_id = teacher_group.Id
      left join uploaded_res c on a.teacher_photo = c.Id");
    ?>
    <div id="main">
        <div id="top_action">
            <a id="btn_new" href="#" class="btn btn-primary" role="button">新增</a>
        </div>
        <table id="table_list">
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
            if ($res_teachers) {
                while ($arr_teachers = mysql_fetch_array($res_teachers)) {
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
                            <a href="#" data-id="<?= $arr_teachers["Id"] ?>" class="modify_link btn btn-primary" role="button">改</a>

                            <a href="#" data-id="<?= $arr_teachers["Id"] ?>" class="delete_link btn btn-primary" role="button">删</a>

                            <a href="#" data-id="<?= $arr_teachers["Id"] ?>" class="view_link btn btn-primary" role="button">阅</a>
                        </td>
                    </tr>
                <?php
                }
            }
            ?>
        </table>

    </div>
    <div id="footer">
    </div>
</div>
</body>
</html>
<?php
mysql_close();
?>