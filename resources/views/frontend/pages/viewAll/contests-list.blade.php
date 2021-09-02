@extends('layouts.default')


@section('page_content')

<h2>Concursos</h2>

<div class="col-12">
    <form action="" method="get" class="form-inline d-flex justify-content-end">
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
</div>


@foreach($contests as $contest)
<div class="links-wrapper">
    <div class="agency-card mx-1 my-2">
        <div class="d-flex flex-column">
            <span class="foment-value text-center">{{ $contest->title }}</span>
        </div>
        <div class="d-flex flex-column">
            <div class="foment-data d-flex flex-row justify-content-start">
                <span class="foment-label ">Cargos</span>
                <span class="foment-value">{{ $contest->occupations }}</span>
            </div>
            <div class="foment-data d-flex flex-row justify-content-start">
                <span class="foment-label ">Remuneração</span>
                <span class="foment-value">R$ {{ number_format($contest->salary,2,',','.') }}</span>
            </div>
            <div class="foment-data d-flex flex-row justify-content-start">
                <span class="foment-label ">Vagas</span>
                <span class="foment-value">{{ $contest->vacancies }}</span>
            </div>
            <div class="foment-data d-flex flex-row justify-content-start">
                <span class="foment-label ">Requisitos:</span>
                <span class="foment-value">{{ $contest->requirements }}</span>
            </div>
            <div class="foment-data d-flex flex-row justify-content-start">
                <span class="foment-label">Edital</span>
                <span class="foment-value"><a href="{{ $contest->link }}" target="_blank">{{ $contest->link }}</a> </span>
            </div>
        </div>
    </div>
</div>
@endforeach
{{$contests->links()}}
@endsection