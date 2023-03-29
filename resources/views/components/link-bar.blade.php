<div class="container py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-8">
            <ul class="list-unstyled d-flex m-0 justify-content-between">
                @foreach ($linkgroup as $link)
                    <li>
                        <a href="{{ route($link['url']) }}">{{ $link['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>