<?php get_header(); ?>
<?php get_template_part('wp-parts/bread'); ?>
<?php get_template_part('wp-parts/page-header'); ?> 
    <section class="order">
        <div class="container">
            <div class="order__body">
                <div class="order-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/order/order-img.png" alt=""></div>
                <div class="order__content">
                    <!-- <h2 class="order__content-title">Информация о заказе:</h2> -->
                    <?php $data = json_decode(stripcslashes($_COOKIE['order_data'])); ?>
                    <table class="order__table">
                        <?php if ($data->name) : ?>
                        <tr>
                            <td>Имя:</td>
                            <td id="name"><?php echo $data->name; ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php if ($data->phone) : ?>
                            <tr>
                                <td>Номер:</td>
                                <td id="phone"><?php echo $data->phone; ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($data->where_from) : ?>
                            <tr>
                                <td>От куда:</td>
                                <td id="where_from"><?php echo $data->where_from; ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($data->where) : ?>
                            <tr>
                                <td>Куда:</td>
                                <td id="where"><?php echo $data->where; ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($data->date) : ?>
                            <tr>
                                <td>Дата:</td>
                                <td id="date"><?php echo $data->date; ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($data->time) : ?>
                            <tr>
                                <td>Время:</td>
                                <td id="time"><?php echo $data->time; ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($data->message) : ?>
                            <tr>
                                <td>Сообщение:</td>
                                <td id="message"><?php echo $data->message; ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($data->flight_number) : ?>
                            <tr>
                                <td>Номер рейса:</td>
                                <td id="flight_number"><?php echo $data->flight_number; ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if (count($data->services[1]) > 0) : ?>
                            <tr>
                                <td>Доп. услуги:</td>
                                <td id="services">
                                <?php 
                                    $arr = $data->services[1];
                                    $txt = '';

                                    foreach($arr as $key => $value) {
                                        if ($key === count($arr) - 1) {
                                            $txt .= $value;
                                        }
                                        else {
                                            $txt .= $value . ', <br>';
                                        }
                                    }

                                    echo $txt;
                                ?>    
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($data->class_auto) : ?>
                            <tr>
                                <td>Класс авто:</td>
                                <td id="class_auto"><?php echo $data->class_auto; ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($data->total_price) : ?>
                            <tr>
                                <td>Общая цена:</td>
                                <td id="total_price"><?php echo $data->total_price; ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($data->route) : ?>
                            <tr>
                                <td>Примерное расстояние:</td>
                                <td id="route"><?php echo $data->route; ?> км</td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($data->travel_time) : ?>
                            <tr>
                                <td>Примерное время в пути:</td>
                                <?php 
                                    $travel_time = $data->travel_time;
                                    $all_minutes = round($travel_time/60);
                                    $minutes = $all_minutes%60;
                                    $hours = round(($all_minutes-$minutes)/60);
                                ?>
                                <td id="travel_time"><?php echo $hours == 0 ? $minutes.' мин.' : $hours.' ч. '.$minutes.' мин.'; ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($data->payment_method) : ?>
                            <tr>
                                <td>Способ оплаты:</td>
                                <td id="payment_method"><?php echo $data->payment_method; ?></td>
                            </tr>
                        <?php endif; ?>
                    </table>
                    <div class="order__buttons">
                        <a href="<?php echo home_url(); ?>" class="btn-outline order-btn-main">На главную</a>
                        <a href="<?php echo home_url(); ?>/reviews#review" class="btn order-btn-review">Оставить отзыв</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>