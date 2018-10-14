<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="initial-scale=1,minimum-scale=1,maximum-scale=1,width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ config('app.source_uri').mix('style/home-page.css') }}">
</head>
<body>
    <div id="root">

        <div>
            <div class="tm-header">
                <div class="tm-header-top">
                    <div class="uk-container uk-height-1-1">
                        <div class="">
                            <div class="uk-grid uk-height-1-1 uk-flex-middle" uk-grid>
                                <div class="uk-width-auto@m">
                                    <a class="uk-logo" href="/"><img  class="tm-logotype" src="/img/logo.png" /></a>
                                </div>
                                <div class=" tm-search-box uk-width-expand@m">
                                    <form class="uk-search uk-search-main">
                                        <i class="uk-search-icon-flip" uk-search-icon></i>
                                        <input class="uk-search-input tm-search-input" type="search" placeholder="Найдем кухню мечты ?">
                                    </form>
                                </div>
                                <div class="uk-width-auto@m">
                                    <div class="uk-subnav tm-login-box">
                                        <div class="tm-div-login-box">
                                            <img class="tm-login-box-img" src="/img/login-icon.png" />
                                        </div>
                                        <div class="uk-flex-middle tm-login-regist-box">
                                            <div class="tm-login-place"><a href="http://pricekitchen.loc/catalog/kitchen/savana">Вход</a></div>
                                            <div class="tm-regist-place" ><a href="#">Регистрация</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tm-header-navigation">
                    <div class="uk-container uk-height-1-1">
                        <div class="uk-grid uk-flex-middle uk-height-1-1" uk-grid>
                            <div class="uk-width-expand@m tm-navbar-container">
                                <div>
                                    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
                                        <div class="uk-navbar-left">
                                            <ul class="uk-navbar-nav tm-subnav-primary">
                                                <li class="tm-catalog-navbar-list">
                                                    <a href="#">Каталог</a>
                                                    <div class="uk-navbar-dropdown">
                                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                                            <li class="uk-active"><a href="#">Active</a></li>
                                                            <li><a href="#">Item</a></li>
                                                            <li><a href="#">Item</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a class="tm-second-child-undernav" href="#">Компании</a></li>
                                                <li><a class="tm-third-child-undernav" href="#">Журнал</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="uk-width-auto@m tm-navbar-button">
                                <button type="button" class="uk-button tm-add-company">Добавить компанию</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="tm-container-big-nav">
        <div class="tm-navbar-box">
            <div class="uk-container tm-container-navbar">
                <div class=" uk-grid" uk-grid>
                    <div class="tm-left-items-box uk-width-1-4@m">
                        <div class="tm-first-item-box">
                            <div class=" tm-item-left-first-navbar uk-height-small uk-flex-middle uk-background-cover" data-src="img/img-item3-contentbar.jpg" uk-img>
                              <p>Кухни эконом <br>класса</p>
                              <p>Более 400 предложений</p>
                            </div>
                        </div>
                        <div>
                            <div class=" tm-item-left-second-navbar uk-height-small  uk-flex-middle uk-background-cover uk-light" uk-img>
                                <p>Кухни эконом <br>класса</p>
                                <p>Более 400 предложений</p>
                                <div id="tm-2300-slider-number">2300</div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-4@m tm-box-middle-navbar">
                        <div class="tm-item-middle-navbar uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="img/img-item3-contentbar.jpg" uk-img>
                            <div class="tm-circle-slide">
                                <p>Кухни премиум <br>класса</p>
                                <p>Более 400 предложений</p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-2-4@m">
                        <div class="uk-position-relative uk-visible-toggle" uk-slideshow="animation: fade">
                            <ul class=" tm-item-slider-navbar uk-slideshow-items">
                                <li>
                                    <img src="img/img-item3-contentbar.jpg" alt="" uk-cover>
                                    <div class="tm-container-slider-bottom uk-overlay uk-overlay-primary uk-position-bottom">
                                        <h3 class="uk-margin-remove">Белорусские кухни БО3</h3>
                                        <p class="uk-margin-remove">Высокое качество по доступной цене</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="img/img-item4-2-contentbar.jpg" alt="" uk-cover>
                                    <div class="tm-container-slider-bottom uk-overlay uk-overlay-primary uk-position-bottom">
                                        <h3 class="uk-margin-remove">Белорусские кухни БО3</h3>
                                        <p class="uk-margin-remove">Высокое качество по доступной цене</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="img/img-item4-3-contentbar.jpg" alt="" uk-cover>
                                    <div class="tm-container-slider-bottom uk-overlay uk-overlay-primary uk-position-bottom">
                                        <h3 class="uk-margin-remove">Белорусские кухни БО3</h3>
                                        <p class="uk-margin-remove">Высокое качество по доступной цене</p>
                                    </div>
                                </li>
                            </ul>

                            <a class="tm-arrow-left-slider uk-position-small" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                            <a class="tm-arrow-right-slider uk-position-small" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-under-navbar-box">
            <div class="uk-container tm-container-under-navbar">
                <div class="tm-under-navbar-items-box uk-grid" uk-grid>
                    <div class=" tm-box-item-UNB uk-width-1-5@m">
                        <div>
                            <img src="/img/item1.png" alt="#"/>
                        </div>
                        <a src="#">Кухонные гарнитуры</a><br>
                        <span>3800 штук</span>
                    </div>
                    <div class="tm-box-item-UNB uk-width-1-5@m">
                        <div>
                            <img src="/img/item2.png" alt="#"/>
                        </div>
                        <a src="#">Кухонные уголки</a><br>
                        <span>357 штук</span>
                    </div>
                    <div class="tm-box-item-UNB uk-width-1-5@m">
                        <div>
                            <img src="/img/item3.png" alt="#"/>
                        </div>
                        <a src="#">Кухонные столы</a><br>
                        <span>380 штук</span>
                    </div>
                    <div class="tm-box-item-UNB uk-width-1-5@m">
                        <div>
                            <img src="/img/item4.png" alt="#"/>
                        </div>
                        <a src="#">Стулья и табуреты</a><br>
                        <span>1237 штук</span>
                    </div>
                    <div class="tm-box-item-UNB uk-width-1-5@m">
                        <div>
                            <img src="/img/item5.png" alt="#"/>
                        </div>
                        <a src="#">Вытяжки</a><br>
                        <span>357 штук</span>
                    </div>
                </div>
            </div>
        </div>
