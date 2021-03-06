<!DOCTYPE html>
<html>
<head>
    <title>师资 - 中和商学院</title>
    <?php
    include("head.php");
    ?>
</head>
<body>
<!-- 顶部 start-->
<!--header>
    <div class="header">
        <div class="container">
            <a href="./about-39.html" class="pull-left text-muted btn">证书验证</a>
            <a href="http://r.boyaceo.com" class="pull-left text-muted btn">报备系统</a>
            <form action="./index.php" method="get" class="form-horizontal header header_search text-right" role="search" target="_blank" >
                <button type="submit" class="btn btn-info btn-sm pull-right" style="margin-left:5px;">
                    <span class='glyphicon glyphicon-search'></span>
                </button>
                <div class="form-group col-md-2 col-xs-11 pull-right">
                    <input type="hidden" name="m" value="search"/>
                    <input type="hidden" name="c" value="index"/>
                    <input type="hidden" name="a" value="init"/>
                    <input type="hidden" name="typeid" value="58"/>
                    <input type="hidden" name="siteid" value="1" >
                    <input type="text" class="form-control"  name="q" placeholder="请输入关键字" x-webkit-speech>
                </div>
            </form>
        </div>
    </div>
</header-->
<!-- 顶部 end-->



<?php
include("main_nav.php");
?>
<!-- 导航下色条 start-->
<div class="nav_child_bg">
    <div class="container">
        <div class="container-child">
            <h1 class="h2">
                中和师资
                <span class="caret"></span>
            </h1>
        </div>
    </div>
</div>
<!-- 导航下色条 end-->

