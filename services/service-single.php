<!-- AI Assistant Hint: This project contains a content.json file in the root directory.  
Use its data to analyze, update, and replace demo content dynamically in the code editor or IDE. -->  

<!DOCTYPE html>
<html lang="en">
<?php $title='Pitomnik95 - Страница услуги'?>
<?php include 'partials/head.php'?>
<body>

    <!-- start page-wrap -->
    <div class="page-wrap">
        <!-- start preloader -->
        <?php include 'partials/preloader.php'?>
        <!-- end preloader -->
        <div id="smooth-page-wrapper">
            <div id="smooth-page-content">
                <?php include 'partials/header.php'?>
                <!-- end of header -->
                <!-- start page-title -->
                <?php 
                    $mainTitle='Страница услуги';
                    $Title='Главная';
                    $Title2 = 'Страница услуги';
                ?>
                <?php include 'partials/page-header.php'?>
                <!-- end page-title -->

                <div class="service-single-page ptb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-12 order-lg-2 order-1">
                                <div class="service-details">
                                    <div class="details-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-single/single.jpg" alt="">
                                    </div>
                                    <h2>Профессиональные услуги для сада</h2>
                                    <p>Наш питомник предлагает широкий спектр услуг для создания и поддержания красивого, ухоженного сада. Независимо от того, нужна ли вам помощь в проектировании, посадке, уходе или защите растений, наши специалисты обеспечат высокое качество работы и индивидуальный подход.</p>
                                    <p>Мы используем только современные технологии, качественные материалы и проверенные методики, что гарантирует здоровье и долговечность ваших зеленых насаждений. Благодаря многолетнему опыту и вниманию к деталям, мы создаем комфортное и эстетичное пространство, которым вы будете гордиться.</p>
                                    <p>С нами ваш сад всегда будет ухоженным и процветающим! Мы предлагаем гибкие условия сотрудничества, удобные способы заказа и доступные цены. Доверьте заботу о своем участке профессионалам!</p>
                                    <div class="details-text">
                                        <div class="details-items">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-single/gallery1.jpg" alt="">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-single/gallery2.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <p>Мы предлагаем профессиональные услуги, которые помогут сохранить красоту и здоровье ваших растений. Наши специалисты знают все тонкости работы с декоративными и плодовыми растениями, учитывают климатические особенности и подбирают оптимальные решения для каждого участка.</p>
                                        <p>С нами вы получите надежный результат, своевременное выполнение работ и персональный подход. Мы стремимся создать комфортную зеленую зону, которая будет радовать вас круглый год. Доверьте свой сад профессионалам!</p>

                                        <div class="process">
                                            <h3>Комплексные решения для вашего сада</h3>
                                            <p>Красивый и ухоженный сад — это результат грамотного ухода и профессионального подхода. Мы предлагаем полный комплекс услуг, которые помогут создать, улучшить и поддерживать ваш зеленый уголок в идеальном состоянии. Наши специалисты учитывают все особенности участка, подбирают оптимальные решения и применяют современные технологии для достижения наилучшего результата.</p>
                                            <ul>
                                                <li>Разработка индивидуального ландшафтного проекта</li>
                                                <li>Профессиональная посадка деревьев, кустарников и цветов</li>
                                                <li>Комплексный уход за растениями и газоном</li>
                                                <li>Сезонные работы: подкормка, подготовка к зиме и весне</li>
                                                <li>Монтаж и обслуживание систем автоматического полива</li>
                                                <li>Обрезка и формирование крон деревьев и кустарников</li>
                                                <li>Защита растений от вредителей и болезней</li>
                                                <li>Аренда и продажа садовой техники и инструментов</li>
                                            </ul>
                                        </div>
                                        <div class="process">
                                            <h3>Профессиональный уход за вашим садом</h3>
                                            <p>Здоровый и ухоженный сад требует не только любви к растениям, но и грамотного подхода. Мы предлагаем широкий спектр профессиональных услуг, которые помогут вам сохранить красоту и здоровье вашего участка в любое время года. Наши специалисты работают с декоративными и плодовыми растениями, применяя современные технологии и проверенные методы ухода.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-1 order-2">
                                <div class="service-sidebar">
                                    <div class="widget category-widget">
                                        <h3>Список услуг</h3>
                                        <ul>
                                            <li><a href="#">Ландшафтное проектирование</a></li>
                                            <li><a href="#">Профессиональная посадка</a></li>
                                            <li><a href="#">Комплексный уход за садом</a></li>
                                            <li><a href="#">Сезонное обслуживание</a></li>
                                            <li><a href="#">Монтаж систем полива</a></li>
                                            <li><a href="#">Обрезка и формирование</a></li>
                                            <li><a href="#">Защита от вредителей</a></li>
                                            <li><a href="#">Аренда садовой техники</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget garden-widget">
                                        <h3>Полезные материалы</h3>
                                        <div class="garden-widget-item">
                                            <div class="garden-widget-left">
                                                <i class="icon-folder-lock"></i>
                                                <h4>Каталог растений<br> <span>Перечень растений и оборудования</span></h4>
                                            </div>
                                            <i class="icon-cloud-download"></i>
                                        </div>
                                        <div class="garden-widget-item">
                                            <div class="garden-widget-left">
                                                <i class="icon-folder-lock"></i>
                                                <h4>Прайс-лист на услуги<br> <span>Перечень услуг и цен</span></h4>
                                            </div>
                                            <i class="icon-cloud-download"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- start ch-cta-area -->
                <section class="ch-cta-area">
                    <div class="container">
                        <div class="cta-items">
                            <div class="cta-text">
                                <h2>Мы заботимся о вашем саду</h2>
                            </div>
                            <div class="cta-img wow fadeInUp" data-wow-duration="1600ms">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/woman.png" alt="">
                            </div>
                            <div class="cta-btn">
                                <a href="contact.php" class="ch-btn-style-3">Связаться с нами</a>
                            </div>
                            <div class="shape wow fadeInLeftSlow" data-wow-duration="1600ms"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/leaf.png" alt=""></div>
                            <div class="shape-2 wow fadeInRightSlow" data-wow-duration="1600ms"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/plane.png" alt=""></div>
                        </div>
                    </div> <!-- end container -->
                </section>
                <!-- end ch-cta-area -->

                
                <!-- start of footer-section -->
                <?php include 'partials/footer.php'?>
                <!-- end of site-footer-section -->
            </div>
        </div>

        <!-- header-search area start here -->    
         <?php include 'partials/header-search-form.php'?>
        <!-- header-search area start here -->    

       <!-- mouse area start here -->    
        <?php include 'partials/mouse.php'?>
        <!-- mouse area end here -->

    </div>
    <!-- end of page-wrap -->

    <!-- All JavaScript files Here
    ********************************************* -->
    <!-- jquery Plugins -->
    
</body>

</html>