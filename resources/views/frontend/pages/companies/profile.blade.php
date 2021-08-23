@extends('layouts.frontend')
@section('content')
 @include('frontend.pages.companies._partials.menu')

<div class="row">
    <div class="col-lg-7 col-sm-12">
        <form method="POST" action="{{ route('companies.profile.update') }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="links-wrapper">               
                <div class="card-body">
                    <div class="form-group">
                        <label for="razao" class="required">Razão social:</label>
                        <input type="text" name="name" class="form-control form-control-sm {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ $profile->name ?? old('name', '') }}">
                        @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="form-group col-8 col-sm-6">
                            <label for="Nome fantasia" class="required">Nome fantasia:</label>
                            <input type="text" name="fantasy_name" class="form-control form-control-sm {{ $errors->has('fantasy_name') ? 'is-invalid' : '' }} " value="{{ $profile->fantasy_name ?? old('fantasy_name', '') }}">
                            @if($errors->has('fantasy_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('fantasy_name') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group col-4 col-sm-6">
                            <label for="CPNJ" class="required">CNPJ:</label>
                            <input type="text"  name="cnpj" class="cnpj form-control form-control-sm {{ $errors->has('cnpj') ? 'is-invalid' : '' }}" value="{{ $profile->cnpj ?? old('cnpj', '') }}" placeholder="00.000.000/0000-00">
                            @if($errors->has('cnpj'))
                            <div class="invalid-feedback">
                                {{ $errors->first('cnpj') }}
                            </div>
                            @endif
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="CEP" class="required">CEP:</label>
                            <input type="text" id="cep" class="cep form-control form-control-sm {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" name="postal_code" value="{{ $profile->postal_code ?? old('postal_code', '') }}" placeholder="58.000-000">
                            @if($errors->has('postal_code'))
                            <div class="invalid-feedback">
                                {{ $errors->first('postal_code') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-md-8">
                            <label for="Bairro">Bairro:</label>
                            <input type="text" id="bairro" class="form-control form-control-sm {{ $errors->has('district') ? 'is-invalid' : '' }}" name="district" value="{{ $profile->district ?? old('district', '') }}">
                            @if($errors->has('district'))
                            <div class="invalid-feedback">
                                {{ $errors->first('district') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="Endereco" class="required">Endereço:</label>
                            <input type="text" id="rua" class="form-control form-control-sm {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" value="{{ $profile->address ?? old('address', '') }}">
                            @if($errors->has('address'))
                            <div class="invalid-feedback">
                                {{ $errors->first('address') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-md-2">
                            <label for="Numero">Numero:</label>
                            <input type="number" class="form-control form-control-sm {{ $errors->has('address_number') ? 'is-invalid' : '' }}" name="address_number" value="{{ $profile->address_number ?? old('address_number', '') }}">
                            @if($errors->has('address_number'))
                            <div class="invalid-feedback">
                                {{ $errors->first('address_number') }}
                            </div>
                            @endif
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="Cidade">Cidade:</label>
                            <input type="text" id="cidade" class="form-control form-control-sm {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city" value="{{ $profile->city ?? old('city', '') }}">
                            @if($errors->has('city'))
                            <div class="invalid-feedback">
                                {{ $errors->first('city') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-md-2">
                            <label for="Estado">UF:</label>
                            <input type="text" id="uf" class="form-control form-control-sm {{ $errors->has('uf') ? 'is-invalid' : '' }}" name="uf" value="{{ $profile->uf ?? old('uf', '') }}">
                            @if($errors->has('uf'))
                            <div class="invalid-feedback">
                                {{ $errors->first('uf') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="Fone" class="required">Fone:</label>
                            <input type="text" class="phone form-control form-control-sm {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" value="{{ $profile->phone ?? old('phone', '') }}" placeholder="(DD) 9999-9999">
                            @if($errors->has('phone'))
                            <div class="invalid-feedback">
                                {{ $errors->first('phone') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="Celular" class="required">Celular:</label>
                            <input type="text" class="mobile form-control form-control-sm {{ $errors->has('cell_number') ? 'is-invalid' : '' }}" name="cell_number" value="{{ $profile->cell_number ?? old('cell_number', '') }}" placeholder="(DD) 99999-9999">
                            @if($errors->has('cell_number'))
                            <div class="invalid-feedback">
                                {{ $errors->first('cell_number') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Site">Site:</label>
                        <input type="text" name="site" class="form-control form-control-sm {{ $errors->has('site') ? 'is-invalid' : '' }}" value="{{ $profile->site ?? old('site', '') }}">
                        @if($errors->has('site'))
                        <div class="invalid-feedback">
                            {{ $errors->first('site') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="Fone">Midias sociais:</label>
                            <input type="text" class="form-control form-control-sm {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" name="linkedin" placeholder="Link do Likedin" value="{{ $profile->linkedin ?? old('linkedin', '') }}">
                            <input type="text" class="form-control form-control-sm {{ $errors->has('facebook') ? 'is-invalid' : '' }}" name="facebook" placeholder="Link do Facebook" value="{{ $profile->facebook ?? old('facebook', '') }}">
                            <input type="text" class="form-control form-control-sm {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}" name="whatsapp" placeholder="Link do WhatsApp" value="{{ $profile->whatsapp ?? old('whatsapp', '') }}">
                            <input type="text" class="form-control form-control-sm {{ $errors->has('instagram') ? 'is-invalid' : '' }}" name="instagram" placeholder="Link do Instagram" value="{{ $profile->instagram ?? old('instagram', '') }}">
                            <input type="text" class="form-control form-control-sm {{ $errors->has('twitter') ? 'is-invalid' : '' }}" name="twitter" placeholder="Link do Twitter" value="{{ $profile->twitter ?? old('twitter', '') }}">
                            <input type="text" class="form-control form-control-sm {{ $errors->has('youtube') ? 'is-invalid' : '' }}" name="youtube" placeholder="Link do YouTube" value="{{ $profile->youtube ?? old('youtube', '') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Site" class="required">Responsável pela solicitação:</label>
                        <input type="text" name="requester_name" class="form-control form-control-sm {{ $errors->has('requester_name') ? 'is-invalid' : '' }} " value="{{ $profile->youtube ?? old('requester_name', '') }}">
                        @if($errors->has('requester_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('requester_name') }}
                        </div>
                        @endif
                    </div>


                        <div class="form-group">
                            <label for="Cidade" class="required">CPF:</label>
                            <input type="text" class="cpf form-control form-control-sm {{ $errors->has('requester_cpf') ? 'is-invalid' : '' }}" name="requester_cpf" value="{{$profile->requester_cpf ??  old('requester_cpf', '') }}" placeholder="123.456.123-99">
                            @if($errors->has('requester_cpf'))
                            <div class="invalid-feedback">
                                {{ $errors->first('requester_cpf') }}
                            </div>
                            @endif
                        </div>

                        <button type="submit" class="btn text-black rounde border">Atualizar Dados</button>
                </div>                
            </div>
        </form>
    </div>

    <div class="col-lg-5 col-sm-12">
        <div class="links-wrapper">
            <form action="{{ route('profile.password.update') }}?redirect=painel" method="post">
                @csrf                
                <div class="card-body">
                    <div class="form-group">
                        <label for="razao" class="required">Nova Senha</label>
                        <input type="password" class="form-control form-control-sm {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" placeholder="deve ter no mínino 8 caracteres">
                        @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="razao">Repetir Nova Senha</label>
                        <input type="password" class="form-control form-control-sm" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn text-black rounded border">Atualizar Senha</button>
                </div>                
            </form>
        </div>

        <div class="links-wrapper mt-3">
            <form method="POST" action="{{ route('companies.profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('put')                
                <div class="card-body">
                    <label for="logo">Logo</label>
                    <div class="form-group {{ $errors->has('logo') ? 'has-error' : '' }}">
                        <div class="needsclick dropzone" id="logo-dropzone">
                        </div>
                        @if($errors->has('logo'))
                            <span class="help-block" role="alert">{{ $errors->first('logo') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn text-black rounded border">Atualizar Logo</button>
                </div>                
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/viaCep.js') }}"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script>
    $('.cnpj').mask('00.000.000/0000-00');
    $('.cpf').mask('000.000.000-00');
    $('.cep').mask('00.000-000');
    $('.phone').mask('(00)9999-9999')
    $('.mobile').mask('(00)99999-9999')
</script>

<script>
    Dropzone.options.logoDropzone = {
    url: '{{ route('companies.storeMedia') }}',
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
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($profile) && $profile->logo)
      var file = {!! json_encode($profile->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
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
