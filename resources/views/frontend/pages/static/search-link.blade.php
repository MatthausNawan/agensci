@extends('layouts.default')

@section('page_content')

<div class="col-12">

</div>

<div class="row">
    <div class="col-lg-12">
        <form action="" method="get" class="form-inline d-flex justify-content-end mb-1">
            <div class="form-group mx-1">
                <div class="input-group">
                    <label for="">Ordenar</label>
                    <select name="sort" id="" class="form-control form-control-sm">
                        <option value="a-z" {{Request::get('sort')=='a-z' ? 'selected' : ''}}>A-Z</option>
                        <option value="z-a" {{Request::get('sort')=='z-a' ? 'selected' : ''}}>Z-A</option>
                        <option value="asc" {{Request::get('sort')=='asc' ? 'selected' : ''}}>Novos</option>
                        <option value="desc" {{Request::get('sort')=='desc' ? 'selected' : ''}}>Antigos</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="mx-1 btn btn-sm btn-black rounded border"><i class="fa fa-filter"></i>Filtrar</button>
            </div>
        </form>
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