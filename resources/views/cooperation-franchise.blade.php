@extends('components.'.$layout)
@section('content')
<x-link-bar :linkgroup='$linkgroup'/>
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h2>{{ $title }}</h2>
            <p>{{ $description }}</p>
        </div>
    </div>
</div>
@endsection