@extends('layouts.frontend')
@section('content')
@include('frontend.pages.teachers._partials.menu')

<div class="row">
    <div class="col-lg-12">
        <div class="links-wrapper">            
            <form action="{{ route('teachers.events.update',$event->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
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
                            <input type="text" class="form-control form-control-sm" name="title" value="{{$event->title ?? old('title')}}">
                            @if($errors->has('title'))
                                <span class="help-block text-danger" role="alert">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                    <div class="row">                        
                        <div class="form-group col-6">
                            <label for="" class="required">Area</label>
                            <select name="segment_id" id="" class="form-control form-control-sm">
                                <option value="">Selecione</option>
                                @foreach($segments as $segment)
                                <option value="{{$segment->id}}" {{$event->segment_id == $segment->id ? 'selected' : ''}}>{{$segment->name}} </option>
                                @endforeach
                            </select>
                            @if($errors->has('segment_id'))
                                <span class="help-block text-danger" role="alert">{{ $errors->first('segment_id') }}</span>
                            @endif
                        </div>

                        <div class="col-6">
                            <label for="" class="required">Categoria</label>
                            <select name="category_id" id="" class="form-control form-control-sm">
                                <option value="">Selecione</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" {{$event->category_id == $category->id ? 'selected' : ''}}>{{$category->name}} </option>
                                @endforeach
                            </select>
                            @if($errors->has('category_id'))
                                <span class="help-block text-danger" role="alert">{{ $errors->first('category_id') }}</span>
                            @endif
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="form-group col-3">
                            <label for="" class="required">País</label>
                            <select name="country_id" id="" class="form-control form-control-sm">
                                <option value="">Selecione</option>
                                @foreach($countries as $country)
                                <option value="{{$country->id}}" {{$event->country_id == $country->id ? 'selected' : ''}}>{{$country->name}} </option>
                                @endforeach
                            </select>
                            @if($errors->has('country_id'))
                                <span class="help-block text-danger" role="alert">{{ $errors->first('country_id') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-3">
                            <label for="" class="required">Estado</label>
                            <select name="state_id" id="" class="form-control form-control-sm">
                                <option value="">Selecione</option>
                                @foreach($states as $state)
                                <option value="{{$state->id}}" {{$event->state_id == $state->id ? 'selected' : ''}}>{{$state->name}} </option>
                                @endforeach
                            </select>
                            @if($errors->has('state_id'))
                                <span class="help-block text-danger" role="alert">{{ $errors->first('state_id') }}</span>
                            @endif
                        </div>

                        <div class="form-group col-6">
                            <label for="location" class="required">Localização</label>
                            <input type="text" class="form-control form-control-sm" name="location" value="{{$event->location ?? old('location')}}">
                            @if($errors->has('location'))
                                <span class="help-block text-danger" role="alert">{{ $errors->first('location') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="link" class="required">Link</label>
                        <input type="text" class="form-control form-control-sm" name="link" value="{{$event->link ?? old('link')}}">
                        @if($errors->has('link'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('link') }}</span>
                        @endif
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="link" class="required">Link</label>
                            <input type="text" class="form-control form-control-sm" name="link" value="{{$event->link ?? old('link')}}">
                            @if($errors->has('link'))
                                <span class="help-block text-danger" role="alert">{{ $errors->first('link') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="start_date" class="required">Data Inicio Evento</label>
                            <input type="text" class="form-control form-control-sm date" name="start_date" value="{{$event->start_date ?? old('start_date')}}">
                            @if($errors->has('start_date'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('start_date') }}</span>
                            @endif
                        </div>

                        <div class="form-group col-lg-3">
                            <label for="end_date" class="required">Data Final Evento</label>
                            <input type="text" class="form-control form-control-sm date" name="end_date" value="{{$event->end_date ?? old('end_date')}}">
                            @if($errors->has('end_date'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('end_date') }}</span>
                            @endif
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="title" class="required">Período de Inscrição</label>
                        <input type="text" class="form-control form-control-sm" name="subscription_period" value="{{$event->subscription_period ?? old('subscription_period')}}">
                        @if($errors->has('subscription_period'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('subscription_period') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="is_collaborate_event" value="0">
                        <input type="checkbox" name="is_collaborate_event" id="is_collaborate_event" value="1" {{ $event->is_collaborate_event || old('is_collaborate_event', 0) === 1 ? 'checked' : '' }}>                    
                        <label for="is_collaborate_event">Evento Colaborado?</label>
                    </div>
                    
                    <div class="form-group">
                        <label for="details" class="required">Detalhes</label>
                        <textarea name="details" id="" cols="30" rows="10" class="form-control form-control-sm">{{$event->details ?? old('details')}}</textarea>
                        @if($errors->has('details'))
                            <span class="help-block text-danger" role="alert">{{ $errors->first('details') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn text-black border rounded">Atualizar</button>
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
@if(isset($event) && $event->banner)
      var file = {!! json_encode($event->banner) !!}
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
