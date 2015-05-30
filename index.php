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
?>
<!-- 导航 end--><base target="_blank" />
<style>
    /*首页隐藏talk99*/
    #doyoo_panel,.dots,#doyoo_monitor{visibility: hidden!important;}
    #unslider .dots{visibility: visible!important;}
</style>
<!-- 轮播图 start-->
<div class="container" id="slider">
    <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" data-item=0>
                <a href="http://www.boyaceo.com/list-1-1.html"><img data-original="./statics/images/boya/20141114011328270.jpg" src="./statics/images/boya/loading.gif" class="img-responsive lazy center-block"></a>
            </div>
            <div class="item " data-item=1>
                <a href="http://www.boyaceo.com/courses-10-1.html"><img data-original="./statics/images/boya/20141114011423875.jpg" src="./statics/images/boya/loading.gif" class="img-responsive lazy center-block"></a>
            </div>
            <div class="item " data-item=2>
                <a href="http://www.boyaceo.com/teachers-15-1.html"><img data-original="./statics/images/boya/20141114023548320.jpg" src="./statics/images/boya/loading.gif" class="img-responsive lazy center-block"></a>
            </div>
            <div class="item " data-item=3>
                <a href="http://www.boyaceo.com?m=special&specialid=13"><img data-original="./statics/images/boya/20150310103904336.jpg" src="./statics/images/boya/loading.gif" class="img-responsive lazy center-block"></a>
            </div>
            <div class="item " data-item=4>
                <a href="http://www.boyaceo.com/show-31-127-1.html"><img data-original="./statics/images/boya/20150310103905654.jpg" src="./statics/images/boya/loading.gif" class="img-responsive lazy center-block"></a>
            </div>
        </div>
        <ol class="carousel-indicators hidden-xs">
            <li data-target="#carousel-example-generic" data-slide-to="0"  class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
            <li data-target="#carousel-example-generic" data-slide-to="3" ></li>
            <li data-target="#carousel-example-generic" data-slide-to="4" ></li>
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
        var old        = $('.carousel-inner .item.active').data('item');
        // 滚动方向
        if(e.direction=='left'){// 向右
            num = old==selector.length-1 ? 0 : old+1;
        }else if(e.direction=='right'){// 向左
            num = old==0 ? selector.length-1 : old-1;
        }
        img = selector.eq(num).find('img');
        img.attr( 'src',img.data('original') );// 替换
    })
    // 小圆点儿
    $('.carousel-indicators li').click(function(){
        var img = $('.carousel-inner .item').eq( $(this).index() ).find('img');
        img.attr( 'src',img.data('original') );
    })
</script>
<!-- 轮播图 end-->

<!-- 主体 start -->
<div class="container" id="index-main">

<!-- 选项卡按钮 start-->
<div class="clearfix tab-btn"> <i class="bg-boya pull-left">热点</i>
    <ul class="nav nav-pills pull-left h5" role="tablist">
        <li role="presentation">
            <a href="javascript:void(0);" target="_self">课程</a>
        </li>
        <li role="presentation">
            <a href="javascript:void(0);" target="_self">活动</a>
        </li>
        <li role="presentation">
            <a href="javascript:void(0);" target="_self">博雅人</a>
        </li>
        <li role="presentation">
            <a href="javascript:void(0);" target="_self">悦读</a>
        </li>
        <li role="presentation">
            <a href="javascript:void(0);" target="_self">公益</a>
        </li>
        <li role="presentation">
            <a href="javascript:void(0);" target="_self">视线</a>
        </li>
        <li role="presentation">
            <a href="javascript:void(0);" target="_self">学员心声</a>
        </li>
        <li role="presentation">
            <a href="javascript:void(0);" target="_self">观点案例</a>
        </li>
    </ul>
</div>
<!-- 选项卡按钮 end-->

<!-- 选项卡内容［热点］ start-->

<div class="tab-list">
<dl class="row">
<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/courses-10-1.html" class='blue'>课程</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://boyaceo.com?m=special&specialid=13">博雅创业家训练营</a>
        </h3>
        <div class="text-center">
            <a href="http://boyaceo.com?m=special&specialid=13">
                <img data-original="http://www.boyaceo.com/uploadfile/2015/0204/20150204032221168.jpg"  class='lazy content-img'></a>
        </div>
        <p class='single-tab-content'>
            博雅创业家训练营（简称：创训营）由博雅总裁商学院组织...							</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-10							</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/courses-10-1.html" class='blue'>课程</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/course-10-11-1.html">博雅实战PE与资本运营董事长精品班</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/course-10-11-1.html">
                <img data-original="http://www.boyaceo.com/uploadfile/2014/1114/20141114094028842.jpg"  class='lazy content-img'></a>
        </div>
        <p class='single-tab-content'>
            博雅实战PE课堂是您把握机遇、掌握操作战略和技巧、寻找...							</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-17							</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-11-1.html" class='blue'>活动</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-11-167-1.html">品茶论智慧 读书历人生 ——国学精修班5月份课外活动</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-11-167-1.html">
                <img data-original="http://www.boyaceo.com/uploadfile/2015/0525/20150525031655995.jpg"  class='lazy content-img'></a>
        </div>
        <p class='single-tab-content'>
            致力于提供一个高品质的知识学习平台，打造一个具有良好...							</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-25							</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-11-1.html" class='blue'>活动</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-11-161-1.html">见证博雅私董硕果 拜会百亿商界领袖 &mdash;&mdash;第二期...</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-11-161-1.html">
                <img data-original="http://www.boyaceo.com/uploadfile/2015/0512/20150512030308230.jpg"  class='lazy content-img'></a>
        </div>
        <p class='single-tab-content'>
            应第二期博雅私人董事会成员王卫东先生的盛情邀请, 博雅...							</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-12							</p>
    </div>
