@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-lg-12 my-2 text-center">
        <img src="https://via.placeholder.com/1000x100" alt="" class="img-rounded">
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-dark">
                <strong class="text-white">{{ $category->name }}</strong>
                <span class="badge badge-secondary">{{$links->count()}}</span>
            </div>
            <div class="card-body">
            <table class="table table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Name</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($links as $link)
                    <tr>
                        <td><img src="{{ $link->logo ? $link->logo->getUrl(): '' }}" alt="{{ $link->title ?? '' }}" style="width:50px; height:60px"></td>
                        <td>{{ $link->name ?? '' }}</td>
                        <td><a href="{{ $link->site ?? '' }}" class="text-dark" target="_blank">{{ $link->site ?? '' }}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $links->links() !!}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 my-2 text-center">
        <img src="https://via.placeholder.com/1000x100" alt="" class="img-rounded">
    </div>
</div>
@endsection
