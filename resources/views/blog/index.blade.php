@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

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