</dd>
<!-- 在线咨询 【删除了】-->

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-11-1.html" class='blue'>活动</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-11-158-1.html">千古苍茫戈壁行——博雅队荣誉归来</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-11-158-1.html">
                <img data-original="http://www.boyaceo.com/uploadfile/2015/0508/20150508033143284.jpg"  class='lazy content-img'></a>
        </div>
        <p class='single-tab-content'>
            参加工商大道戈壁远征的英雄们以自己的实际行动践行了我...							</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-08							</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-24-1.html" class='blue'>博雅人</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-24-166-1.html">私人董事会首席专家教练刘秉君：五月的思考&mdash;&mdash;EMB...</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-24-166-1.html">
                <img data-original=""  class='lazy content-img					hidden
					'></a>
        </div>
        <p class='single-tab-content'>
            当前，中国民营企业家学习热情日益高涨，很多人走进高校，走进商学院学习深造，在经历了MBA、EMBA学习之后，企业家该进什么圈子，该如何继续提高呢？这确实是值得企业家深思的问题。							</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-13							</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-14-1.html" class='blue'>公益</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-14-122-1.html">博雅公益：感谢有你！</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-14-122-1.html">
                <img data-original="http://www.boyaceo.com/uploadfile/2015/0303/20150303120602203.jpg"  class='lazy content-img'></a>
        </div>
        <p class='single-tab-content'>
            在我们忙碌的工作和生活时，随着博雅总裁商学院越来越多...							</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-03-03							</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/videos-25-1.html" class='blue'>视线</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/video-25-36-1.html">2015博雅创业大赛——如何秀出你的“秀”</a>
        </h3>
        <!-- 视频 -->
        <div class="btn-tool" title=""  data-toggle="tooltip" data-placement="top" data-original-title="双击视频以全屏" >
            <embed width="100%" height="198"type="application/x-shockwave-flash" wmode="transparent"quality="high" allowfullscreen="true" allowscriptaccess="never" allownetworking="internal" src="http://player.youku.com/player.php/sid/XOTU4MzU0MjA0/v.swf"></div>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-19							</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-13-1.html" class='blue'>悦读</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-13-58-1.html">博雅名师楼宇烈教授推荐《论法的精神》</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-13-58-1.html">
                <img data-original="http://www.boyaceo.com/uploadfile/2014/1009/20141009092141491.jpg"  class='lazy content-img'></a>
        </div>
        <p class='single-tab-content'>
            论法的精神（套装上下册）》是法国著名启蒙思想家孟德斯...							</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-10-08							</p>
    </div>
</dd>

<!-- 活动预告 --><dd class="col-boya-2 other col-sm-4 col-md-3 col-xs-12">
    <div class='single-tab'>
        <div class="bg-boya">活动预告<span class="caret"></span><a href="http://www.boyaceo.com/list-31-1.html" class="more">More></a></div>
        <div class="panel">
            <ul class="list-unstyled panel-body" style="margin-bottom:0;">
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-124-1.html">首届华语商学院“工商大道”远征赛事召集令</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-04-28</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 戈壁远征  挑战赛  华语商学院  </h6>
                </li>
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-127-1.html">博雅创业大赛邀请函</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-06-01</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 创业大赛 博雅 梦想  </h6>
                </li>

            </ul>
        </div>
    </div>
</dd></dl>
<!-- 加载更多豆腐块 -->
<button class='btn btn-block btn-default btn-sm single-tab-add' data-cid="998" data-page="8">
    <span class='text-primary'>更多</span>
</button>
</div>
<!-- 选项卡内容［热点］ end-->
<!-- 选项卡内容［＋＋］ start-->
<div class="tab-list hidden">
<dl class="row">
<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/courses-10-1.html" class='blue'>课程</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://boyaceo.com?m=special&specialid=13">博雅创业家训练营</a>
        </h3>
        <div class="text-center">
            <a href="http://boyaceo.com?m=special&specialid=13">
                <img data-src="http://www.boyaceo.com/uploadfile/2015/0204/20150204032221168.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            博雅创业家训练营（简称：创训营）由博雅总裁商学院组织...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-10									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/courses-10-1.html" class='blue'>课程</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/course-10-11-1.html">博雅实战PE与资本运营董事长精品班</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/course-10-11-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2014/1114/20141114094028842.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            博雅实战PE课堂是您把握机遇、掌握操作战略和技巧、寻找...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-17									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/courses-10-1.html" class='blue'>课程</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/course-10-10-1.html">博雅经营方略（EMBA）总裁精品班</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/course-10-10-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2014/1114/20141114094104517.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            面对信息时代千变万化的经济形势，让我们从经营之道中寻...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-14									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/courses-10-1.html" class='blue'>课程</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/course-10-12-1.html">博雅书院国学管理课堂</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/course-10-12-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2014/1114/20141114093924467.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            博雅书院国学管理课堂以俯瞰东西方文化的全新视角，探讨...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-17									</p>
    </div>
</dd>
<!-- 在线咨询 【删除了】-->


<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/courses-10-1.html" class='blue'>课程</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/course-10-2-1.html">博雅国学智慧总裁精修班</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/course-10-2-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2014/1114/20141114094135644.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            致其修身而远志廉善，齐家弘业乃宽孝明清！国学智慧对于...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-14									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/courses-10-1.html" class='blue'>课程</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/course-10-4-1.html">博雅聚娴女性学堂</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/course-10-4-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2014/1117/20141117050308381.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            博雅聚娴女性学堂是面向全社会各行业女性精英、名媛佳丽...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-16									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/courses-10-1.html" class='blue'>课程</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/course-10-6-1.html">博雅私人董事会</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/course-10-6-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2014/1117/20141117050242134.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            为了更好地帮助中国企业家解决上述困惑和企业经营管理中...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-04-23									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/courses-10-1.html" class='blue'>课程</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/course-10-18-1.html">博雅工商管理精品班</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/course-10-18-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2015/0421/20150421114612454.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            我们始终认为，思想的高度和战略的视野，决定您所领导的...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-20									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/courses-10-1.html" class='blue'>课程</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/course-10-5-1.html">博雅投资家高端项目</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/course-10-5-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2014/1114/20141114094204496.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            博雅投资家高端项目，致力于打造中国最顶尖的资本运营实...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            0000-00-00									</p>
    </div>
</dd>

<!-- 活动预告 --><dd class="col-boya-2 other col-sm-4 col-md-3 col-xs-12">
    <div class='single-tab'>
        <div class="bg-boya">活动预告<span class="caret"></span><a href="http://www.boyaceo.com/list-31-1.html" class="more">More></a></div>
        <div class="panel">
            <ul class="list-unstyled panel-body" style="margin-bottom:0;">
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-124-1.html">首届华语商学院“工商大道”远征赛事召集令</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-04-28</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 戈壁远征  挑战赛  华语商学院  </h6>
                </li>
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-127-1.html">博雅创业大赛邀请函</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-06-01</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 创业大赛 博雅 梦想  </h6>
                </li>

            </ul>
        </div>
    </div>
