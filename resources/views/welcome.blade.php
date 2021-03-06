@extends('app')

@section('main')
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>
                    لا تشيل هم غسيل سيارتك!
                    <br>
                    خلها على
                    <span>Jimi Wash</span>
                </h1>
            </div>
        </div>
    </section>
    <section class="with-jimi">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 image-content">
                    <img src="{{ asset('img/jimi-car.png') }}" alt="car">
                </div>
                <div class="col-lg-5 col-md-6 text-content">
                    <h4> {{__('index.مع جيمي')}} مع جيمي ووش</h4>
                    <p>نتعهد لكم عند تقديم احدى باقات خدمات Jimi wash بتوفير أفضل تجربة للعناية بالسيارات وخدمات حجز سهلة
                        ومريحـــــة
                        متوفر اكسسوارات السيارة الأساسية والكماليـــــــــــــــــــــــات في المتجـــــــــر</p>
                </div>
            </div>
        </div>
    </section>
    <section class="our-start">
        <h2>بدايتنا وتطورنا..</h2>
        <span class="start-date">بدأنا بتاريخ 27/09/2021</span>
        <div class="time-line">
            <div class="point">
                <span>البداية</span>
                <p class="bottom">
                    سياره واحده وعامليـن

                    خدمة غسيل فقــــــــط
                </p>
            </div>
            <div class="point">
                <span>تطورنا</span>
                <p class="top">
                    تـم زيـــــادة عدد السيارات الى ٤

                    وعدد العمـــــــــــال الــــــــــى ٥
                </p>
            </div>
            <div class="point">
                <span>تطورنا</span>
                <p class="bottom">
                    تم اضافة ٥
                    <br>
                    خدمات زيادة
                </p>
            </div>
            <div class="point">
                <span>تطورنا</span>
                <p class="top">
                    تطور نوع الغسيل
                    <br>
                    من جودة واجهزه
                </p>
            </div>
            <div class="point">
                <span>الحين</span>
                <p class="bottom">
                    ويستمر التطور
                </p>
            </div>

        </div>
    </section>
    <section class="our-vision">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 image-content">
                    <img src="{{ asset('img/vision.png') }}" alt="vision">
                </div>
                <div class="col-lg-6 col-md-12 text-content">
                    <div class="vision">
                        <div class="quotation-marks top">
                            <img src="{{ asset('img/vector.png') }}" alt="">
                            <img src="{{ asset('img/vector.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>#رؤيتنا</h3>
                            <p>ان يتم خدمة العمــــــــــــــيــل في موقعــــــــه
                                <br>
                                في أفضــــــــــــــــــل جوده واســـــــرع وقــــــت
                            </p>
                        </div>
                    <div class="quotation-marks bottom">
                        <img src="{{ asset('img/vector.png') }}" alt="">
                        <img src="{{ asset('img/vector.png') }}" alt="">
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="our-services">
        <div class="container">
            <h2>خدماتنا</h2>
            <p class="description">جميع المواد المستخدمه ذات جودة عالية حيث أننــا نحرص على استخدام احدث الأدوات والمعدات بمساعدة عمالــــه مدربـه جيــــداً لإتقــــــــــــان العمـــــــــــــــــــل</p>
            <div class="cards">

                <div class="card">
                    <h4>تلميع البدي الخارجي</h4>
                    <span class="price">
                        <sup>RAS</sup>450
                    </span>
                    <p>
                        تلميع البويه الخارجيه من البقع
                        والتشهيب واثار الترسبات ويعطي لمعه
                        استخدام مواد ايطاليه فائقة الجوده
                        ويكون على ثلاث مراحل  لتاكيد من عدم
                        وجود دوائر الغسيل والخدوش السطحيه
                        250 - 350 - 450 ريال سعودي
                    </p>

                    <a href="#">احجز الان</a>
                </div>

                <div class="card">
                    <h4>تلميع البدي الخارجي</h4>
                    <span class="price">
                        <sup>RAS</sup>450
                    </span>
                    <p>
                        تلميع البويه الخارجيه من البقع
                        والتشهيب واثار الترسبات ويعطي لمعه
                        استخدام مواد ايطاليه فائقة الجوده
                        ويكون على ثلاث مراحل  لتاكيد من عدم
                        وجود دوائر الغسيل والخدوش السطحيه
                        250 - 350 - 450 ريال سعودي
                    </p>

                    <a href="#">احجز الان</a>
                </div>

                <div class="middle-card">
                    <h4>تلميع البدي الخارجي</h4>
                    <span class="price">
                        <sup>RAS</sup>450
                    </span>
                    <p>
                        تلميع البويه الخارجيه من البقع
                        والتشهيب واثار الترسبات ويعطي لمعه
                        استخدام مواد ايطاليه فائقة الجوده
                        ويكون على ثلاث مراحل  لتاكيد من عدم
                        وجود دوائر الغسيل والخدوش السطحيه
                        250 - 350 - 450 ريال سعودي
                    </p>

                    <a href="#">احجز الان</a>
                </div>

                <div class="card">
                    <h4>تلميع البدي الخارجي</h4>
                    <span class="price">
                        <sup>RAS</sup>450
                    </span>
                    <p>
                        تلميع البويه الخارجيه من البقع
                        والتشهيب واثار الترسبات ويعطي لمعه
                        استخدام مواد ايطاليه فائقة الجوده
                        ويكون على ثلاث مراحل  لتاكيد من عدم
                        وجود دوائر الغسيل والخدوش السطحيه
                        250 - 350 - 450 ريال سعودي
                    </p>

                    <a href="#">احجز الان</a>
                </div>

                <div class="card">
                    <h4>تلميع البدي الخارجي</h4>
                    <span class="price">
                        <sup>450</sup>RAS
                    </span>
                    <p>
                        تلميع البويه الخارجيه من البقع
                        والتشهيب واثار الترسبات ويعطي لمعه
                        استخدام مواد ايطاليه فائقة الجوده
                        ويكون على ثلاث مراحل  لتاكيد من عدم
                        وجود دوائر الغسيل والخدوش السطحيه
                        250 - 350 - 450 ريال سعودي
                    </p>

                    <a href="#">احجز الان</a>
                </div>

            </div>
        </div>
    </section>
    <section class="why-us">
        <div class="container">
            <h2>
                ماالذي يميزنا ..
            </h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/star.png') }}" alt="">
                        <h5>
                            غسيل بجودة تلميع
                        </h5>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/hands.png') }}" alt="">
                        <h5>
                            جودة المواد المستخدمة ونوعية الفوط المخصصة لسيارتــــــــــــــــــــــــــــك
                        </h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/location.png') }}" style="padding: 10px 20px;" alt="">
                        <h5>
                            نخدمك في موقعك
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="with-jimi equipments">
        <div class="container">
            <div class="row">
                <div class="col-md-7 image-content">
                    <img src="{{ asset('img/jimi-car.png') }}" alt="car">
                </div>
                <div class="col-md-5 text-content">
                    <h4> المعدات اللي نستخدمها وصناعاتها </h4>
                    <p>المعدات المستخدمة ايطالية </p>
                    <ul>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">ماكينة الغسيل بالبخار</li>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">ماكينة الغسيل بالماء </li>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">مكنسه تنظيف وتلميع المراتب بالبخار</li>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">فوط كاربن فايبر </li>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">فرش التنظيف العميق </li>

                    </ul>
                    <h4> المواد اللي يستخدمها وصناعاتها: </h4>
                    <ul>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">مواد الصوابين للغسيل ايطاليه</li>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">مواد التلميع ايطاليه </li>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">مواد تلميع المكينة ايطالية </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="future-plans">
        <div class="container">
            <div class="row">
                <div class="col-md-6 image-content">
                    <img src="{{ asset('img/future.png') }}" alt="">
                </div>
                <div class="col-md-6 text-content">
                    <div class="content">
                    <h2>خططنا المستقبلية...</h2>
                    <ul>
                        <li><img src="{{ asset('img/shooting-star.png') }}" alt="">مركز</li>
                        <li><img src="{{ asset('img/shooting-star.png') }}" alt="">افلام التظليل </li>
                        <li><img src="{{ asset('img/shooting-star.png') }}" alt="">تركيب افلام حماية لسياره </li>
                        <li><img src="{{ asset('img/shooting-star.png') }}" alt="">وضع طبقة نانو سيراميك للحمايه</li>
                        <li><img src="{{ asset('img/shooting-star.png') }}" alt="">تلميع والاهتمام في ادق التفاصيل لجميع السيارة</li>
                    </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="reviews" id="reviews">
            <div class="review">
                <div class="stars"> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> </div>
                <p>غسيل كلش محترف، بسرعة هائلة وتعامل مريح جداً وعلى
                    الوقت تماماً، طبعا وأسعار مدروسة جداًشكراً جيمي ووش</p>
                    <span class="review-date">
                        2. month ago
                    </span>
            </div>
            <div class="review">
                <div class="stars"> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> </div>
                <p>غسيل كلش محترف، بسرعة هائلة وتعامل مريح جداً وعلى
                    الوقت تماماً، طبعا وأسعار مدروسة جداًشكراً جيمي ووش</p>
                    <span class="review-date">
                        2. month ago
                    </span>
            </div>
            <div class="review">
                <div class="stars"> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> </div>
                <p>غسيل كلش محترف، بسرعة هائلة وتعامل مريح جداً وعلى
                    الوقت تماماً، طبعا وأسعار مدروسة جداًشكراً جيمي ووش</p>
                    <span class="review-date">
                        2. month ago
                    </span>
            </div>

        </div>
    </section>
    <section class="contact-us">
        <div class="container">
            <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                <div class="contact-info">
                    <h4>معلومات التواصل</h4>

                    <div class="Emails">
                        <div class="icon">
                            <i>f</i>
                        </div>
                        <div class="content">
                            <p>sales-carwash@jimi.com</p>
                            <p>info-carwash@jimi.com</p>
                        </div>
                    </div>

                    <div class="phones">
                        <div class="icon">
                            <i>f</i>
                        </div>
                        <div class="content">
                            <p>+966530353033</p>
                            <p>+966530353032</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <h4>للاستفسارات والإقتراحات</h4>
                    <p>املئ النموذج..</p>
                    <form action="#">
                        <label for="email">البريد الالكتروني</label>
                        <input type="email" name="email" id="email">
                        <label for="message">الرسالة</label>
                        <textarea name="message" id="message" cols="30" rows="6"></textarea>
                        <input type="submit" name="send" id="send" value="إرسال">
                    </form>
                </div>

            </div>
            </div>

        </div>

    </section>
@stop
