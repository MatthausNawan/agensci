@extends('layouts.default')


@section('page_content')


<div class="col-12 d-flex flex-row justify-content-between">
    <h4>Portifólios de Estudantes</h4>
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

<div class="links-wrapper">
    @foreach($studentProfiles as $profile)
    <div class="mt-1">
        <div class="agency-card d-flex flex-column bg-white m-2">
            <div class="row d-flex flex-row">
                <div class="col-2">
                    <img src="{{ $profile->photo ? $profile->photo->getUrl() : asset('images/avatar.png')}}" alt="" class="" style="width:100%;height:100%">
                </div>
                <div class="col-10">
                    <div class="d-flex flex-column">
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Nome</span>
                            <span class="foment-value">{{ $profile->name }}</span>
                        </div>
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Curso</span>
                            <span class="foment-value">{{ $profile->couse_name }}</span>
                        </div>
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Instituição</span>
                            <span class="foment-value">{{ $profile->university_name }}</span>
                        </div>
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label">Lattes</span>
                            <span class="foment-value"><a href="{{ $profile->lattes_link }}">{{ $profile->lattes_link }}</a> </span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="foment-data d-flex flex-row justify-content-start">

                        <div class="d-flex flex-column foment-value">
                            <span class="font-weight-bold">Perfil</span>
                            <span class="">{{$profile->bio}}</span>
                            <small class="text-right">
                                <span class="text-dark">Enviar Mensagem</span>
                                <a href="mailto:{{$profile->email}}">Email</a>
                                &mdash;
                                <a href="tel:{{$profile->phone}}">Celular</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{$studentProfiles->links()}}
</div>

@endsection