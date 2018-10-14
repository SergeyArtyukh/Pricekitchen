<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="initial-scale=1,minimum-scale=1,maximum-scale=1,width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ config('app.source_uri').mix('style/text-page-style.css') }}">
</head>
<body>
    <div id="root">


        <header class="tm-header">
            <div class="tm-header-top">
                <div class="uk-container uk-height-1-1">
                    <div class="">
                        <div class="uk-grid uk-height-1-1 uk-flex-middle" uk-grid>
                            <div class="uk-width-auto@m">
                                <a class="uk-logo" href="/"><img src="/img/logo.png" /></a>
                            </div>
                            <div class="uk-width-expand@m">
                                <form class="uk-search uk-search-main">
                                    <i class="uk-search-icon-flip" uk-search-icon></i>
                                    <input class="uk-search-input" type="search" placeholder="Найдем кухню мечты ?">
                                </form>
                            </div>
                            <div class="uk-width-auto@m">
                                <div class="uk-subnav tm-login-box uk-flex-middle">
                                    <div class="tm-login-box-img"><img src="/img/login-icon.png" /></div>
                                    <div class="tm-login-account"><a href="#">Татьяна Маннибаева</a><i class="icon-arrow-up5"></i></div>
                                    <div uk-dropdown="mode: click;">
                                        <ul class="uk-nav uk-dropdown-nav">
                                            <li class="uk-active"><a href="#">Профиль</a></li>
                                            <li><a href="#">Сообщения</a></li>
                                            <li><a href="#">Заметки</a></li>
                                            <li><a href="#">Заказы</a></li>
                                            <li><a href="#">Настройки</a></li>
                                            <li class="uk-nav-divider"></li>
                                            <li><a href="http://pricekitchen.loc/">Выход</a></li>
                                        </ul>
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
                                                    <li><a href="#">Компании</a></li>
                                                    <li><a href="#">Журнал</a></li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="uk-width-auto@m tm-navbar-button">
                                    <button type="button" class="uk-button">Добавить компанию</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="tm-content">
            <div class="uk-container">
                <div class="uk-grid" uk-grid>
                    <div class="uk-width-3-4@m tm-text-box">
                        <div class="tm-rate-container">
                            <div class="tm-title-text-box"><strong><h1>Мебель для прихожей - современная, удобная и практичная</h1></strong></div>
                                <div class="tm-rate-box">
                                    <span>14.06.2018</span>
                                    <span><i class="icon-eye8"></i>123456</span>
                                    <span><i class="icon-comments"></i>2</span>
                                </div>
                                <div class="uk-width-auto@m tm-leftnav-rate">
                                    <span class="tm-rate rate-4">
                                        <i class="icon-star-full2"></i>
                                        <i class="icon-star-full2"></i>
                                        <i class="icon-star-full2"></i>
                                        <i class="icon-star-half"></i>
                                        <i class="icon-star-empty3"></i>
                                    </span>
                                    <h5>4,5</h5>
                                    <p>(18 голосов)</p>
                                    <i class="icon-arrow-down12"></i>
                                </div>
                        </div>
                        <div class="tm-base-text-container">
                            <p>Для того что бы максимально практично использовать протанство небольших комнат, в последнее время люди выбирает все чаще гловые шкафы-купе, способоные максимально компенсировать хранение многих вещей без ущерба интерьеру квартиры, дома, офиса.</p>
                            <p>Во ремя обустройства своих квадратов, многие владельци хотят спроектировать как можо лучше  таки образом, то бы дальнейшая експуалатция была максимально комфортна , а интерье комнаты вызывал толкь оположительные емоциии.</p>
                            <p>Часто самое важное - оптимизация каждого квадрата жилья. Посколько желаеое иногда нерееально а свободное место можно использовать в свое русло, призодиться выискивать всевозможные интерпретации</p>
                            <img src="/img/img-text-box.png" alt="#">
                            <p>Для того что бы максимально практично использовать протанство небольших комнат, в последнее время люди выбирает все чаще гловые шкафы-купе, способоные максимально компенсировать хранение многих вещей без ущерба интерьеру квартиры, дома, офиса. </p>
                            <p>Во ремя обустройства своих квадратов, многие владельци хотят спроектировать как можо лучше  таки образом, то бы дальнейшая експуалатция была максимально комфортна , а интерье комнаты вызывал толкь оположительные емоциии.</p>
                            <p>Часто самое важное - оптимизация каждого квадрата жилья. Посколько желаеое иногда нерееально а свободное место можно использовать в свое русло, призодиться выискивать всевозможные интерпретации</p>
                            <p class="tm-italic-item-text-box">Часто самое важное - оптимизация каждого квадрата жилья. Посколько желаеое иногда нерееально а свободное место можно использовать в свое русло, призодиться выискивать всевозможные интерпретации</p>
                            <p>Для того что бы максимально практично использовать протанство небольших комнат, в последнее время люди выбирает все чаще гловые шкафы-купе, способоные максимально компенсировать хранение многих вещей без ущерба интерьеру квартиры, дома, офиса. </p>
                            <p>Во ремя обустройства своих квадратов, многие владельци хотят спроектировать как можо лучше  таки образом, то бы дальнейшая експуалатция была максимально комфортна , а интерье комнаты вызывал толкь оположительные емоциии.</p>
                            <p>Часто самое важное - оптимизация каждого квадрата жилья. Посколько желаеое иногда нерееально а свободное место можно использовать в свое русло, призодиться выискивать всевозможные интерпретации</p>
                            <p><h4 class="tm-title-base-text">Заголовок 1</h4></p>
                            <p>Для того что бы максимально практично использовать протанство небольших комнат, в последнее время люди выбирает все чаще гловые шкафы-купе, способоные максимально компенсировать хранение многих вещей без ущерба интерьеру квартиры, дома, офиса. </p>
                            <ul class="tm-list-base-text">
                                <li>Вы будете родолжать оставатьсянесчатным до тех пор, пока вы считаете, что счасливыми делают вас другие.</li>
                                <li>Видимый из неба лес кажеться что это луна, но это наоборот потому что ты не астро-физик.</li>
                                <li>Вы будете родолжать оставатьсянесчатным до тех пор, пока вы считаете, что счасливыми делают вас другие.</li>
                                <li>Видимый из неба лес кажеться что это луна, но это наоборот потому что ты не астро-физик.</li>
                            </ul>
                            <p><h4 class="tm-title-base-text">Заголовок 2</h4></p>
                            <p>Для того что бы максимально практично использовать протанство небольших комнат, в последнее время люди выбирает все чаще гловые шкафы-купе, способоные максимально компенсировать хранение многих вещей без ущерба интерьеру квартиры, дома, офиса. </p>
                            <ul class="tm-list-base-text">
                                <li>Вы будете родолжать оставатьсянесчатным до тех пор, пока вы считаете, что счасливыми делают вас другие.</li>
                                <li>Видимый из неба лес кажеться что это луна, но это наоборот потому что ты не астро-физик.</li>
                                <li>Вы будете родолжать оставатьсянесчатным до тех пор, пока вы считаете, что счасливыми делают вас другие.</li>
                                <li>Видимый из неба лес кажеться что это луна, но это наоборот потому что ты не астро-физик.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-1-4@m tm-sidebar">
                        <div class="tm-border-sidebar">
                            <div class="tm-box1-sidebar">
                                    <img src="/img/item1-sidebar-text-page.jpg" alt="">
                                    <img src="/img/item-logo-sidebar-text-page.png" alt="logo">
                                    <div>Здесь будет баннер,<br>на которых захочется<br>кликнуть</div>
                            </div>
                        </div>
                        <div class="tm-box-item1-sidebar">
                            <div class="tm-border-sidebar">
                                <div class="tm-img-box-item2">
                                    <img src="/img/img-item4-3-contentbar.jpg" alt="">
                                    <div class="tm-text-img-items">
                                        <span>4.0</span>
                                        <div id="tm-text-item2-sidebar"><span>Кухонный гарнитур</span></div>
                                    </div>
                                </div>
                                <div class="tm-base-text-sidebar-item2">
                                    <p>Кухни с фасадами из массива <br>ольхи</p>
                                    <p>Как готовить качели своими руками, что бы понраилось е только детям но и взрослым.</p>
                                    <div class="tm-icon-box-item1">
                                        <span>14.06.2018</span>
                                        <span><i class="icon-eye8"></i>123456</span>
                                        <span><i class="icon-comments"></i>2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tm-box-item1-sidebar">
                            <div class="tm-border-sidebar">
                                <div class="tm-img-box-item2">
                                    <img src="/img/img-item4-3-contentbar.jpg" alt="">
                                    <div class="tm-text-img-items">
                                        <span>4.0</span>
                                        <div id="tm-text-item2-sidebar"><span>Кухонный гарнитур</span></div>
                                    </div>
                                </div>
                                <div class="tm-base-text-sidebar-item2">
                                    <p>Кухни с фасадами из массива <br>ольхи</p>
                                    <p>Как готовить качели своими руками, что бы понраилось е только детям но и взрослым.</p>
                                    <div class="tm-icon-box-item1">
                                        <span>14.06.2018</span>
                                        <span><i class="icon-eye8"></i>123456</span>
                                        <span><i class="icon-comments"></i>2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tm-box-item1-sidebar">
                            <div class="tm-border-sidebar">
                                <div class="tm-img-box-item2">
                                    <img src="/img/img-item4-3-contentbar.jpg" alt="">
                                    <div class="tm-text-img-items">
                                        <span>4.0</span>
                                        <div id="tm-text-item2-sidebar"><span>Кухонный гарнитур</span></div>
                                    </div>
                                </div>
                                <div class="tm-base-text-sidebar-item2">
                                    <p>Кухни с фасадами из массива ольхи</p>
                                    <p>Как готовить качели своими руками, что бы понраилось е только детям но и взрослым.</p>
                                    <div class="tm-icon-box-item1">
                                        <span>14.06.2018</span>
                                        <span><i class="icon-eye8"></i>123456</span>
                                        <span><i class="icon-comments"></i>2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tm-box-item1-sidebar">
                            <div class="tm-border-sidebar">
                                <div class="tm-img-box-item2">
                                    <img src="/img/img-item4-3-contentbar.jpg" alt="">
                                    <div class="tm-text-img-items">
                                        <span>4.0</span>
                                        <div id="tm-text-item2-sidebar"><span>Кухонный гарнитур</span></div>
                                    </div>
                                </div>
                                <div class="tm-base-text-sidebar-item2">
                                    <p>Кухни с фасадами из массива <br>ольхи</p>
                                    <p>Как готовить качели своими руками, что бы понраилось е только детям но и взрослым.</p>
                                    <div class="tm-icon-box-item1">
                                        <span>14.06.2018</span>
                                        <span><i class="icon-eye8"></i>123456</span>
                                        <span><i class="icon-comments"></i>2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tm-same-goods-box">
            <div class="uk-container">
                <div class="uk-position-relative tm-text-box-same-good">
                    <a href="#" class="tm-slider-link-all"><i class="icon-list2 uk-margin-small-right"></i>Все товары из раздела</a>
                    <h3 class="uk-text-center">Похожие товары</h3>
                </div>
                <div class="uk-position-relative uk-visible-toggle tm-box-items-slider" uk-slider>
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
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

                    <a class="uk-position-center-left" href="#" uk-slider-item="previous"><i class="icon-arrow-left5"></i></a>
                    <a class="uk-position-center-right" href="#" uk-slider-item="next"><i class="icon-arrow-right5"></i></a>
                </div>
            </div>
        </div>

        <div class="tm-comment-box">
                <div class="uk-container">
                    <div class="uk-grid tm-first-column-comment-box" uk-grid>
                        <div class="uk-width-auto@m">
                            <h3>Комментарии</h3>
                        </div>
                        <div class="uk-width-expand@m">
                            <a href="#"><i class="icon-pencil uk-margin-small-right"></i>Оставить комментарий</a>
                        </div>
                    </div>
                    <div class="">
                        <article class="uk-comment">
                            <div class="uk-comment-header uk-grid-medium uk-flex-middle tm-header-comment-box" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-comment-avatar" src="/img/comment-photo.jpg" width="80" height="80" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-comment-meta">
                                        <span class="uk-comment-title">Илон Маск</span>
                                        <span>14.06.2016</span>
                                    </div>
                                    <div class="uk-comment-body">
                                        <p>Спасибо за статью. Очень полезные мысли,которые можно использовать у себя дома!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-comment-header uk-grid-medium uk-flex-middle tm-footer-comment-box" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-comment-avatar" src="/img/comment-photo.jpg" width="80" height="80" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-comment-meta">
                                        <span class="uk-comment-title">Илон Теслович</span>
                                        <span>14.06.2016</span>
                                    </div>
                                    <div class="uk-comment-body">
                                        <p>Для того что бы максимально практично использовать протанство небольших комнат, в последнее время люди выбирает все чаще гловые шкафы-купе,</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            <div>

                <form class="tm-form uk-container" method="post">
                    <div class="uk-grid uk-child-width-1-1@p uk-child-width-1-3@m" uk-grid>
                        <div class="">
                            <label class="uk-form-label" for="comment.first_name">Ваше имя:</label>
                            <div id="tm-padding-form-box">&nbsp;</div>
                            <input type="text" name="first_name" id="comment.first_name" class="uk-input" value="">
                        </div>
                        <div class="">
                            <label class="uk-form-label" for="comment.last_name">Ваше фамилия:</label>
                            <div id="tm-padding-form-box">&nbsp;</div>
                            <input type="text" name="last_name" id="comment.last_name" class="uk-input" value="">
                        </div>
                        <div class="">
                            <label class="uk-form-label" for="comment.email">Ваше email:</label>
                            <div id="tm-padding-form-box">&nbsp;</div>
                            <input type="email" name="email" id="comment.email" class="uk-input" value="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="comment.text">Напишите свой комментарий</label>
                        <div id="tm-padding-form-box">&nbsp;</div>
                        <textarea name="text" rows="8" id="comment.text" class="uk-textarea tm-placeholder-form" placeholder="Здесь вы можете написать свой комментарий"></textarea>
                    </div>
                    <div class="uk-margin">
                        <button type="submit" class="uk-button uk-button-border tm-button-form">Отправить</button>
                    </div>
                </form>

            </div>
        </div>

        <div class="tm-footer-box">
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
                <div class="tm-footer-copyright-wrap">
                    <div class="uk-container">
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
    <script type="text/javascript" src="{{ config('app.source_uri').mix('js/product.js') }}"></script>
</body>
