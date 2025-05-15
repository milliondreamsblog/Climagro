<!-- preloader end -->

<div class="body_wrap">

    <!-- header start -->
    <header id="xb-header-area" class="header-area">
        <div class="xb-header stricky">
            <div class="container">
                <div class="header__wrap ul_li_between">
                    <div class="header-logo">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>">
                            <?= anchor(base_url(), img(array('src' => 'assest/uploadfile/' . $getCompany->comp_logo, 'title' => $getCompany->comp_name, 'alt' => $getCompany->comp_name, 'style' => 'max-width: 125px;'))) ?>
                        </a>
                    </div>
                    <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                        <nav class="main-menu collapse navbar-collapse">
                            <ul>
                                <li>
                                    <?php echo anchor(base_url(), 'Home'); ?>
                                </li>
                                <li>
                                    <?php echo anchor('about-us', 'About Us'); ?>
                                    <ul class="submenu">
                                        <!-- <li><?php echo anchor('our-journey', 'Our Journey'); ?></li> -->
                                        <!-- <li><?php echo anchor('our-team', 'Our Team'); ?></li> -->
                                    </ul>
                                </li>
                                <li>
                                    <?php echo anchor('solutions', 'offerings'); ?>
                                </li>
                                <li class="menu-item-has-children">
                                    <?php echo anchor('', 'Resources'); ?>
                                    <ul class="submenu">
                                        <?php echo anchor('blogs', 'Blogs'); ?>
                                        <?php echo anchor('#', 'Latest News'); ?>
                                        <?php echo anchor('#', 'latest Article'); ?>
                                    </ul>
                                </li>
                                <li>
                                    <?php echo anchor('contact-us', 'Contact Us'); ?>
                                </li>
                            </ul>
                        </nav>
                        <div class="xb-header-wrap">
                            <div class="xb-header-menu">
                                <div class="xb-header-menu-scroll">
                                    <div class="xb-menu-close xb-hide-xl xb-close"></div>
                                    <div class="xb-logo-mobile xb-hide-xl">
                                        <a class="navbar-brand" href="<?php echo base_url(); ?>">
                                            <?= anchor(base_url(), img(array('src' => 'assest/uploadfile/' . $getCompany->comp_logo, 'title' => $getCompany->comp_name, 'alt' => $getCompany->comp_name, 'style' => 'max-width: 215px;'))) ?>
                                        </a>
                                    </div>
                                    <div class="xb-header-mobile-search xb-hide-xl">
                                        <form role="search" action="#">
                                            <input type="text" placeholder="Search..." name="s" class="search-field">
                                        </form>
                                    </div>
                                    <nav class="xb-header-nav">
                                        <ul class="xb-menu-primary clearfix">
                                            <li>
                                                <?php echo anchor(base_url(), 'Home'); ?>
                                            </li>
                                            <li>
                                                <?php echo anchor('about-us', 'About Us'); ?>
                                                <ul class="submenu">
                                                    <!-- <li><?php echo anchor('our-journey', 'Our Journey'); ?></li> -->
                                                    <!-- <li><?php echo anchor('our-team', 'Our Team'); ?></li> -->
                                                </ul>
                                            </li>
                                            <li>
                                                <?php echo anchor('solutions', 'offerings'); ?>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <?php echo anchor('', 'Resources'); ?>
                                                <ul class="submenu">
                                                    <?php echo anchor('blogs', 'Blogs'); ?>
                                                    <?php echo anchor('news', 'Latest News'); ?>
                                                    <?php echo anchor('articles', 'latest Article'); ?>
                                                </ul>
                                            </li>
                                            <li>
                                                <?php echo anchor('contact-us', 'Contact Us'); ?>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="xb-header-menu-backdrop"></div>
                        </div>
                    </div>
                    <div class="header-btn ul_li">
                        <a class="login-btn" href="<?php echo base_url('solutions').'#consult-us' ?>">Consult Us</a>
                        <div class="header-bar-mobile side-menu d-lg-none ml-20">
                            <a class="xb-nav-mobile" href="javascript:void(0);"><i class="far fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- main area start  -->
    <main>