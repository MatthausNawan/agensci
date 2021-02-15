<div class="external_links mb-1">
    <small class="font-weight-bold bg-dark text-white p-2 d-flex mb-1">
        {{ $title }}
    </small>
    @foreach($links as $links)
    <a href="{{$links->site }}" target="_blank">
        <img src="{{$links->logo->getUrl()}}" alt="{{$links->name}}" width="100%" height="30">
    </a>
    @endforeach
</div>
