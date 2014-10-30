<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>GeekHub - отримай практичні знання в сфері IT</title>
    <meta name="description" content="GeekHub надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення">
    <meta name="keywords" content="GeekHub, ГікХаб, Черкаси, Cherkassy">


    <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flipclock.css">

    <script type="text/javascript" src="./js/jquery-1.6.4.min.js"></script>
    <script src="./js/libs/prefixfree.min.js"></script>
    <script type="text/javascript" src="./js/flipclock.min.js"></script>
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
        <h1><a href="/">GeekHub</a></h1>
        <ul class="nav">
            <li class="active"><a href="/">Головна</a></li>
            <li><a href="/about.html">Про GeekHub</a></li>
            <li><a href="/team.html">Команда</a></li>
            <li><a href="/faq.html">FAQ</a></li>
            <li><a href="/contacts.html">Зв'язок</a></li>
        </ul>

        <ul class="links">
            <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
            <li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
            <li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
            <li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
        </ul>
        <span class="line"></span>

        <h4 class="registration">Реєстрацію на 4й сезон закрито</h4>
        <p class="note">*залиште нам ваш емейл і ми повідомимо вас про початок реєстрації</p>
        <form action="#">
            <fieldset>
                <span></span>
                <input type="text" class="email" placeholder="Ваш email" />
                <input type="submit" value="Відіслати" />
            </fieldset>

        </form>
        <img src="images/splash.png" alt="splash" />
    </div><!-- header -->
    <div id="content">
        <div class="home">
            <h2>ДЕТАЛІ КУРСІВ ТА РЕЄСТРАЦІЯ</h2>
            <ul class="types">
                <li class="left-col">
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-frontend.png" />
                    <a class="title" href="#"><h3>Frontend + CMS</h3></a>
                    <p>Цей курс допоможе вам навчитися створювати веб сайти на основі системи керування контентом. Все, від скінування дизайну до підключення CMS. Цей курс дасть вам чудовий старт для фріланса або роботи в компанії.</p>
                    <a href="#">Докладніше + реєстрація</a>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-adv-cms.png" />
                    <a class="title" href="#"><h3>Advanced CMS</h3></a>
                    <p>Курс для тих, хто хоче навчитися створювати сайти різного рівня складності за допомогою популярних CMS Wordpress та Drupal. Якщо ви хочете робити вебсайти як професіонал, цей курс для вас. Особливості різних CMS, використання та написання плагінів та компонентів, інтеграція із соціальними мережами та сторонніми сервісами.</p>
                    <a href="#">Докладніше + реєстрація</a>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-adv-php.png" />
                    <a class="title" href="#"><h3>Advanced PHP</h3></a>
                    <p>Для тих хто хоче розвивати свої базові навички в PHP. Курс заглиблюється у вивчення ООП, MVC та паттернiв проетування на базі найпопулярнішого php фреймворку Symfony2.</p>
                    <a href="#">Докладніше + реєстрація</a>
                </li>
                <li class="left-col">
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-js.png" />
                    <a class="title" href="#"><h3>JavaScript</h3></a>
                    <p>Все найцікавіше відбувається в браузері, а не на сервері. Javascript - це той інструмент який допоможе вам створювати дійсно зручні та швидкі веб сторінки.</p>
                    <a href="#">Докладніше + реєстрація</a>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-ios.png" />
                    <a class="title" href="#"><h3>iOS</h3></a>
                    <p>Курс для швидкого старту в розробці програмного забезпечення під популярну мобільну платформу iOS. </p>
                    <a href="#">Докладніше + реєстрація</a>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-android.png" />
                    <a class="title" href="#"><h3>Android</h3></a>
                    <p>Android - найпопулярніша операційна система для смартфонів. В цьому курсі ми охопимо найважливіші елементи побудови додатків для цієї платформи. Ознайомимося з основними компонентами UI та UX. Навчимося їх правильно використовувати. Також навчимося працювати в команді та побудуємо корисні додатки.</p>
                    <a href="#">Докладніше + реєстрація</a>
                </li>
                <li class="left-col">
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-ruby.png" />
                    <a class="title" href="#"><h3>Ruby on Rails</h3></a>
                    <p>Курс навчить Вас працювати з популярним фреймворком для розробки веб-сервісів на мові програмування Ruby. </p>
                    <a href="#">Докладніше + реєстрація</a>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-grails.png" />
                    <a class="title" href="#"><h3>Groovy & Grails</h3></a>
                    <p>Познайомтесь з одним з найпотужніших фреймворків для швидкої розробки веб-додатків Groovy & Grails.</p>
                    <a href="#">Докладніше + реєстрація</a>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-java.png" />
                    <a class="title" href="#"><h3>Java for Web</h3></a>
                    <p>Java - це основа ентерпрайз технологій. Ви ознайомитесь із мовою, основними классами і пакетами, а також найбільш популярними та потужними фреймворками для розробки веб-додатків.</p>
                    <a href="#">Докладніше + реєстрація</a>
                </li>
                <li class="left-col">
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-pm.png" />
                    <a class="title" href="#"><h3>Project Management</h3></a>
                    <p>Щоб стати досвідченим менеджером проектів потрібні роки спроб та помилок. Geekhub дає вам можливість почати набувати практичні навички вже зараз.</p>
                    <a href="#">Докладніше + реєстрація</a>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-qa.png" />
                    <a class="title" href="#"><h3>Quality Assurance</h3></a>
                    <p>Курс для тих, хто вміє конструктивно критикувати та хотів би з цього навику зробити цікаву інноваційну професію.</p>
                    <a href="#">Докладніше + реєстрація</a>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-english.png" />
                    <a class="title" href="#"><h3>Business English</h3></a>
                    <p>Якщо ви лідер команди або менеджер проектів, Business English допоможе вам здобути корисні інструменти для ефективних комунікацій як всередині команди так і з клієнтами.</p>
                    <a href="#">Докладніше + реєстрація</a>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-webdesign.png" />
                    <a class="title" href="#"><h3>Web & Mobile Design</h3></a>
                    <p>Це динамічний та насиченний навчальний курс, який дає змогу отримати базові знання з Веб дизайну та дизайну мобільних додатків. Ви дізнаєтесь як проектувати інтерфейси та робити сайти зручними для відвідувачів. Отримаєте базові знання по композиції, фірмовому стилю, шрифтам та роботі з ком'ютерними програмами для подальшого розвитку у галузі дизайну.</p>
                    <a href="#">Докладніше + реєстрація</a>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-gamedesign.png" />
                    <a class="title" href="#"><h3>Game Production</h3></a>
                    <p>Часи, коли ігри створювали фанатики-одинаки давно позаду. Сьогодні шалено зростаюча індустрія геймдеву відкриває двері широкому колу спеціалістів. Курс Game Production познайомить учнів із процессом створення комп’ютерних ігр, особливостями ведення GDD, допоможе розібратися з ігровими механіками, жанрами, тенденціями, термінологією... А ще, надихне спостерігати, помічати, пробувати, вивчати життя, бо, як не дивно, часто саме це визначає якісний геймдев :)</p>
                    <a href="#">Докладніше + реєстрація</a>
                </li>
                <li>
                </li>





            </ul>
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
    <ul id="footer">
        <li>
            <ul class="nav">
                <li><a href="/">Головна</a></li>
                <li><a href="/about.html">Про GeekHub</a></li>
                <li><a href="/team.html">Команда</a></li>
                <li><a href="/contacts.html">Зв'язок</a></li>
            </ul>
        </li>
        <li>© Copyright 2011</li>
    </ul>
</div>
</body>
</html>