</DIV>
        <div class="tm-list-goods-box">
            <div class="uk-container">
                <div class="tm-text-box-same-good">
                    <a href="#" class="tm-slider-link-all"><i class="icon-list2 uk-margin-small-right"></i>Все гарнитуры</a>
                    <h3 class="uk-text-center">Популярные гарнитуры</h3>
                </div>
                <div class="tm-box-items-slider">
                    <ul class="uk-child-width-1-4@m uk-grid" uk-scrollspy="target: > li; cls:uk-animation-fade; delay: 10000 repeat: true" uk-grid>
                        <li class="tm-item-box-slider">
                            <img src="/img/img-item4-contentbar.jpg" alt="">
                            <div class="tm-block1-same-goods-slider">
                                <span>4.0</span>
                                <a href="#">Добавить в избранное</a>
                            </div>
                            <div class="tm-block2-same-goods-slider">
                                <p>Евромебель</p>
                                <p>Кухня с фасадами из массива ольхи</p>
                                <p><strong>24 000 р.</strong></p>
                            </div>
                        </li>
                        <li class="tm-item-box-slider">
                            <img src="/img/img-item4-contentbar.jpg" alt="">
                            <div class="tm-block1-same-goods-slider">
                                <span>4.0</span>
                                <a href="#">Добавить в избранное</a>
                            </div>
                            <div class="tm-block2-same-goods-slider">
                                <p>Евромебель</p>
                                <p>Кухня с фасадами из массива ольхи</p>
                                <p><strong>24 000 р.</strong></p>
                            </div>
                        </li>
                        <li class="tm-item-box-slider">
                            <img src="/img/img-item4-contentbar.jpg" alt="">
                            <div class="tm-block1-same-goods-slider">
                                <span>4.0</span>
                                <a href="#">Добавить в избранное</a>
                            </div>
                            <div class="tm-block2-same-goods-slider">
                                <p>Евромебель</p>
                                <p>Кухня с фасадами из массива ольхи</p>
                                <p><strong>24 000 р.</strong></p>
                            </div>
                        </li>
                        <li class="tm-item-box-slider-regist">
                                        <p>Расскажите о<br>товарах вашей<br>компании</p>
                                        <p>Добавьте предложения<br>своей компании в общий<br>каталог</p>
                                        <button class="uk-button uk-button-primary tm-button-registration-box">Регистрация</button>
                                        <div class="tm-registration-box-popular-goods"><img src="/img/registration-img.png" alt=""></div>
                        </li>
                        <li class="tm-item-box-slider">
                            <img id="tm-red-price-img" src="/img/red-price.png" alt="#">
                            <img src="/img/img-item4-contentbar.jpg" alt="">
                            <div class="tm-block1-same-goods-slider">
                                <span>4.0</span>
                                <a href="#">Добавить в избранное</a>
                            </div>
                            <div class="tm-block2-same-goods-slider">
                                <p>Евромебель</p>
                                <p>Кухня с фасадами из массива ольхи</p>
                                <p class="tm-red-price">
                                <strong><strike>24 000 p.</strike></strong>
                                <strong>23 000 р.</strong>
                                </p>
                            </div>
                        </li>
                        <li class="tm-item-box-slider">
                            <img src="/img/img-item4-contentbar.jpg" alt="">
                            <div class="tm-block1-same-goods-slider">
                                <span>4.0</span>
                                <a href="#">Добавить в избранное</a>
                            </div>
                            <div class="tm-block2-same-goods-slider">
                                <p>Евромебель</p>
                                <p>Кухня с фасадами из массива ольхи</p>
                                <p><strong>24 000 р.</strong></p>
                            </div>
                        </li>
                        <li class="tm-item-box-slider">
                            <img src="/img/img-item4-contentbar.jpg" alt="">
                            <div class="tm-block1-same-goods-slider">
                                <span>4.0</span>
                                <a href="#">Добавить в избранное</a>
                            </div>
                            <div class="tm-block2-same-goods-slider">
                                <p>Евромебель</p>
                                <p>Кухня с фасадами из массива ольхи</p>
                                <p><strong>24 000 р.</strong></p>
                            </div>
                        </li>
                        <li class="tm-item-box-slider">
                            <img src="/img/img-item4-contentbar.jpg" alt="">
                            <div class="tm-block1-same-goods-slider">
                                <span>4.0</span>
                                <a href="#">Добавить в избранное</a>
                            </div>
                            <div class="tm-block2-same-goods-slider">
                                <p>Евромебель</p>
                                <p>Кухня с фасадами из массива ольхи</p>
                                <p><strong>24 000 р.</strong></p>
                            </div>
                        </li>
                </div>
            </div>
        </div>
        <div class="tm-same-goods-box">
            <div class="uk-container">
                <div class="tm-title-same-goods">Недавно добавленые товары</div>
                <div class="tm-box-items-slider">
                    <ul class="uk-child-width-1-4@m uk-grid" uk-scrollspy="target: > li; cls:uk-animation-fade; delay: 250 repeat: true" uk-grid uk-grid>
                        <li class="tm-item-box-slider">
                            <img src="/img/img-item4-contentbar.jpg" alt="">
                            <div class="tm-block1-same-goods-slider">
                                <span>4.0</span>
                                <a href="#">Добавить в избранное</a>
                            </div>
                            <div class="tm-block2-same-goods-slider">
                                <p>Евромебель</p>
                                <p>Кухня с фасадами из массива ольхи</p>
                                <p><strong>24 000 р.</strong></p>
                            </div>
                        </li>
                        <li class="tm-item-box-slider">
                            <img src="/img/img-item4-contentbar.jpg" alt="">
                            <div class="tm-block1-same-goods-slider">
                                <span>4.0</span>
                                <a href="#">Добавить в избранное</a>
                            </div>
                            <div class="tm-block2-same-goods-slider">
                                <p>Евромебель</p>
                                <p>Кухня с фасадами из массива ольхи</p>
                                <p><strong>24 000 р.</strong></p>
                            </div>
                        </li>
                        <li class="tm-item-box-slider">
                            <img src="/img/img-item4-contentbar.jpg" alt="">
                            <div class="tm-block1-same-goods-slider">
                                <span>4.0</span>
                                <a href="#">Добавить в избранное</a>
                            </div>
                            <div class="tm-block2-same-goods-slider">
                                <p>Евромебель</p>
                                <p>Кухня с фасадами из массива ольхи</p>
                                <p><strong>24 000 р.</strong></p>
                            </div>
                        </li>
                        <li class="tm-item-box-slider">
                            <img src="/img/img-item4-contentbar.jpg" alt="">
                            <div class="tm-block1-same-goods-slider">
                                <span>4.0</span>
                                <a href="#">Добавить в избранное</a>
                            </div>
                            <div class="tm-block2-same-goods-slider">
                                <p>Евромебель</p>
                                <p>Кухня с фасадами из массива ольхи</p>
                                <p><strong>24 000 р.</strong></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tm-button-more-same-goods"><a href="#">Показать еще</a></div>
            </div>
        </div>
        <div class="tm-text-box-prefooter">
            <div class="uk-container">
                <div class="tm-title-text-box-prefooter">PriceKitchen - Ваш гид в мире кухонь!</div>
                <div class="uk-grid tm-text-prefooter" uk-grid>
                    <div class="uk-width-1-2@m">Объединение выросло из кооператива «Фобос», созданного в 1996 году. Изначально в нем работало пять человек. На сегодняшний день на различных предприятиях Группы компаний «ЗОВ» работает более 2000 человек, и в сумме объединение имеет около</div>
                    <div class="uk-width-1-2@m">50 тысяч квадратных метров производственных площадей. Благодаря успешно проводимой политике привлечения иностранных инвестиций, наши зарубежные партнеры – это  крупные компании Польши, Италии, России, Германии.</div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <footer class="tm-footer">
                    <div class="tm-footer-navigation-wrap">
                        <div class="uk-container">
                            <div class="uk-column-1-4@m tm-footer-box">
                                <div class="tm-footer-same-box uk-grid" uk-grid>
                                    <h4>Кухонные гарнитуры</h4>
                                    <ul>
                                        <li><a href="#">Классические кухни</a></li>
                                        <li><a href="#">Прованс</a></li>
                                        <li><a href="#">Современные кухни</a></li>
                                    </ul>
                                </div>
                                <div class="tm-footer-same-box uk-grid" uk-grid>
                                    <h4>Столы и стулья</h4>
                                    <ul>
                                        <li><a href="#">Деревянные столы</a></li>
                                        <li><a href="#">Стеклянные столы</a></li>
                                    </ul>
                                </div>
                                <div class="tm-footer-same-box uk-grid" uk-grid>
                                    <h4>Столы и стулья</h4>
                                    <ul>
                                        <li><a href="#">Мебельные комплектующие</a></li>
                                        <li><a href="#">Фасады</a></li>
                                        <li><a href="#">Витрины</a></li>
                                        <li><a href="#">Столешницы</a></li>
                                        <li><a href="#">Стеновые панели</a></li>
                                        <li><a href="#">Кромки и отбортовки</a></li>
                                        <li><a href="#">Мойки</a></li>
                                        <li><a href="#">Фурнитуры</a></li>
                                    </ul>
                                </div>
                                <div class="tm-footer-same-box uk-grid " uk-grid>
                                    <h4>Кухонные уголки</h4>
                                    <ul>
                                        <li><a href="#">Мебельные комплектующие</a></li>
                                        <li><a href="#">Фасады</a></li>
                                        <li><a href="#">Витрины</a></li>
                                        <li><a href="#">Столешницы</a></li>
                                        <li><a href="#">Стеновые панели</a></li>
                                        <li><a href="#">Кромки и отбортовки</a></li>
                                        <li><a href="#">Мойки</a></li>
                                        <li><a href="#">Фурнитуры</a></li>
                                    </ul>
                                </div>
                                <div class="tm-footer-same-box-last uk-grid" uk-grid>
                                    <h4>О сайте</h4>
                                    <ul>
                                        <li><a href="#">Что такое PriceKitchen?</a></li>
                                        <li><a href="#">Реквизиты</a></li>
                                        <li><a href="#">Работа и вакансии</a></li>
                                        <li><a href="#">Контакты</a></li>
                                        <li>&nbsp;</li>
                                        <li>&nbsp;</li>
                                        <li>&nbsp;</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div>
            <div class="tm-footer-copyright-wrap">
                <div class="uk-container tm ">
                    <div class="uk-grid" uk-grid>
                        <div class="uk-width-auto@m">
                            <a href="/" class="uk-logo">
                                <img src="/img/logo.png" alt="Logo">
                            </a>
                        </div>
                        <div class="uk-width-expand@m uk-text-right tm-footer-copyright-text">
                            <span>@ 2008-2016 pricekitchen Все права защищены</span>
                            <span><a href="#" uk-totop uk-scroll></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<script type="text/javascript" src="{{ config('app.source_uri').mix('js/home.js') }}"></script>
</body>
