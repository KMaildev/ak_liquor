@extends('layouts.main')
@section('title', 'Welcome')
@section('content')
    @include('layouts.slider')

    <section class="welcome-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="welcome-img">
                        <img src="{{ asset('assets/img/home-one/welcome.png') }}" alt="Welcome">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="welcome-text">
                        <span>Welcome To</span>
                        <h2>
                            AK Liquor
                        </h2>
                        <p>
                            Welcome to AK Liquor, your go-to destination for a wide selection of fine wines,
                            spirits, and craft beers. Located in the heart of [Your Location], we offer a curated collection
                            of beverages to suit every taste and occasion.
                            <br><br>
                            Our knowledgeable and friendly staff are always ready to help you find the perfect bottle,
                            whether for a special celebration or a casual evening. We pride ourselves on exceptional
                            customer service and aim to make every visit enjoyable and informative.
                            <br><br>
                            At AK Liquor, you'll find premium labels from around the world, as well as local
                            favorites. We also offer personalized services like gift baskets and event planning
                            consultations.
                            <br><br>
                            Thank you for choosing AK Liquor. We look forward to serving you! Cheers!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 ">
                    <div class="contact-info-wrap">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6 p-0">
                                <div class="contact-info">
                                    <i class="fa fa-phone"></i>
                                    <span>(Hot Line)</span>
                                    <h3>
                                        <a href="tel:09xxxxxxxxx">09xxxxxxxxx</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 p-0">
                                <div class="contact-info border-left-right">
                                    <i class="fa fa-clock-o"></i>
                                    <span>We’re Open</span>
                                    <h3>Mon-Sat: 8 AM - 10PM</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6   p-0">
                                <div class="contact-info">
                                    <i class="fa fa-arrow-right"></i>
                                    <span>Follow Us</span>
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/i/flow/login" target="_blank"><i
                                                    class="fa-brands fa-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br>

    <section class="our-offer-area">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="section-title">
                    <span>Our Offer</span>
                    <h2>What We Make For You</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-3 p-0">
                    <div class="offer-img">
                        <img src="{{ asset('assets/img/home-two/our-offer/1.jpg') }}" alt="">
                        <div class="offer-caption">
                            <span>On-time Offer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6 col-md-4 p-0">
                            <div class="offer-img">
                                <img src="{{ asset('assets/img/home-two/our-offer/2.jpg') }}" alt="">
                                <div class="offer-caption">
                                    <span>Seasonal Offer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-4 p-0">
                            <div class="offer-img">
                                <img src="{{ asset('assets/img/home-two/our-offer/3.jpg') }}" alt="">
                                <div class="offer-caption">
                                    <span>An Exclusive Offer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-4 p-0">
                            <div class="offer-img">
                                <img src="{{ asset('assets/img/home-two/our-offer/4.jpg') }}" alt="">
                                <div class="offer-caption">
                                    <span>On-time Offer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-4 p-0">
                            <div class="offer-img">
                                <img src="{{ asset('assets/img/home-two/our-offer/5.jpg') }}" alt="">
                                <div class="offer-caption">
                                    <span>On-time Offer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-4 p-0">
                            <div class="offer-img">
                                <img src="{{ asset('assets/img/home-two/our-offer/6.jpg') }}" alt="">
                                <div class="offer-caption">
                                    <span>On-time Offer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-4 p-0">
                            <div class="offer-img">
                                <img src="{{ asset('assets/img/home-two/our-offer/7.jpg') }}" alt="">
                                <div class="offer-caption">
                                    <span>Special offer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="our-product-area ptb-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="section-title">
                    <span>Our Product</span>
                    <h2>Featured Wines Collections</h2>
                </div>
            </div>
            <div class="product-wrap product-wraps owl-carousel owl-theme">
                @foreach ($liquors as $liquor)
                    <div class="single-product">
                        <div class="product-img">
                            <img src="{{ $liquor->photo ?? '' }}" alt="Product"
                                style="width: 100%; height: 300px; background-size: cover; object-fit: cover; object-position: top;">
                        </div>
                        <div class="product-details">
                            <a href="{{ route('liquor.show', $liquor->id) }}">
                                View
                            </a>
                            <h3>
                                {{ $liquor->title ?? '' }}
                            </h3>
                            <ul>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="blog-area blogs-area" style="padding-top: 20px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-title">
                    <h2>Blog </h2>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-xl-6 pr-0">
                                    <div class="blog-img">
                                        <a href="{{ route('blog.show', $blog->id) }}">
                                            <img src="{{ $blog->photo }}" alt="Blog"
                                                style="width: 100%; height: 290px; background-size: cover; object-fit: cover; object-position: center;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6 pl-0">
                                    <div class="blog-text">
                                        <span>
                                            <i class="fa fa-calendar"></i>
                                            {{ $blog->upload_date ?? '' }}
                                        </span>
                                        <h3>
                                            <a href="{{ route('blog.show', $blog->id) }}">
                                                {{ $blog->title ?? '' }}
                                            </a>
                                        </h3>
                                        <p>
                                            {!! Str::limit($blog->description, 90) !!}
                                        </p>
                                        <a class="read-more" href="{{ route('blog.show', $blog->id) }}">
                                            Continue
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
