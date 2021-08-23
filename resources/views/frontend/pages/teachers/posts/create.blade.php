@extends('layouts.frontend')
@section('content')
@include('frontend.pages.teachers._partials.menu')

<div class="row">
    <div class="col-lg-10">
        <div class="links-wrapper">
            <div class="card-header">
                <label for="">Cadastrar Notícia</label>
            </div>
            <form action="{{ route('teachers.posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group {{ $errors->has('banner') ? 'has-error' : '' }}">
                        <label for="banner" class="required">Foto Destaque</label>
                        <div class="needsclick dropzone" id="banner-dropzone">
                        </div>
                        @if($errors->has('banner'))
                            <span class="help-block" role="alert">{{ $errors->first('banner') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.post.fields.banner_helper') }}</span>
                    </div>

                    <div class="form-group">
                        <label for="title" class="required">Titulo</label>
                        <input type="text" class="form-control form-control-sm" name="title">
                        @if($errors->has('title'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('title') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('detail') ? 'has-error' : '' }}">
                        <label for="detail" class="required">{{ trans('cruds.post.fields.detail') }}</label>
                        <textarea class="form-control form-control-sm" name="detail" id="detail" cols="2" rows="4">{!! old('detail') !!}</textarea>
                        @if($errors->has('detail'))
                            <span class="help-block" role="alert">{{ $errors->first('detail') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.post.fields.detail_helper') }}</span>
                    </div>

                    
                    <button type="submit" class="btn text-black rounded border">Cadastrar</button>
                </div>                
            </form>
        </div>
    </div>
</div>


@endsection


@section('js')
<script>
    Dropzone.options.bannerDropzone = {
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
@if(isset($post) && $post->banner)
      var file = {!! json_encode($post->banner) !!}
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