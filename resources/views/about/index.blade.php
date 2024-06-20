@extends('layouts.main')
@section('title', 'About Us')
@section('content')

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
                        <h2>Wine & Winary Collections</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                            maecenas accumsan lacus vel facilisis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                            maecenas accumsan lacus vel facilisis.</p>
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


    <section class="choose-area">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4 pl-0">
                    <div class="choose-img">
                        <img src="{{ asset('assets/img/home-one/chooses-img.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single-choose-wrap">
                        <h2>“We thrive in making fine wines that enrich the taste & soul’’</h2>
                        <span><br></span>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-choose">
                                    <span>1</span>
                                    <h3>Harvesting</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-choose">
                                    <span>2</span>
                                    <h3>Relaxation</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6  ">
                                <div class="single-choose">
                                    <span>3</span>
                                    <h3>Foundation</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
