// tooltip hover
$(document).on("mousemove",".single-tab",function(){
    $('.btn-tool').tooltip()
});

// 在线报名遮罩
function boya_application(){
    $('#application,.app_modal').modal('show');
}

// 返回顶部
$('body').append('<button id="ScrollToTop" class="btnimg Button2 WhiteButton Offscreen" type="button">返回<br />顶部</button>');
var ScrollToTop=ScrollToTop||{
    setup:function(){

        var a=$(window).height()/2;

        $(window).scroll(function(){
            (window.innerWidth?window.pageYOffset:document.documentElement.scrollTop)>=a?$("#ScrollToTop").removeClass("Offscreen"):$("#ScrollToTop").addClass("Offscreen")
        });
        $("#ScrollToTop").click(function(){
            $("html, body").animate({scrollTop:"0px"},400);
            return false
        })
    }
};
ScrollToTop.setup();

// 懒加载
$("img.lazy").lazyload({threshold: 50});

// 技术支持
console.log('If you have any questions, please do not hesitate to contact me.');
console.log('%cleeka515@gmail.com',"color:red;text-shadow:0 0 2px #666;font-size:13px;");
