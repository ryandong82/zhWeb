<!DOCTYPE html>
<html>
<head>
    <title>中和商学院</title>
    <?php
    include("head.php");
    ?>
</head>
<body>
<?php
include("main_nav.php");
require_once("admin/pub_funcs.php");
?>
<!-- 导航 end-->
<base target="_blank"/>
<style>
    /*首页隐藏talk99*/
    #doyoo_panel, .dots, #doyoo_monitor {
        visibility: hidden !important;
    }

    #unslider .dots {
        visibility: visible !important;
    }
</style>
<!-- 轮播图 start-->
<div class="container" id="slider">
    <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" data-item=0>
                <a href="http://www.boyaceo.com/list-1-1.html"><img
                        data-original="./statics/images/boya/20141114011328270.jpg"
                        src="./statics/images/boya/loading.gif" class="img-responsive lazy center-block"></a>
            </div>
            <div class="item " data-item=1>
                <a href="http://www.boyaceo.com/courses-10-1.html"><img
                        data-original="./statics/images/boya/20141114011423875.jpg"
                        src="./statics/images/boya/loading.gif" class="img-responsive lazy center-block"></a>
            </div>
            <div class="item " data-item=2>
                <a href="http://www.boyaceo.com/teachers-15-1.html"><img
                        data-original="./statics/images/boya/20141114023548320.jpg"
                        src="./statics/images/boya/loading.gif" class="img-responsive lazy center-block"></a>
            </div>
            <div class="item " data-item=3>
                <a href="http://www.boyaceo.com?m=special&specialid=13"><img
                        data-original="./statics/images/boya/20150310103904336.jpg"
                        src="./statics/images/boya/loading.gif" class="img-responsive lazy center-block"></a>
            </div>
            <div class="item " data-item=4>
                <a href="http://www.boyaceo.com/show-31-127-1.html"><img
                        data-original="./statics/images/boya/20150310103905654.jpg"
                        src="./statics/images/boya/loading.gif" class="img-responsive lazy center-block"></a>
            </div>
        </div>
        <ol class="carousel-indicators hidden-xs">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<script type="text/javascript">
    // 监听动画，完成懒加载动作
    $('.carousel').on('slide.bs.carousel', function (e) {

        var selector = $('.carousel-inner .item');
        // 当前位置
        var old = $('.carousel-inner .item.active').data('item');
        // 滚动方向
        if (e.direction == 'left') {// 向右
            num = old == selector.length - 1 ? 0 : old + 1;
        } else if (e.direction == 'right') {// 向左
            num = old == 0 ? selector.length - 1 : old - 1;
        }
        img = selector.eq(num).find('img');
        img.attr('src', img.data('original'));// 替换
    })
    // 小圆点儿
    $('.carousel-indicators li').click(function () {
        var img = $('.carousel-inner .item').eq($(this).index()).find('img');
        img.attr('src', img.data('original'));
    })
</script>
<!-- 轮播图 end-->

