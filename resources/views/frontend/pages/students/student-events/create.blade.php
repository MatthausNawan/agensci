@extends('layouts.frontend')


@section('content')


    @include('frontend.pages.students._partials.menu')


<div class="row">
    <div class="col-lg-6">
        <div class="card">            
            <form action="{{ route('students.student-events.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">                    
                    <div class="form-group {{ $errors->has('banner') ? 'has-error' : '' }}">
                        <label for="banner">{{ trans('cruds.event.fields.banner') }}</label>
                        <div class="needsclick dropzone" id="banner-dropzone">
                        </div>
                        @if($errors->has('banner'))
                            <span class="help-block" role="alert">{{ $errors->first('banner') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.event.fields.banner_helper') }}</span>
                    </div>
                    
                    <div class="form-group">
                        <label for="title" class="required">Titulo</label>
                        <input type="text" class="form-control form-control-sm" name="title">
                        @if($errors->has('title'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('title') }}</span>
                        @endif
                    </div>                    
                    
                    <div class="form-group">
                        <label for="location" class="required">Localização</label>
                        <input type="text" class="form-control form-control-sm" name="location">
                        @if($errors->has('location'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('location') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="link" class="required">Link</label>
                        <input type="text" class="form-control form-control-sm" name="link" placeholder="link do evento">
                        @if($errors->has('link'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('link') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="title" class="required">Período do Evento</label>
                        <input type="text" class="form-control form-control-sm" name="period" placeholder="De 00/00/00 á 00/00/00">
                        @if($errors->has('period'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('period') }}</span>
                        @endif
                    </div> 
                    <button type="submit" class="btn btn-sm text-black">Cadastrar</button>         
                </div>                
            </form>
        </div>
    </div>
</div>


@endsection
@section('js')
<script>
  $('.date').datetimepicker({
    format: 'DD/MM/YYYY',
    locale: 'en'
  })

  $('.select2').select2({
        theme:'bootstrap4',
});
</script>
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
