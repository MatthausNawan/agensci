@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.companies._partials.menu')
</div>

<div class="row my-4">
    <div class="col-lg-6 offset-3">
        <div class="card">
            <div class="card-header">
                <h4 class="title"> Cadastrar Vaga @isset($job_type) {{$job_type}} @endisset</h4>
            </div>
            <form action="{{ route('companies.jobs.store') }}" method="post">
                @csrf
                <input type="hidden" name="type" value="{{$job_type}}">
                <div class="card-body">
                    <div class="form-group">
                        <label for="" class="required">Área</label>
                        <select name="segment_id" id="" class="form-control">
                            <option value="">Selecione</option>
                            @foreach($segments as $segment)
                            <option {{old('segment_id') == $segment->id ? 'selected' : null}} value="{{ $segment->id}}">{{$segment->name}} </option>
                            @endforeach
                        </select>
                        @if($errors->has('segment_id'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('segment_id') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="formation" class="required">Formação</label>
                        <input type="text" class="form-control" value="{{old('formation')}}" name="formation">
                        @if($errors->has('formation'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('formation') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="profile" class="required">Perfil Desejado</label>
                        <textarea name="profile" id="" cols="30" rows="10" class="form-control">{{old('profile')}}</textarea>
                        @if($errors->has('profile'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('profile') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="address" class="required">Endereço</label>
                        <input type="text" class="form-control" value="{{old('address')}}" name="address">
                        @if($errors->has('address'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('address') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="ocuppation" class="required">Cargo</label>
                        <input type="text" class="form-control" value="{{old('ocuppation')}}" name="ocuppation">
                        @if($errors->has('ocuppation'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('ocuppation') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="qty_jobs" class="required">Vagas</label>
                            <input type="number" step="1" value="1" min="1" value="{{old('qty_jobs')}}" class="form-control" name="qty_jobs">
                            @if($errors->has('qty_jobs'))
                                <span class="help-block text-danger" role="alert">{{ $errors->first('qty_jobs') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="salary" class="required">Salário</label>
                            <input type="number" class="form-control" step="0.50" min="0.00" value="{{old('salary')}}" value="0.00" name="salary">
                            @if($errors->has('salary'))
                                <span class="help-block text-danger" role="alert">{{ $errors->first('salary') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="expiration_date" class="required">Data Final de Inscrição</label>
                        <input type="date" class="form-control date" value="{{old('expiration_date')}}" name="expiration_date">
                        @if($errors->has('expiration_date'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('expiration_date') }}</span>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
