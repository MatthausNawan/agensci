@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.teachers._partials.menu')
</div>

<div class="row my-4">
    <div class="col-lg-6 offset-3">
        <div class="card">
            <div class="card-header">
                <h4 class="title"> Cadastrar Palestrante</h4>
            </div>
            <form action="{{ route('teachers.speakers.update',$speaker->id) }}" method="post">
                @method('put')
                @csrf
                <div class="card-body">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        <label for="title" class="required">Nome</label>
                        <input type="text" class="form-control" name="name" value="{{$speaker->name ?? old('name') }}">
                        @if($errors->has('name'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                        <label for="title" class="required">Descricão Curta</label>
                        <input type="text" class="form-control" name="description" value="{{$speaker->description ?? old('name') }}">
                        @if($errors->has('description'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('bio') ? 'has-error' : ''}}">
                        <label for="bio" class="required">Bio</label>
                        <textarea name="bio" id="" cols="30" rows="10" class="form-control">{{ $speaker->bio ?? old('bio') }}</textarea>
                        @if($errors->has('bio'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('bio') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('areas') ? 'has-error' : ''}}">
                        <label for="areas" class="required">Areas</label>
                        <textarea name="areas" id="" cols="30" rows="10" class="form-control">{{ $speaker->areas ?? old('areas') }}</textarea>
                        @if($errors->has('areas'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('areas') }}</span>
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
