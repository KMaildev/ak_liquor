@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

    <section class="product-details-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-image">
                        <img src="{{ $liquor->photo ?? '' }}" alt="Product"
                            style="width: 100%; height: 290px; background-size: cover; object-fit: contain; object-position: top;">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="product-details-desc">
                        <h3>
                            {{ $liquor->title ?? '' }}
                        </h3>

                        <div class="product-review">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                        <p>
                            {!! $liquor->description ?? '' !!}
                        </p>

                        <div class="buy-checkbox-btn">
                            <div class="item">
                                <a href="{{ route('contact.index') }}" class="default-btn">Contact Now!</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="our-products-area ptb-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="section-title">
                    <span>Our Product</span>
                    <h2>Featured Wines Collections</h2>
                </div>
            </div>
            <div class="row justify-content-center">

                @foreach ($liquors as $liquor)
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <div class="single-product single-products">
                            <div class="product-img">
                                <img src="{{ $liquor->photo ?? '' }}" alt="Product"
                                    style="width: 100%; height: 290px; background-size: cover; object-fit: cover; object-position: top;">
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
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
