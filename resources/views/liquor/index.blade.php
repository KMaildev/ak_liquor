@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

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
