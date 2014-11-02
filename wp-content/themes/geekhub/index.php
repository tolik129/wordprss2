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
            <h2>ДЕТАЛІ КУРСІВ ТА РЕЄСТРАЦІЯ</h2>
            <ul class="types">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/images/icon-frontend.png" />
                        <a class="title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                        <p><?php the_excerpt();?></p>
                        <a href="<?php the_permalink(); ?>">Докладніше + реєстрація</a>
                    </li>
                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>

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
    <?php get_footer(); ?>
</div>
</body>
</html>