<!DOCTYPE html>
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
<body>
<div id="wrap">
    <div id="header">
        <?php get_header(); ?>

        <h4 class="registration">Реєстрацію на 4й сезон закрито</h4>
        <p class="note">*залиште нам ваш емейл і ми повідомимо вас про початок реєстрації</p>
        <form action="#">
            <fieldset>
                <span></span>
                <input type="text" class="email" placeholder="Ваш email" />
                <input type="submit" value="Відіслати" />
            </fieldset>

        </form>
        <img src="<?php bloginfo('template_directory'); ?>/images/splash.png" alt="splash" />
    </div><!-- header -->
    <div id="content">
        <div class="home">
            <h2>ДЕТАЛІ КУРСІВ ТА РЕЄСТРАЦІЯ</h2>




            <ul class="social_share">
                <li id="vk">
                    <script type="text/javascript">
                        VK.Widgets.Group("vk", {mode: 0, width: "276", height: "240"}, 30111409);
                    </script>
                </li>
                <li class="sertificates_list">
                    <h4><a href="/certified-professionals.html">Сертифiкованi професiонали</a></h4>
                </li>
                <li>
                    <h4>Наші Спонсори</h4>
                    <ul>
                        <li class="de"><a href="http://povnahata.com">Дім Євангелія</a></li>
                        <li class="moc"><a href="http://masterofcode.com">Masterofcode LTD</a></li>
                        <li class="sergium"><a href="http://sergium.net">SerGium.net</a></li>
                        <li class="clear left stuff"><a href="http://val.co.ua/">val.co.ua/</a></li>
                        <li class="youthog"><a href="http://yothog.com">Youthog.com</a></li>
                        <li class="jetbrains"><a href="http://jetbrains.com/">JetBrains.com</a></li>
                        <li class="ucoz"><a href="http://rabota.ucoz.ua/">ucoz.ua</a></li>
                        <li class="spd-ukraine"><a href="http://spd-ukraine.com/">SPD-Ukraine.com</a></li>
                        <li class="ekreative"><a href="http://www.ekreative.com/">Ekreative.com</a></li>
                        <li class="n3wnormal"><a href="http://n3wnormal.com/">n3wnormal.ua</a></li>
                        <li class="in-ck-ua"><a href="http://in.ck.ua/">in.ck.ua</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- content -->
    <?php get_footer(); ?>
</div>
</body>
</html>