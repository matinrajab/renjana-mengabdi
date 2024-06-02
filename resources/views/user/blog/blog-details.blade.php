@php
    use App\Helpers\DateFormatter;
    $blog_page = true;
@endphp

@extends('user.layouts.app')

@section('content')
    <!-- Breadcrumb Area S t a r t -->
    <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="/" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                class="single">Blog </a></li>
                    </ul>
                </nav>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s">blog details</h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <!-- Blog-details S t a r t -->
    <section class="blog-details top-bottom-padding2">
        <div class="container">
            <div class="row gy-24">
                <div class="col-xxl-9 col-xl-8 col-lg-8">
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('files') }}/blog/{{ $blog->image }}" class="img-fluid w-100"
                                    alt="img">
                            </a>
                        </div>
                        <div class="blog-info">
                            <div class="blog-info-title">
                                <div class="flex gap-16 mb-20 align-items-center">
                                    <div class="user flex gap-10 align-items-center">
                                        <i class="ri-user-line"></i>
                                        <p class="info">{{ "By: $blog->author" }}</p>
                                    </div>
                                    <div class="donate flex gap-10 align-items-center">
                                        <i class="ri-calendar-check-line"></i>
                                        <p class="info"> {{ DateFormatter::date($blog->publication_date) }} </p>
                                    </div>
                                </div>
                                <h4 class="title"> {{ $blog->title }} </h4>
                                <div class="subtitle indented text-justify"> {!! nl2br($blog->content) !!} </div>
                                <div class="divider"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Comments -->
                    <div class="comment-blog">
                        <div id="disqus_thread"></div>
                        <script>
                            /**
                             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

                            var disqus_config = function() {
                                this.page.url =
                                    "{{ route('blogs.show', $blog) }}"; // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier =
                                    "{{ $blog->id }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };

                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document,
                                    s = d.createElement('script');
                                s.src = 'https://renjana-1.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                                powered by Disqus.</a></noscript>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4">
                    <div class="right-element">

                        <!-- Related post -->
                        <div class="related-post-section">
                            <p class="pera text-capitalize">Latest post</p>
                            <div class="dotted">
                                <div class="active-dot"></div>
                                <div class="inactive-dot"></div>
                            </div>
                            <div class="related-box">
                                @for ($i = 0; $i < count($blogs); $i++)
                                    @if ($i != 0)
                                        <div class="divider"></div>
                                    @endif
                                    <div class="single-post">
                                        <div class="post-img">
                                            <a href="{{ route('blogs.show', $blogs[$i]) }}"><img
                                                    src="{{ asset('files') }}/blog/{{ $blogs[$i]->image }}"
                                                    alt="img"></a>
                                        </div>
                                        <div class="post-info">
                                            <div class="date-time">
                                                <i class="ri-time-line"></i>
                                                <p class="pera"> {{ DateFormatter::date($blogs[$i]->publication_date) }}
                                                </p>
                                            </div>
                                            <h4 class="title"><a href="{{ route('blogs.show', $blogs[$i]) }}">
                                                    {{ substr($blogs[$i]->title, 0, 30) }} </a>
                                            </h4>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End-of Blog-details -->
@endsection
