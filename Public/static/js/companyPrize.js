$(function() {

    var galleryThumbs = new Swiper('#gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        direction: 'vertical',
    });
    var galleryTop = new Swiper('#gallery-top', {
        spaceBetween: 10,
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },
        thumbs: {
            swiper: galleryThumbs
        }
    });

    //设置时间轴
    setDateAxis();
});


// 公司概况的  设置点击 放大事件
function changeB(dom) {
    alert(dom);
}


// 设置 新闻列表的点击事件
function openNews(dom) {
    // alert(dom);
    $("#newsSwiper").hide();
    $(".newsDetail").show();
}


//设置时间轴
function setDateAxis() {

    var moveH; //移动距离
    var isbackTop = false; // 是否返回顶部

    $(".item").hover(function() {
        $(".contentItem").hover(function() {
            moveH = $(this).position().top;
            $(this).find(".contentTitle").addClass("contentTitleActive");
            $(this).parent(".item").find(".time").animate({
                top: moveH
            }, 0)
        }, function() {
            $(this).find(".contentTitle").removeClass("contentTitleActive");
        });
    }, function() {
        moveH = 0;
        $(this).find(".time").animate({
            top: moveH
        }, 0)

    });



}

//设置新闻列表  各个的间距   ( 一页显示 3行 )
function setNewListInterNal() {
    const containerH = $("#newsSwiper").height();
    const itemH = $("#newsSwiper .item").height();

}