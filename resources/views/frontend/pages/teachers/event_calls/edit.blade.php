@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.teachers._partials.menu')
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">            
            <form action="{{ route('teachers.event-calls.update',$eventCall->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                <div class="form-group">
                        <label for="title" class="required">Titulo</label>
                        <input type="text" class="form-control form-control-sm" name="title" value="{{ old('title',$eventCall->title) }}">
                        @if($errors->has('title'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('title') }}</span>
                        @endif
                    </div>                    
                    
                    <div class="form-group {{ $errors->has('media_type') ? 'has-error' : '' }}">
                        <label for="media" class="required">Tipo de Mídia</label>
                        <select name="media_type" class="form-control form-control-sm">
                            <option value="YT_EMBED_VIDEO" selected>Códio de Incorpoaração do Youtube.</option>
                        </select>
                    </div>

                    <div class="form-group {{ $errors->has('media') ? 'has-error' : '' }}">
                        <label for="media" class="required">Codigo de Incorporação</label>
                        <textarea class="form-control form-control-sm" name="media" id="media" cols="5" rows="5">{!! old('media',$eventCall->media) !!}</textarea>
                        @if($errors->has('media'))
                            <span class="help-block" role="alert">{{ $errors->first('media') }}</span>
                        @endif                        
                    </div>

                    <div class="form-group {{ $errors->has('event_id') ? 'has-error' : '' }}">
                        <label for="event_id" class="required">Vincular ao Evento</label>
                        <select name="event_id" id="" class="form-control form-control-sm">
                            @foreach($events as $event)
                                <option value="{{$event->id }}" {{ $eventCall->event_id == $event->id ? 'selected' : ''}}>{{ $event->title ?? ''}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-secondary">Cadastrar</button>
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