</dd></dl>
<!-- 加载更多豆腐块 -->
<button class='btn btn-block btn-default btn-sm single-tab-add' data-cid="10" data-page="8">
    <span class='text-primary'>更多</span>
</button>
</div>
<div class="tab-list hidden">
<dl class="row">
<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-11-1.html" class='blue'>活动</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-11-167-1.html">品茶论智慧 读书历人生 ——国学精修班5月份课外活动</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-11-167-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2015/0525/20150525031655995.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            致力于提供一个高品质的知识学习平台，打造一个具有良好...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-25									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-11-1.html" class='blue'>活动</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-11-161-1.html">见证博雅私董硕果 拜会百亿商界领袖 &mdash;&mdash;第二期...</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-11-161-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2015/0512/20150512030308230.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            应第二期博雅私人董事会成员王卫东先生的盛情邀请, 博雅...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-12									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-11-1.html" class='blue'>活动</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-11-158-1.html">千古苍茫戈壁行——博雅队荣誉归来</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-11-158-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2015/0508/20150508033143284.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            参加工商大道戈壁远征的英雄们以自己的实际行动践行了我...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-08									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-11-1.html" class='blue'>活动</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-11-156-1.html">走工商大道 见证千古苍茫——博雅队进行时</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-11-156-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2015/0430/20150430021851161.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            &ldquo; 工商大道中国经营者戈壁远征&rdquo;博雅总裁商学院的...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-04-30									</p>
    </div>
</dd>
<!-- 在线咨询 【删除了】-->


<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-11-1.html" class='blue'>活动</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-11-155-1.html">工商大道英雄汇  金戈铁马博雅人——博雅队出征了</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-11-155-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2015/0428/20150428102144143.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            2015年4月24日，在春光明媚的校园内，工商大道博雅队的分...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-04-28									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-11-1.html" class='blue'>活动</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-11-154-1.html">四位教练同台献策 多名私董共谋创新 &mdash;&mdash;第二期...</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-11-154-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2015/0427/20150427101852379.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            4月17&mdash;19日，博雅私董会四人教练团和第二期博雅私董会成...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-04-27									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-11-1.html" class='blue'>活动</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-11-153-1.html">上苍山览独秀功高  下洱海叙同窗情深 &mdash;&mdash;国学...</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-11-153-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2015/0422/20150422111450631.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            国学精修班的许多同学都有着乐于为班级做奉献的无私精神...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-04-22									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-11-1.html" class='blue'>活动</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-11-152-1.html">创新思维开拓总裁视野 私董智慧助力企业转型 &mdash;...</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-11-152-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2015/0420/20150420104554135.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            4月11日，北京迎来了进入2015年的首场春雨，伴随这场春...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-04-20									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-11-1.html" class='blue'>活动</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-11-151-1.html">继往开来新三期 私董共话互联网+ &mdash;&mdash;第三期博雅...</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-11-151-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2015/0415/20150415102226647.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            在&ldquo;互联网+&rdquo;概念引起广泛关注的今天,传统行业的企业家...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-04-15									</p>
    </div>
</dd>

<!-- 活动预告 --><dd class="col-boya-2 other col-sm-4 col-md-3 col-xs-12">
    <div class='single-tab'>
        <div class="bg-boya">活动预告<span class="caret"></span><a href="http://www.boyaceo.com/list-31-1.html" class="more">More></a></div>
        <div class="panel">
            <ul class="list-unstyled panel-body" style="margin-bottom:0;">
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-124-1.html">首届华语商学院“工商大道”远征赛事召集令</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-04-28</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 戈壁远征  挑战赛  华语商学院  </h6>
                </li>
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-127-1.html">博雅创业大赛邀请函</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-06-01</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 创业大赛 博雅 梦想  </h6>
                </li>

            </ul>
        </div>
    </div>
</dd></dl>
<!-- 加载更多豆腐块 -->
<button class='btn btn-block btn-default btn-sm single-tab-add' data-cid="11" data-page="8">
    <span class='text-primary'>更多</span>
</button>
</div>
<div class="tab-list hidden">
    <dl class="row">
        <dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
            <div class='single-tab text-muted'>
                <span class="caret"></span>
                <h4>
                    <a href="http://www.boyaceo.com/news-24-1.html" class='blue'>博雅人</a>
                </h4>
                <h3 class="h5 title">
                    <a href="http://www.boyaceo.com/new-24-166-1.html">私人董事会首席专家教练刘秉君：五月的思考&mdash;&mdash;EMB...</a>
                </h3>
                <div class="text-center">
                    <a href="http://www.boyaceo.com/new-24-166-1.html">
                        <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
                </div>
                <p class='single-tab-content'>
                    当前，中国民营企业家学习热情日益高涨，很多人走进高校，走进商学院学习深造，在经历了MBA、EMBA学习之后，企业家该进什么圈子，该如何继续提高呢？这确实是值得企业家深思的问题。									</p>
                <p class="single-tab-bottom">
                    <span class="glyphicon glyphicon-time"></span>
                    2015-05-13									</p>
            </div>
        </dd>

        <dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
            <div class='single-tab text-muted'>
                <span class="caret"></span>
                <h4>
                    <a href="http://www.boyaceo.com/news-24-1.html" class='blue'>博雅人</a>
                </h4>
                <h3 class="h5 title">
                    <a href="http://www.boyaceo.com/new-24-34-1.html">副院长庞勃：股权众筹的春天来了</a>
                </h3>
                <div class="text-center">
                    <a href="http://www.boyaceo.com/new-24-34-1.html">
                        <img data-src="http://www.boyaceo.com/uploadfile/2015/0303/20150303102437426.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
                </div>
                <p class='single-tab-content'>
                    互联网金融如火如荼，股权众筹如黑马闯入。从2013 年起...									</p>
                <p class="single-tab-bottom">
                    <span class="glyphicon glyphicon-time"></span>
                    2015-03-03									</p>
            </div>
        </dd>

        <!-- 活动预告 --><dd class="col-boya-2 other col-sm-4 col-md-3 col-xs-12">
        <div class='single-tab'>
            <div class="bg-boya">活动预告<span class="caret"></span><a href="http://www.boyaceo.com/list-31-1.html" class="more">More></a></div>
            <div class="panel">
                <ul class="list-unstyled panel-body" style="margin-bottom:0;">
                    <li>
                        <h3 class="h5"><a href="http://www.boyaceo.com/show-31-124-1.html">首届华语商学院“工商大道”远征赛事召集令</a></h3>
                        <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-04-28</h6>
                        <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 戈壁远征  挑战赛  华语商学院  </h6>
                    </li>
                    <li>
                        <h3 class="h5"><a href="http://www.boyaceo.com/show-31-127-1.html">博雅创业大赛邀请函</a></h3>
                        <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-06-01</h6>
                        <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 创业大赛 博雅 梦想  </h6>
                    </li>

                </ul>
            </div>
        </div>
    </dd></dl>
    <!-- 加载更多豆腐块 -->
    <button class='btn btn-block btn-default btn-sm single-tab-add' data-cid="12" data-page="8">
        <span class='text-primary'>更多</span>
    </button>
