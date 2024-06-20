@extends('layouts.main')
@section('title', 'Welcome')
@section('content')
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img src="{{ $blog->photo }}" alt="Blog"
                                style="width: 100%; height: 300px; background-size: cover; object-fit: cover; object-position: center;">
                        </div>

                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li>
                                        <span>Posted On:</span>
                                        <a href="javascript::void(0)">
                                            {{ $blog->upload_date ?? '' }}
                                        </a>
                                    </li>
                                    <li>
                                        <span>Posted By:</span>
                                        <a href="javascript::void(0)">
                                            Admin
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <h3>
                                {{ $blog->title ?? '' }}
                            </h3>

                            <p>
                                {!! $blog->description ?? '' !!}
                            </p>

                        </div>

                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class="fa fa-share"></i></span>
                                <a href="javascript::void(0)">Share</a>
                            </div>

                            <div class="article-share">
                                <ul class="social">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget_zovio_posts_thumb">
                            <h3 class="widget-title">Popular Posts</h3>

                            @foreach ($blogs as $blog)
                                <article class="item">
                                    <a href="{{ route('blog.show', $blog->id) }}" class="thumb">
                                        <img src="{{ $blog->photo }}" alt="Blog"
                                            style="width: 100%; height: 200px; background-size: cover; object-fit: cover; object-position: center;">
                                    </a>
                                    <div class="info">
                                        <time datetime="2024-06-30">
                                            {{ $blog->upload_date ?? '' }}
                                        </time>
                                        <h4 class="title usmall">
                                            <a href="{{ route('blog.show', $blog->id) }}">
                                                {{ $blog->title ?? '' }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="clear"></div>
                                </article>
                            @endforeach

                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