<!-- 主体 start -->
<div class="container" id="index-main">

    <!-- 选项卡按钮 start-->
    <div class="clearfix tab-btn"><i class="bg-boya pull-left">热点</i>
        <ul class="nav nav-pills pull-left h5" role="tablist">
            <?php
            require_once("dbconn.php");
            $rs = $pdo->query("select Id, cate_name from article_category order by order_no");
            while ($arr = $rs->fetch()) {
                ?>
                <li role="presentation">
                    <a href="javascript:void(0);" target="_self"><?= $arr['cate_name'] ?></a>
                </li>
            <?php
            }
            ?>

        </ul>
    </div>
    <!-- 选项卡按钮 end-->

    <!-- 选项卡内容［热点］ start-->

    <div class="tab-list">
        <dl class="row">
            <?php
            $result = $pdo->query("select a.Id, a.title, a.content, a.create_time, b.cate_name, a.category from
                articles a join article_category b on a.category = b.Id where a.visible = 1 order by a.create_time");
            while ($arr_article = $result->fetch()) {
                ?>
                <dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
                    <div class='single-tab text-muted'>
                        <span class="caret"></span>
                        <h4>
                            <a href="article_categories.php?cate_id=<?= $arr_article['category'] ?>"
                               class="blue"><?= $arr_article['cate_name'] ?></a>
                        </h4>

                        <h3 class="h5 title">
                            <a href="show_article.php?article_id=<?= $arr_article['Id'] ?>"><?= $arr_article['title'] ?></a>
                        </h3>

                        <div class="text-center">
                            <a href="show_article.php?article_id=<?= $arr_article['Id'] ?>">
                                <img data-original="http://www.boyaceo.com/uploadfile/2015/0204/20150204032221168.jpg"
                                     class='lazy content-img'></a>
                        </div>
                        <p class='single-tab-content'>
                            <?php
                            echo get_ellipsed_content($arr_article["content"], 50);
                            ?>
                        </p>

                        <p class="single-tab-bottom">
                            <span class="glyphicon glyphicon-time"></span>
                            <?=$arr_article['create_time']?> </p>
                    </div>
                </dd>
            <?php
            }
            ?>

        </dl>
        <!-- 加载更多豆腐块 -->
        <button class='btn btn-block btn-default btn-sm single-tab-add' data-cid="998" data-page="8">
            <span class='text-primary'>更多</span>
        </button>
    </div>
    <!-- 选项卡内容［热点］ end-->
    <!-- 选项卡内容［＋＋］ start-->

    <?php
    $result_cate = $pdo->query("select Id, cate_name from article_category a order by order_no");
    while ($arr = $result_cate->fetch()) {
        $category_id = $arr["Id"];
        ?>
        <div class="tab-list hidden">
            <dl class="row">
                <?php
                $result = $pdo->query("select a.Id, a.title, a.content, a.create_time, b.cate_name, a.category from
                articles a join article_category b on a.category = b.Id where a.visible = 1 and a.category = '$category_id'
                order by a.create_time");
                while ($arr_article = $result->fetch()) {
                    ?>
                    <dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
                        <div class='single-tab text-muted'>
                            <span class="caret"></span>
                            <h4>
                                <a href="article_categories.php?cate_id=<?= $arr_article['category'] ?>"
                                   class="blue"><?= $arr_article['cate_name'] ?></a>
                            </h4>

                            <h3 class="h5 title">
                                <a href="show_article.php?article_id=<?= $arr_article['Id'] ?>"><?= $arr_article['title'] ?></a>
                            </h3>

                            <div class="text-center">
                                <a href="show_article.php?article_id=<?= $arr_article['Id'] ?>">
                                    <img
                                        data-original="http://www.boyaceo.com/uploadfile/2015/0204/20150204032221168.jpg"
                                        class='lazy content-img'></a>
                            </div>
                            <p class='single-tab-content'>
                                <?php
                                echo get_ellipsed_content($arr_article["content"], 50);
                                ?>
                            </p>

                            <p class="single-tab-bottom">
                                <span class="glyphicon glyphicon-time"></span>
                                <?=$arr_article['create_time']?> </p>
                        </div>
                    </dd>
                <?php
                }
                ?>

            </dl>
            <!-- 加载更多豆腐块 -->
            <button class='btn btn-block btn-default btn-sm single-tab-add' data-cid="998" data-page="8">
                <span class='text-primary'>更多</span>
            </button>
        </div>
        <!-- 选项卡内容［＋＋］ end-->
    <?php
    }
    ?>
    <script type="text/javascript">

        // 添加豆腐块的边框----start
        $(document).on("mousemove", ".single-tab", function () {
            $(this).addClass('border-boya');
        }).on('mouseout', '.single-tab', function () {
            $(this).removeClass('border-boya');
        })
        // 添加豆腐块的边框----end

        // 活动预告滚动----start
        // ２条信息以上才滚动
        if ($('#index-main .col-boya-2.other ul').first().find('li').length > 2) {
            // 为每一个添加滚动事件
            $('#index-main .col-boya-2.other .panel').each(function () {
                var p = $(this);
                var time = index_activity_slider(p);
                // 运动效果
                function index_activity_slider(selector) {
                    return setInterval(function () {
                        var obj = selector.find('li').first();
                        var clone = obj.clone();
                        obj.animate({'height': 0, 'opacity': 0.4, 'padding': 0}, 800, function () {
                            obj.parent().append(clone);
                            obj.remove();
                        })
                    }, 4000);
                }

                // hover暂停
                $('#index-main .col-boya-2.other .panel').hover(function () {
                    clearInterval(time);
                }, function () {
                    time = index_activity_slider(p);
                })

            })
        }
        // 活动预告滚动----end

        // 选项卡切换----start
        $('.tab-btn i').click(function () {// 点击热点
            $('.tab-btn ul li').removeClass('active');
            $('.tab-list').first().removeClass('hidden').siblings('.tab-list').addClass('hidden');
        })
        $('.tab-btn ul li').click(function () {// 其他栏目
            num = $(this).index() + 1;
            $(this).addClass('active').siblings('li').removeClass('active');
            $('.tab-list').eq(num).removeClass('hidden').siblings('.tab-list').addClass('hidden');
            // 懒加载
            $('.tab-list').eq(num).find('.content-img').each(function (e) {
                $(this).attr('src', $(this).attr('data-src'));
            })
        })
        // 自动切换
        function tab_auto() {
            var i = $('.tab-btn ul li.active').index() + 1;
            ;
            return setInterval(function () {
                num = $('.tab-btn ul li').length;
                i = i > num ? 0 : i;
                // 热点
                if (i == num) {
                    $('.tab-btn i').trigger('click');

                } else {
                    $('.tab-btn ul li').eq(i).trigger('click');
                }
                i++;
                // 初期为自动切换，现改为不自动切换。故数值巨大
            }, 999999999)
        }
        tab_run = tab_auto();
        // 如果页面滚动则清除定时器
        $(window).scroll(function () {
            clearInterval(tab_run);
            tab_run = tab_auto();
        })
        // 选项卡切换----end

        // 异步获取新豆腐块---start
        $('#index-main .tab-list').each(function (e) {
            // 父盒子
            var box = $(this).find('dl');
            $(this).find('.single-tab-add').click(function () {
                btn = $(this);
                cid = btn.attr('data-cid');// 类别
                page = btn.attr('data-page');// limit的起始数字
                // 无数据状态则不异步
                if (page == 'false') return false;

                $.get("index.php?m=boya&c=ajax&a=index", {cid: cid, page: page}, function (data) {
                    if (data.hasOwnProperty('stat') && data.stat == 1) {
                        res = data.res;

                        for (x in res) {
                            // 是否缩略图
                            hidden = res[x].thumb ? '' : ' hidden';
                            // 是否视频
                            content = res[x].flash.indexOf('http') != -1 ? '<div class="btn-tool" title=""  data-toggle="tooltip" data-placement="top" data-original-title="双击视频以全屏" ><embed width="100%" height="198" type="application/x-shockwave-flash" wmode="transparent"quality="high" allowfullscreen="true" allowscriptaccess="never" allownetworking="internal" src="' + res[x].flash + '"></div>' : '<div class="text-center"><a href="' + res[x].url + '"><img src="' + res[x].thumb + '" class="content-img' + hidden + '"></a></div><p class="single-tab-content">' + res[x].description + '</p>';
                            // 组合的html
                            html = '<dd class="col-boya-2 col-sm-4 col-md-3 col-xs-12"><div class="single-tab text-muted"><span class="caret"></span><h4><a href="' + res[x].caturl + '" class="blue">' + res[x].catname + '</a></h4><h3 class="h5 title"><a href="' + res[x].url + '">' + res[x].title + '</a></h3>' + content + '<p class="single-tab-bottom"><span class="glyphicon glyphicon-time"></span> ' + res[x].inputtime + '</p></div></dd>';
                            box.append(html);
                        }
                        btn.attr('data-page', parseInt(page) + 5);

                    } else {// 状态为无数据
                        btn.attr('data-page', 'false').find('span').html('<span class="glyphicon glyphicon-ban-circle"></span> 没有了．．');
                    }

                }, 'json')
            })
        })
        // 异步获取新豆腐块---end
    </script>
</div>
<!-- 主体 end -->

<!-- 底部导航 start -->
<nav>
    <div class='container' id="index_bottom">
        <div class="row">
            <div class="col-boya-8 col-md-10  col-xs-12">
                <div class="navbar navbar-inverse" role="navigation">
                    <div class='border'>
                        <div class="container-fluid">
                            <div class="navbar-header visible-lg visible-xs">
                                <a href="javascript:void(0);" onclick="boya_application()"
                                   class="navbar-brand text-center" target="_self">
                                    在线申请
                                    <br>Apply Online</a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target="#navbar-collapse-2" style="margin-top:20px;">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <ul class="nav navbar-nav   collapse navbar-collapse" id="navbar-collapse-2">
                                <li>
                                    <a href="http://boyaceo.com?m=special&specialid=13">创业训练</a>
                                </li>
                                <li>
                                    <a href="http://www.boyaceo.com/course-10-11-1.html">实战PE</a>
                                </li>
                                <li>
                                    <a href="http://www.boyaceo.com/course-10-10-1.html">经营方略</a>
                                </li>
                                <li>
                                    <a href="http://www.boyaceo.com/course-10-12-1.html">国学管理</a>
                                </li>
                                <li>
                                    <a href="http://www.boyaceo.com/course-10-2-1.html">博雅国学智慧</a>
                                </li>
                                <li>
                                    <a href="http://www.boyaceo.com/course-10-4-1.html">博雅女性学堂</a>
                                </li>
                                <li>
                                    <a href="http://www.boyaceo.com/courses-10-1.html">
                                        <span class="glyphicon glyphicon-bookmark"></span>
                                        点击进入
                                    </a>
                                </li>
                                <li class="visible-sm visible-xs visible-md">
                                    <a href="javascript:void(0);" onclick="boya_application()">
                                        <span class="glyphicon glyphicon-log-in"></span>
                                        在线申请
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                </div>
            </div>
            <div class="col-boya-2  col-md-2 visible-lg visible-md">
                <div class='bg-boya clearfix'>
                    <div class="pull-left">
                        <img data-original="./statics/images/boya/weixin_code.jpg" class="lazy"></div>
                    <div class="text-center" style="line-height:4em;">
                        <span class="visible-boya">博雅官方</span>
                        微信
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- 底部导航 end -->

<!-- 页脚 　start-->
<footer>
    <div class='container text-center text-muted'>
        <p><a href="http://www.boyaceo.com/about-1.html">关于我们</a>&nbsp;｜&nbsp;<a
                href="http://www.boyaceo.com/about-46.html">联系我们</a>&nbsp;｜&nbsp;<a
                href="http://www.boyaceo.com/list-32-1.html">友情链接</a>&nbsp;｜&nbsp;<a
                href="http://wpa.qq.com/msgrd?V=1&uin=2355899908">意见反馈</a>&nbsp;｜&nbsp;<a href="">网站地图</a></p>

        <p>联系电话：<span class="text-primary h4">400－876－1791</span></p>

        <p>Copyright@2009-2014 boyaceo.com All RightReserved [京ICP备10037530号－１]</p>
    </div>
</footer>
<!-- 页脚 　end-->
<!-- 在线申请 -->
<!-- Modal -->
<div class="modal fade" id="application" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">关闭</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">申请</h4>
            </div>
            <!-- 在线申请 start -->

            <form
                method="post" class="form-horizontal" role="form" name="myform" id="application-1">

                <div class="modal-body">
                    <!-- 开始申请内容 start-->
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">感兴趣的项目</label>

                        <div class="col-sm-7">
                            <select class="form-control" name="column0">
                                <option value="">选择 -项目</option>
                                <option value="创业训练">博雅创业家训练营</option>
                                <option value="实战PE">博雅实战PE与资本运营董事长精品班</option>
                                <option value="经营方略">博雅经营方略（EMBA）总裁精品班</option>
                                <option value="国学管理">博雅书院国学管理课堂</option>
                                <option value="博雅国学智慧">博雅国学智慧总裁精修班</option>
                                <option value="博雅女性学堂">博雅聚娴女性学堂</option>
                                <option value="博雅私董会">博雅私人董事会</option>
                                <option value="">博雅工商管理精品班</option>
                                <option value="博雅投资家">博雅投资家高端项目</option>
                                <option value="博雅高端项目">博雅后EMBA高端项目</option>
                                <option value="新加坡课程">博雅海外CEO课程—新加坡南洋理工大学</option>
                                <option value="财务总监">博雅财务总监高级研修班</option>
                                <option value="营销总监">博雅营销总监高级研修班</option>
                                <option value="">2015博雅青少年国学经典领袖营</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">姓名</label>

                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputName" placeholder="Enter name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">电话</label>

                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputPhone" placeholder="Enter phone"
                                   name="mobile"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">性别</label>

                        <div class="col-sm-7">
                            <div class="radio-inline">
                                <label class="text-muted">
                                    <input type="radio" name="gender" id="optionsRadios1" value="1" checked="checked">男</label>
                            </div>
                            <div class="radio-inline">
                                <label class="text-muted">
                                    <input type="radio" name="gender" id="optionsRadios1" value="0">女</label>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAge" class="col-sm-3 control-label">年龄</label>

                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputAge" placeholder="Enter age"
                                   name="column1"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputCompany" class="col-sm-3 control-label">公司</label>

                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputCompany" placeholder="Enter company"
                                   name="column2"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputDuty" class="col-sm-3 control-label">职务</label>

                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputDuty" placeholder="Enter duty"
                                   name="column3"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputPc" class="col-sm-3 control-label">所在省市</label>

                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputPc" placeholder="Enter province and city"
                                   name="column4"></div>
                    </div>
                    <!-- 开始申请内容 end -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="submit" class="btn btn-primary" name="dosubmit">提交</button>
                </div>
            </form>
            <script src="./statics/plugin/jquery.validate.min.js"></script>
            <script type="text/javascript">
                $("#application-1").validate({
                    rules: {
                        'name': {
                            required: true
                        },
                        'mobile': {
                            required: true,
                            number: true,
                            minlength: 11
                        },
                        'column0': {
                            required: true,
                        },
                        'column2': {
                            minlength: 4
                        },
                        'column3': {
                            minlength: 2
                        },
                        'column4': {
                            minlength: 2
                        }
                    }
                });
                $("#application-2").validate({
                    rules: {
                        'name': {
                            required: true
                        },
                        'mobile': {
                            required: true,
                            number: true,
                            minlength: 11
                        },
                        'column0': {
                            required: true,
                        },
                        'column2': {
                            minlength: 4
                        },
                        'column3': {
                            minlength: 2
                        },
                        'column4': {
                            minlength: 2
                        }
                    }
                });
            </script>
            <!-- 在线申请 end -->
        </div>
    </div>
</div>
<!-- 返回顶部 -->

<script type="text/javascript" src="./statics/plugin/Bootstrap/js/bootstrap.min.js?version=3.3.2"></script>
<script type="text/javascript" src="./statics/plugin/jquery.lazyload.min.js?version=1.9.1"></script>
<script type="text/javascript" src="./statics/js/boya/home.js"></script>
<!-- 百度统计 -->
<!--div style="visibility:hidden;"><script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb24ef883c2319a400b1e1326a3d33522' type='text/javascript'%3E%3C/script%3E"));
</script>
    <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F60957f7a7babf0747e33819add6c8cc6' type='text/javascript'%3E%3C/script%3E"));
    </script>

</div-->

</body>
</html>