</div>
<div class="tab-list hidden">
<dl class="row">
<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-13-1.html" class='blue'>悦读</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-13-58-1.html">博雅名师楼宇烈教授推荐《论法的精神》</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-13-58-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2014/1009/20141009092141491.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            论法的精神（套装上下册）》是法国著名启蒙思想家孟德斯...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-10-08									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-13-1.html" class='blue'>悦读</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-13-67-1.html">聚娴女性一班学员何东艳推荐《论中国》</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-13-67-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2014/1028/20141028100108796.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            《论中国》，作者是美国前国务卿基辛格，他将自己对中国...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-10-28									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-13-1.html" class='blue'>悦读</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-13-60-1.html">博雅名师黄菡教授推荐《幸福从心开始》</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-13-60-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2014/1009/20141009111811405.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            中国最出色的家庭治疗师，李子勋，全新视角幸福生活书，...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-10-09									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-13-1.html" class='blue'>悦读</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-13-59-1.html">聚娴女性一班学员何东艳、工商十四班学员敖兰其其...</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-13-59-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            政治家运用影响力来赢得选举，商人运用影响力来兜售商品，推销员运用影响力诱惑你乖乖地把金钱捧上。即使你的朋友和家人，不知不觉之间，也会把影响力用到你的身上。									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-10-08									</p>
    </div>
</dd>
<!-- 在线咨询 【删除了】-->


<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-13-1.html" class='blue'>悦读</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-13-57-1.html">商学院院长助理张老师推荐《平台战略》</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-13-57-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            平台是什么？平台如何打造？——说不清吗？
            尽管一些互联网大佬言必称平台，但平台到底是怎么生长起来的？如何才能打造一个富有生命力的平台？在《平台战略：正在席卷全球的商业									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-10-08									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-13-1.html" class='blue'>悦读</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-13-56-1.html">商学院方略/PE项目组班主任许老师推荐《向前一步》</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-13-56-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            作为全球最成功的女性之一，谢丽尔·桑德伯格在《向前一步》中深刻地剖析了男女不平等现象的根本原因，解开了女性成功的密码！									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-09-28									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-13-1.html" class='blue'>悦读</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-13-14-1.html">商学院运营总监曹老师推荐《壹玖壹壹：从鸦片战争...</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-13-14-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            就个人而言，很不愿意去翻看中国近代史相关的东西，因为每次看了之后总是感觉非常愤懑，好像有东西堵在心里。后来看到了一些以前的老照片，这些没有文字的历史影像吸引了我。看着照片									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-08-26									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-13-1.html" class='blue'>悦读</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-13-35-1.html">商学院方略二十六班 李天云同学推荐《孙毓堂诗集》</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-13-35-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            在诗集中，不论是清新隽永的短篇，还是气势恢宏的长幅巨制，每一首诗，每一个字，都是从心中留出，既有新诗语言的明净，又融化了古典诗词语言的精粹，美不胜收。同时，也有深刻的现实									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-08-26									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-13-1.html" class='blue'>悦读</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-13-22-1.html">活法</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-13-22-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            人生就是一幕戏，每个人都是主角。然而，我们不只是在演出，更是这幕戏的创作者。因为一般戏剧总有个既定的结局，人生则不同，结果往往掌控在我们自己手中。
            　　有些人相信，命运									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-08-22									</p>
    </div>
</dd>

<!-- 活动预告 --><dd class="col-boya-2 other col-sm-4 col-md-3 col-xs-12">
    <div class='single-tab'>
        <div class="bg-boya">活动预告<span class="caret"></span><a href="http://www.boyaceo.com/list-31-1.html" class="more">More></a></div>
        <div class="panel">
            <ul class="list-unstyled panel-body" style="margin-bottom:0;">
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-124-1.html">首届华语商学院“工商大道”远征赛事召集令</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-04-28</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 戈壁远征  挑战赛  华语商学院  </h6>
                </li>
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-127-1.html">博雅创业大赛邀请函</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-06-01</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 创业大赛 博雅 梦想  </h6>
                </li>

            </ul>
        </div>
    </div>
</dd></dl>
<!-- 加载更多豆腐块 -->
<button class='btn btn-block btn-default btn-sm single-tab-add' data-cid="13" data-page="8">
    <span class='text-primary'>更多</span>
</button>
</div>
<div class="tab-list hidden">
<dl class="row">
<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-14-1.html" class='blue'>公益</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-14-122-1.html">博雅公益：感谢有你！</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-14-122-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2015/0303/20150303120602203.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            在我们忙碌的工作和生活时，随着博雅总裁商学院越来越多...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-03-03									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-14-1.html" class='blue'>公益</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-14-115-1.html">博雅公益万里行 捐资助学暖人心</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-14-115-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2014/1222/20141222023814922.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            2014年7月中旬，在博雅总裁商学院房地产十班班委倡导下...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-12-22									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-14-1.html" class='blue'>公益</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-14-47-1.html">2014年度博雅公益奖评选活动通知</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-14-47-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2014/1020/20141020052553213.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            在这一年里，学院的公益事业发展受到各班学员的高度关注...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-10-20									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-14-1.html" class='blue'>公益</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-14-55-1.html">爱洒人间——博雅总裁商学院师生探访受救助患者</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-14-55-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2014/0922/20140922035213662.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            8月22日，艺术品班班主任高婧一婷、博雅公益项目主管沃添...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-09-22									</p>
    </div>
