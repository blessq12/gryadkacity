@extends('components.front-layout')
@section('content')

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2>{{ __('Новости') }}</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{ route('index') }}">{{ __('Главная') }}</a></li>
            <li>/</li>
            <li><span>{{ __('Новости') }}</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<div class="blog-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-card__image">
                        <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                        <img src="assets/images/blog/blog-1-1.png" alt="How to Findout Healthy Food For Body">
                        <a href="news-details.html"></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__meta">
                            <a href="news-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                            <a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <h3><a href="news-details.html">How to Findout Healthy Food For Body</a></h3>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing.</p>
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-card__image">
                        <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                        <img src="assets/images/blog/blog-1-2.png" alt="Leverage agile frameworks to provide">
                        <a href="news-details.html"></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__meta">
                            <a href="news-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                            <a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <h3><a href="news-details.html">Leverage agile frameworks to provide</a></h3>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing.</p>
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-card__image">
                        <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                        <img src="assets/images/blog/blog-1-3.png" alt="Organically grow the holistic world view">
                        <a href="news-details.html"></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__meta">
                            <a href="news-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                            <a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <h3><a href="news-details.html">Organically grow the holistic world view</a></h3>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing.</p>
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-card__image">
                        <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                        <img src="assets/images/blog/blog-1-4.png" alt="Bring to the table win-win survival">
                        <a href="news-details.html"></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__meta">
                            <a href="news-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                            <a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <h3><a href="news-details.html">Bring to the table win-win survival</a></h3>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing.</p>
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-card__image">
                        <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                        <img src="assets/images/blog/blog-1-5.png" alt="At the end of the day, going forward">
                        <a href="news-details.html"></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__meta">
                            <a href="news-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                            <a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <h3><a href="news-details.html">At the end of the day, going forward</a></h3>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing.</p>
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-card__image">
                        <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                        <img src="assets/images/blog/blog-1-6.png" alt="User generated content in real-time">
                        <a href="news-details.html"></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__meta">
                            <a href="news-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                            <a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <h3><a href="news-details.html">User generated content in real-time</a></h3>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing.</p>
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
        </div><!-- /.row -->
        <ul class="list-unstyled post-pagination d-flex justify-content-center">
            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
        </ul><!-- /.post-pagination -->
    </div><!-- /.container -->
</div><!-- /.blog-page -->

    
@endsection