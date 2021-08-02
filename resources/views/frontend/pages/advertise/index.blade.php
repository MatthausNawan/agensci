@extends('layouts.frontend')

@section('content')

<div class="row">
    <div class="col-lg-12 m-2">
        <img src="https://via.placeholder.com/1200x90" alt="" class="img-rounded" width="100%" height="90">
    </div>
</div>

<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <div class="card">
            <div class="card-header bg-dark">
                <div class="card-title text-white">Anuncie Aqui</div>
                
            </div>
            <div class="card-body">
                <small>Campos com <span class="text-danger">*</span> são obrigatórios</small>
                <form action="{{ route('site.advertise.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="social_name" class="required">Razão Social</label>
                            <input type="text" name="social_name" class="form-control {{ $errors->has('social_name') ? 'is-invalid' : '' }}" value="{{ old('social_name', '') }}">
                            @if($errors->has('social_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('social_name') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-6">
                            <label for="fantasy_name" class="required">Nome Fantasia</label>
                            <input type="text" name="fantasy_name" class="form-control {{ $errors->has('fantasy_name') ? 'is-invalid' : '' }}" value="{{ old('fantasy_name', '') }}">
                            @if($errors->has('fantasy_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('fantasy_name') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-6">
                            <label for="contact_name" class="required">Responsável</label>
                            <input type="text" name="contact_name" class="form-control {{ $errors->has('contact_name') ? 'is-invalid' : '' }}" value="{{ old('contact_name', '') }}">
                            @if($errors->has('contact_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('contact_name') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-6">
                            <label for="contact_email" class="required">E-mail</label>
                            <input type="text" name="contact_email" class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" value="{{ old('contact_email', '') }}">
                            @if($errors->has('contact_email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('contact_email') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="contact_phone">Telefone (DDD)</label>
                            <input type="text" name="contact_phone" class="form-control {{ $errors->has('contact_phone') ? 'is-invalid' : '' }}" value="{{ old('contact_phone', '') }}">
                            @if($errors->has('contact_phone'))
                            <div class="invalid-feedback">
                                {{ $errors->first('contact_phone') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-6">
                            <label for="contact_mobile" class="required">Celular (DDD)</label>
                            <input type="text" name="contact_mobile" class="form-control {{ $errors->has('contact_mobile') ? 'is-invalid' : '' }}" value="{{ old('contact_mobile', '') }}">
                            @if($errors->has('contact_mobile'))
                            <div class="invalid-feedback">
                                {{ $errors->first('contact_mobile') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <label for="state" class="required">Estado:</label>
                            <select class="form-control select2 {{ $errors->has('state') ? 'is-invalid' : '' }}" data-placeholder="Digite para pesquisar" id="states" name="state">
                                <option value="">Selecione</option>
                                @foreach($states as $state)
                                <option value="{{ $state->id}}">{{ $state->uf }} - {{$state->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('state'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('state') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-4">
                            <label for="city" class="required">Cidade:</label>
                            <select class="form-control select2" data-placeholder="Digite para pesquisar" id="cities" name="city">

                            </select>
                            @if($errors->has('city'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('city') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <h4>Alcance</h4>
                    <hr>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="states" class="required">Selecione os estados que deseja alcançar como anúncio:</label>
                            <select class="form-control select2" multiple="multiple" data-placeholder="Digite para pesquisar" name="reach_states[]" id="states-multiple" onchange="getStatesArray(this)">
                                <option value="">Selecione</option>
                                @foreach($states as $state)
                                <option value="{{$state->uf}}">{{$state->uf }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('reach_states'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('reach_states') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-6">
                            <label for="city" class="required">Quais categorias deseja vincular:</label>
                            <select class="form-control select2" multiple="multiple" data-placeholder="Digite para pesquisar" name="reach_categories[]">
                                <option value="">Selecione</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->name}}">{{$category->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('reach_categories'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('reach_categories') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="city" class="required">Areas:</label>
                            <select class="form-control select2" multiple="multiple" data-placeholder="Digite para pesquisar" name="reach_segments[]">
                                <option value="">Selecione</option>
                                @foreach($segments as $segment)
                                <option value="{{ $segment->name}}">{{$segment->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('reach_segments'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('reach_segments') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-6">
                            <label for="genre" class="required">Genero</label>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Homens" name="reach_genres[]">
                                    <label class="form-check-label" for="inlineCheckbox1">Homens</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Mulheres" name="reach_genres[]">
                                    <label class="form-check-label" for="inlineCheckbox2">Mulheres</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Ambos" name="reach_genres[]">
                                    <label class="form-check-label" for="inlineCheckbox3">Ambos</label>
                                </div>                                
                            </div>
                            @if($errors->has('reach_genres'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('reach_genres') }}
                                    </div>
                                @endif
                        </div>
                    </div>

                    <h4>Configuração do Anúncio</h4>
                    <hr>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="start_at" class="required">Data Inicio</label>
                            <input type="date" name="start_at" id="" class="form-control {{ $errors->has('start_at') ? 'is-invalid' : '' }}">
                            @if($errors->has('start_at'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('start_at') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-6">
                            <label for="end_at" class="required">Data Inicio</label>
                            <input type="date" name="end_at" id="" class="form-control {{ $errors->has('end_at') ? 'is-invalid' : '' }}">
                            @if($errors->has('end_at'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('end_at') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('advertising_place_id') ? 'is-invalid' : '' }}">
                        <label for="place" class="required">Selecione o Local que deseja anunciar</label>
                        <select name="advertising_place_id" class="form-control input-lg {{ $errors->has('advertising_place_id') ? 'is-invalid' : '' }}">
                            @foreach($locals as $local)
                                <option value="{{ $local->id }}">{{ $local->name ?? ''}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('advertising_place_id'))
                            <div class="invalid-feedback">
                                {{ $errors->first('advertising_place_id') }}
                            </div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <label for="media" class="required">Tipo de Anúncio</label>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineradio1" value="VIDEO" name="media_type">
                                    <label class="form-check-label" for="inlineradio1">Video</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineradio2" value="IMAGE" name="media_type">
                                    <label class="form-check-label" for="inlineradio2">Imagem</label>
                                </div>
                            </div>
                            @if($errors->has('media_type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('media_type') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="embed">Códio de Incorporação (Apenas Video)</label>
                        <textarea name="media_embed" id="embed" cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="media">Imagem</label>
                        <input type="file" name="media_file" id="media_file" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="link" class="required">Url</label>
                        <input type="text" name="media_link" class="form-control {{ $errors->has('media_link') ? 'is-invalid' : '' }}">
                        @if($errors->has('media_link'))
                            <div class="invalid-feedback">
                                {{ $errors->first('media_link') }}
                            </div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-dark">Calcular Anúncio <i class="fa fa-calculator"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
$('#states').change(function(event) {
    var uf = event.target.value;
    getCities(uf);
})

$('.select2').select2({
    theme:'bootstrap4',
});

function getCities(uf) {
    $.getJSON(`/ajaxCidades?uf=${uf}`, function(response) {
        if (response.length > 0) {
            var option = '<option value="">Selecione uma cidade</option>';
            $.each(response, function(i, obj) {
                option += `<option value="${obj.name}" data-index="${i}">${obj.name}</option>`;
            })
            $('#cities').html(option).attr('disabled', false);
            return
        }
        return
    })
}

</script>
@endsection
