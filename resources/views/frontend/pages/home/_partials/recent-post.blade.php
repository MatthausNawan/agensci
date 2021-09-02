<div class="links-wrapper py-2">
    <small class="font-weight-bold d-flex mb-1">
        <span class="ml-3 external-link-title">Leia Também</span>
    </small>
    @php $recentPosts = \App\Models\Post::latest()->take(5)->get(); @endphp
    @forelse($recentPosts as $post)
    <div class="image m-2 d-flex flex-row border-bottom">
        <a href="{{route('site.post',$post->slug)}}" target="_blank">
            <img src="{{$post->banner ? $post->banner->getUrl() : ''}}" alt="{{$post->title}}" height="70px" width="50px" class="img-responsive">
        </a>
        <div class="d-flex flex-column ml-2">
            <a href="{{route('site.post',$post->slug)}}" class="text-decoration-none text-black">
                <small class="font-weight-bold">{{ $post->title ?? ''}}</small>
                <small class="mb-1">{!! Str::limit($post->detail,70) !!}</small>
            </a>
        </div>
    </div>
    @empty
    <small>Nenhum post</small>
    @endforelse
</div>