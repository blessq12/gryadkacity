<header class="main-header main-header__two">
    <div class="topbar-two">
        <div class="container">
            <div class="topbar-two__left">
                <div class="topbar__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.topbar__social -->
            </div>
            <div class="topbar-two__center d-flex align-items-center">
                <p class="m-0 text-white">Телефон:
                    <a href="tel:+7(3822)97-99-25" style="margin-right:20px;">+7 (3822) 97-99-25</a>
                </p>
                <p class="m-0 text-white">Email:
                    <a href="mailto:gryadkacity@yandex.ru">gryadkacity@yandex.ru</a>
                </p>
            </div>
            <div class="topbar-two__right">
                <div class="main-menu__login">
                    <a href="#"><i class="organik-icon-user"></i>Войти / Регистрация</a>
                </div><!-- /.main-menu__login -->
                {{-- <div class="main-menu__language">
                    <img src="assets/images/resources/flag-1-1.jpg" alt="">
                    <label class="sr-only" for="language-select">Выбор языка</label>
                    <!-- /#language-select.sr-only -->
                    <select class="selectpicker" id="language-select-header">
                        <option value="english">Русский</option>
                        <option value="arabic">English</option>
                    </select>
                </div><!-- /.main-menu__language --> --}}
            </div>
        </div>
    </div>
    <nav class="main-menu main-menu__two">
        <div class="container">
            <div class="main-logo">
                <a href="{{ route('index') }}" class="logo">
                    <img src="/assets/images/logo-light.png" width="105" alt="Грядка Сити">
                </a>
                <div class="mobile-nav__buttons">
                    <a href="#" class="search-toggler"><i class="organik-icon-magnifying-glass"></i></a>
                    <a href="#" class="mini-cart__toggler"><i class="organik-icon-shopping-cart"></i></a>
                </div><!-- /.mobile__buttons -->
                <span class="fa fa-bars mobile-nav__toggler"></span>
            </div><!-- /.main-logo -->
            <ul class="main-menu__list">
                <li><a href="{{ route('') }}">{{ __('Главная')}}</a></li>
                <li><a href="{{ route('') }}">{{ __('Про грядку') }}</a></li>
                <li><a href="{{ route('') }}">{{ __('Новости')}}</a></li>
                <li><a href="{{ route('') }}">{{ __('Контакты')}}</a></li>
            </ul>
            <!-- /.main-menu__list -->
            <div class="topbar__buttons">
                <a href="#" class="search-toggler"><i class="organik-icon-magnifying-glass"></i></a>
                <a href="#" class="mini-cart__toggler"><i class="organik-icon-shopping-cart"></i></a>
            </div><!-- /.topbar__buttons -->
        </div><!-- /.container -->
    </nav>
    <!-- /.main-menu -->
</header><!-- /.main-header -->

<div class="stricky-header stricked-menu main-menu main-menu__two">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="organik-icon-close"></i></span>
    
        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="/assets/images/logo-light.png" width="155" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->
    
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="organik-icon-email"></i>
                <a href="mailto:needhelp@organik.com">needhelp@organik.com</a>
            </li>
            <li>
                <i class="organik-icon-calling"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            {{-- <div class="mobile-nav__language">
                <img src="assets/images/resources/flag-1-1.jpg" alt="">
                <label class="sr-only" for="language-select">select language</label>
                <!-- /#language-select.sr-only -->
                <select class="selectpicker" id="language-select">
                    <option value="english">English</option>
                    <option value="arabic">Arabic</option>
                </select>
            </div><!-- /.mobile-nav__language --> --}}
            <div class="main-menu__login">
                <a href="#"><i class="organik-icon-user"></i>{{ __('Войти') }} / {{ __('Регистрация') }}</a>
            </div><!-- /.main-menu__login -->
        </div><!-- /.mobile-nav__top -->
    
    
    
    </div>
    <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    
    <div class="mini-cart">
    <div class="mini-cart__overlay mini-cart__toggler"></div>
    <div class="mini-cart__content">
        <div class="mini-cart__top">
            <h3 class="mini-cart__title">Корзина</h3>
            <span class="mini-cart__close mini-cart__toggler"><i class="organik-icon-close"></i></span>
        </div><!-- /.mini-cart__top -->
        {{-- minicart item --}}
        <div class="mini-cart__item">
            <img src="/assets/images/products/cart-1-1.jpg" alt="">
            <div class="mini-cart__item-content">
                <div class="mini-cart__item-top">
                    <h3><a href="product-details.html">Товар</a></h3>
                    <p>4.900 RUR</p>
                </div>
                <div class="quantity-box">
                    <button type="button" class="sub">-</button>
                    <input type="number" id="2" value="1" />
                    <button type="button" class="add">+</button>
                </div>
            </div>
        </div>
        {{-- end minicart item --}}
        <a href="checkout.html" class="thm-btn mini-cart__checkout">К оформлению</a>
    </div><!-- /.mini-cart__content -->
    </div><!-- /.cart-toggler -->
    
    <div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="organik-icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->