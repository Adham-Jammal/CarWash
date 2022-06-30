@extends('app')

@section('main')
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 data-aos="zoom-in" data-aos-duration="1000">
                    {{__('index.la_tshel')}}
                    <br>
                    {{__('index.5lha')}}
                    <span>Jimi Wash</span>
                </h1>
            </div>
        </div>
    </section>
    <section class="with-jimi">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 image-content" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('img/car2.png') }}" alt="car">
                </div>
                <div class="col-lg-5 col-md-6 text-content" data-aos="fade-right" data-aos-duration="1000">
                    <h4>{{__('index.1')}}</h4>
                    <p>{{__('index.2')}}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="our-start">
        <h2 data-aos="fade-up" data-aos-duration="1000">{{__('index.3')}}</h2>
        <span class="start-date" data-aos="fade-up" data-aos-duration="1000"> {{__('index.4')}} </span>
        <div class="time-line" data-aos="zoom-in" data-aos-duration="1000">
            <div class="point">
                <span>{{__('index.5')}}</span>
                <p class="bottom">
                    {{__('index.6')}}
                    {{__('index.7')}}
                </p>
            </div>
            <div class="point">
                <span>{{__('index.8')}}</span>
                <p class="top">
                    {{__('index.9')}}
                </p>
            </div>
            <div class="point">
                <span>{{__('index.8')}}</span>
                <p class="bottom">
                    {{__('index.10')}}
                    <br>
                    {{__('index.11')}}
                </p>
            </div>
            <div class="point">
                <span>{{__('index.8')}}</span>
                <p class="top">
                    {{__('index.12')}}
                    <br>
                    {{__('index.13')}}
                </p>
            </div>
            <div class="point">
                <span>{{__('index.14')}}</span>
                <p class="bottom">
                    {{__('index.15')}}
                </p>
            </div>

        </div>
    </section>
    <section class="our-vision">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 image-content" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('img/vision.png') }}" alt="vision">
                </div>
                <div class="col-lg-6 col-md-12 text-content" data-aos="fade-right" data-aos-duration="1000">
                    <div class="vision">
                        <div class="quotation-marks top">
                            <img src="{{ asset('img/vector.png') }}" alt="">
                            <img src="{{ asset('img/vector.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3 data-aos="fade-up" data-aos-duration="1000">{{__('index.16')}}</h3>
                            <p data-aos="fade-up" data-aos-duration="1000">
                                {{__('index.17')}}
                                <br>
                                {{__('index.18')}}
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
    <section class="our-services" id="our_services">
        <div class="container">
            <h2>{{__('index.19')}}</h2>
            <p class="description">{{__('index.20')}}</p>
            <div class="cards owl-carousel owl-theme" >

                <div class="card" data-aos="zoom-in" data-aos-duration="500">
                    <h4> {{__('index.s1')}} </h4>
                    <span class="price">
                        <sup> 55 | 65 | 75 </sup>{{__('index.RAS')}}
                    </span>
                    <p>
                        {{__('index.s1d')}}
                    </p>

                    <button  onclick="window.location.href='https:/api.whatsapp.com/send?phone=966502921441&text=%D8%AE%D8%AF%D9%85%D8%A9%20%D8%A7%D9%84%D8%AF%D8%A7%D8%AE%D9%84%20%D9%88%D8%A7%D9%84%D8%AE%D8%A7%D8%B1%D8%AC'">{{__('index.23')}}</button>
                </div>

                <div class="card"  data-aos="zoom-in" data-aos-duration="750">
                    <h4> {{__('index.s2')}} </h4>
                    <span class="price">
                        <sup> 80 | 90 | 100 </sup> {{__('index.RAS')}}
                    </span>
                    <p>
                        {{__('index.s2d')}}
                    </p>

                    <button  onclick="window.location.href='https:/api.whatsapp.com/send?phone=966502921441&text=%D8%BA%D8%B3%D9%8A%D9%84%20%D8%A8%D8%A7%D9%84%D8%A8%D8%AE%D8%A7%D8%B1'">{{__('index.23')}}</button>
                </div>

                <div class="card"  data-aos="zoom-in" data-aos-duration="1000">
                    <h4>{{__('index.21')}}</h4>
                    <span class="price">
                        <sup> 250 | 350 | 450 </sup> {{__('index.RAS')}}
                    </span>
                    <p>
                        {{__('index.22')}}
                    </p>

                    <button  onclick="window.location.href='https:/api.whatsapp.com/send?phone=966502921441&text=%D8%AA%D9%84%D9%85%D9%8A%D8%B9%20%D8%A7%D9%84%D8%A8%D8%AF%D9%8A%20%D8%A7%D9%84%D8%AE%D8%A7%D8%B1%D8%AC%D9%8A'">{{__('index.23')}}</button>
                </div>

                <div class="card"  data-aos="zoom-in" data-aos-duration="1250">
                    <h4>  {{__('index.s3')}} </h4>
                    <span class="price">
                        <sup>250 | 350 | 450</sup> {{__('index.RAS')}}
                    </span>
                    <p>
                        {{__('index.s3d')}}
                    </p>

                    <button  onclick="window.location.href='https:/api.whatsapp.com/send?phone=966502921441&text=%D8%A7%D9%84%D8%AA%D9%84%D9%85%D9%8A%D8%B9%20%D8%A7%D9%84%D8%AF%D8%A7%D8%AE%D9%84%D9%8A'">{{__('index.23')}}</button>
                </div>

                <div class="card"  data-aos="zoom-in" data-aos-duration="1500">
                    <h4> {{__('index.s4')}}   </h4>
                    <span class="price">
                        <sup> 50 </sup>{{__('index.RAS')}}
                    </span>
                    <p>
                        {{__('index.s4d')}}
                    </p>

                    <button onclick="window.location.href='https:/api.whatsapp.com/send?phone=966502921441&text=%D8%AA%D9%84%D9%85%D9%8A%D8%B9%20%D8%A7%D9%84%D9%85%D8%A7%D9%83%D9%8A%D9%86%D8%A9'">{{__('index.23')}}</button>
                </div>

                <div class="card"  data-aos="zoom-in" data-aos-duration="1500">
                    <h4> {{__('index.s5')}}   </h4>
                    <span class="price">
                        <sup>100</sup> {{__('index.RAS')}}
                    </span>
                    <p>
                        {{__('index.s5d')}}
                    </p>

                    <button  onclick="window.location.href='https:/api.whatsapp.com/send?phone=966502921441&text=%D8%AA%D9%84%D9%85%D9%8A%D8%B9%20%D8%A7%D9%84%D8%B4%D9%85%D8%B9%D8%A7%D8%AA'">{{__('index.23')}}</button>
                </div>

            </div>
        </div>
    </section>
    <section class="why-us">
        <div class="container">
            <h2  data-aos="zoom-in" data-aos-duration="1000">
                {{__('index.24')}}
           </h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card"  data-aos="fade-up" data-aos-duration="500">
                        <img src="{{ asset('img/star.png') }}" alt="">
                        <h5>
                            {{__('index.25')}}
                        </h5>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('img/hands.png') }}" alt="">
                        <h5>
                            {{__('index.26')}}
                        </h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ asset('img/location.png') }}" style="padding: 10px 20px;" alt="">
                        <h5>
                            {{__('index.27')}}
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="with-jimi equipments">
        <div class="container">
            <div class="row">
                <div class="col-md-7 image-content" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('img/car2.png') }}" alt="car">
                </div>
                <div class="col-md-5 text-content" data-aos="fade-right" data-aos-duration="1000">
                    <h4> {{__('index.28')}} </h4>
                    <p>  {{__('index.29')}} </p>
                    <ul>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">{{__('index.30')}}</li>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt=""> {{__('index.31')}}  </li>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">{{__('index.32')}} </li>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">{{__('index.33')}}</li>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">{{__('index.34')}}</li>

                    </ul>
                    <h4>   {{__('index.35')}} </h4>
                    <ul>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">{{__('index.36')}}</li>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">  {{__('index.37')}}  </li>
                        <li><img src="{{ asset('img/li-arrow.png') }}" alt="">   {{__('index.38')}} </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="future-plans">
        <div class="container">
            <div class="row">
                <div class="col-md-6 image-content" data-aos="zoom-out" data-aos-duration="1000">
                    <img src="{{ asset('img/future.png') }}" alt="">
                </div>
                <div class="col-md-6 text-content" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="content">
                    <h2> {{__('index.39')}} </h2>
                    <ul>
                        <li><img src="{{ asset('img/shooting-star.png') }}" alt="">{{__('index.40')}}</li>
                        <li><img src="{{ asset('img/shooting-star.png') }}" alt="">{{__('index.41')}}  </li>
                        <li><img src="{{ asset('img/shooting-star.png') }}" alt="">  {{__('index.42')}} </li>
                        <li><img src="{{ asset('img/shooting-star.png') }}" alt=""> {{__('index.43')}} </li>
                        <li><img src="{{ asset('img/shooting-star.png') }}" alt=""> {{__('index.44')}}</li>
                    </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <h2>{{__('index.55')}}</h2>
        <div class="reviews owl-carousel owl-theme" id="reviews">
            <div class="review">
                <h4 class="name">{{__('index.45n')}}</h4>
                <div class="stars"> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> </div>
                <p>{{__('index.45')}}</p>
            </div>
            <div class="review center">
                <h4 class="name">{{__('index.r2n')}}</h4>
                <div class="stars"> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> </div>
                <p>{{__('index.r2')}}</p>
            </div>
            <div class="review">
                <h4 class="name">{{__('index.r3n')}}</h4>
                <div class="stars"> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> </div>
                <p>{{__('index.r3')}}</p>
            </div>
            <div class="review">
                <h4 class="name">{{__('index.r4n')}}</h4>
                <div class="stars"> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> <i class="fa fa-star active-star"></i> </div>
                <p>{{__('index.r4')}}</p>
            </div>

        </div>
    </section>
    <section class="contact-us" id="contact_us">
        <div class="container">
            <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                <div class="contact-info">
                    <h4>{{__('index.47')}}</h4>

                    <div class="Emails">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="content">
                            <p>info@jimi.sa</p>
                        </div>
                    </div>

                    <div class="phones">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="content">
                            <p>0502921441</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <h4>{{__('index.48')}} </h4>
                    <p>{{__('index.49')}}</p>
                    <form action="{{route('contact')}}" method="POST">
                        @csrf
                        <label for="email">{{__('index.50')}}</label>
                        <input required type="email" name="email" id="email">
                        <label for="message">{{__('index.51')}}</label>
                        <textarea required name="message" id="message" cols="30" rows="6"></textarea>
                        <input type="submit" name="send" id="send" value="{{__('index.52')}}">
                    </form>
                </div>

            </div>
            </div>

        </div>

    </section>
@stop
