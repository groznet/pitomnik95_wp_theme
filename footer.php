                <footer class="footer-section">
                    <div class="upper-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="widget about-widget">
                                        <div class="logo widget-title">
                                            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png" alt="logo"></a>
                                        </div>
                                        <p>Садовый Центр Pitomnik95 - это садовый центр и питомник декоративных растений а также плодовых.</p>
                                        <div class="widget social-widget p-0">
                                            <ul>
                                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                <li><a href="https://www.instagram.com/pitomnik95/"><i class="ti-instagram"></i></a></li>
                                                <li><a href="#"><i class="ti-youtube"></i></a></li>
                                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="widget link-widget">
                                        <div class="widget-title">
                                            <h3>Полезные ссылки</h3>
                                        </div>
                                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => false ) ); ?>
                                    </div>
                                </div>
                                <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="widget contact-widget">
                                        <div class="widget-title">
                                            <h3>Контактная информация</h3>
                                        </div>
                                        <div class="contact-ft">
                                            <p>Чеченская Республика, трасса Грозный-Аргун 7 км, и работает в других регионах.</p>
                                            <ul>
                                                <li><i class="icon-email-1"></i>pitomnik95@mail.ru</li>
                                                <li><i class="icon-call-2"></i>+7 (928) 393-33-33</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="widget subscribe">
                                        <div class="widget-title">
                                            <h3>Подпишитесь на рассылку</h3>
                                        </div>
                                        <form action="#">
                                            <div class="form-field">
                                                <input disable type="email" placeholder="Ваш Email..." id="emails"
                                                    required>
                                                <button type="submit">Подписаться</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end container -->
                    </div>
                    <div class="lower-footer">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col col-lg-6 col-12">
                                    <div class="copy-right">
                                        <p class="copyright">2010 - 2025 &copy; <a href="<?php echo home_url(); ?>">Pitomnik95</a>, Все права защищены. | Разработка и поддержка сайта <a href="https://groznet.com">GrozNet</a></p>
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-12">
                                    <ul class="lower-footer-link">
                                        <li><a href="contact.php">Условия использования</a></li>
                                        <li><a href="contact.php">Политика конфиденциальности</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            <!-- end of site-footer-section -->
            </div>
        </div>

         <!-- header-search area start here -->    
        <?php include 'partials/header-search-form.php'?>
        <!-- header-search area start here -->    

       <!-- Sidebar area start here -->    
        <?php include 'partials/sidebar.php'?>
        <!-- Sidebar area end here -->
       <!-- mouse area start here -->    
        <?php include 'partials/mouse.php'?>
        <!-- mouse area end here -->

    </div>
    <!-- end of page-wrap -->

    <!-- All JavaScript files Here
    ********************************************* -->
    <!-- jquery Plugins -->
    
    
    <?php wp_footer(); ?>
</body>

</html>