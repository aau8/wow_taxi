<?php get_header(); ?>
<?php get_template_part('wp-parts/bread'); ?>
<?php get_template_part('wp-parts/page-header') ?>
    <section class="contacts">
        <div class="container">
            <div class="contacts__body">
                <div class="contacts__connection">
                    <h2 class="contacts-subtitle">Для клиентов</h2>
                    <div class="contacts__connection__body">
                        <div class="contacts__connection__block">
                            <a href="tel:<?php echo preg_replace('/\s+/', '', get_field('phone')); ?>" class="contacts__phone">
                                <span class="contacts__phone-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/phone.svg" alt="Телефон"></span>
                                <span class="contacts__phone-text"><?php the_field('phone', 32); ?></span>
                            </a>
                        </div>
                        <div class="contacts__connection__block">
                            <a href="mailto:<?php echo get_field('emails', 32)['client'] ?>" class="contacts__phone">
                                <span class="contacts__phone-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/mail.svg" alt="Email"></span>
                                <span class="contacts__phone-text"><?php echo get_field('emails', 32)['client'] ?></span>
                            </a>
                        </div>
                        <?php if (get_field('socials', 32)['instagram'] || get_field('socials', 32)['telegram'] || get_field('socials', 32)['vk']) { ?>
                            <div class="contacts__connection__block">
                                <?php get_template_part('wp-parts/socials'); ?>
                            </div>
                        <?php } ?>
                        <div class="contacts__connection__block">
                            <a href="<?php echo home_url() . '/support'; ?>" class="footer__up__support contacts__support">
                                <span class="footer__up__support-text">Тех.поддержка</span>
                                <span class="footer__up__support-icon">
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.5 13H4C4.13542 13 4.2526 12.9505 4.35156 12.8516C4.45052 12.7526 4.5 12.6354 4.5 12.5V7.5C4.5 7.36458 4.45052 7.2474 4.35156 7.14844C4.2526 7.04948 4.13542 7 4 7H3.5C3.5 5.45833 3.92969 4.23958 4.78906 3.34375C5.64844 2.44792 6.88542 2 8.5 2C10.1146 2 11.3516 2.44792 12.2109 3.34375C13.0703 4.23958 13.5 5.45833 13.5 7H13C12.8646 7 12.7474 7.04948 12.6484 7.14844C12.5495 7.2474 12.5 7.36458 12.5 7.5V12.5C12.5 12.6354 12.5495 12.7526 12.6484 12.8516C12.7474 12.9505 12.8646 13 13 13H13.5C13.5 13.5521 13.3047 14.0234 12.9141 14.4141C12.5234 14.8047 12.0521 15 11.5 15H10.5C10.5 14.7188 10.4036 14.4818 10.2109 14.2891C10.0182 14.0964 9.78125 14 9.5 14H8.5C8.21875 14 7.98177 14.0964 7.78906 14.2891C7.59635 14.4818 7.5 14.7161 7.5 14.9922C7.5 15.2682 7.59635 15.5052 7.78906 15.7031C7.98177 15.901 8.21875 16 8.5 16H11.5C12.3333 16 13.0417 15.7083 13.625 15.125C14.2083 14.5417 14.5 13.8333 14.5 13C15.0521 13 15.5234 12.7083 15.9141 12.125C16.3047 11.5417 16.5 10.8333 16.5 10C16.5 9.45833 16.4089 8.95833 16.2266 8.5C16.0443 8.04167 15.8021 7.68229 15.5 7.42188V7C15.5 6.05208 15.3151 5.14583 14.9453 4.28125C14.5755 3.41667 14.0781 2.67188 13.4531 2.04688C12.8281 1.42188 12.0833 0.924479 11.2188 0.554688C10.3542 0.184896 9.44792 0 8.5 0C7.55208 0 6.64583 0.184896 5.78125 0.554688C4.91667 0.924479 4.17188 1.42188 3.54688 2.04688C2.92188 2.67188 2.42448 3.41667 2.05469 4.28125C1.6849 5.14583 1.5 6.05208 1.5 7V7.42188C1.19792 7.68229 0.955729 8.04167 0.773438 8.5C0.591146 8.95833 0.5 9.45833 0.5 10C0.5 10.8333 0.695312 11.5417 1.08594 12.125C1.47656 12.7083 1.94792 13 2.5 13Z"
                                            fill="#F3CC3F" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="contacts__coop">
                    <h2 class="contacts-subtitle">Для сотрудничества</h2>
                    <div class="contacts__coop__body">
                        <div class="contacts__connection__block">
                            <a href="mailto:<?php echo get_field('emails', 32)['coop'] ?>" class="contacts__phone">
                                <span class="contacts__phone-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/mail.svg" alt="Email"></span>
                                <span class="contacts__phone-text"><?php echo get_field('emails', 32)['coop'] ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>