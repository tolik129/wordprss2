<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <meta name="description" content="GeekHub надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення">
    <meta name="keywords" content="GeekHub, ГікХаб, Черкаси, Cherkassy">


    <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.6.4.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/libs/prefixfree.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/flipclock.min.js"></script>
    <script type="text/javascript" src="http://userapi.com/js/api/openapi.js?34"></script>

    <script type="text/javascript">
        $(function(){

            var t1 = new Date("September 17, 2014 00:00:00");
            var t2 = new Date();
            var seconds = (t1.getTime() - t2.getTime()) / 1000;

            var Seconds_Between_Dates = Math.abs(seconds);

            var clock = $('.countdown').FlipClock(Seconds_Between_Dates,{clockFace:'DailyCounter',countdown:true,	showSeconds: false});


            function isEmailValid(email){
                var pass = /^[a-z0-9._%+-]+@[a-z0-9._-]+\.[a-z]{2,6}$/i;
                if(!pass.test(email)){
                    return false;
                }
                return true;
            }

            $('.types li').click(function(){
                var index = $(this).index();
                window.location = '/details.html?'+index;
                return false;
            })

            $('#header form').submit(function(){
                var email = $(this).find('.email');
                var loader = $(this).find('span');
                var val = email.val();

                if (!isEmailValid(val)) {
                    email.addClass('error');
                    email.focus();
                    return false;
                }
                email.removeClass('error');
                email.attr('disabled',true);
                loader.fadeIn(300);

                var data = { email: val };

                $.post('http://geekhub.ck.ua/notify.php', data, function(){
                    loader.fadeOut(300);
                    email.attr('disabled',false);
                    email.val('');
                    alert('Готово');
                });

                return false;
            });
        });
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-27082120-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter17027506 = new Ya.Metrika({id:17027506, enableAll: true, webvisor:true});
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="//mc.yandex.ru/watch/17027506" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<h1><a href="/">GeekHub</a></h1>

<ul class="nav">
    <?php wp_nav_menu(array('theme_location' => 'menu')); ?>

</ul>

<ul class="links">
    <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
    <li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
    <li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
    <li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
</ul>
<span class="line"></span>