</dd>
<!-- 在线咨询 【删除了】-->


<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-14-1.html" class='blue'>公益</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-14-31-1.html">赈灾倡议书</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-14-31-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            灾害无情，人间有爱；一方有难，八方支援。让无数的情，拯救正在苦难中的同胞，让无数的爱，点燃这个国家继续前行的希望。									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-08-22									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-14-1.html" class='blue'>公益</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-14-30-1.html">​博雅爱心系云南——有你救有力量</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-14-30-1.html">
                <img data-src="http://www.boyaceo.com/uploadfile/2014/0901/20140901114619231.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
        </div>
        <p class='single-tab-content'>
            2014年8月6日（昨日），也就是云南鲁甸地震发生3...									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-08-22									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-14-1.html" class='blue'>公益</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-14-28-1.html">中国首支女子地震救援队：因为要专业 所以忍住眼泪</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-14-28-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            8月9日，震中龙头山镇中心小学，十四集团军工兵团地质灾害女子救援队准备出发执行搜救任务。									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-08-22									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-14-1.html" class='blue'>公益</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-14-27-1.html">​杨欣：守护长江源头30年</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-14-27-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            一头花白长发一脸络腮胡子，民间环保组织、四川省绿色江河环境保护促进会（以下简称“绿色江河”）									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-08-22									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/news-14-1.html" class='blue'>公益</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/new-14-26-1.html">王克勤与“大爱清尘”</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/new-14-26-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            在北京各胡同小巷，如果你见到一个50岁背着双肩包的行者，骑着一辆叫做“跑狼”的旧自行车，坐下来第二句话就是尘肺病，不用说，他是王克勤。									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2014-08-22									</p>
    </div>
</dd>

<!-- 活动预告 --><dd class="col-boya-2 other col-sm-4 col-md-3 col-xs-12">
    <div class='single-tab'>
        <div class="bg-boya">活动预告<span class="caret"></span><a href="http://www.boyaceo.com/list-31-1.html" class="more">More></a></div>
        <div class="panel">
            <ul class="list-unstyled panel-body" style="margin-bottom:0;">
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-124-1.html">首届华语商学院“工商大道”远征赛事召集令</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-04-28</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 戈壁远征  挑战赛  华语商学院  </h6>
                </li>
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-127-1.html">博雅创业大赛邀请函</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-06-01</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 创业大赛 博雅 梦想  </h6>
                </li>

            </ul>
        </div>
    </div>
</dd></dl>
<!-- 加载更多豆腐块 -->
<button class='btn btn-block btn-default btn-sm single-tab-add' data-cid="14" data-page="8">
    <span class='text-primary'>更多</span>
</button>
</div>
<div class="tab-list hidden">
<dl class="row">
<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/videos-25-1.html" class='blue'>视线</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/video-25-36-1.html">2015博雅创业大赛——如何秀出你的“秀”</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/video-25-36-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
        </p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-05-19									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/videos-25-1.html" class='blue'>视线</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/video-25-35-1.html">提到国学，你会想到什么？</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/video-25-35-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
        </p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-04-14									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/videos-25-1.html" class='blue'>视线</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/video-25-34-1.html">博雅创业家训练营</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/video-25-34-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
        </p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-04-01									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/videos-25-1.html" class='blue'>视线</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/video-25-33-1.html">2015博雅总裁论坛年会</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/video-25-33-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
        </p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-03-20									</p>
    </div>
</dd>
<!-- 在线咨询 【删除了】-->


<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/videos-25-1.html" class='blue'>视线</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/video-25-32-1.html">北京大学经营方略二十七班情系贵州——普定行</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/video-25-32-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
        </p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-03-19									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/videos-25-1.html" class='blue'>视线</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/video-25-31-1.html">博雅私人董事会</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/video-25-31-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
        </p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-03-02									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/videos-25-1.html" class='blue'>视线</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/video-25-30-1.html">博雅书院国学管理课堂</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/video-25-30-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
        </p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-01-19									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/videos-25-1.html" class='blue'>视线</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/video-25-29-1.html">博雅后EMBA项目</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/video-25-29-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
        </p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-01-19									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/videos-25-1.html" class='blue'>视线</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/video-25-28-1.html">2015博雅总裁论坛年会【必须参加！！】</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/video-25-28-1.html">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
        </p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-01-19									</p>
    </div>
</dd>

<!-- 活动预告 --><dd class="col-boya-2 other col-sm-4 col-md-3 col-xs-12">
    <div class='single-tab'>
        <div class="bg-boya">活动预告<span class="caret"></span><a href="http://www.boyaceo.com/list-31-1.html" class="more">More></a></div>
        <div class="panel">
            <ul class="list-unstyled panel-body" style="margin-bottom:0;">
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-124-1.html">首届华语商学院“工商大道”远征赛事召集令</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-04-28</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 戈壁远征  挑战赛  华语商学院  </h6>
                </li>
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-127-1.html">博雅创业大赛邀请函</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-06-01</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 创业大赛 博雅 梦想  </h6>
                </li>

            </ul>
        </div>
    </div>
</dd></dl>
<!-- 加载更多豆腐块 -->
<button class='btn btn-block btn-default btn-sm single-tab-add' data-cid="25" data-page="8">
    <span class='text-primary'>更多</span>
