<div>
    <h5 class="mb-4 font-weight-bold bg-dark">
        {{$category ?? 'Artigos'}}
    </h5>
    @forelse($items as $item)
    <img src="{{$item->image}}" class="img-fluid img-thumbnail" alt="Responsive image" width="300" height="70">
    @empty
    <img src="https://via.placeholder.com/300x70" class="img-fluid img-thumbnail" alt="Responsive image">
    @endforelse
</div>
