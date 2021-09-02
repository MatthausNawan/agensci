@extends('layouts.frontend')


@section('content')
<div class="row">
    <div class="my-2">
        <img src="https://via.placeholder.com/1920x200" alt="" class="img-rounded w-100">
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        @yield('page_content')
    </div>

    <div class="col-lg-4">
        @include('frontend.pages.home._partials.recent-post')
        <div class="my-2">
            <img src="https://via.placeholder.com/300x500" class="img-fluid w-100" alt="Responsive image">
        </div>
        <div class="my-2">
            <img src="https://via.placeholder.com/300x500" class="img-fluid w-100" alt="Responsive image">
        </div>
    </div>
</div>
@endsection