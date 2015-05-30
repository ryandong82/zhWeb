<!DOCTYPE html>
<html>
<head>
    <title>List</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="./Content/Site.css" rel="stylesheet" type="text/css"/>
    <link href="./Content/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../statics/plugin/Bootstrap/css/bootstrap.min.css?version=3.3.2">
    <script src="./Scripts/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="./Scripts/jquery-ui.js" type="text/javascript"></script>
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
        $(document).ready(function()
            {
                $("#btn_new").click(function()
                {
                    newTeacher();
                })
            }

        );
        function createNewTeacher()
        {
            
            $("table_list").append();
            $ele_tr = $("<tr></tr>")
        }
        function newTeacher() {
            $("#form_new").dialog({
                resizable: false,
                height: 600,
                width:800,
                modal: true,
                //按钮
                buttons: {
                    "取消": function () {
                        //关闭按钮
                        $(this).dialog("close");
                    },
                    "确定": function () {
                        $(this).dialog("close");
                        alert("确定");
                    },
                    "删除": function () {
                        $(this).dialog("close");
                        alert("删除");
                    }
                }
            });
        };
    </script>
</head>
<body>
<div id="form_new" style="display: none" title="jquery ui演示弹出层">
    <div>
        姓名：<input type="text" />
    </div>
    <div>
        简介：<input type="text" />
    </div>
    <div>
        姓名：<input type="text" />
    </div>
    <div>
        姓名：<input type="text" />
    </div>
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>jquery ui弹出层内容测试中</p>
</div>
<div class="page">
    <div id="header">
        <div>
            <h1>师资列表</h1>
        </div>
    </div>
    <?php
    require_once("../dbconn.php");
    $res_teachers = mysql_query("select a.Id, a.teacher_name, a.teacher_descript, a.teacher_photo, a.order_num, a.create_date,
      a.group_id, a.visible, a.content, teacher_group.group_name from teachers a left join teacher_group on a.group_id = teacher_group.Id");
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
                <th width="100px">
                    简介
                </th>
                <th>
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
                    是否显示
                </th>
                <th width="100px">
                    操作
                </th>
            </tr>
            <?php
            if ($res_teachers) {
                while ($arr_teachers = mysql_fetch_array($res_teachers)) {
                    ?>
                    <tr id="teacher_row_<?=$arr_teachers["teacher_name"]?>">
                        <td>
                            <?= $arr_teachers["teacher_name"] ?>
                        </td>

                        <td>
                            <?= $arr_teachers["teacher_descript"] ?>
                        </td>
                        <td>
                            <img class='lazy'
                                 src="../statics/images/boya/t-face.jpg"
                                 data-original="../statics/images/upload/<?= $arr_teachers["teacher_photo"] ?>"
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
                            <?= $arr_teachers["visible"] ?>
                        </td>


                        <td>
                            <a href="/xlcx/Edit/2">Edit</a> |
                            <a href="/xlcx/Preview/2" target="_blank">Details</a> |
                            <a href="/xlcx/Delete/2">Delete</a>
                            <a href="/xlcx/ViewTable/2" target="_blank">ViewTable</a>
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