</button>
</div>
<div class="tab-list hidden">
<dl class="row">
    <dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
        <div class='single-tab text-muted'>
            <span class="caret"></span>
            <h4>
                <a href="http://www.boyaceo.com/list-40-1.html" class='blue'>学员心声</a>
            </h4>
            <h3 class="h5 title">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=148">收获知识 感悟幸福——方略27班学员段协权</a>
            </h3>
            <div class="text-center">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=148">
                    <img data-src="file:///C:/Users/lee/AppData/Local/Temp/msohtmlclip1/01/clip_image001.gif"  src="./statics/images/boya/loading.gif" class='content-img'></a>
            </div>
            <p class='single-tab-content'>
                三十八年前，我在睡梦；二十八前，在老师的指引...									</p>
            <p class="single-tab-bottom">
                <span class="glyphicon glyphicon-time"></span>
                2015-03-19									</p>
        </div>
    </dd>

    <dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
        <div class='single-tab text-muted'>
            <span class="caret"></span>
            <h4>
                <a href="http://www.boyaceo.com/list-40-1.html" class='blue'>学员心声</a>
            </h4>
            <h3 class="h5 title">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=145">北大二七，学情第一——学员代表曹洪江学习心得</a>
            </h3>
            <div class="text-center">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=145">
                    <img data-src="http://www.boyaceo.com/uploadfile/2015/0318/20150318113455955.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
            </div>
            <p class='single-tab-content'>
                学友亲情&mdash;&mdash;融入二七    工作的繁忙、时间...									</p>
            <p class="single-tab-bottom">
                <span class="glyphicon glyphicon-time"></span>
                2015-03-18									</p>
        </div>
    </dd>

    <dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
        <div class='single-tab text-muted'>
            <span class="caret"></span>
            <h4>
                <a href="http://www.boyaceo.com/list-40-1.html" class='blue'>学员心声</a>
            </h4>
            <h3 class="h5 title">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=134">我为何要加入博雅私人董事会&mdash;&mdash;北京大学经营方略1...</a>
            </h3>
            <div class="text-center">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=134">
                    <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
            </div>
            <p class='single-tab-content'>
                编者按：我为何要加入博雅私人董事会？这是很多企业家也在问自己的问题。来自江苏明德广济电气有限公司的刘辉董事长（北京大学经营方略18班									</p>
            <p class="single-tab-bottom">
                <span class="glyphicon glyphicon-time"></span>
                2015-03-13									</p>
        </div>
    </dd>

    <dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
        <div class='single-tab text-muted'>
            <span class="caret"></span>
            <h4>
                <a href="http://www.boyaceo.com/list-40-1.html" class='blue'>学员心声</a>
            </h4>
            <h3 class="h5 title">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=133">授之以渔论共性，筑建平台谋未来&mdash;&mdash;博雅私人董事...</a>
            </h3>
            <div class="text-center">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=133">
                    <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
            </div>
            <p class='single-tab-content'>
                编者按：博雅私人董事会究竟能为学员带来什么，这是许多关注博雅私人董事会项目学员们感兴趣的话题，带着这个问题，我们博雅人记者采访了博									</p>
            <p class="single-tab-bottom">
                <span class="glyphicon glyphicon-time"></span>
                2015-03-13									</p>
        </div>
    </dd>
    <!-- 在线咨询 【删除了】-->


    <dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
        <div class='single-tab text-muted'>
            <span class="caret"></span>
            <h4>
                <a href="http://www.boyaceo.com/list-40-1.html" class='blue'>学员心声</a>
            </h4>
            <h3 class="h5 title">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=132">加入博雅私董会后，同学们说我有了惊人的变化&mdash;&mdash;...</a>
            </h3>
            <div class="text-center">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=132">
                    <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
            </div>
            <p class='single-tab-content'>
                我是来自河南洛阳招凯集团的博雅私人董事会学员刘丙利，来到博雅私人董事会以后，同学们说我有了惊人的变化，而我认为这些变化来源									</p>
            <p class="single-tab-bottom">
                <span class="glyphicon glyphicon-time"></span>
                2015-03-13									</p>
        </div>
    </dd>

    <dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
        <div class='single-tab text-muted'>
            <span class="caret"></span>
            <h4>
                <a href="http://www.boyaceo.com/list-40-1.html" class='blue'>学员心声</a>
            </h4>
            <h3 class="h5 title">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=131">国际投资大师认可了我的投资方向&mdash;&mdash;博雅私董刘丙...</a>
            </h3>
            <div class="text-center">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=131">
                    <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
            </div>
            <p class='single-tab-content'>
                编者按：6月27日，博雅私人董事会有幸与国际投资大师罗杰斯先生进行高端对话，28日参加聆听罗杰斯先生的对投资和互联网金融的独特观点。来									</p>
            <p class="single-tab-bottom">
                <span class="glyphicon glyphicon-time"></span>
                2015-03-13									</p>
        </div>
    </dd>

    <dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
        <div class='single-tab text-muted'>
            <span class="caret"></span>
            <h4>
                <a href="http://www.boyaceo.com/list-40-1.html" class='blue'>学员心声</a>
            </h4>
            <h3 class="h5 title">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=130">博雅私人董事会，我人生的盛会&mdash;&mdash;第一期博雅私人...</a>
            </h3>
            <div class="text-center">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=130">
                    <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
            </div>
            <p class='single-tab-content'>
                2013年12月21日，第一期博雅私人董事会首次会议在北京大学举行了。　　我有幸成为了第一期博雅私人董事会中的一员，内心感到无比的									</p>
            <p class="single-tab-bottom">
                <span class="glyphicon glyphicon-time"></span>
                2015-03-13									</p>
        </div>
    </dd>

    <dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
        <div class='single-tab text-muted'>
            <span class="caret"></span>
            <h4>
                <a href="http://www.boyaceo.com/list-40-1.html" class='blue'>学员心声</a>
            </h4>
            <h3 class="h5 title">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=128">真正的财富——女性四班班长田桂芬</a>
            </h3>
            <div class="text-center">
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=40&id=128">
                    <img data-src="http://www.boyaceo.com/uploadfile/2015/0313/20150313105207789.jpg"  src="./statics/images/boya/loading.gif" class='content-img'></a>
            </div>
            <p class='single-tab-content'>
                人过半百，应该有许多感慨，许多感悟，许多感想，...									</p>
            <p class="single-tab-bottom">
                <span class="glyphicon glyphicon-time"></span>
                2015-03-13									</p>
        </div>
    </dd>

    <!-- 活动预告 --><dd class="col-boya-2 other col-sm-4 col-md-3 col-xs-12">
    <div class='single-tab'>
        <div class="bg-boya">活动预告<span class="caret"></span><a href="http://www.boyaceo.com/list-31-1.html" class="more">More></a></div>
        <div class="panel">
            <ul class="list-unstyled panel-body" style="margin-bottom:0;">
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-124-1.html">首届华语商学院“工商大道”远征赛事召集令</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-04-28</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 戈壁远征  挑战赛  华语商学院  </h6>
                </li>
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-127-1.html">博雅创业大赛邀请函</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-06-01</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 创业大赛 博雅 梦想  </h6>
                </li>

            </ul>
        </div>
    </div>
