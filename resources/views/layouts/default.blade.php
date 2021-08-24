@extends('layouts.frontend')


@section('content')
<div class="row">
    <div class="my-2">
        <img src="https://via.placeholder.com/1080x100" alt="" class="img-rounded">
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        @yield('page_content')
    </div>

    <div class="col-lg-4">
        <div class="my-2">
            <img src="https://via.placeholder.com/300x500" class="img-fluid" alt="Responsive image">
        </div>
        <div class="my-2">
            <img src="https://via.placeholder.com/300x500" class="img-fluid" alt="Responsive image">
        </div>        
    </div>
</div>
@endsection