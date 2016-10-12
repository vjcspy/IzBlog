<div class="box">
    <!-- BEGIN topbar-->
    <div class="topbar js-topbar">
        <div class="container">
            <div class="topbar__row">
                <button class="header__menu header__menu--mob js-menu-btn">
                    <svg class="header__menu-svg">
                        <use xlink:href="#icon-menu"></use>
                    </svg>
                </button>
                <!-- BEGIN nav block-->
                <nav class="nav js-nav nav--v1">
                    <ul class="nav__list">
                        <li class="nav__item nav__item--lvl-1 js-nav-item"><a href="{{url('izblog/believe')}}" class="nav__link">Trang Chủ</a></li>
                        @foreach($categories as $cat )
                            <li class="nav__item nav__item--lvl-1 js-nav-item"><a href="{{url('izblog/believe') . '?categoryId=' . $cat['id']}}"
                                                                                  class="nav__link">{{$cat['label']}}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- END topbar-->
    <!-- BEGIN HEADER-->
    <header class="header" style="display: none;">
        <div class="container">
            <div class="header__row">
                <a style="margin-left: 32%;" href="index.html" class="header__logo">
                    <svg class="header__logo-svg">
                        <img
                                src="/modules/themes/frontend.webelieve/assets/media-demo/events/logo.png" alt=""
                                class="nav__event-img"/>
                    </svg>
                </a>
                <!-- BEGIN toolbar-->
                <div class="toolbar toolbar--v1">
                    <div class="toolbar__lang js-toolbar-lang dropdown izhidden">
                        <button data-toggle="dropdown" type="button" class="dropdown-toggle toolbar__lang-btn">En</button>
                        <div class="dropdown-menu">
                            <div role="menu" class="toolbar__lang-dropdown"><a href="#" class="toolbar__lang-link">English</a><a href="#"
                                                                                                                                 class="toolbar__lang-link">Francais</a><a
                                        href="#" class="toolbar__lang-link">Italian</a><a href="#" class="toolbar__lang-link">Russian</a></div>
                        </div>
                    </div>
                    <div class="dropdown toolbar__auth-item js-auth-item izhidden">
                        <button data-toggle="dropdown" type="button" class="dropdown-toggle toolbar__auth-btn toolbar__auth-btn--login">
                            <svg class="toolbar__icon-user">
                                <use xlink:href="#icon-user"></use>
                            </svg>
                        </button>
                        <div class="dropdown-menu">
                            <div class="toolbar__auth-form js-auth-login-form">
                                <!-- BEGIN AUTH LOGIN-->
                                <form action="#" class="form form--auth form--login js-parsley">
                                    <h5 class="form__title">Login in your account</h5>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="login-username-dropdown" class="control-label">Username</label>
                                            <input type="text" name="username" id="login-username-dropdown" required="required"
                                                   data-parsley-trigger="keyup" data-parsley-minlength="6" data-parsley-validation-threshold="5"
                                                   data-parsley-minlength-message="Login should be at least 6 chars" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="login-password-dropdown" class="control-label">Password</label>
                                            <input type="password" name="password" id="login-password-dropdown" required="required"
                                                   class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button type="button" class="form__forgot js-auth-restore">Forgot password ?</button>
                                        <button type="submit" class="btn--flat form__submit">Sign in</button>
                                    </div>
                                    <div class="row"><span class="form__remember">
                          <input type="checkbox" id="remember-in-dropdown" class="in-checkbox"/>
                          <label for="remember-in-dropdown" class="in-label">Remember me</label></span><span class="form__links">Not a user yet?
                          <button type="button" class="js-auth-register">Get an account</button></span></div>
                                </form>
                                <!-- end of block .form-login-->
                                <!-- END FORM LOGIN-->
                            </div>
                            <div class="toolbar__auth-form js-auth-restore-form">
                                <!-- BEGIN AUTH RESTORE-->
                                <form action="#" class="form form--auth form--restore js-parsley">
                                    <h5 class="form__title">Reset password</h5>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="restore-email-dropdown" class="control-label">Enter your User Name or Email</label>
                                            <input type="email" name="email" id="restore-email-dropdown" required="required" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button type="submit" class="btn--flat form__submit">Reset password</button>
                                    </div>
                                    <div class="row"><span class="form__links">Back to
                          <button type="button" class="js-auth-login">Log In</button>or
                          <button type="button" class="js-auth-register">Registration</button></span>
                                        <!-- end of block .form__links-->
                                    </div>
                                </form>
                                <!-- end of block .form-restore-->
                                <!-- END FORM RESTORE-->
                            </div>
                            <div class="toolbar__auth-form js-auth-register-form">
                                <!-- BEGIN AUTH REGISTER-->
                                <form action="#" class="form form--auth form--register js-parsley">
                                    <h5 class="form__title">Sign up a new account</h5>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="register-name-dropdown" class="control-label">First name</label>
                                            <input type="text" name="username" id="register-name-dropdown" required="required" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="register-lastname-dropdown" class="control-label">Last name</label>
                                            <input type="text" name="name" id="register-lastname-dropdown" required="required" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="register-email-dropdown" class="control-label">E-mail</label>
                                            <input type="email" name="email" id="register-email-dropdown" required="required" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="register-password-dropdown" class="control-label">Password</label>
                                            <input type="password" name="password" id="register-password-dropdown" required="required"
                                                   class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="row"><span class="form__links">Back to
                          <button type="button" class="js-auth-login">Log In</button></span>
                                        <button type="submit" class="btn--flat form__submit">Sign up</button>
                                    </div>
                                </form>
                                <!-- end of block .form-register-->
                                <!-- END FORM REGISTER-->
                            </div>
                        </div>
                    </div>
                    <div class="toolbar__search js-toolbar-search izhidden">
                        <input type="text" placeholder="" class="form-control"/>
                        <button type="button" class="toolbar__search-btn js-toolbar-search-btn"></button>
                    </div>
                </div>
                <!-- END toolbar-->
            </div>
        </div>
    </header>
    <!-- END HEADER-->
    <!-- BEGIN BEFORE MAIN SECTION-->
    <!-- END BEFORE MAIN SECTION-->
    <!-- BEGIN MAIN SECTION-->
    <main class="main">
        <!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs" style="display: none">
            <div class="container">
                <ul>
                    <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Home</a></li>
                    <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link"></a></li>
                </ul>
            </div>
        </nav>
        <!-- END BREADCRUMBS-->
        <!-- BEGIN MAIN HEAD-->
        <header class="main__head">
            <h1 class="main__title"></h1>
        </header>
        <!-- END MAIN HEAD-->
        <div class="container">
            <div class="main__wrap" style="margin-top:0px !important; ">
                <!-- BEGIN MAIN CONTENT-->
                <div class="main__content">
                    <!-- BEGIN WIDGET-->
                    <div class="widget js-widget widget--card widget--panel" style="padding-left: 0;padding-right: 0">

                        <div id="jssor_1"
                             style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
                            <!-- Loading Screen -->
                            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                <div
                                        style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                <div style="position:absolute;display:block;background:url('/modules/themes/frontend.webelieve/assets/img-slider/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;
                                height:100%;"></div>
                            </div>
                            <div data-u="slides"
                                 style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
                                <div data-p="225.00" style="display: none;">
                                    <img data-u="image" src="/modules/themes/frontend.webelieve/assets/img-slider/main/1.jpg"/>
                                </div>
                                <div data-p="225.00" data-po="80% 55%" style="display: none;">
                                    <img data-u="image" src="/modules/themes/frontend.webelieve/assets/img-slider/main/2.png"/>
                                </div>
                                <div data-p="225.00" style="display: none;">
                                    <img data-u="image" src="/modules/themes/frontend.webelieve/assets/img-slider/main/3.jpg"/>
                                </div>
                                <div data-p="225.00" style="display: none;">
                                    <img data-u="image" src="/modules/themes/frontend.webelieve/assets/img-slider/main/4.jpg"/>
                                </div>
                                <a data-u="any" href="http://www.jssor.com/demos/full-width-slider.slider" style="display:none">Full Width Slider</a>

                            </div>
                            <!-- Bullet Navigator -->
                            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                                <!-- bullet navigator item prototype -->
                                <div data-u="prototype" style="width:16px;height:16px;"></div>
                            </div>
                            <!-- Arrow Navigator -->
                            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
                            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
                        </div>

                        <!-- END WIDGET HEADER-->
                        <!-- BEGIN WIDGET CONTENT-->
                        <div class="widget__content" style="display:none">
                            <!-- Begin filters block-->
                            <div class="filters js-filters">
                                <div class="filters__period">
                                    <button class="btn--border-default filters__period-btn">
                                        <svg class="filters__period-svg">
                                            <use xlink:href="#icon-arrow-left"></use>
                                        </svg>
                                    </button>
                                    <h4 class="filters__period-label">7/2016</h4>
                                    <button class="btn--border-default filters__period-btn">
                                        <svg class="filters__period-svg">
                                            <use xlink:href="#icon-arrow-right"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="filters__search">
                                    <div class="form-group">
                                        <label for="in-filters-city" class="control-label sr-only"></label>
                                        <!--div.listing__show-wrap-->
                                        <select id="in-filters-city" class="form-control">
                                            <option>Tham my mat</option>
                                            <option>Tham my mui</option>
                                            <option>Tham my ham mat</option>
                                            <option>Tham my vong 1</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="in-datetime" class="control-label sr-only"></label>
                                        <input type="text" id="in-datetime" value="Date" data-start-date="12/03/2015" data-end-date="12/22/2015"
                                               data-time-picker="false" data-single-picker="false" class="js-datetimerange form-control">
                                    </div>
                                    <button class="btn--border-default filters__search-btn js-filters-btn"></button>
                                </div>
                                <div class="filters__view">
                                    <button data-mode="grid" class="btn--border-default filters__view-btn js-switch-btn">
                                        <svg class="filters__view-svg">
                                            <use xlink:href="#icon-grid"></use>
                                        </svg>
                                    </button>
                                    <button data-mode="list" class="btn--border-default filters__view-btn js-switch-btn">
                                        <svg class="filters__view-svg">
                                            <use xlink:href="#icon-list"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <!-- Begin filters block-->
                        </div>
                        <!-- END WIDGET CONTENT-->
                    </div>
                    <!-- END WIDGET-->
                    <!-- BEGIN WIDGET-->
                    <div class="widget js-widget widget--listing">
                        <!-- END WIDGET HEADER-->
                        <!-- BEGIN WIDGET CONTENT-->
                        <div class="widget__content">
                            <div data-modifier="list" data-view="event" class="event event--list js-switch-view js-event">
                                <div class="listing listing--list">
                                    @foreach($posts['data'] as $post)
                                        <div class="listing__item">
                                            <div class="event__item js-event-item">
                                                <div class="event__preview">
                                                    <span class="event__status">
                                                        @if ($post['label_type'] == 1)
                                                            Khuyến mại
                                                        @endif
                                                    </span>
                                                    <a
                                                            href="{{url('izblog/believe/post') . '?post_id='. $post['id']}}"
                                                            class="event__preview-link"><img
                                                                src="{{url('imagecache/small_article') . '/' . $post['post_image_url']}}"
                                                                alt="" class="event__preview-img"></a>
                                                    <div class="event__links">
                                                        <div class="event__link-item event__link-item--share">
                                                            <svg class="event__link-svg">
                                                                <use xlink:href="#icon-share"></use>
                                                            </svg>
                                                            <div class="social social--share"><a href="#" class="social__item"><i
                                                                            class="fa fa-facebook"></i></a><a href="#" class="social__item"><i
                                                                            class="fa fa-twitter"></i></a><a href="#" class="social__item"><i
                                                                            class="fa fa-google-plus"></i></a><a href="#" class="social__item"><i
                                                                            class="fa fa-odnoklassniki"></i></a></div>
                                                        </div>
                                                        <a class="event__link-item">
                                                            <svg class="event__link-svg">
                                                                <use xlink:href="#icon-phone" onclick="window.open('tel:12345');"></use>
                                                            </svg>
                                                        </a><a class="event__link-item js-event-mail">
                                                            <svg class="event__link-svg">
                                                                <use xlink:href="#icon-mail"></use>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="event__details">
                                                    <h3 class="event__name"><a
                                                                href="{{url('izblog/believe/post') . '?post_id='. $post['id']}}">{{$post['post_title']}}</a>
                                                    </h3>
                                                    <h5 class="event__organaizer">Danh Mục
                                                        -<strong>{{$categories[$post['category_id']]['label']}}</strong></h5>
                                                    <div class="event__info">
                                                        <h6 class="event__location">
                                                            {!! $post['post_short_content']  !!}
                                                        </h6>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="event__price">$ {{$post['price']}} VND</div>
                                                    <a href="{{url('izblog/believe/post') . '?post_id='. $post['id']}}" class="btn--link
                                                    event__more">Đọc thêm</a>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="event__form js-form"></div>
                                                <div class="event__map js-map"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- END WIDGET CONTENT-->
                    </div>
                    <!-- END WIDGET-->
                    <!-- BEGIN PAGINATION-->
                    <nav class="pagination"><a style="display: none" class="pagination__btn">
                            <svg class="pagination__btn-svg">
                                <use xlink:href="#icon-arrow-left"></use>
                            </svg>
                            <span class="pagination__btn-span">Trang trước</span></a>
                        <ul class="pagination__pages">
                            @foreach($numOfPage as $page)
                                <li><a class="@if($page['active']) active @endif" href="{{url('izblog/believe')
                                . '?page='.$page['page'] . '&categoryId='. $currentCategory}}"><span>{{$page['page']}}</span></a>
                                </li>
                            @endforeach
                        </ul>
                        <a style="display: none" class="pagination__btn"><span class="pagination__btn-span">Trang tiếp theo</span>
                            <svg class="pagination__btn-svg">
                                <use xlink:href="#icon-arrow-right"></use>
                            </svg>
                        </a>
                    </nav>
                    <!-- END PAGINATION-->
                </div>
                <!-- END MAIN CONTENT-->
                <!-- BEGIN SIDEBAR-->
                <aside class="sidebar">
                </aside>
                <!-- END SIDEBAR-->
            </div>
        </div>
    </main>
    <!-- END MAIN SECTION-->
    <!-- BEGIN AFTER MAIN SECTION-->
    <!-- END AFTER MAIN SECTION-->
    <!-- BEGIN WIDGET-->
    <div class="widget js-widget widget--subscribe">
        <!-- END WIDGET HEADER-->
        <!-- BEGIN WIDGET CONTENT-->
        <div class="widget__content">
            <!-- BEGIN SUBSCRIBE-->
            <div class="subscribe">
                <h4 class="subscribe__title">Nhận tin mới từ chúng tôi</h4>
                <div class="subscribe__form">
                    <form action="#" class="form form--subscribe js-form-subscribe">
                        <div class="form-group">
                            <label class="control-label">Email của bạn</label>
                            <input type="email" required class="form-control">
                        </div>
                        <button type="submit" class="form__submit">Gửi</button>
                    </form>
                </div>
            </div>
            <!-- END SUBSCRIBE-->
        </div>
        <!-- END WIDGET CONTENT-->
    </div>
    <!-- END WIDGET-->
    <!-- BEGIN FOOTER-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer__column">
                    <!-- BEGIN WIDGET-->
                    <div class="widget js-widget widget--footer">
                        <!-- BEGIN WIDGET HEADER-->
                        <div class="widget__header">
                            <h4 class="widget__title js-widget-title">Xăm phun là gì?</h4>
                        </div>
                        <!-- END WIDGET HEADER-->
                        <!-- BEGIN WIDGET CONTENT-->
                        <div class="widget__content">
                            <div class="textwidget">
                                <p>Xăm phun là một trong những phương pháp xăm tạm thời, hay chính xác hơn là phun/vẽ màu theo mẫu lên da. Xăm phun có
                                    thể sử dụng được cho tất cả mọi người và mọi loại da.</p>
                            </div>
                        </div>
                        <!-- END WIDGET CONTENT-->
                    </div>
                    <!-- END WIDGET-->
                    <!-- BEGIN WIDGET-->
                    <div class="widget js-widget widget--footer">
                        <!-- BEGIN WIDGET HEADER-->
                        <div class="widget__header">
                            <h4 class="widget__title js-widget-title">Mạng xã hội của chúng tôi</h4>
                        </div>
                        <!-- END WIDGET HEADER-->
                        <!-- BEGIN WIDGET CONTENT-->
                        <div class="widget__content">
                            <div class="social social--footer"><a href="#" class="social__item"><i class="fa fa-facebook"></i></a><a href="#"
                                                                                                                                     class="social__item"><i
                                            class="fa fa-twitter"></i></a><a href="#" class="social__item"><i class="fa fa-google-plus"></i></a></div>
                        </div>
                        <!-- END WIDGET CONTENT-->
                    </div>
                    <!-- END WIDGET-->
                </div>
                <div class="footer__column">
                    <!-- BEGIN WIDGET-->
                    <div class="widget js-widget widget--footer">
                        <!-- BEGIN WIDGET HEADER-->
                        <div class="widget__header">
                            <h4 class="widget__title js-widget-title">Địa chỉ tại Thái Bình</h4>
                        </div>
                        <!-- END WIDGET HEADER-->
                        <!-- BEGIN WIDGET CONTENT-->
                        <div class="widget__content">
                            <address class="address address--footer">
                                <dl class="address__list">
                                    <dt class="address__list-icon"><i class="fa fa-map-marker"></i></dt>
                                    <dd class="address__list-body">
                                        48 phố Quang Trung F.Trần Hưng Đạo.
                                    </dd>
                                    <dt class="address__list-icon"><i class="fa fa-phone"></i></dt>
                                    <dd class="address__list-body">0437150736|01672635165 - Hotline : 0912211493 có Zalo</dd>
                                    <dt class="address__list-icon"><i class="fa fa-envelope-o"></i></dt>
                                    <dd class="address__list-body"><a href=" thammyhoaky@gmail.com"> thammyhoaky@gmail.com</a></dd>
                                </dl>
                            </address>
                        </div>
                        <!-- END WIDGET CONTENT-->
                    </div>
                    <!-- END WIDGET-->
                </div>
                <div class="footer__column">
                    <!-- BEGIN WIDGET-->
                    <div class="widget js-widget widget--footer">
                        <!-- BEGIN WIDGET HEADER-->
                        <div class="widget__header">
                            <h4 class="widget__title js-widget-title">Địa chỉ tại Hà Nội</h4>
                        </div>
                        <!-- END WIDGET HEADER-->
                        <!-- BEGIN WIDGET CONTENT-->
                        <div class="widget__content">
                            <address class="address address--footer">
                                <dl class="address__list">
                                    <dt class="address__list-icon"><i class="fa fa-map-marker"></i></dt>
                                    <dd class="address__list-body">
                                        16D phố Đường Thành, F.Cửa Đông, Hoàn Kiếm, Hà Nội
                                    </dd>
                                    <dt class="address__list-icon"><i class="fa fa-phone"></i></dt>
                                    <dd class="address__list-body">0437150736|01672635165 - Hotline : 0912211493 có Zalo</dd>
                                    <dt class="address__list-icon"><i class="fa fa-envelope-o"></i></dt>
                                    <dd class="address__list-body"><a href=" thammyhoaky@gmail.com"> thammyhoaky@gmail.com</a></dd>
                                </dl>
                            </address>
                        </div>
                        <!-- END WIDGET CONTENT-->
                    </div>
                    <!-- END WIDGET-->
                </div>
                <div class="footer__column">
                    <!-- BEGIN WIDGET-->
                    <div class="widget js-widget widget--footer">
                        <!-- BEGIN WIDGET HEADER-->
                        <div class="widget__header">
                            <h4 class="widget__title js-widget-title">Địa chỉ tại Hải Dương</h4>
                        </div>
                        <!-- END WIDGET HEADER-->
                        <!-- BEGIN WIDGET CONTENT-->
                        <div class="widget__content">
                            <address class="address address--footer">
                                <dl class="address__list">
                                    <dt class="address__list-icon"><i class="fa fa-map-marker"></i></dt>
                                    <dd class="address__list-body">
                                        11A Tuy Hòa
                                    </dd>
                                    <dt class="address__list-icon"><i class="fa fa-phone"></i></dt>
                                    <dd class="address__list-body">0437150736|01672635165 - Hotline : 0912211493 có Zalo</dd>
                                    <dt class="address__list-icon"><i class="fa fa-envelope-o"></i></dt>
                                    <dd class="address__list-body"><a href=" thammyhoaky@gmail.com"> thammyhoaky@gmail.com</a></dd>
                                </dl>
                            </address>
                        </div>
                        <!-- END WIDGET CONTENT-->
                    </div>
                    <!-- END WIDGET-->
                </div>
                <!-- end of block .footer__column-->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- BEGIN FOOTER PANEL-->
        <div class="footer__panel">
            <div class="container">
                <button type="button" class="scrollup js-scrollup"></button>
                <!-- end of block .scrollup-->
                <div class="row">
                    <div class="footer__panel-column"><span class="footer__copyright">&copy; 2016  TMV HK     |     Tất cả các quyền</span>
                        <!-- end of block .footer__copyright-->
                    </div>
                    <div class="footer__panel-column">
                        <nav class="footer__nav"><a>Trang chủ</a><a>Hỏi Đáp</a><a>Liên hệ</a></nav>
                        <!-- end of block .footer__nav-->
                    </div>
                </div>
            </div>
        </div>
        <!-- end of block .footer__panel-->
    </footer>
    <!-- end of block .footer-->
    <!-- END FOOTER-->
</div>