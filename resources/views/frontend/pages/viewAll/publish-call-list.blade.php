@extends('layouts.default')


@section('page_content')

<h2>Chamadas de Publicação</h2>

<div class="col-12">
    <form action="" method="get" class="form-inline d-flex justify-content-end">
        <div class="form-group">
            <div class="input-group">
                <label for="">Ordenar</label>
                <select name="sort" id="" class="form-control">
                    <option value="a-z">A-Z</option>
                    <option value="z-a">Z-A</option>
                    <option value="asc">Novos</option>
                    <option value="desc">Antigos</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary ml-2">Filtrar</button>
        </div>
    </form>
</div>


@foreach($publishCalls as $publish_call)
<div class="links-wrapper">
<div class="agency-card mx-1 my-2">                           
            <div class="d-flex flex-column">
                <div class="d-flex flex-column mt-2">
                    <div class="foment-data d-flex flex-row justify-content-start">
                        <span class="foment-label ">Revista</span>
                        <span class="foment-value">{{ $publish_call->magazine }}</span>
                    </div>
                    <div class="foment-data d-flex flex-row justify-content-start">
                        <span class="foment-label">ISSN</span>
                        <span class="foment-value">{{ $publish_call->issn }}</span>
                        <span class="foment-label">Qualis</span>
                        <span class="foment-value">{{ $publish_call->qualis }}</span>
                    </div>
                    <div class="foment-data d-flex flex-row justify-content-start">
                        <span class="foment-label">Periodicidade</span>
                        <span class="foment-value">{{ $publish_call->frequency }}</span>
                    </div>
                    <div class="foment-data d-flex flex-row justify-content-start">
                        <span class="foment-label">Dossiê</span>
                        <span class="foment-value">{{ Str::limit($publish_call->dossie,200) }}</span>
                    </div>
                    <div class="foment-data d-flex flex-row justify-content-start">
                        <span class="foment-label">Tema</span>
                        <span class="foment-value">{{ Str::limit($publish_call->theme,200) }}</span>
                    </div>
                    <div class="foment-data d-flex flex-row justify-content-start">
                        <span class="foment-label">Organização</span>
                        <span class="foment-value">{{ $publish_call->organization }}</span>
                    </div>
                    <div class="foment-data d-flex flex-row justify-content-start">
                        <span class="foment-label">Prazo de Submissão</span>
                        <span class="foment-value">{{ $publish_call->submission_period }}</span>
                    </div>
                    <div class="foment-data d-flex flex-row justify-content-start">
                        <span class="foment-label">Edital</span>
                        <span class="foment-value"><a href="{{ $publish_call->link }}" target="_blank">{{ Str::limit($publish_call->link,30) }}</a> </span>
                    </div>
                </div>
            </div>                      
        </div>
</div>
@endforeach
{{$publishCalls->links()}}
@endsection