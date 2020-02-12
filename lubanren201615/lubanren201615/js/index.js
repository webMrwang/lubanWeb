$(function () {
    //顶部下拉菜单
    $('.tn-title').mouseenter(function (e) {
        var _this = $(this);
        var list = _this.find('.tn-topmenulist');
        if (list.length != 0) {
            _this.addClass('tn-onmouse');
            list.css('display', 'block');
        }
    }).mouseleave(function (e) {
        var _this = $(this);
        if (_this.hasClass('tn-onmouse')) {
            _this.removeClass('tn-onmouse');
            _this.find('.tn-topmenulist').css('display', 'none');
        }
    });

    //顶部搜索
    $('.sim-select h3').click(function (e) {
        var el = $(this).next().next();
        if (el.css('display') == 'none') {
            el.css('display', 'block');
        } else {
            el.css('display', 'none');
        }
        e.stopPropagation();
        $(document).one('click', function () {
            el.css('display', 'none');
        });
    });


    //tab标签
    $('.order-menu span').mouseenter(function () {
        var _this = $(this);
        if (!_this.hasClass('selected')) {
            var spanList = _this.parent().find('span');
            var i = spanList.index(this);
            var list = _this.parent().parent().parent().find('div[tab-type="tab-cont"]');
            list.css('display', 'none');
            list.eq(i).css('display', 'block');

            spanList.removeClass('selected');
            _this.addClass('selected');
        } else {

        }
    });

    //教育标签
    $('.tit03 span').mouseenter(function () {
        var _this = $(this);
        if (!_this.hasClass('selected')) {
            var spanList = _this.parent().find('span');
            var i = spanList.index(this);
            var list = _this.parent().parent().find('ul[tab-type="tab-cont"]');
            list.css('display', 'none');
            list.eq(i).css('display', 'block');

            spanList.removeClass('selected');
            _this.addClass('selected');
        }
    });

    //推荐阅读
    $(".txtScroll-left").slide({ titCell: ".hd ul", mainCell: ".bd .picList", autoPage: true, effect: "left" });
});