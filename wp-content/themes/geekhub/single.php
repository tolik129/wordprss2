<!DOCTYPE html>
<?php wp_head(); ?>
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
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

                <ul>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-frontend.png" alt="frontend">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <h3>Команда</h3>
                    <ul class="team">
                        <li>
                            <img src="<?php bloginfo('template_directory'); ?>/images/jack.png" />
                            <h3>Євген Григор’єв</h3>
                            <p>Працює з рядом технологій, включаючи Symfony, Drupal, jQuery, Compass CSS, HAML, etc. Майстерність Євгена стоїть за такими проектами як Belvilla, Yes or No, Jongenvrij webshop, USGA та багато інших. У GeekHub викладає Frontend + CMS.</p>
                        </li>
                        <li>
                            <img src="<?php bloginfo('template_directory'); ?>/images/alexander_tinyaev.png" />
                            <h3>Олександр Тіняєв</h3>
                            <p>Алекс (або ж Дікс, як його всі кличуть) займається Frontend, AngularJS, Sencha Touch та Wordpress розробкою в N3w Normal LLC вже протягом двох років. У GeekHub викладає Frontend + CMS.</p>
                        </li>
                        <li>
                            <img src="<?php bloginfo('template_directory'); ?>/images/lavrenko_andriy.png" />
                            <h3>Лавренко Андрій</h3>
                            <p>Працює з рядом технологій, включаючи HTML5/CSS3, jQuery, SASS/SCSS/LESS, CoffeeScript, HAML, Twig, Require JS, Titanium SDK. Обожнює "чистий" код. У GeekHub викладає Frontend + CMS.</p>
                        </li>
                    </ul>

                    <h3>ТЕМИ ПИТАНЬ НА ЕКЗАМЕНI</h3>
                    <ul class="questions">
                        <li>Що таке HTML (Wikipedia)</li>
                        <li>Що таке CSS (Wikipedia)</li>
                        <li>- Основи роботи інтернету (сервер, браузер, домен і т.п.). Матеріал брати тут: <a href="https://vk.com/videos-30111409">https://vk.com/videos-30111409</a> (Урок 1-4)</li>
                    </ul>
                    <h3>Слово від викладачів</h3>
                    <p>Групові заняття проводитимуться 1 раз в тиждень ввечері, домашнє завдання на кожен урок складатиметься з 3 частин (що вимагатиме від студента мінімум 3 рази на тиждень приділяти увагу курсам вдома).</p>
                    <a class="register" href="#">Зареєструватися</a>
                </li>




                </ul>



                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-frontend.png" />
                   <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt();?></p>
                    <a href="<?php the_permalink(); ?>">Докладніше + реєстрація</a>
                </li>
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>

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