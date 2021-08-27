@extends('layouts.default')


@section('page_content')

<h2>Empregos</h2>

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


@foreach($jobs as $job)
    <div class="links-wrapper">
    <div class="agency-card mx-1 my-1">
        <div class="d-flex flex-row">
            <span class="foment-label text-center">Empresa</span>
            <span class="foment-value text-center">
                <span>{{ $job->company }}</span>
            </span>
            <span class="foment-value text-center d-flex justify-content-center">
                <img src="{{ $job->companyJob->logo ? $job->companyJob->logo->getUrl('thumb') : '' }}" alt="" style="height:50px; width:50px;">
            </span>
        </div>
        <div class="d-flex flex-column">
            <div class="foment-data d-flex flex-row justify-content-start">
                <span class="foment-label ">Cargo</span>
                <span class="foment-value">{{ $job->ocuppation }}</span>
            </div>    
            <div class="foment-data d-flex flex-row justify-content-start">
                <span class="foment-label ">Endereço</span>
                <span class="foment-value">{{ $job->address }}</span>
            </div>    
            <div class="foment-data d-flex flex-row justify-content-start">
                <span class="foment-label ">Salario</span>
                <span class="foment-value">R$ {{ number_format($job->salary,2,',','.') }}</span>
            </div> 
            <div class="foment-data d-flex flex-row justify-content-start">
                <span class="foment-label ">Vagas</span>
                <span class="foment-value">{{ $job->qty_jobs }}</span>
            </div>  
            <div class="foment-data d-flex flex-row justify-content-start">
                <span class="foment-label ">Aberta até:</span>
                <span class="foment-value">{{ $job->expiration_date->format('d/m/Y') }}</span>
            </div>  
            <div class="foment-data d-flex flex-row justify-content-start">
                <span class="foment-label">Link</span>
                <span class="foment-value"><a href="{{ $job->link }}" target="_blank">{{ $job->link }}</a> </span>
            </div>                       
        </div>
    </div>
    </div>  
@endforeach
{{$jobs->links()}}
@endsection