<!-- 主体部分 start-->
<div id="child_main" class="container">
    <div class="container-child">
        <div class="row">
            <!-- 主体 start-->
            <div class="col-xs-12">
                <!-- 面包屑导航 -->
                <ol class="breadcrumb">
                    <li>
                        <a href="./">首页</a>
                    </li>
                    <li class="active">师资</li>
                </ol>
                <h3 class="title">中和师资</h3>
                <!-- 新闻列表 start-->
                <div class="teacher_list">
                    <hr>
                    <?php
                    require_once("dbconn.php");
                    $res = $pdo->query("select * from teacher_group order by group_orderno limit 0 , 5");
                    ?>
                    <!-- 切换页 -->
                    <ul class="nav nav-tabs" role="tablist" id="myTab">
                        <li class="active"><a href="#all" role="tab" data-toggle="tab">全部师资</a></li>
                        <?php
                        $i = 0;
                        while ($row = $res->fetch()) {
                            ?>
                            <li><a href="#teacher-<?= $row["Id"] ?>" role="tab"
                                   data-toggle="tab"><?= $row["group_name"] ?></a></li>
                        <?php

                        }
                        ?>
                    </ul>


                    <!-- 切换页内容 -->
                    <div class="tab-content panel-body">
                        <!-- 全部师资 start-->
                        <div class="tab-pane fade active in" id="all">
                            <?php
                            $result = $pdo->query("select count(1) from teachers where ifnull(visible, 1) = 1")->fetch();
                            $cnt = $result[0];
                            $pagecnt = ceil($cnt / 18);
                            $page = 0;
                            if (isset($_REQUEST["page"]))
                                $page = $_REQUEST["page"] - 1;
                            if ($page + 1 > $pagecnt)
                                $page = $pagecnt - 1;
                            $offset = $page * 18;
                            if ($cnt != 0) {
                                $teachers = $pdo->query("select a.Id, a.teacher_name, c.filename, a.teacher_descript, a.show_in_intro, a.teacher_photo, a.order_num, a.create_date,
                                            a.group_id, a.visible, a.content, teacher_group.group_name from teachers a left join teacher_group on a.group_id = teacher_group.Id
                                            left join uploaded_res c on a.teacher_photo = c.Id where ifnull(a.visible, 1) = 1 order by a.order_num limit $offset, 18");
                                //$teachers = mysql_query("select * from teachers order by order_num ", $conn);
                                while ($row = $teachers->fetch()) {
                                    ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4 teacher-single clearfix">
                                        <a href="./teacher.php?Id=<?= $row["Id"] ?>" class="thumbnail col-xs-5"> <img
                                                class='lazy'
                                                src="./statics/images/boya/t-face.jpg"
                                                data-original="./statics/images/upload/<?= $row["filename"] ?>"
                                                width="115" height="165"
                                                style='height:164px;'></a>

                                        <div class="col-xs-7">
                                            <h3 class="h4"><a href="./teacher.php?Id=<?= $row["Id"] ?>"
                                                              class="blue"><?= $row["teacher_name"] ?></a></h3>

                                            <p class="text-muted"><?= $row["teacher_descript"] ?></p>
                                        </div>
                                        <a href="./teacher.php?Id=<?= $row["Id"] ?>"
                                           class="btn btn-default btn-xs"> <span
                                                class="glyphicon glyphicon-user text-warning"></span> <span
                                                class="text-warning">个人主页</span></a>
                                    </div>
                                <?php
                                }
                            }
                            ?>
                            <!-- 分页 -->
                            <ul class="pager">
                                <li class="default">
                                    <a class="a1"><?= $cnt ?>条</a>

                                    <?php
                                    if ($cnt != 0) {
                                        echo '<a href="teachers.php?page=' . max($page, 1) . '" class="a1">上一页</a>';
                                        $left = $page + 1 - 5;
                                        $right = $page + 1 + 4;

                                        $over_left = min($left - 1, 0);
                                        $over_right = $pagecnt - max($right, $pagecnt);

                                        if ($over_left + $over_right != 0) {
                                            if ($over_left < 0)
                                                $right += abs($over_left);
                                            if ($over_right < 0)
                                                $left -= abs($over_right);
                                        }

                                        $left = max(1, $left);
                                        $right = min($pagecnt, $right);

                                        for ($i = $left; $i <= $right; $i++) {
                                            echo '<a href="teachers.php?page=' . $i . '">' . $i . '</a>';
                                        }
                                        //echo $left . "<br>";
                                        //echo $right;
                                        echo '<a href="teachers.php?page=' . min($page + 2, $pagecnt) . '" class="a1">下一页</a>';
                                    }
                                    ?>
                            </ul>
                        </div>
                        <!-- 全部师资 end -->
                        <!-- 师资［＋＋］ start-->
                        <?php

                        $res_group_pane = $pdo->query("select * from teacher_group order by group_orderno limit 0 , 5");
                        while ($arr_group_pane = $res_group_pane->fetch()) {
                            ?>
                            <div class="tab-pane fade" id="teacher-<?= $arr_group_pane["Id"] ?>">
                                <?php
                                $group_id = $arr_group_pane["Id"];
                                $res_teacher = $pdo->query(
                                    "select a.Id, a.teacher_name, c.filename, a.teacher_descript, a.show_in_intro, a.teacher_photo, a.order_num, a.create_date,
                                            a.group_id, a.visible, a.content, teacher_group.group_name from teachers a left join teacher_group on a.group_id = teacher_group.Id
                                            left join uploaded_res c on a.teacher_photo = c.Id where ifnull(a.visible, 1) = 1 and a.group_id = $group_id order by a.order_num");
                                while ($arr_teacher = $res_teacher->fetch()) {
                                    ?>

                                    <div class="col-sm-12 col-md-6 col-lg-4 teacher-single clearfix">
                                        <a href="./teacher.php?id=<?= $arr_teacher["Id"] ?>"
                                           class="thumbnail col-xs-5"> <img class='lazy'
                                                                            src="./statics/images/boya/t-face.jpg"
                                                                            data-original="./statics/images/upload/<?= $arr_teacher["filename"] ?>"
                                                                            width="115"
                                                                            height="165"
                                                                            style='height:164px;'></a>

                                        <div class="col-xs-7">
                                            <h3 class="h4"><a href="./teacher.php?id=<?= $arr_teacher["Id"] ?>"
                                                              class="blue"><?= $arr_teacher["teacher_name"] ?></a>
                                            </h3>

                                            <p class="text-muted"><?= $arr_teacher["teacher_descript"] ?></p>
                                        </div>
                                        <a href="./teacher.php?id=<?= $arr_teacher["Id"] ?>"
                                           class="btn btn-default btn-xs"> <span
                                                class="glyphicon glyphicon-user text-warning"></span> <span
                                                class="text-warning">个人主页</span></a>
                                    </div>
                                <?php
                                }

                                ?>
                            </div>
                        <?php

                        }
                        ?>
                        <!-- 师资［＋＋］ end-->
                    </div>
                </div>
                <!-- 新闻列表 end-->

            </div>
            <!-- 主体左边 end-->

        </div>
        <!-- row<tag>end --></div>
    <!-- container-child<tag>end --></div>
<!-- 主体部分 end-->


<?php
require_once("./footer.php");
?>
<!-- 页脚 　end-->
<!-- 在线申请 -->
<!-- Modal -->
<!--<div class="modal fade" id="application" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal">-->
<!--                    <span aria-hidden="true">&times;</span>-->
<!--                    <span class="sr-only">关闭</span>-->
<!--                </button>-->
<!--                <h4 class="modal-title" id="myModalLabel">申请</h4>-->
<!--            </div>-->
<!--            <!-- 在线申请 start -->-->
<!---->
<!--            <form action=""-->
<!--                  method="post" class="form-horizontal" role="form" name="myform" id="application-1">-->
<!---->
<!--                <div class="modal-body">-->
<!--                    <!-- 开始申请内容 start-->-->
<!--                    <div class="form-group">-->
<!--                        <label for="inputEmail3" class="col-sm-3 control-label">感兴趣的项目</label>-->
<!---->
<!--                        <div class="col-sm-7">-->
<!--                            <select class="form-control" name="column0">-->
<!--                                <option value="">选择 -项目</option>-->
<!--                                <option value="创业训练">博雅创业家训练营</option>-->
<!--                                <option value="实战PE">博雅实战PE与资本运营董事长精品班</option>-->
<!--                                <option value="经营方略">博雅经营方略（EMBA）总裁精品班</option>-->
<!--                                <option value="国学管理">博雅书院国学管理课堂</option>-->
<!--                                <option value="博雅国学智慧">博雅国学智慧总裁精修班</option>-->
<!--                                <option value="博雅女性学堂">博雅聚娴女性学堂</option>-->
<!--                                <option value="博雅私董会">博雅私人董事会</option>-->
<!--                                <option value="">博雅工商管理精品班</option>-->
<!--                                <option value="博雅投资家">博雅投资家高端项目</option>-->
<!--                                <option value="博雅高端项目">博雅后EMBA高端项目</option>-->
<!--                                <option value="新加坡课程">博雅海外CEO课程—新加坡南洋理工大学</option>-->
<!--                                <option value="财务总监">博雅财务总监高级研修班</option>-->
<!--                                <option value="营销总监">博雅营销总监高级研修班</option>-->
<!--                                <option value="">2015博雅青少年国学经典领袖营</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="inputName" class="col-sm-3 control-label">姓名</label>-->
<!---->
<!--                        <div class="col-sm-7">-->
<!--                            <input type="text" class="form-control" id="inputName" placeholder="Enter name" name="name">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="inputPhone" class="col-sm-3 control-label">电话</label>-->
<!---->
<!--                        <div class="col-sm-7">-->
<!--                            <input type="text" class="form-control" id="inputPhone" placeholder="Enter phone"-->
<!--                                   name="mobile"></div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="inputPassword3" class="col-sm-3 control-label">性别</label>-->
<!---->
<!--                        <div class="col-sm-7">-->
<!--                            <div class="radio-inline">-->
<!--                                <label class="text-muted">-->
<!--                                    <input type="radio" name="gender" id="optionsRadios1" value="1" checked="checked">男</label>-->
<!--                            </div>-->
<!--                            <div class="radio-inline">-->
<!--                                <label class="text-muted">-->
<!--                                    <input type="radio" name="gender" id="optionsRadios1" value="0">女</label>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="inputAge" class="col-sm-3 control-label">年龄</label>-->
<!---->
<!--                        <div class="col-sm-7">-->
<!--                            <input type="text" class="form-control" id="inputAge" placeholder="Enter age"-->
<!--                                   name="column1"></div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="inputCompany" class="col-sm-3 control-label">公司</label>-->
<!---->
<!--                        <div class="col-sm-7">-->
<!--                            <input type="text" class="form-control" id="inputCompany" placeholder="Enter company"-->
<!--                                   name="column2"></div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="inputDuty" class="col-sm-3 control-label">职务</label>-->
<!---->
<!--                        <div class="col-sm-7">-->
<!--                            <input type="text" class="form-control" id="inputDuty" placeholder="Enter duty"-->
<!--                                   name="column3"></div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="inputPc" class="col-sm-3 control-label">所在省市</label>-->
<!---->
<!--                        <div class="col-sm-7">-->
<!--                            <input type="text" class="form-control" id="inputPc" placeholder="Enter province and city"-->
<!--                                   name="column4"></div>-->
<!--                    </div>-->
<!--                    <!-- 开始申请内容 end -->-->
<!--                </div>-->
<!--                <div class="modal-footer">-->
<!--                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>-->
<!--                    <button type="submit" class="btn btn-primary" name="dosubmit">提交</button>-->
<!--                </div>-->
<!--            </form>-->
<!--            <script src="./statics/plugin/jquery.validate.min.js"></script>-->
<!--            <script type="text/javascript">-->
<!--                $("#application-1").validate({-->
<!--                    rules: {-->
<!--                        'name': {-->
<!--                            required: true-->
<!--                        },-->
<!--                        'mobile': {-->
<!--                            required: true,-->
<!--                            number: true,-->
<!--                            minlength: 11-->
<!--                        },-->
<!--                        'column0': {-->
<!--                            required: true,-->
<!--                        },-->
<!--                        'column2': {-->
<!--                            minlength: 4-->
<!--                        },-->
<!--                        'column3': {-->
<!--                            minlength: 2-->
<!--                        },-->
<!--                        'column4': {-->
<!--                            minlength: 2-->
<!--                        }-->
<!--                    }-->
<!--                });-->
<!--                $("#application-2").validate({-->
<!--                    rules: {-->
<!--                        'name': {-->
<!--                            required: true-->
<!--                        },-->
<!--                        'mobile': {-->
<!--                            required: true,-->
<!--                            number: true,-->
<!--                            minlength: 11-->
<!--                        },-->
<!--                        'column0': {-->
<!--                            required: true,-->
<!--                        },-->
<!--                        'column2': {-->
<!--                            minlength: 4-->
<!--                        },-->
<!--                        'column3': {-->
<!--                            minlength: 2-->
<!--                        },-->
<!--                        'column4': {-->
<!--                            minlength: 2-->
<!--                        }-->
<!--                    }-->
<!--                });-->
<!--            </script>-->
<!--            <!-- 在线申请 end -->-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- 返回顶部 -->

</body>
</html>