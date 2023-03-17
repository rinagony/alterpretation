<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alterpretation
 */

?>


<section id="footer">
    <div class="container">
        <div class="wrapperFooter">
            <div class="wrapperFooter__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="">
            </div>
            <div class="wrapperFooter__item wrapperFooter__itemContent">
                <div class="wrapperFooter__item__search">
                    <span class="searchTermIcon"><i class="fa fa-search"></i></span>
                    <input type="search" class="searchTerm" />
                </div>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footermenu',
                        'container_class' => 'wrapperFooter__item__navigation',
                    )
                );
                ?>
                <div class="wrpContactMeFooter">
                    <div class="wrapperFooter__item__contact">
                        <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.093 0H0.981756C0.743602 0 0.550537 0.195877 0.550537 0.4375V13.5625C0.550537 13.8041 0.743602 14 0.981756 14H19.093C19.3311 14 19.5242 13.8041 19.5242 13.5625V0.4375C19.5242 0.195877 19.3311 0 19.093 0ZM18.6617 12.0695L13.32 6.65L12.7109 7.26797L18.4839 13.125H1.59085L7.3638 7.26797L6.7547 6.65L1.41297 12.0695V0.875H18.6617V12.0695Z" fill="#F42525" />
                            <path d="M17.7994 0.875L10.0375 8.75L2.28631 0.875H1.41309V1.225L9.71406 9.66875C9.79206 9.7477 9.89971 9.79651 10.0186 9.79651C10.1375 9.79651 10.2452 9.74769 10.3232 9.66874L18.6619 1.23047V0.875H17.7994Z" fill="#F42525" />
                        </svg>
                        <a href="#cooperation">Contact me</a>
                        <div id="hrFooter">
                            <svg width="2" height="30" viewBox="0 0 2 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.367188" width="0.998657" height="30" fill="white" />
                            </svg>
                        </div>
                    </div>
                    <div class="wrapperFooter__item__socials">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="footerMobile">
    <div class="container">
        <div class="footerMobileWrapperLogoSocials">
            <div class="wrapperFooter__item">
                <a href="./index.html">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logoFooter.svg" alt="">
                </a>
            </div>
            <div class="wrapperFooter__item__socials_mob">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
        <div class="footerMobileWrapperNavigation">
            <div class="wrapperFooter__item__navigation_mob">
                <ul id="footerListLinks" style="padding-left: 0;">
                    <li><a href="./tests.html">Tests</a></li>
                    <li><a href="./words.html">Words porn</a></li>
                    <li><a href="./songs.html">Songs</a></li>
                    <li><a href="./video.html">Video</a></li>
                    <li>
                        <a href="./index.html#cooperationSectionMob"><svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.093 0H0.981756C0.743602 0 0.550537 0.195877 0.550537 0.4375V13.5625C0.550537 13.8041 0.743602 14 0.981756 14H19.093C19.3311 14 19.5242 13.8041 19.5242 13.5625V0.4375C19.5242 0.195877 19.3311 0 19.093 0ZM18.6617 12.0695L13.32 6.65L12.7109 7.26797L18.4839 13.125H1.59085L7.3638 7.26797L6.7547 6.65L1.41297 12.0695V0.875H18.6617V12.0695Z" fill="#F42525" />
                                <path d="M17.7994 0.875L10.0375 8.75L2.28631 0.875H1.41309V1.225L9.71406 9.66875C9.79206 9.7477 9.89971 9.79651 10.0186 9.79651C10.1375 9.79651 10.2452 9.74769 10.3232 9.66874L18.6619 1.23047V0.875H17.7994Z" fill="#F42525" />
                            </svg>Contact me</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js"></script>

</html>