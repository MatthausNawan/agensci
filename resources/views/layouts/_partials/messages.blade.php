@if(session('message'))
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
        </div>
    </div>
@endif

