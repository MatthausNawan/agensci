@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.headline.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.headlines.update", [$headline->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="title">{{ trans('cruds.headline.fields.title') }}</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $headline->title) }}">
                            @if($errors->has('title'))
                                <span class="help-block" role="alert">{{ $errors->first('title') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.headline.fields.title_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('details') ? 'has-error' : '' }}">
                            <label for="details">{{ trans('cruds.headline.fields.details') }}</label>
                            <textarea class="form-control ckeditor" name="details" id="details">{!! old('details', $headline->details) !!}</textarea>
                            @if($errors->has('details'))
                                <span class="help-block" role="alert">{{ $errors->first('details') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.headline.fields.details_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('banner') ? 'has-error' : '' }}">
                            <label for="banner">{{ trans('cruds.headline.fields.banner') }}</label>
                            <div class="needsclick dropzone" id="banner-dropzone">
                            </div>
                            @if($errors->has('banner'))
                                <span class="help-block" role="alert">{{ $errors->first('banner') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.headline.fields.banner_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('segment') ? 'has-error' : '' }}">
                            <label for="segment_id">{{ trans('cruds.headline.fields.segment') }}</label>
                            <select class="form-control select2" name="segment_id" id="segment_id">
                                @foreach($segments as $id => $segment)
                                    <option value="{{ $id }}" {{ (old('segment_id') ? old('segment_id') : $headline->segment->id ?? '') == $id ? 'selected' : '' }}>{{ $segment }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('segment'))
                                <span class="help-block" role="alert">{{ $errors->first('segment') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.headline.fields.segment_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('magazine') ? 'has-error' : '' }}">
                            <label for="magazine_id">{{ trans('cruds.headline.fields.magazine') }}</label>
                            <select class="form-control select2" name="magazine_id" id="magazine_id">
                                @foreach($magazines as $id => $magazine)
                                    <option value="{{ $id }}" {{ (old('magazine_id') ? old('magazine_id') : $headline->magazine->id ?? '') == $id ? 'selected' : '' }}>{{ $magazine }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('magazine'))
                                <span class="help-block" role="alert">{{ $errors->first('magazine') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.headline.fields.magazine_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('enabled') ? 'has-error' : '' }}">
                            <div>
                                <input type="hidden" name="enabled" value="0">
                                <input type="checkbox" name="enabled" id="enabled" value="1" {{ $headline->enabled || old('enabled', 0) === 1 ? 'checked' : '' }}>
                                <label for="enabled" style="font-weight: 400">{{ trans('cruds.headline.fields.enabled') }}</label>
                            </div>
                            @if($errors->has('enabled'))
                                <span class="help-block" role="alert">{{ $errors->first('enabled') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.headline.fields.enabled_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.headline.fields.type') }}</label>
                            <select class="form-control" name="type" id="type">
                                <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Headline::TYPE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('type', $headline->type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('type'))
                                <span class="help-block" role="alert">{{ $errors->first('type') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.headline.fields.type_helper') }}</span>
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
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/admin/headlines/ckmedia', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $headline->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.bannerDropzone = {
    url: '{{ route('admin.headlines.storeMedia') }}',
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
      $('form').find('input[name="banner"]').remove()
      $('form').append('<input type="hidden" name="banner" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="banner"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($headline) && $headline->banner)
      var file = {!! json_encode($headline->banner) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="banner" value="' + file.file_name + '">')
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
