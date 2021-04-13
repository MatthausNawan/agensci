@if(session('message'))
<div class="row my-2">
    <div class="col-lg-12">
        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
    </div>
</div>
@endif

@if(session('error'))
<div class="row my-2">
    <div class="col-lg-12">
        <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
    </div>
</div>
@endif