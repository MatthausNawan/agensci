@extends('layouts.frontend')


@section('content')


@include('frontend.pages.students._partials.menu')


<div class="row">
    <div class="col-lg-6">
        <div class="links-wrapper">            
            <form action="{{route('students.student-profiles.update',$studentProfile->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                        <label for="course_name" class="required">Curso</label>
                        <input type="text" class="form-control form-control-sm" name="course_name" value="{{ $studentProfile->course_name ?? old('course_name') }}" placeholder="ex: Bacharelado em Administração">
                        @if($errors->has('course_name'))
                            <span class="text-danger" role="alert">{{ $errors->first('course_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title" class="required">Periodo</label>
                        <input type="text" class="form-control form-control-sm" name="period" value="{{ $studentProfile->period ?? old('period') }}" placeholder="ex: 2 Período">
                        @if($errors->has('period'))
                            <span class="text-danger" role="alert">{{ $errors->first('period') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="university_name" class="required">Nome da Universidade</label>
                        <input type="text" class="form-control form-control-sm" name="university_name" value="{{ $studentProfile->university_name ?? old('university_name') }}">
                        @if($errors->has('university_name'))
                            <span class="text-danger" role="alert">{{ $errors->first('university_name') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="lattes_link" class="required">Link Curriculo Lattes</label>
                        <input type="text" class="form-control form-control-sm" name="lattes_link" value="{{ $studentProfile->lattes_link ?? old('lattes_link') }}">
                        @if($errors->has('lattes_link'))
                            <span class="text-danger" role="alert">{{ $errors->first('lattes_link') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="bio" class="required">Descrição</label>
                        <textarea name="bio" id="" cols="30" rows="10" class="form-control form-control-sm">{{$studentProfile->bio ?? old('bio')}}</textarea>
                        @if($errors->has('bio'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('bio') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="speeches" class="required">Palestras</label>
                        <input type="text" data-role="tagsinput" name="speachees" class="form-control form-control-sm">                        
                        @if($errors->has('speeches'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('speeches') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="monitorings" class="required">Monitorias</label>
                        <input type="text" data-role="tagsinput" name="monitorings" class="form-control form-control-sm">                                                
                        @if($errors->has('monitorings'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('monitorings') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="awards" class="required">Premiações</label>
                        <input type="text" data-role="tagsinput" name="awards" class="form-control form-control-sm">                                                                        
                        @if($errors->has('awards'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('awards') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn text-black border rounded">Atualizar</button>
                </div>
            </form>            
        </div>
    </div>
</div>


@endsection



@section('styles')
<link rel="stylesheet" href="{{asset('vendor/tag-input/tagsinput.css')}}">
@endsection

@section('js')
<script src="{{ asset('vendor/tag-input/tagsinput.js') }}"></script>
@endsection('js')
