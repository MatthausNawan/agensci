@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.studentProfile.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.student-profiles.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">{{ trans('cruds.studentProfile.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}">
                            @if($errors->has('name'))
                                <span class="help-block" role="alert">{{ $errors->first('name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.studentProfile.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('couse_name') ? 'has-error' : '' }}">
                            <label for="couse_name">{{ trans('cruds.studentProfile.fields.couse_name') }}</label>
                            <input class="form-control" type="text" name="couse_name" id="couse_name" value="{{ old('couse_name', '') }}">
                            @if($errors->has('couse_name'))
                                <span class="help-block" role="alert">{{ $errors->first('couse_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.studentProfile.fields.couse_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('period') ? 'has-error' : '' }}">
                            <label for="period">{{ trans('cruds.studentProfile.fields.period') }}</label>
                            <input class="form-control" type="text" name="period" id="period" value="{{ old('period', '') }}">
                            @if($errors->has('period'))
                                <span class="help-block" role="alert">{{ $errors->first('period') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.studentProfile.fields.period_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('university_name') ? 'has-error' : '' }}">
                            <label for="university_name">{{ trans('cruds.studentProfile.fields.university_name') }}</label>
                            <input class="form-control" type="text" name="university_name" id="university_name" value="{{ old('university_name', '') }}">
                            @if($errors->has('university_name'))
                                <span class="help-block" role="alert">{{ $errors->first('university_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.studentProfile.fields.university_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('resume') ? 'has-error' : '' }}">
                            <label for="resume">{{ trans('cruds.studentProfile.fields.resume') }}</label>
                            <div class="needsclick dropzone" id="resume-dropzone">
                            </div>
                            @if($errors->has('resume'))
                                <span class="help-block" role="alert">{{ $errors->first('resume') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.studentProfile.fields.resume_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('lattes_link') ? 'has-error' : '' }}">
                            <label for="lattes_link">{{ trans('cruds.studentProfile.fields.lattes_link') }}</label>
                            <input class="form-control" type="text" name="lattes_link" id="lattes_link" value="{{ old('lattes_link', '') }}">
                            @if($errors->has('lattes_link'))
                                <span class="help-block" role="alert">{{ $errors->first('lattes_link') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.studentProfile.fields.lattes_link_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('bio') ? 'has-error' : '' }}">
                            <label for="bio">{{ trans('cruds.studentProfile.fields.bio') }}</label>
                            <textarea class="form-control" name="bio" id="bio">{{ old('bio') }}</textarea>
                            @if($errors->has('bio'))
                                <span class="help-block" role="alert">{{ $errors->first('bio') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.studentProfile.fields.bio_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                            <label for="photo">{{ trans('cruds.studentProfile.fields.photo') }}</label>
                            <div class="needsclick dropzone" id="photo-dropzone">
                            </div>
                            @if($errors->has('photo'))
                                <span class="help-block" role="alert">{{ $errors->first('photo') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.studentProfile.fields.photo_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">{{ trans('cruds.studentProfile.fields.email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">
                            @if($errors->has('email'))
                                <span class="help-block" role="alert">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.studentProfile.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label for="phone">{{ trans('cruds.studentProfile.fields.phone') }}</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                            @if($errors->has('phone'))
                                <span class="help-block" role="alert">{{ $errors->first('phone') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.studentProfile.fields.phone_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    Dropzone.options.resumeDropzone = {
    url: '{{ route('admin.student-profiles.storeMedia') }}',
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="resume"]').remove()
      $('form').append('<input type="hidden" name="resume" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="resume"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($studentProfile) && $studentProfile->resume)
      var file = {!! json_encode($studentProfile->resume) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="resume" value="' + file.file_name + '">')
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
<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.student-profiles.storeMedia') }}',
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
@endsection