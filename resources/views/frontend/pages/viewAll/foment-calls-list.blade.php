@extends('layouts.default')


@section('page_content')

<div class="links-wrapper">
    <h2>Chamadas de Fomentos</h2>
    <div class="col-12">
        <form action="" method="get" class="form-inline d-flex justify-content-end">
            <div class="form-group">
                <div class="input-group">
                    <label for="" class="mr-2">Ordenar</label>
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
</div>




@foreach($promotions as $call)
    <div class="links-wrapper">
    <div class="agency-card mx-1 my-2">                    
        <div class="foment-data d-flex flex-row justify-content-start">
            <span class="foment-label ">Orgao/Entidade</span>
            <span class="foment-value">{{ $call->entity }}</span>
        </div>
        <div class="foment-data d-flex flex-row justify-content-start">
            <span class="foment-label">Tipo</span>
            <span class="foment-value">{{ Str::limit($call->thematic,50) }}</span>
        </div>
        <div class="foment-data d-flex flex-row justify-content-start">
            <span class="foment-label">Recursos</span>
            <span class="foment-value">RS {{ number_format($call->resources_amount,2,'.',',') }}</span>
        </div>
        <div class="foment-data d-flex flex-row justify-content-start">
            <span class="foment-label">Periodo de Inscrição</span>
            <span class="foment-value">{{ $call->subscription_period }}</span>
        </div>
        <div class="foment-data d-flex flex-row justify-content-start">
            <span class="foment-label">Edital</span>
            <span class="foment-value"><a href="{{ $call->edital_link }}">{{ Str::limit($call->edital_link,30) }}</a> </span>
        </div>                                                        
    </div>   
    </div> 
@endforeach
{{$promotions->links()}}
@endsection