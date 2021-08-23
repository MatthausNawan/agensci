@extends('layouts.frontend')
@section('content')
@include('frontend.pages.companies._partials.menu')
<div class="row">
    <div class="col-lg-6">
        <div class="links-wrapper">            
            <form action="{{ route('companies.jobs.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <label for="" class="text-capitalize">Cadastrar {{$type}}</label>
                    {{--<div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                        <label class="required">Tipo de Vaga</label>
                        <select class="form-control form-control-sm" name="type" id="type">
                            <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                            @foreach(App\Models\Job::TYPE_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('type', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('type'))
                        <span class="help-block" role="alert">{{ $errors->first('type') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.job.fields.type_helper') }}</span>
                    </div>--}}                     
                    @if($type != "emprego")
                        <div class="form-group">
                            <label for="area" class="required">Area</label>
                            <input type="text" class="form-control form-control-sm" value="{{old('area')}}" name="area">
                            @if($errors->has('area'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('area') }}</span>
                            @endif
                        </div>                        
                        <div class="form-group">
                            <label for="formation" class="required">Formação</label>
                            <input type="text" class="form-control form-control-sm" value="{{old('formation')}}" name="formation">
                            @if($errors->has('formation'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('formation') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="profile" class="required">Perfil Desejado</label>
                            <textarea name="profile" id="" cols="30" rows="10" class="form-control form-control-sm">{{old('profile')}}</textarea>
                            @if($errors->has('profile'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('profile') }}</span>
                            @endif
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="address" class="required">Endereço</label>
                        <input type="text" class="form-control form-control-sm" value="{{old('address')}}" name="address">
                        @if($errors->has('address'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('address') }}</span>
                        @endif
                    </div>
                    @if($type == 'emprego')
                        <div class="form-group">
                            <label for="ocuppation" class="required">Cargo</label>
                            <input type="text" class="form-control form-control-sm" value="{{old('ocuppation')}}" name="ocuppation">
                            @if($errors->has('ocuppation'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('ocuppation') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="salary" class="required">Salário</label>
                            <input class="form-control form-control-sm" type="number" name="salary" id="salary" value="{{ old('salary', '') }}" step="0.01">
                            @if($errors->has('salary'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('salary') }}</span>
                            @endif
                        </div>
                    @endif
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="qty_jobs" class="required">Vagas</label>
                            <input type="number" step="1" value="1" min="1" value="{{old('qty_jobs')}}" class="form-control form-control-sm" name="qty_jobs">
                            @if($errors->has('qty_jobs'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('qty_jobs') }}</span>
                            @endif
                        </div>                        
                    </div>
                    <div class="form-group">
                        <label for="link" class="required">Endereço para inscrição(LINK DO SITE)</label>
                        <input type="text" class="form-control form-control-sm" value="{{old('link')}}" name="link">
                        @if($errors->has('link'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('link') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="expiration_date" class="required">Data Final de Inscrição</label>
                        <input type="date" class="form-control form-control-sm" value="{{old('expiration_date')}}" name="expiration_date">
                        @if($errors->has('expiration_date'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('expiration_date') }}</span>
                        @endif
                    </div>
                    <input type="hidden" name="type" value="{{$type}}">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
