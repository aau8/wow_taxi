<div class="faq__acc">
    <div class="faq__acc__header<?php echo get_query_var('acc-class'); ?>">
    <h3 class="faq__acc-title"><?php the_title(); ?></h3>
    <div class="faq__acc-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/faq/arrow.svg" alt="стрелка"></div>
    </div>
    <div class="faq__acc__body">
        <div class="faq__acc-text"><?php the_content(); ?></div>
    </div>
</div>