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
            <form action="{{route('students.meus-links.update',$personalLink->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="title" class="required">Nome</label>
                        <input type="text" class="form-control" name="title" value="{{ $personalLink->title ?? old('title') }}">
                        @if($errors->has('title'))
                            <span class="text-danger" role="alert">{{ $errors->first('photo') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title" class="required">Link</label>
                        <input type="text" class="form-control" name="link" value="{{ $personalLink->link ?? old('link') }}">
                        @if($errors->has('title'))
                            <span class="text-danger" role="alert">{{ $errors->first('photo') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                        <label for="photo" class="required">Foto</label>
                        <div class="needsclick dropzone" id="photo-dropzone">
                        </div>
                        @if($errors->has('photo'))
                            <span class="text-danger" role="alert">{{ $errors->first('photo') }}</span>
                        @endif
                        <span class="text-danger">{{ trans('cruds.speaker.fields.photo_helper') }}</span>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Atualizar</button>
                </div>
            </form>
            <form action="{{route('students.meus-links.destroy',$personalLink->id) }}" method="post">
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
@if(isset($personalLink) && $personalLink->photo)
      var file = {!! json_encode($personalLink->photo) !!}
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
