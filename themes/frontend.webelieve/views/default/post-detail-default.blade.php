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
    <main class="main main--subpage main--blog">
        <!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
            <div class="container">
                <ul>
                    <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Home</a></li>
                    <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Our blog</a></li>
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
            <div class="main__wrap">
                <!-- BEGIN MAIN CONTENT-->
                <div class="main__content">
                    <!-- BEGIN WIDGET-->
                    <div class="widget js-widget widget--card widget--details">
                        <!-- END WIDGET HEADER-->
                        <!-- BEGIN WIDGET CONTENT-->
                        <div class="widget__content">
                            <div class="post post--details">
                                <time datetime="2016" class="post__time">
                                    <svg class="post__time-svg">
                                        <use xlink:href="#icon-time"></use>
                                    </svg>
                                    {!!  $postData['created_at']  !!}
                                </time>
                                <div class="widget__header-title">
                                    <h2 class="widget__title">  {!! $postData['post_title'] !!}</h2>
                                </div>
                                <div class="post__author"><i>Đăng bởi</i> <a>Thẩm mỹ hoa kỳ</a></div>
                                {{--<div class="widget__preview"><img src="/modules/themes/frontend.webelieve/assets/media-demo/post/900x475/post-1.jpg"--}}
                                {{--alt="" class="post__preview-img"></div>--}}
                                <div class="widget__description">
                                    {!! $postData['post_content'] !!}
                                </div>
                            </div>
                            <div class="widget__footer" style="display:none">
                                <nav class="widget__tags"><a>John Stevenson</a> / <a>Worship</a> / <a>Faith</a> / <a>Love</a> / <a>Forgiveness</a> /
                                    <a>Hearth</a></nav>
                                <div class="social social--right">
                                    <div class="social__list"><a href="#" class="social__item"><i class="fa fa-facebook"></i></a><a href="#"
                                                                                                                                    class="social__item"><i
                                                    class="fa fa-twitter"></i></a><a href="#" class="social__item"><i
                                                    class="fa fa-google-plus"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- END WIDGET CONTENT-->
                    </div>
                    <!-- END WIDGET-->
                    <!-- BEGIN WIDGET-->
                    <div class="widget js-widget widget--card" style="display: none">
                        <!-- END WIDGET HEADER-->
                        <!-- BEGIN WIDGET CONTENT-->
                        <div class="widget__content">
                            <div class="comment comment--list">
                                <header class="comment__header">
                                    <h6 class="comment__header-comment"><i class="fa fa-comment"></i>Nhận xét (23)</h6>
                                    <h6>Bạn cần đăng nhập <a>facebook</a> comment.</h6>
                                </header>
                                <div class="comment__list">
                                    <div class="comment__item">
                                        <div class="comment__avatar"><img src="/modules/themes/frontend.webelieve/assets/media-demo/avatars/1.png"
                                                                          alt=""></div>
                                        <div class="comment__info">
                                            <div class="comment__info-left">
                                                <h3 class="comment__author">Thanh Tu</h3>
                                                <time datetime="2016" class="comment__time">tháng 7 năm 2015 lúc 9:15 am</time>
                                            </div>
                                            <div class="comment__info-right">
                                                <button class="btn--flat-small comment__reply js-comment-reply">Trả lời</button>
                                            </div>
                                        </div>
                                        <div class="comment__body">
                                            <p> Với ứng dụng nguồn năng lượng xúc tác trong việc điều trị vào vùng nhũ hoa làm tan biến mọi vết thâm
                                                đen</p>
                                        </div>
                                        <!-- end of block .comment__item-->
                                    </div>
                                    <div class="comment__item">
                                        <div class="comment__avatar"><img src="/modules/themes/frontend.webelieve/assets/media-demo/avatars/2.png"
                                                                          alt=""></div>
                                        <div class="comment__info">
                                            <div class="comment__info-left">
                                                <h3 class="comment__author">Thanh An</h3>
                                                <time datetime="2016" class="comment__time">tháng 7 năm 2015 lúc 9:15 am</time>
                                            </div>
                                            <div class="comment__info-right">
                                                <button class="btn--flat-small comment__reply js-comment-reply">Trả lời</button>
                                            </div>
                                        </div>
                                        <div class="comment__body">
                                            <p> Với ứng dụng nguồn năng lượng xúc tác trong việc điều trị vào vùng nhũ hoa làm tan biến mọi vết thâm
                                                đen</p>
                                        </div>
                                        <!-- end of block .comment__item-->
                                    </div>
                                    <div class="comment__children">
                                        <div class="comment__item">
                                            <div class="comment__avatar"><img src="/modules/themes/frontend.webelieve/assets/media-demo/avatars/1.png"
                                                                              alt=""></div>
                                            <div class="comment__info">
                                                <div class="comment__info-left">
                                                    <h3 class="comment__author">Thanh An</h3>
                                                    <time datetime="2016" class="comment__time">tháng 7 năm 2015 lúc 9:15 am</time>
                                                </div>
                                                <div class="comment__info-right">
                                                    <button class="btn--flat-small comment__reply js-comment-reply">Trả lời</button>
                                                </div>
                                            </div>
                                            <div class="comment__body comment__body--warning">
                                                <h5>Your comment is awaiting moderation.</h5>
                                                <p> Với ứng dụng nguồn năng lượng xúc tác trong việc điều trị vào vùng nhũ hoa làm tan biến mọi vết
                                                    thâm đen</p>
                                            </div>
                                            <!-- end of block .comment__item-->
                                        </div>
                                    </div>
                                    <div class="comment__item">
                                        <div class="comment__avatar"><img src="/modules/themes/frontend.webelieve/assets/media-demo/avatars/2.png"
                                                                          alt=""></div>
                                        <div class="comment__info">
                                            <div class="comment__info-left">
                                                <h3 class="comment__author">Thanh An</h3>
                                                <time datetime="2016" class="comment__time">tháng 7 năm 2015 lúc 9:15 am</time>
                                            </div>
                                            <div class="comment__info-right">
                                                <button class="btn--flat-small comment__reply js-comment-reply">Trả lời</button>
                                            </div>
                                        </div>
                                        <div class="comment__body">
                                            <p> Với ứng dụng nguồn năng lượng xúc tác trong việc điều trị vào vùng nhũ hoa làm tan biến mọi vết thâm
                                                đen</p>
                                        </div>
                                        <!-- end of block .comment__item-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END WIDGET CONTENT-->
                    </div>
                    <!-- END WIDGET-->
                    <!-- BEGIN WIDGET-->
                    <div class="widget js-widget widget--card" style="display: none">
                        <!-- BEGIN WIDGET HEADER-->
                        <div class="widget__header">
                            <h2 class="widget__title js-widget-title">Để lại nhận xét</h2>
                        </div>
                        <!-- END WIDGET HEADER-->
                        <!-- BEGIN WIDGET CONTENT-->
                        <div class="widget__content">
                            <div class="comment__form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form js-parsley form--comment">
                                    <div class="row">
                                        <div class="form-group form-group--lg-4">
                                            <label for="comment-name" class="control-label">Tên của bạn *</label>
                                            <input type="text" id="comment-name" required="required" class="form-control"/>
                                        </div>
                                        <div class="form-group form-group--lg-4">
                                            <label for="comment-email" class="control-label">Địa chỉ email *</label>
                                            <input type="email" id="comment-email" required="required" class="form-control"/>
                                        </div>
                                        <div class="form-group form-group--lg-4">
                                            <label for="comment-phone" class="control-label">Số điện thoại</label>
                                            <input type="text" id="comment-phone" required="required" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-group--lg-12">
                                            <label for="comment-message" class="control-label">Tin nhắn</label>
                                            <textarea id="comment-message" required="required" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form__buttons">
                                        <button type="submit" class="btn--flat form__btn">Gửi</button>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                            <!-- end of block .comment__form-->
                        </div>
                        <!-- END WIDGET CONTENT-->
                    </div>
                    <!-- END WIDGET-->
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