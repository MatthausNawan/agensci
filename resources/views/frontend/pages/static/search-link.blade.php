@extends('layouts.default')

@section('page_content')


<div class="row">
    <div class="col-lg-12">
        <div class="card links-wrapper">
            <strong class="text-black text-center text-uppercase">{{ $category->name }}</strong>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Imagem</td>
                            <td>Name</td>
                            <td>Link</td>
                        </tr>
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
@endsection