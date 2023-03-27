<x-head title='{{ $title }}' description='{{ $description }}'/>
<x-nav/>
<x-banner-head 
    title='{{ $title }}'  
    :breadcrumb='$breadcrumb'/>
@yield('content')
<x-footer/>