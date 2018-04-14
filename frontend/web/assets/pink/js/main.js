(function ($) {
    $(function () {
        'use strict';
        $('html').removeClass('no-js');
        console.log('APP START');

        $('#showForm').on('click',function () {
            $('#block_id').show();
            $('#block_idd').hide();
            return false;
        });

        $('#add-file').on('click',function () {
            var input = $('#designer-file').parent().clone();

            $('#file-duplicate').append(input);

            console.log('file');
            return false;
        })

        var Base64 = {
            _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
            encode: function (input) {
                var output = "";
                var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
                var i = 0;

                input = Base64._utf8_encode(input);

                while (i < input.length) {

                    chr1 = input.charCodeAt(i++);
                    chr2 = input.charCodeAt(i++);
                    chr3 = input.charCodeAt(i++);

                    enc1 = chr1 >> 2;
                    enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
                    enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
                    enc4 = chr3 & 63;

                    if (isNaN(chr2)) {
                        enc3 = enc4 = 64;
                    } else if (isNaN(chr3)) {
                        enc4 = 64;
                    }

                    output = output + this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) + this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);

                }

                return output;
            },
            decode: function (input) {
                var output = "";
                var chr1, chr2, chr3;
                var enc1, enc2, enc3, enc4;
                var i = 0;

                input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

                while (i < input.length) {
                    enc1 = this._keyStr.indexOf(input.charAt(i++));
                    enc2 = this._keyStr.indexOf(input.charAt(i++));
                    enc3 = this._keyStr.indexOf(input.charAt(i++));
                    enc4 = this._keyStr.indexOf(input.charAt(i++));

                    chr1 = (enc1 << 2) | (enc2 >> 4);
                    chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
                    chr3 = ((enc3 & 3) << 6) | enc4;

                    output = output + String.fromCharCode(chr1);

                    if (enc3 != 64) {
                        output = output + String.fromCharCode(chr2);
                    }
                    if (enc4 != 64) {
                        output = output + String.fromCharCode(chr3);
                    }
                }
                output = Base64._utf8_decode(output);
                return output;
            },
            _utf8_encode: function (string) {
                string = string.replace(/\r\n/g, "\n");
                var utftext = "";

                for (var n = 0; n < string.length; n++) {
                    var c = string.charCodeAt(n);

                    if (c < 128) {
                        utftext += String.fromCharCode(c);
                    }
                    else if ((c > 127) && (c < 2048)) {
                        utftext += String.fromCharCode((c >> 6) | 192);
                        utftext += String.fromCharCode((c & 63) | 128);
                    }
                    else {
                        utftext += String.fromCharCode((c >> 12) | 224);
                        utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                        utftext += String.fromCharCode((c & 63) | 128);
                    }
                }
                return utftext;
            },
            _utf8_decode: function (utftext) {
                var string = "";
                var i = 0;
                var c = 0;
                var c1 = 0;
                var c2 = 0;
                var c3 = 0;

                while (i < utftext.length) {

                    c = utftext.charCodeAt(i);

                    if (c < 128) {
                        string += String.fromCharCode(c);
                        i++;
                    }
                    else if ((c > 191) && (c < 224)) {
                        c2 = utftext.charCodeAt(i + 1);
                        string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                        i += 2;
                    }
                    else {
                        c2 = utftext.charCodeAt(i + 1);
                        c3 = utftext.charCodeAt(i + 2);
                        string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                        i += 3;
                    }

                }
                return string;
            }
        }

        $('.base64').each(function (key, val) {
            var el = $(val);
            var url = el.attr('href');
            el.attr('href', Base64.decode(url)+'#tovar');
        });

        function number_format( number, decimals, dec_point, thousands_sep ) {

            var i, j, kw, kd, km;

            // input sanitation & defaults
            if( isNaN(decimals = Math.abs(decimals)) ){
                decimals = 2;
            }
            if( dec_point == undefined ){
                dec_point = ",";
            }
            if( thousands_sep == undefined ){
                thousands_sep = ".";
            }

            i = parseInt(number = (+number || 0).toFixed(decimals)) + "";

            if( (j = i.length) > 3 ){
                j = j % 3;
            } else{
                j = 0;
            }

            km = (j ? i.substr(0, j) + thousands_sep : "");
            kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
            //kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).slice(2) : "");
            kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");


            return km + kw + kd;
        }


        function addToCart(product_id, product_price, product_name, product_category) {

            product_category = typeof product_category !== 'undefined' ? product_category : '';

            window.criteo_q = window.criteo_q || [];
            window.criteo_q.push(
                {event: "setAccount", account: 27568},
                {event: "setSiteType", type: "d"},
                {
                    event: "viewBasket", item: [
                    {id: product_id, price: product_price, quantity: 1},
                ]
                });

            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                "ecommerce": {
                    "add": {
                        "products": [
                            {
                                "id": product_id,
                                "name": product_name,
                                "price": parseInt(product_price.replace(' ', '')),
                                "category": product_category,
                                "quantity": 1
                            }
                        ]
                    }
                }
            });

            ga('set', 'dimension2','cart');

        }

        function removeFromCart(product_id, product_name, product_category) {
            product_category = typeof product_category !== 'undefined' ? product_category : '';
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                "ecommerce": {
                    "remove": {
                        "products": [
                            {
                                "id": product_id,
                                "name": product_name,
                                "category": product_category
                            }
                        ]
                    }
                }
            });

        }

        var phoneError2 = $("form#order_form .field-order-client_tel .help-block-error");
        phoneError2.css({
            'line-height':'32px',
            'outline':'1px solid red',
            'outline-offset':'-1px',
            'padding-left':'5px',
            'margin-bottom':'-32px',
            'display':'none',
            'background':'white'
        });
        phoneError2.hover(function(){
            $(this).text('');
            $(this).css('display','none');
            $(this).prev().prev().focus();
        });
        $('#order_form').on('submit', function(){
            setTimeout(function(){
                if(phoneError2.text().length>0){
                    phoneError2.css({'margin-bottom':'-32px','display':'block'});
                }
            }, 300);
        });

        var phoneError3 = $("form#callback_form .field-call-client_tel .help-block-error");
        phoneError3.css({
            'line-height':'32px',
            'outline':'1px solid red',
            'outline-offset':'-1px',
            'padding-left':'5px',
            'margin-bottom':'-32px',
            'display':'none',
            'background':'white'
        });
        phoneError3.hover(function(){
            $(this).text('');
            $(this).css('display','none');
            $(this).prev().prev().focus();
        });
        $('#callback_form').on('submit', function(){
            setTimeout(function(){
                if(phoneError3.text().length>0){
                    phoneError3.css({'margin-bottom':'-32px','display':'block'});
                }
            }, 300);
        });

        $('#resend').on('click', function () {
            $(this).hide();
            $('#resend-form').show();
        });

        $('.audio-review-widget audio').mediaelementplayer({
            audioWidth: 240
        });

        $('#tab-audio audio').mediaelementplayer({
            audioWidth: 240
        });

        $(document).on('pjax:complete', function (event, xhr, textStatus, options) {
            $('#tab-audio audio').mediaelementplayer({
                audioWidth: 240
            });
        });

        if (!Date.now) {
            Date.now = function () {
                return new Date().getTime();
            }
        }

        $('#showdopcat').on('click', function () {
            $('.dopcat').show();
            $(this).hide();
            return false;
        });

        $('#tabs a').on('click', function () {

            var $el = $($(this).attr('href'));

            $('.tabs_x').hide();
            $('#tabs a').removeClass('selected');
            $(this).addClass('selected');
            $el.show();
            return false;
        });

        $('a[href^="#content"]').on('click', function () {
            var el = $(this).attr('href');
            $('body').animate({scrollTop: $(el).offset().top}, 500);
            return false;
        });

        $(".order-change input[name=sort]").on("change", function () {
            var url = document.URL;
            if(url.indexOf("?sort=") !== -1){
                url = url.replace("?sort=price", '');
                url = url.replace("?sort=order", '');
            }
            var str = url.split("#");
            url = str[0];
            window.location.href = url + "?sort=" + $(this).val() + "#tovar";
        });

        var top_show = 500;
        var delay = 1000;

        $(window).scroll(function () {
            if ($(this).scrollTop() > top_show) $('#top').fadeIn();
            else $('#top').fadeOut();
        });
        $('#top').click(function () {
            $('body, html').animate({
                scrollTop: 0
            }, delay);
        });

        $('#timer1').countdown('2020/10/10', function (event) {
            $(this).html(event.strftime('<span class="countdown-section">' +
                                                '<span class="countdown-amount">%H</span>' +
                                                '<span class="countdown-period"> Часов </span>' +
                                            '</span> ' +
                                            '<span class="countdown-section">' +
                                                '<span class="countdown-amount">%M</span>' +
                                                '<span class="countdown-period"> Минут </span>' +
                                            '</span> ' +
                                            '<span class="countdown-section">' +
                                                '<span class="countdown-amount">%S</span>' +
                                                '<span class="countdown-period"> Секунд </span>' +
                                            '</span> ' +
                                        '</span>'));

        });

        $('.fancybox, .fancybox-menu a').fancybox();

        var $cat = $('.minicat');
        var $cat_text = $('.minicat .minicat-text');
        var $cat_lap = $('.minicat .cat-lap');
        $('.fancybox-order').fancybox({
            wrapCSS: 'order-wrapper',
            padding: 0,
            beforeLoad: function () {
                $cat.css('z-index', '-1');
                $cat_text.css({'display':'none', 'width':'190px', 'left':'-85px'}).html('ВВЕДИТЕ ВАШЕ ИМЯ');
                $cat_lap.css({'left':'70px'});

                $('.order-form form').trigger('reset');

                $('.order-form .size').removeClass('active');
                $('.order-form .size:first').addClass('active');

                var $content = $(this.content);
                var $image = $content.find('.order-img');
                var $title = $content.find('.title');
                var $price = $content.find('.price-count');
                var $pricet = $content.find('.price-t-count');

                var $size_s = $content.find('#size-s');
                var $size_m = $content.find('#size-m');
                var $size_l = $content.find('#size-l');
                var $size_xl = $content.find('#size-xl');

                var $size_price_s = $content.find('#size-price-s');
                var $size_price_m = $content.find('#size-price-m');
                var $size_price_l = $content.find('#size-price-l');
                var $size_price_xl = $content.find('#size-price-xl');

                $('#order-product_id').val($(this.element).data('product'));
                $('#order-client_time').val(Math.floor(Date.now() / 1000));

                $image.html($("<img/>", {
                    'src': $(this.element).data('image'),
                    'alt': $(this.element).data('title')
                }));
                $title.html($(this.element).data('title'));
                $price.html($(this.element).data('price') + ' <span>руб.</span>');
                $pricet.html($(this.element).data('price-old') + ' <span>руб.</span>');

                var price_int = parseInt($(this.element).data('size-price-s'));


                if ($(this.element).data('size-s')===undefined){
                    $content.find('#s').hide();
                }else{
                    $size_s.html($(this.element).data('size-s'));
                    $('#s').attr('data-price',$(this.element).data('size-price-s'));
                    $('#s').attr('data-price-old',$(this.element).data('size-price-old-s'));
                    $content.find('#s').show();
                }

                if ($(this.element).data('size-m')===undefined){
                    $content.find('#m').hide();
                }else{
                    $size_m.html($(this.element).data('size-m'));

                    $('#m').attr('data-price',$(this.element).data('size-price-m'));
                    $('#m').attr('data-price-old',$(this.element).data('size-price-old-m'));

                    var price_m = parseInt($(this.element).data('size-price-m'))-price_int;
                    $size_price_m.html('+'+price_m+' руб.');
                    $content.find('#m').show();
                }

                if ($(this.element).data('size-l')===undefined){
                    $content.find('#l').hide();
                }else{
                    $size_l.html($(this.element).data('size-l'));

                    $('#l').attr('data-price',$(this.element).data('size-price-l'));
                    $('#l').attr('data-price-old',$(this.element).data('size-price-old-l'));

                    var price_l = parseInt($(this.element).data('size-price-l'))-price_int;
                    $size_price_l.html('+'+price_l+' руб.');
                    $content.find('#l').show();
                }

                if ($(this.element).data('size-xl')===undefined){
                    $content.find('#xl').hide();
                }else{
                    $size_xl.html($(this.element).data('size-xl'));

                    $('#xl').attr('data-price',$(this.element).data('size-price-xl'));
                    $('#xl').attr('data-price-old',$(this.element).data('size-price-old-xl'));

                    var price_xl = parseInt($(this.element).data('size-price-xl'))-price_int;

                    $size_price_xl.html('+'+price_xl+' руб.');
                    $content.find('#xl').show();
                }


                addToCart($(this.element).data('product'), $(this.element).data('price'), $(this.element).data('title'));

                $content.find('#order-client_name').on('change', function () {
                    $cat_text.hide().html('ВВЕДИТЕ ВАШ ТЕЛЕФОН');
                    $cat.css({'z-index':'-1', 'top':'233px', 'left':'0'})
                        .stop()
                        .animate({left:'-116px'},1300,function () {
                            $cat.css('z-index', '1');
                            $cat_text.fadeIn();
                        });

                    $content.find('#order-client_tel').on('change', function () {
                        $cat_text.hide().html('НАЖМИТЕ ЗАКАЗАТЬ!');
                        $cat.css({'z-index':'-1', 'top':'406px', 'left':'0'})
                            .stop()
                            .animate({'left':'-116px'},1300,function () {
                                $cat.css('z-index', '1');
                                $cat_text.fadeIn();
                            });
                    });
                });
            },
            afterClose: function () {
                removeFromCart($(this.element).data('product'), $(this.element).data('title'));
            },
            afterShow: function () {
                fbq('track', 'AddToCart');

                $cat.css({'z-index':'-1', 'top':'140px', 'left':'0'})
                    .stop()
                    .animate({left:'-116px'},1300,function () {
                        $cat.css('z-index', '1');
                        $cat_text.fadeIn();
                    });
            }
        });


        var $cat2 = $('.minicat2');
        var $cat_text2 = $('.minicat2 .minicat-text');
        var $cat_lap2 = $('.minicat2 .cat-lap');
        $('.fancybox-callback').fancybox({
            wrapCSS: 'order-wrapper',
            padding: 0,
            beforeLoad: function () {
                var $content = $(this.content);

                $('.order-form form').trigger('reset');

                $cat2.css({'z-index':'-1', 'left':'0'});
                $cat_text2.css({'display':'none', 'width':'190px', 'left':'-85px'}).html('ВВЕДИТЕ ВАШЕ ИМЯ');
                $cat_lap2.css({'left':'70px'});

                $('#order-client_time').val(Math.floor(Date.now() / 1000));

                $content.find('#call-client_name').on('change', function () {
                    $cat_text2.hide().html('ВВЕДИТЕ ВАШ ТЕЛЕФОН');
                    $cat2.css({'z-index': '-1', 'top': '16px', 'left': '0'})
                        .stop()
                        .animate({left: '-116px'}, 1300, function () {
                            $cat2.css('z-index', '1');
                            $cat_text2.fadeIn();
                        });

                    $content.find('#call-client_tel').on('change', function () {
                        $cat_text2.hide().html('НАЖМИТЕ ПОЗВОНИТЕ МНЕ!');
                        $cat2.css({'z-index': '-1', 'top': '98px', 'left': '0'})
                            .stop()
                            .animate({'left': '-116px'}, 1300, function () {
                                $cat2.css('z-index', '1');
                                $cat_text2.fadeIn();
                            });
                    });
                });

            },
            afterShow: function () {
                $cat2.stop()
                    .animate({left:'-116px'},1300,function () {
                        $cat2.css('z-index', '1');
                        $cat_text2.fadeIn();
                    });
            }
        });


        $('.knopkadesign1').fancybox({
            wrapCSS: 'order-wrapper',
            padding: 0,
            beforeLoad: function () {
                $('.minicat3').css('z-index', '-1');
                var $content = $(this.content);
                $('.minicat3 .cat-lap').css('left', '70px');
            },
            afterClose: function () {
                $('.order-form form').trigger('reset');

                $('.minicat3').css('z-index', '-1').css('top', '-19px').hide();
                $('.minicat3 .minicat-text').hide().html('ВВЕДИТЕ ВАШЕ ИМЯ');

                var $cat = $(this.content,'.minicat3');
                $cat.hide();
                var $catClone = $cat.clone(true);
                //$catClone.css('z-index', '-1').css('top', '-19px');
                $cat.before($catClone);
                $cat.remove();
                $('.minicat3 .minicat-text').hide().css('width', '190px').css('left', '-85px').html('ВВЕДИТЕ ВАШЕ ИМЯ');

            },
            afterShow: function () {
                $('.minicat3').css('z-index', '-1');
                $('.minicat3').show();

                setTimeout(function () {
                    $('.minicat3').css('z-index', '1');
                    $('.minicat3 .minicat-text').fadeIn();
                }, 1300);
            }
        });

        $('#designer-name').on('change', function () {

            var $cat = $('.minicat3');
            $cat.hide();
            var $catClone = $cat.clone(true);
            $catClone.css('z-index', '-1').css('top', '120px');
            $cat.before($catClone);
            $cat.remove();
            $('.minicat3 .minicat-text').hide().css('z-index', '-1').css('width', '190px').css('left', '-85px').html('ВВЕДИТЕ ВАШ ТЕЛЕФОН');
            $('.minicat3').show();

            setTimeout(function () {
                $('.minicat3').css('z-index', '1');
                $('.minicat3 .minicat-text').fadeIn();
            }, 1300);


            $('#designer-phone').on('change', function () {

                var $cat = $('.minicat3');
                $cat.hide();
                var $catClone = $cat.clone(true);
                $catClone.css('z-index', '-1').css('top', '190px');
                $cat.before($catClone);
                $cat.remove();
                $('.minicat3 .minicat-text').hide().css('z-index', '-1').css('width', '190px').css('left', '-85px').html('ВВЕДИТЕ ВАШ АДРЕС');
                $('.minicat3').show();

                setTimeout(function () {
                    $('.minicat3').css('z-index', '1');
                    $('.minicat3 .minicat-text').fadeIn();
                }, 1300);

            });


        });

        $('.b-video a, .fancyvideo, .fancybox-video').fancybox({
            openEffect: 'none',
            closeEffect: 'none',
            helpers: {
                media: {}
            }
        });

        $('.fancybox-pager').fancybox({
            beforeLoad: function () {
                this.href = $(this.element).data("href");
            }
        });

        $('#show-more-cats').on('click', function () {
            $('.b-front-categories__e-item.hidden').removeClass('hidden');
            return false;
        });

        $('.bxslider1').bxSlider({
            pagerCustom: '#bx-pager16',
            nextText: '<i class="icon"></i>',
            prevText: '<i class="icon"></i>'
        });

        $('.bxslider').bxSlider({
            pagerCustom: '#bx-pager',
            nextText: '<i class="icon"></i>',
            prevText: '<i class="icon"></i>'
        });

        $('.wow-slider').bxSlider({
            pager: false,
            mode: 'fade',
            nextText: '<i class="icon"></i>',
            prevText: '<i class="icon"></i>'
        });

        var slide = $('.imgslider').waterwheelCarousel({
            speed: 300,
            flankingItems: 1
        });

        $('.imgsl1 .prev').on('click', function () {
            slide.prev();
        });

        $('.imgsl1 .next').on('click', function () {
            slide.next();
        });

        var sliderSets = $('.slider_boxes');

        function initSliders(targetSlider, targetPager) {
            $(targetSlider).bxSlider({
                pagerCustom: targetPager,
                nextText: '<i class="icon"></i>',
                prevText: '<i class="icon"></i>'
            });
        }

        $(sliderSets).each(function () {
            var targetSlider = "#" + $(this).children('.bx-slider').attr('id');
            var targetPager = "#" + $(this).children('.bxslider-pager').attr('id');

            initSliders(targetSlider, targetPager);
        });

        $('.bxslider-pager').bxSlider({
            minSlides: 4,
            maxSlides: 4,
            slideWidth: 150,
            slideMargin: 32,
            pager: false,
            nextText: '<i class="icon"></i>',
            prevText: '<i class="icon"></i>'
        });

        $('.about-slider').bxSlider({
            //minSlides: 3,
            //maxSlides: 3,
            //slideWidth: 275,
            //slideMargin: 32,
            //moveSlides: 1,
            auto: true,
            pager: false,
            nextText: '<i class="icon"></i>',
            prevText: '<i class="icon"></i>'
        });

        //Клик на кнопке заказать
        $('.fancybox-order').on('click', function () {
            console.log('ORDER START');
            yaCounter25515350.reachGoal('click_order');
            ga('send', 'event', 'button', 'click_order');
            console.log('ORDER END');
        });

        $('.menu-button').on('click', function (e) {

            $('#r-menu-title, #r-menu').toggle();

        });

        /*$('.product-gallery').bxSlider({
            minSlides: 2,
            maxSlides: 5,
            slideWidth: 176,
            slideMargin: 7,
            pager: false
        });

        $('.product-gallery').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000
        });

         */

        $('.sub-menu a').on('click',function(){

            $(this).next().slideToggle();

        });

        $('.responsive-menu-button .btn').on('click',function(){

            $('.responsive-menu-2').stop().slideToggle();
            return false;

        });

        $.ajax({
            type: 'POST',
            url: '/review/sidebar/',
            dataType: 'html',
            success: function (data) {
                $('#ajax-reviews').html(data);
            }
        });

        var discount = $('#discount-products');

        if(discount.length){
            $.ajax({
                type: 'POST',
                url: '/product/discount/'+discount.data('category')+'/'+discount.data('product')+'/',
                dataType: 'html',
                success: function (data) {
                    discount.html(data);
                }
            });
        }



        var ctimer = parseInt($.cookie('utimer'));

        var inter;
        function interval() {
            inter = setInterval(function () {
                ctimer = ctimer-1000;
                $.cookie('utimer',ctimer);
                console.log(ctimer);
            },1000);
        }

        var names3 = ['Александр','Александра','Алексей','Алёна','Алина','Алихан','Алла','Анастасия','Анатолий','Андрей','Анна','Антон','Арсен','Артём','Артур','Вадим','Валентин','Валерий','Валерия','Василий','Вероника','Виктор','Виктория','Виталий','Владимир','Вячеслав','Георгий','Глеб','Гульназ','Гульнара','Давид','Дамир','Даниил','Дарья','Денис','Диана','Динара','Дмитрий','Евгений','Евгения','Егор','Екатерина','Елена','Иван','Игорь','Илья','Индира','Инна','Ирина','Кирилл','Константин','Кристина','Ксения','Лариса','Людмила','Максим','Маргарита','Марина','Мария','Михаил','Наталья','Николай','Оксана','Олег','Ольга','Павел','Полина','Роман','Руслан','Светлана','Сергей','Станислав','Татьяна','Ульяна','Юлия','Юрий','Яна'];
        var city = ['Москвы','Казани','Сочи','Нижний','Ярославля','Калининграда','Екатеринбурга','Анапы','Владимира','Геленджика','Суздаля','Костромы','Воронежа','Тулы','Самары','Новосибирска','Волгограда','Краснодара','Великого Новгорода','Ростова-На-Дону','Твери','Пскова','Уфы','Смоленска','Сергиева Посада','Выборга','Рязани','Красноярска','Коломны','Челябинска','Перми','Кисловодска','Тольятти','Саратова','Тюмени','Омска','Мурома','Пятигорска','Новороссийска','Иркутска','Иваново','Вологды','Владивостока','Йошкар-Олы','Калуги','Углича','Ростова Великого','Астрахани','Чебоксаров'];
        var items = ['Белые взрывы','Сексуальная африка','Белый цветок','Дерево на закате','Фиолетовые силуэты','Свирепый хищник','Великолепие','Лагуна','Красная страсть','Лебедь на пруду','Японские мотивы','Большие котята','Розовая крапинка','Мир прекрасного','Пара лебедей','Розовое покрывало','Лунное дерево','Чай с лимоном','Райские пальмы','Триптих кофе','Светлая тропинка','Алый водопад','Орхидея','Необычные цветы','Прекрасный цветок орхидеи','Слоны на закате','Яркие цветы','Сиреневая ветка и камни','Хочу сюда','Цветение','Сказочный домик в лесу','Пробуждение','Алая роза','Белые ромашки','Девушка-осень','Ласковое прикосновение','Обнаженное тело','Красный глаз','Цветочное трио','Любовь и лебеди','Животворящие лучи солнца','Волны - закат - спокойствие'];

        var times;
        times = [3000,4000,5000,6000,7000,8000,9000,10000];

        var show = false;

        setInterval(function () {
            if(ctimer > 0){
                ctimer = ctimer-1000;
                $.cookie('utimer',ctimer);

            }else{
                //Берём
                var rand = Math.floor(Math.random() * names3.length);
                var rand2 = Math.floor(Math.random() * city.length);
                var rand3 = Math.floor(Math.random() * times.length);
                var rand4 = Math.floor(Math.random() * items.length);

                var link = $('a:contains("'+items[rand4].toLowerCase()+'")');
                var text = names3[rand]+' из '+city[rand2]+' заказал(а) картину '+items[rand4];
                $('.border-u').html(text);
                $('.popup-u').attr('href',link.attr('href')).fadeIn();

                ctimer = times[rand3];
                show = true;
            }
        },1000);

        setInterval(function () {
            if(show){
                $('.popup-u').fadeOut();
                show = false;
            }
        },6000);

        $(".order-form .size, .order-form .size-v2").on('click',function () {
            $(".order-form .size, .order-form .size-v2").removeClass('active');
            $(this).addClass('active');

            $('.order-form .price-count').html(number_format($(this).data('price'),0,'',' ')+' <span>руб.</span>');
            $('.order-form .price-t-count').html(number_format($(this).data('price-old'),0,'',' ')+' <span>руб.</span>');

            //Меняем цены
        });


        if(!$.cookie('promopopup')){
            setTimeout(function () {
                if($('body').data('variant') == 'v3'){
                    $.fancybox($('#promo-popup'),{
                        padding: '0',
                        tpl: {
                            closeBtn: '<a class="fancybox-item fancybox-close myClose" href="javascript:;" style="background: transparent; top: 0; right: 0; width: 32px; height: 30px;"></a>'
                        }
                    });
                }else{
                    $.fancybox($('#promo-popup'),{
                        padding: '0',
                        width: "100%",
                        maxWidth: 950,
                        height: 476,
                        autoSize: false,
                        scrolling: false
                    });
                }

                $.cookie('promopopup',true);
            }, 5000);
        }

        $('#u-promo-timer').countdown('2020/10/10', function (event) {
            $(this).html(event.strftime('<span class="countdown-h">%H</span><span class="countdown-m">%M</span><span class="countdown-s">%S</span>'));
        });

        		$(".ooft").fancybox({
			maxWidth	: 1200,
			maxHeight	: 1000,
			fitToView	: false,
			width		: '70%',
			height		: '70%',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
			});
        
        
        console.log('APP END');
    });
})(jQuery);



$(function () {
    // alert('asd');
    if ($(window).scrollTop() > 200){
        $('.header-fixed').show();
    } else {
        $('.header-fixed').hide();
    }

});

$(window).on('scroll', function () {
    if ($(window).scrollTop() > 200){
        $('.header-fixed').slideDown(100);
    } else {
        $('.header-fixed').slideUp(100);
    }
});



