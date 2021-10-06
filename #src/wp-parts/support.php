<section class="support <?php echo get_query_var('support_class'); ?>">
    <div class="container">
    <h2 class="support-title" data-title-bg="support">Тех. поддержка</h2>
    <div class="support__body">
        <div class="support__content"><?php $post = get_post(83); echo apply_filters( 'the_content', $post->post_content ); ?></div>
        <form action="<?php echo get_stylesheet_directory_uri(); ?>/wp-handlers/telegram-support.php" method="POST" class="support__form form"> 
            <div class="support__inputs">
                <div class="input">
                    <input id="support-name" class="_req" type="text" name="user-name">
                    <label for="support-name">Имя*</label>
                </div>
                <div class="input">
                    <input id="support-phone" class="_req" type="text" name="user-phone">
                    <label for="support-phone">Номер*</label>
                </div>
            </div>
            <div class="support-textarea">
                <div class="textarea">
                    <textarea id="support-message" name="user-message"></textarea>
                    <label for="support-message">Сообщение</label>
                </div>
            </div>
            <button class="btn support-btn submit">
                <span class="submit-text">Отправить</span>
                <span class="submit-loader">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26 14C26 16.3734 25.2962 18.6935 23.9776 20.6668C22.6591 22.6402 20.7849 24.1783 18.5922 25.0866C16.3995 25.9948 13.9867 26.2324 11.6589 25.7694C9.33114 25.3064 7.19295 24.1635 5.51472 22.4853C3.83649 20.8071 2.6936 18.6689 2.23058 16.3411C1.76755 14.0133 2.00519 11.6005 2.91345 9.4078C3.8217 7.21509 5.35977 5.34094 7.33316 4.02236C9.30655 2.70379 11.6266 2 14 2" stroke="#333333" stroke-width="4"/>
                    </svg>
                </span>
            </button>
        </form>
    </div>
    </div>
</section>