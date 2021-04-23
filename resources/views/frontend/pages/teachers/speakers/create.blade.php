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
            <form action="{{ route('teachers.speakers.store') }}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="card-body">
                    <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                        <label for="photo" class="required">Foto</label>
                        <div class="needsclick dropzone" id="photo-dropzone">
                        </div>
                        @if($errors->has('photo'))
                            <span class="help-block" role="alert">{{ $errors->first('photo') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.speaker.fields.photo_helper') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        <label for="title" class="required">Nome</label>
                        <input type="text" class="form-control" name="name">
                        @if($errors->has('name'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                        <label for="title" class="required">Descricão Curta</label>
                        <input type="text" class="form-control" name="description">
                        @if($errors->has('description'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('bio') ? 'has-error' : ''}}">
                        <label for="bio" class="required">Bio</label>
                        <textarea name="bio" id="" cols="30" rows="10" class="form-control"></textarea>
                        @if($errors->has('bio'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('bio') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="articles" class="required">Artigos</label>
                        <textarea name="articles" id="" cols="30" rows="10" class="form-control" placeholder="Para separar utilize ponto e virgula ; ">{{old('articles')}}</textarea>
                        @if($errors->has('articles'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('articles') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="speeches" class="required">Palestras</label>
                        <textarea name="speeches" id="" cols="30" rows="10" class="form-control" placeholder="Para separar utilize ponto e virgula ; ">{{old('speeches')}}</textarea>
                        @if($errors->has('speeches'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('speeches') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="books" class="required">Livros</label>
                        <textarea name="books" id="" cols="30" rows="10" class="form-control" placeholder="Para separar utilize ponto e virgula ; ">{{old('books')}}</textarea>
                        @if($errors->has('books'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('books') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="awards" class="required">Premiações</label>
                        <textarea name="awards" id="" cols="30" rows="10" class="form-control" placeholder="Para separar utilize ponto e virgula ; ">{{old('awards')}}</textarea>
                        @if($errors->has('awards'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('awards') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('areas') ? 'has-error' : ''}}">
                        <label for="areas" class="required">Areas de Atuação</label>
                        <textarea name="areas" id="" cols="30" rows="10" class="form-control" placeholder="Para separar utilize ponto e virgula ; "></textarea>
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

@section('js')
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