</dd></dl>
<!-- 加载更多豆腐块 -->
<button class='btn btn-block btn-default btn-sm single-tab-add' data-cid="40" data-page="8">
    <span class='text-primary'>更多</span>
</button>
</div>
<div class="tab-list hidden">
<dl class="row">
<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/list-41-1.html" class='blue'>观点案例</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=144">世界进入移动互联时代，你准备好了吗？</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=144">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            博雅总裁商学院专家委员会副主任博雅私人董事会教练  刘秉君　　2014年1月30日，是马年的除夕之夜，当千家万户还沉浸在包饺子、看春晚传									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-03-16									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/list-41-1.html" class='blue'>观点案例</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=143">让博雅私人董事会成为民营企业家的精神家园</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=143">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            （编者的话：2月22日，博雅私人董事会走进蒙牛专场将要举办，为此我们特发表北京大学信息学院高层培训中心专家委员会副主任、博雅私人董事									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-03-16									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/list-41-1.html" class='blue'>观点案例</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=142">《量化管理法》</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=142">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            量化管理法是指在对下属布置工作时，将工作以量化的形式提出要求，并使之涵盖工作全过程的一种管理方法。   量化主要包括三个方面									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-03-16									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/list-41-1.html" class='blue'>观点案例</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=141">传播思维力量的耕耘者</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=141">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            问：刘教授，您的著作《思维的力量》从去年开始在《博雅人》杂志连载以来，受到读者的欢迎。最近听说您所著的《思维的力量》将要由									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-03-16									</p>
    </div>
</dd>
<!-- 在线咨询 【删除了】-->


<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/list-41-1.html" class='blue'>观点案例</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=140">私人董事会与圈子时代</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=140">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            2014年，中国进入智慧经济时代，企业进入商业模式调整和企业转型时期，没有大系统思维孤独行走的企业家将被淘汰。    趋势所致									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-03-16									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/list-41-1.html" class='blue'>观点案例</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=139">博雅私人董事会：照亮企业家的孤独内心</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=139">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            所谓高处不胜寒，正是对成功企业家内心的真实写照。当一个人身在高位，往往会感到孤独和无助，尤其对于企业领导者来说，在这个飞速									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-03-16									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/list-41-1.html" class='blue'>观点案例</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=138">美国管理大师说：你需要一个私人董事会，越早越好！</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=138">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            【博雅导读】作者简介：吉姆柯林斯，著名管理大师，曾执教于斯坦佛大学商学院，著有《基业长青》、《从优秀到卓越》和再造卓越。    你									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-03-16									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/list-41-1.html" class='blue'>观点案例</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=137">EMBA之后，企业家在混什么圈子？</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=137">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            博雅导读：从2013年中期开始，私人董事会突然走红起来，一些培训机构开始推出私人董事会的项目，呈现出渐热的局面，特别是专为具有									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-03-16									</p>
    </div>
</dd>

<dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
    <div class='single-tab text-muted'>
        <span class="caret"></span>
        <h4>
            <a href="http://www.boyaceo.com/list-41-1.html" class='blue'>观点案例</a>
        </h4>
        <h3 class="h5 title">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=136">“博雅私人董事会”十问十答</a>
        </h3>
        <div class="text-center">
            <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=show&catid=41&id=136">
                <img data-src=""  src="./statics/images/boya/loading.gif" class='content-img						hidden
						'></a>
        </div>
        <p class='single-tab-content'>
            博雅私人董事会项目发布后，很多学员对于加入博雅私人董事会抱有极大的热情，但也有些学员提出了一些问题，为此，我们《博雅人》杂									</p>
        <p class="single-tab-bottom">
            <span class="glyphicon glyphicon-time"></span>
            2015-03-16									</p>
    </div>
</dd>

<!-- 活动预告 --><dd class="col-boya-2 other col-sm-4 col-md-3 col-xs-12">
    <div class='single-tab'>
        <div class="bg-boya">活动预告<span class="caret"></span><a href="http://www.boyaceo.com/list-31-1.html" class="more">More></a></div>
        <div class="panel">
            <ul class="list-unstyled panel-body" style="margin-bottom:0;">
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-124-1.html">首届华语商学院“工商大道”远征赛事召集令</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-04-28</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 戈壁远征  挑战赛  华语商学院  </h6>
                </li>
                <li>
                    <h3 class="h5"><a href="http://www.boyaceo.com/show-31-127-1.html">博雅创业大赛邀请函</a></h3>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-time text-muted"></small> 2015-06-01</h6>
                    <h6 class="text-muted"><small class="glyphicon glyphicon-map-marker"></small> 创业大赛 博雅 梦想  </h6>
                </li>

            </ul>
        </div>
    </div>
</dd></dl>
<!-- 加载更多豆腐块 -->
<button class='btn btn-block btn-default btn-sm single-tab-add' data-cid="41" data-page="8">
    <span class='text-primary'>更多</span>
</button>
</div>
<!-- 选项卡内容［＋＋］ end-->

