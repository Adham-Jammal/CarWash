<!-- header section starts  -->

<header class="header">
    <div class="container">
        <nav class="navbar" id="navbar">
            <div class="navbar-logo">
                <img src="{{ asset('img/logo.png') }}" alt="logo">
            </div>
            <div class="navbar-elements">
                <ul>
                    <li>الرئيسة</li>
                    <li>الخدمات</li>
                    <li>اتصل بنا</li>
                    <li><a href="/{{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar' }}">{{__('index.lang')}}</a></li>
                </ul>
            </div>
        </nav>
    </div>



</header>

<!-- header section ends -->
