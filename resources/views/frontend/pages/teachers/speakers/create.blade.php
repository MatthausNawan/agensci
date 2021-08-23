@extends('layouts.frontend')
@section('content')
@include('frontend.pages.teachers._partials.menu')

<div class="row">
    <div class="col-lg-6">
        <div class="links-wrapper">            
            <form action="{{ route('teachers.speakers.store') }}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="card-body">
                    <small for="">Informe seus dados como Palestrante</small>                                        
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                        <label for="title" class="required">Descricão Curta</label>
                        <input type="text" class="form-control" name="description">
                        @if($errors->has('description'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('description') }}</span>
                        @endif
                        <span class="help-block">Insira um nome curto para ficar visível no site</span>
                    </div>

                    <div class="form-group {{ $errors->has('bio') ? 'has-error' : ''}}">
                        <label for="bio" class="required">Descrição</label>
                        <textarea name="bio" id="" cols="30" rows="6" class="form-control">{{ $speaker->bio ?? old('bio') }}</textarea>
                        @if($errors->has('bio'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('bio') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="articles" class="required">Artigos</label>                        
                        <input type="text" data-role="tagsinput" name="articles">                        
                        @if($errors->has('articles'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('articles') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="speeches" class="required">Palestras</label>
                        <input type="text" data-role="tagsinput" name="speeches">
                        @if($errors->has('speeches'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('speeches') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="books" class="required">Livros</label>
                        <input type="text" data-role="tagsinput" name="books">
                        @if($errors->has('books'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('books') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="awards" class="required">Premiações</label>
                        <input type="text" data-role="tagsinput" name="awards">
                        @if($errors->has('awards'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('awards') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('areas') ? 'has-error' : ''}}">
                        <label for="areas" class="required">Areas de Atuação</label>
                        <input type="text" data-role="tagsinput" name="areas" class="tags">
                        @if($errors->has('areas'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('areas') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn text-black rounded border">Cadastrar</button>
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
<script>

    Dropzone.options.photoDropzone = {
    url: '{{ route('teachers.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($speaker) && $speaker->photo)
      var file = {!! json_encode($speaker->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }
        return _results
    }
}
</script>

@endsection('js')
