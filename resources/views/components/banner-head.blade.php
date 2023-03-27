<section class="page-header">
    <div class="page-header__bg" style="background-image: url(/assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2>{{ $title }}</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{ route('index') }}">{{ __('Главная') }}</a></li>
            <li>/</li>
            @foreach ($breadcrumb as $item)
            <li><a href="{{ route($item['url']) }}">{{ $item['title'] }}</a></li>
            <li>/</li>
            @endforeach
        </ul>
    </div>
</section>