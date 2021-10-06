<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/daterangepicker.min.css" />
<section class="section calc" id="calc">
    <div class="container">
        <div class="calc__body">
            <div class="calc-map">
                <div id="map-way"></div>
                <!-- <div id="viewContainer"></div> -->
                <div class="map__download">
                    <span class="map__download-text">Загружаем карту</span>
                    <span class="map__download-icon">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26 14C26 16.3734 25.2962 18.6935 23.9776 20.6668C22.6591 22.6402 20.7849 24.1783 18.5922 25.0866C16.3995 25.9948 13.9867 26.2324 11.6589 25.7694C9.33114 25.3064 7.19295 24.1635 5.51472 22.4853C3.83649 20.8071 2.6936 18.6689 2.23058 16.3411C1.76755 14.0133 2.00519 11.6005 2.91345 9.4078C3.8217 7.21509 5.35977 5.34094 7.33316 4.02236C9.30655 2.70379 11.6266 2 14 2" stroke="#666666" stroke-width="4"></path>
                        </svg>
                    </span>
                </div>
            </div>
            <form action="<?php echo get_stylesheet_directory_uri(); ?>/wp-handlers/telegram-calc.php" method="POST" class="calc__content" id="calc_application" autocomplete="off" data-redirect="<?php echo home_url(); ?>/order/">
                <h2 class="h2-title calc-title">Расчет стоимости поездки</h2>
                <div class="calc__comp">
                    <div class="calc__address">
                        <h3 class="calc-subtitle">Адреса</h3>
                        <div class="calc__address__body">
                            <div class="input">
                                <input id="calc-address_where_from" class="input-upper-case _req" type="text" name="where_from-rraannddoomm" autocomplete="new-password">
                                <div class="delete-value"><span></span></div>
                                <label for="calc-address_where_from">От куда*</label>
                            </div>
                            <!-- <button class="calc__address-swap">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.375 4.43079H12.375M12.375 4.43079L10.0022 2.05798M12.375 4.43079L10.0022 6.80359"
                                        stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M12.375 10.1764H3.375M3.375 10.1764L5.7478 7.80359M3.375 10.1764L5.7478 12.5492"
                                        stroke="#666666" stroke-width="1.2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button> -->
                            <div class="input">
                                <input id="calc-address_where" class="input-upper-case _req" type="text" name="where-rraannddoomm" autocomplete="new-password">
                                <div class="delete-value"><span></span></div>
                                <label for="calc-address_where">Куда*</label>
                            </div>
                            <!-- <button class="calc__address-add-address">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.04167 3.13692C7.04167 2.67669 7.41476 2.30359 7.875 2.30359C8.33524 2.30359 8.70833 2.67669 8.70833 3.13692V6.47026L12.0417 6.47025C12.5019 6.47025 12.875 6.84335 12.875 7.30359C12.875 7.76383 12.5019 8.13692 12.0417 8.13692L8.70833 8.13692V11.4703C8.70833 11.9305 8.33524 12.3036 7.875 12.3036C7.41476 12.3036 7.04167 11.9305 7.04167 11.4703V8.13692H3.70833C3.2481 8.13692 2.875 7.76383 2.875 7.30359C2.875 6.84335 3.2481 6.47026 3.70833 6.47026H7.04167V3.13692Z" fill="#666666"/>
                </svg>
                </button> -->
                        </div>
                        <div class="checkbox__list">
                            <div class="checkbox">
                                <input id="calc-checkbox-flight-number" name="checkbox" type="checkbox" data-show-checkbox="input-flight-number">
                                <label for="calc-checkbox-flight-number">
                                    <span class="chekcbox-text">Указать номер рейса</span>
                                    <span class="checkbox-icon"
                                        data-tooltip="Укажите номер рейса, чтобы мы были в курсе точного времени вашего прибытия">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calc/more.svg"
                                            alt="Подробнее">
                                    </span>
                                </label>
                                <div></div>
                            </div>
                            <div class="checkbox" style="display: none;">
                                <input id="calc-checkbox-rental-hours" name="checkbox" type="checkbox" data-show-checkbox="input-rental-hours">
                                <label for="calc-checkbox-rental-hours">
                                    <span class="chekcbox-text">Аренда</span>
                                    <span class="checkbox-icon"
                                        data-tooltip="Укажите в часах, на сколько вы хотите взять авто в аренду"><img
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calc/more.svg"
                                            alt="Подробнее"></span>
                                </label>
                            </div>
                        </div>
                        <div class="calc__additionaly">
                            <div class="input" data-show-input="input-flight-number">
                                <input id="calc-flight-number" class="" type="text" name="flight_number">
                                <label for="calc-flight-number">Номер рейса</label>
                            </div>
                            <!-- <div class="input" data-show-input="input-rental-hours">
                                <input id="calc-rental-hours" class="" type="number" name="rental_hours">
                                <label for="calc-rental-hours">Кол-во часов аренды</label>
                            </div> -->
                        </div>
                    </div>
                    <div class="calc__date">
                        <h3 class="calc-subtitle">Дата и время:</h3>
                        <!-- <div class="calc__date__body">
                            <div class="select">
                                <div class="select__header">
                                    <span class="select-title" data-select-title="1">Как можно скорее</span>
                                    <span class="select-icon"><img
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calc/select_arrow.svg"
                                            alt="Изменить"></span>
                                </div>
                                <div class="select__body">
                                    <ul class="select__list">
                                        <li class="select-item _selected" data-select-item="1">Как можно скорее</li>
                                        <li class="select-item" data-select-item="2">Другое время</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="input" data-select-input="2">
                                <input class="" type="text" name="date">
                                <label for="date">Дата*</label>
                            </div>
                            <div class="input" data-select-input="2">
                                <input class="" type="text" name="time">
                                <label for="time">Время*</label>
                            </div>
                        </div> -->
                        <div class="calc__date__body">
                            <div class="radio radio-now-order">
                                <input id="calc-now-order" type="radio" name="date-info" value="now">
                                <label for="calc-now-order">Сейчас</label>
                                <div></div>
                            </div>
                            <div class="radio radio-pre-order">
                                <input id="calc-pre-order" type="radio" name="date-info" value="pre" checked>
                                <label for="calc-pre-order">Предварительный заказ</label>
                                <div></div>
                            </div>
                            <div class="calc__date__inputs">
                                <div class="calc__date__date">
                                    <div class="input">
                                        <input type="text" name="date-order">
                                    </div>
                                </div>
                                <div class="calc__date__time">
                                    <div class="input">
                                        <select name="date-hours" id="date-hours">
                                            <option value="00">00</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12" selected>12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                        </select>
                                    </div>
                                    <span>:</span>
                                    <div class="input">
                                        <select name="date-minutes" id="date-minutes">
                                            <option value="00">00</option>
                                            <option value="05">05</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                            <option value="30">30</option>
                                            <option value="35">35</option>
                                            <option value="40">40</option>
                                            <option value="45">45</option>
                                            <option value="50">50</option>
                                            <option value="55">55</option>
                                            <option value="60">60</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calc__services">
                        <h3 class="calc-subtitle">Доп. услуги:</h3>
                        <div class="calc__services__body">
                            <div class="select__more">
                                <div class="select__more__header" data-add-array="">
                                    <span class="select__more-title">Добавить</span>
                                    <span class="select__more-icon">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.875 3.30359L8.875 13.3036" stroke="#666666" stroke-width="2"
                                                stroke-linecap="round" />
                                            <path d="M3.875 8.30359L13.875 8.30359" stroke="#666666" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="select__more__body _show">
                                    <ul class="select__more__list">
                                        <li class="select__more-item" data-add-item="1" data-price-item="40">Вода<span> (+40₽)</span></li>
                                        <li class="select__more-item" data-add-item="2" data-price-item="100">Табличка с именем<span> (+100₽)</span></li>
                                        <li class="select__more-item" data-add-item="3" data-price-item="200">Детское кресло<span> (+200₽)</span></li>
                                        <li class="select__more-item" data-add-item="4" data-price-item="200">Курящий салон<span> (+200₽)</span></li>
                                        <li class="select__more-item" data-add-item="5" data-price-item="11">Доп. место для багажа<span> (+11₽)</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="calc__services__select"></ul>
                    </div>
                    <div class="calc__class">
                        <h3 class="calc-subtitle">Класс авто:</h3>
                        <div class="calc__class__block">
                            <ul class="calc__class__body">
                                <li class="calc__class-card" data-class-auto="Эконом" data-price-auto="22">
                                    <div class="calc__class-img"><img
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calc/class/economy-class.png"
                                            alt="Эконом класс"></div>
                                    <div class="calc__class__content">
                                        <h4 class="calc__class-title">Эконом</h4>
                                        <span class="calc__class-price">от <span>69</span> ₽</span>
                                    </div>
                                    <a href="#" class="calc__class-info"
                                        data-tooltip="Узнать подробнее о классе Эконом">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calc/more.svg"
                                            alt="Узнать подробнее">
                                    </a>
                                </li>
                                <li class="calc__class-card _selected" data-class-auto="Комфорт" data-price-auto="26">
                                    <div class="calc__class-img"><img
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calc/class/comfort-class.png"
                                            alt="Эконом класс"></div>
                                    <div class="calc__class__content">
                                        <h4 class="calc__class-title">Комфорт</h4>
                                        <span class="calc__class-price">от <span>149</span> ₽</span>
                                    </div>
                                    <a href="#" class="calc__class-info"
                                        data-tooltip="Узнать подробнее о классе Комфорт">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calc/more.svg"
                                            alt="Узнать подробнее">
                                    </a>
                                </li>
                                <li class="calc__class-card" data-class-auto="Бизнес" data-price-auto="35">
                                    <div class="calc__class-img"><img
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calc/class/business-class.png"
                                            alt="Комфорт класс"></div>
                                    <div class="calc__class__content">
                                        <h4 class="calc__class-title">Бизнес</h4>
                                        <span class="calc__class-price">от <span>259</span> ₽</span>
                                    </div>
                                    <a href="#" class="calc__class-info"
                                        data-tooltip="Узнать подробнее о классе Бизнес">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calc/more.svg"
                                            alt="Узнать подробнее">
                                    </a>
                                </li>
                                <li class="calc__class-card" data-class-auto="Минивэн" data-price-auto="40">
                                    <div class="calc__class-img"><img
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calc/class/minivan-class.png"
                                            alt="Минивэн"></div>
                                    <div class="calc__class__content">
                                        <h4 class="calc__class-title">Минивэн</h4>
                                        <span class="calc__class-price">от <span>259</span> ₽</span>
                                        <!-- <div class="calc__class-select">
                                        <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.303589" width="22" height="22" rx="11" fill="#89AB92"/>
                                            <path d="M6.625 12.9907L9.58588 16L15.625 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        </div> -->
                                    </div>
                                    <a href="#" class="calc__class-info" data-tooltip="Узнать подробнее о Минивэне">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calc/more.svg"
                                            alt="Узнать подробнее">
                                    </a>
                                </li>
                                <li class="calc__class-plug"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="calc__person" style="display:none;">
                    <div class="calc__person__contacts">
                        <h3 class="calc-subtitle">Ваши контакты:</h3>
                        <div class="calc__person__contacts__body">
                            <div class="input">
                                <input id="calc-name" class="input-upper-case _req" type="text" name="user_name">
                                <label for="calc-name">Ваше имя*</label>
                            </div>
                            <div class="input">
                                <input id="calc-phone" class="_req" type="tel" name="user_phone">
                                <label for="calc-phone">Номер*</label>
                            </div>
                        </div>
                        <div class="calc__person__contacts-textarea">
                            <div class="textarea">
                                <textarea id="calc-message" class="_req" name="user_message"></textarea>
                                <label for="calc-message">Сообщение</label>
                            </div>
                        </div>
                    </div>
                    <div class="calc__payment">
                        <h3 class="calc-subtitle">Способ оплаты:</h3>
                        <div class="calc__date__body">
                            <div class="select">
                                <div class="select__header">
                                    <span class="select-title" data-select-title="1" id="payment-method">Наличными
                                        водителю</span>
                                    <span class="select-icon"><img
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calc/select_arrow.svg"
                                            alt="Изменить"></span>
                                </div>
                                <div class="select__body">
                                    <ul class="select__list">
                                        <li class="select-item _selected" data-select-item="1">Наличными водителю</li>
                                        <li class="select-item" data-select-item="2">Перевод по карте</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="input" data-select-input="2">
                            <input class="_req" type="text" name="where-from">
                            <label for="where-from">Дата*</label>
                            </div>
                            <div class="input" data-select-input="2">
                            <input class="_req" type="text" name="where-from">
                            <label for="where-from">Время*</label>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="calc__footer">
                    <div class="calc__footer__info">
                        <span class="calc__footer-total">Общая цена: <span id="calc-total">-</span></span>
                        <!-- <span class="calc__footer-route">Расстояние: <span id="calc-route">-</span></span> -->
                        <!-- <span class="calc__footer-time">Время в пути: <span id="calc-time">-</span></span> -->
                    </div>
                    <div class="calc__footer__buttons">
                        <button class="btn-outline calc__footer-btn calc__footer-btn-prev _hidden">Назад</button>
                        <button class="btn calc__footer-btn calc__footer-btn-next">Оформить заказ</button>
                        <button class="btn calc__footer-btn calc__footer-btn-order submit _hidden">
                            <span class="submit-text">Заказать</span>
                            <span class="submit-loader">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M26 14C26 16.3734 25.2962 18.6935 23.9776 20.6668C22.6591 22.6402 20.7849 24.1783 18.5922 25.0866C16.3995 25.9948 13.9867 26.2324 11.6589 25.7694C9.33114 25.3064 7.19295 24.1635 5.51472 22.4853C3.83649 20.8071 2.6936 18.6689 2.23058 16.3411C1.76755 14.0133 2.00519 11.6005 2.91345 9.4078C3.8217 7.21509 5.35977 5.34094 7.33316 4.02236C9.30655 2.70379 11.6266 2 14 2"
                                        stroke="#333333" stroke-width="4" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/moment.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/daterangepicker.min.js"></script>
