<div class="container py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-8 link-bar">
            <ul class="list-unstyled d-flex m-0 justify-content-between link-bar-list">
                @foreach ($linkgroup as $link)
                    
                    <li>
                        <a 
                        @php
                        $current_url = explode('.',$link['url']);
                        if ($active_url == $current_url[1]) {
                            echo "class='active'";
                        }
                        @endphp
                        href="{{ route($link['url'])}}">
                            {{ $link['title'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>