<script type="text/javascript">

    // 添加豆腐块的边框----start
    $(document).on("mousemove",".single-tab",function(){
        $(this).addClass('border-boya');
    }).on('mouseout','.single-tab',function(){
        $(this).removeClass('border-boya');
    })
    // 添加豆腐块的边框----end

    // 活动预告滚动----start
    // ２条信息以上才滚动
    if($('#index-main .col-boya-2.other ul').first().find('li').length>2){
        // 为每一个添加滚动事件
        $('#index-main .col-boya-2.other .panel').each(function(){
            var p = $(this);
            var time=index_activity_slider(p);
            // 运动效果
            function index_activity_slider(selector){
                return setInterval(function(){
                    var obj =selector.find('li').first();
                    var clone= obj.clone();
                    obj.animate({'height':0,'opacity':0.4,'padding':0},800,function(){
                        obj.parent().append(clone);
                        obj.remove();
                    })
                },4000);
            }

            // hover暂停
            $('#index-main .col-boya-2.other .panel').hover(function(){
                clearInterval(time);
            },function(){
                time=index_activity_slider(p);
            })

        })
    }
    // 活动预告滚动----end

    // 选项卡切换----start
    $('.tab-btn i').click(function(){// 点击热点
        $('.tab-btn ul li').removeClass('active');
        $('.tab-list').first().removeClass('hidden').siblings('.tab-list').addClass('hidden');
    })
    $('.tab-btn ul li').click(function(){// 其他栏目
        num = $(this).index()+1;
        $(this).addClass('active').siblings('li').removeClass('active');
        $('.tab-list').eq(num).removeClass('hidden').siblings('.tab-list').addClass('hidden');
        // 懒加载
        $('.tab-list').eq(num).find('.content-img').each(function(e){
            $(this).attr('src',$(this).attr('data-src'));
        })
    })
    // 自动切换
    function tab_auto(){
        var i = $('.tab-btn ul li.active').index()+1;;
        return setInterval(function(){
            num =$('.tab-btn ul li').length;
            i = i>num ? 0 : i;
            // 热点
            if(i==num){
                $('.tab-btn i').trigger('click');

            }else{
                $('.tab-btn ul li').eq(i).trigger('click');
            }
            i++;
            // 初期为自动切换，现改为不自动切换。故数值巨大
        },999999999)
    }
    tab_run = tab_auto();
    // 如果页面滚动则清除定时器
    $(window).scroll(function(){
        clearInterval(tab_run);
        tab_run = tab_auto();
    })
    // 选项卡切换----end

    // 异步获取新豆腐块---start
    $('#index-main .tab-list').each(function(e){
        // 父盒子
        var box = $(this).find('dl');
        $(this).find('.single-tab-add').click(function(){
            btn=$(this);
            cid= btn.attr('data-cid');// 类别
            page=btn.attr('data-page');// limit的起始数字
            // 无数据状态则不异步
            if(page=='false') return false;

            $.get("index.php?m=boya&c=ajax&a=index",{cid:cid,page:page},function(data){
                if(data.hasOwnProperty('stat')&&data.stat==1){
                    res = data.res;

                    for (x in res) {
                        // 是否缩略图
                        hidden = res[x].thumb?'':' hidden';
                        // 是否视频
                        content =res[x].flash.indexOf('http')!=-1 ? '<div class="btn-tool" title=""  data-toggle="tooltip" data-placement="top" data-original-title="双击视频以全屏" ><embed width="100%" height="198" type="application/x-shockwave-flash" wmode="transparent"quality="high" allowfullscreen="true" allowscriptaccess="never" allownetworking="internal" src="'+res[x].flash+'"></div>' : '<div class="text-center"><a href="'+res[x].url+'"><img src="'+res[x].thumb+'" class="content-img'+hidden+'"></a></div><p class="single-tab-content">'+res[x].description+'</p>';
                        // 组合的html
                        html = '<dd class="col-boya-2 col-sm-4 col-md-3 col-xs-12"><div class="single-tab text-muted"><span class="caret"></span><h4><a href="'+res[x].caturl+'" class="blue">'+res[x].catname+'</a></h4><h3 class="h5 title"><a href="'+res[x].url+'">'+res[x].title+'</a></h3>'+content+'<p class="single-tab-bottom"><span class="glyphicon glyphicon-time"></span> '+res[x].inputtime+'</p></div></dd>';
                        box.append(html);
                    }
                    btn.attr('data-page',parseInt(page)+5);

                }else{// 状态为无数据
                    btn.attr('data-page','false').find('span').html('<span class="glyphicon glyphicon-ban-circle"></span> 没有了．．');
                }

            },'json')
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
                                <a href="javascript:void(0);" onclick="boya_application()" class="navbar-brand text-center" target="_self">
                                    在线申请
                                    <br>Apply Online</a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2" style="margin-top:20px;">
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
        <p><a href="http://www.boyaceo.com/about-1.html">关于我们</a>&nbsp;｜&nbsp;<a href="http://www.boyaceo.com/about-46.html">联系我们</a>&nbsp;｜&nbsp;<a href="http://www.boyaceo.com/list-32-1.html">友情链接</a>&nbsp;｜&nbsp;<a href="http://wpa.qq.com/msgrd?V=1&uin=2355899908">意见反馈</a>&nbsp;｜&nbsp;<a href="">网站地图</a></p>
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

            <form action="http://chat118b.talk99.cn/chat/form?c=10034884&conf=4045&cmd=save"
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
                            <input type="text" class="form-control" id="inputName" placeholder="Enter name" name="name"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">电话</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputPhone" placeholder="Enter phone" name="mobile"></div>
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
                            <input type="text" class="form-control" id="inputAge" placeholder="Enter age" name="column1"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputCompany" class="col-sm-3 control-label">公司</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputCompany" placeholder="Enter company" name="column2"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputDuty" class="col-sm-3 control-label">职务</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputDuty" placeholder="Enter duty" name="column3"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputPc" class="col-sm-3 control-label">所在省市</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputPc" placeholder="Enter province and city" name="column4"></div>
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
                            required:true,
                            number:true ,
                            minlength: 11
                        },
                        'column0': {
                            required: true,
                        },
                        'column2':{
                            minlength: 4
                        },
                        'column3':{
                            minlength: 2
                        },
                        'column4':{
                            minlength:2
                        }
                    }
                });
                $("#application-2").validate({
                    rules: {
                        'name': {
                            required: true
                        },
                        'mobile': {
                            required:true,
                            number:true ,
                            minlength: 11
                        },
                        'column0': {
                            required: true,
                        },
                        'column2':{
                            minlength: 4
                        },
                        'column3':{
                            minlength: 2
                        },
                        'column4':{
                            minlength:2
                        }
                    }
                });
            </script>
            <!-- 在线申请 end -->
        </div>
    </div>
</div>	<!-- 返回顶部 -->

<script type="text/javascript" src="./statics/plugin/Bootstrap/js/bootstrap.min.js?version=3.3.2"></script>
<script type="text/javascript" src="./statics/plugin/jquery.lazyload.min.js?version=1.9.1"></script>
<script type="text/javascript" src="./statics/js/boya/home.js"></script>
<script type="text/javascript" charset="utf-8" src="http://lead.soperson.com/10034884/10043074.js"></script>
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