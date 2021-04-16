@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.students._partials.menu')
</div>

<div class="row my-4">
    <div class="col-lg-6 offset-3">
        <div class="card">
            <div class="card-header">
                <h4 class="title"> Editar Link</h4>
            </div>
            <form action="{{route('students.student-profiles.update',$studentProfile->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                        <label for="course_name" class="required">Curso</label>
                        <input type="text" class="form-control" name="course_name" value="{{ $studentProfile->course_name ?? old('course_name') }}" placeholder="ex: Bacharelado em Administração">
                        @if($errors->has('course_name'))
                            <span class="text-danger" role="alert">{{ $errors->first('course_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title" class="required">Periodo</label>
                        <input type="text" class="form-control" name="period" value="{{ $studentProfile->period ?? old('period') }}" placeholder="ex: 2 Período">
                        @if($errors->has('period'))
                            <span class="text-danger" role="alert">{{ $errors->first('period') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="university_name" class="required">Nome da Universidade</label>
                        <input type="text" class="form-control" name="university_name" value="{{ $studentProfile->university_name ?? old('university_name') }}">
                        @if($errors->has('university_name'))
                            <span class="text-danger" role="alert">{{ $errors->first('university_name') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="lattes_link" class="required">Link Curriculo Lattes</label>
                        <input type="text" class="form-control" name="lattes_link" value="{{ $studentProfile->lattes_link ?? old('lattes_link') }}">
                        @if($errors->has('lattes_link'))
                            <span class="text-danger" role="alert">{{ $errors->first('lattes_link') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="bio" class="required">Descrição</label>
                        <textarea name="bio" id="" cols="30" rows="10" class="form-control">{{$studentProfile->bio ?? old('bio')}}</textarea>
                        @if($errors->has('bio'))
                        <span class="help-block text-danger" role="alert">{{ $errors->first('bio') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email" class="required">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$studentProfile->email ?? old('email') }}">
                        @if($errors->has('email'))
                            <span class="text-danger" role="alert">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="phone" class="required">Telefone</label>
                        <input type="text" class="form-control" name="phone" value="{{$studentProfile->phone ?? old('phone') }}">
                        @if($errors->has('phone'))
                            <span class="text-danger" role="alert">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Atualizar</button>
                </div>
            </form>
            <form action="{{route('students.student-profiles.destroy',$studentProfile->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-transparent pull-right"><i class="fa fa-trash"></i></a>
            </form>
        </div>
    </div>
</div>


@endsection

@section('js')
<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('students.storeMedia') }}',
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
@if(isset($studentProfile) && $studentProfile->photo)
      var file = {!! json_encode($studentProfile->photo) !!}
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
