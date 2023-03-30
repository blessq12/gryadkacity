<section class="page-header">
    <div class="page-header__bg" style="background-image: {{ $bgimage }};"></div>
    <div class="container">
        <h2 class="banner-title">{{ $title ?? 'Нет заголовка' }}</h2>
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