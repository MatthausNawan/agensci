@extends('layouts.frontend')
@section('content')
@include('frontend.pages.students._partials.menu')

<div class="row">
    <div class="col-lg-7 col-sm-12">
        <form method="POST" action="{{ route('students.profile.update') }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="links-wrapper">
                <!-- <div class="card-header bg-dark">
                    <span class="text-white">Minha Conta</span>
                </div> -->
                <div class="card-body">
                <div class="form-group">
                    <label class="required" for="nome">Nome Completo:</label>
                    <input type="text" name="name" class="form-control form-control-sm {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ $profile->name ?? old('name') ?? '' }}">
                    @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>

                <div class=" row">
                    <div class="col">
                        <div class="form-group">
                            <label class="required" for="sexo">Sexo:</label>
                            <select class="form-control form-control-sm {{ $errors->has('genre') ? 'is-invalid' : '' }}"  name="genre">
                                <option value="M" {{$profile->genre == "M" ? 'selected' : ''}}>Masculino</option>
                                <option value="F" {{$profile->genre == "F" ? 'selected' : ''}}>Feminino</option>
                                <option value="OTHER" {{$profile->genre == "OTHER" ? 'selected' : ''}}>Outro</option>
                            </select>
                            @if($errors->has('genre'))
                            <div class="invalid-feedback">
                                {{ $errors->first('genre') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label class="required" for="Data de nascimento">Data de nascimento:</label>
                            <input type="date" class=" form-control form-control-sm {{ $errors->has('birth_date') ? 'is-invalid' : '' }}" value="{{ $profile->birth_date ?? old('birth_date') ?? '' }}" name="birth_date">
                            @if($errors->has('birth_date'))
                            <div class="invalid-feedback">
                                {{ $errors->first('birth_date') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="required" for="curso">Curso:</label>
                        <input type="text" class="form-control form-control-sm {{ $errors->has('course_name') ? 'is-invalid' : '' }}" value="{{ $profile->course_name ?? old('course_name') ?? '' }}" name="course_name">
                        @if($errors->has('course_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('course_name') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="required" for="pos graduacao">Pós-graduação:</label>
                        <input type="text" class="form-control form-control-sm {{ $errors->has('specialization') ? 'is-invalid' : '' }}" value="{{ $profile->specialization ?? old('specialization') ?? '' }}" name="specialization">
                        @if($errors->has('specialization'))
                        <div class="invalid-feedback">
                            {{ $errors->first('specialization') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="required" for="instituicao estuda">Instituição estuda:</label>
                        <input type="text" class="form-control form-control-sm {{ $errors->has('university_name') ? 'is-invalid' : '' }}" value="{{ $profile->university_name ??old('university_name') ?? '' }}" name="university_name">
                        @if($errors->has('university_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('university_name') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="required" for="matricula">Matricula:</label>
                        <input type="text" class="form-control form-control-sm {{ $errors->has('matriculation') ? 'is-invalid' : '' }}" value="{{ $profile->matriculation ?? old('matriculation') ?? '' }}" name="matriculation">
                        @if($errors->has('matriculation'))
                        <div class="invalid-feedback">
                            {{ $errors->first('matriculation') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="required" for="area de atuacao">Área de atuação(Lattes):</label>
                        <input type="text" class="form-control form-control-sm {{ $errors->has('occupation_lattes') ? 'is-invalid' : '' }}" value="{{ $profile->occupation_lattes ?? old('occupation_lattes') ?? '' }}" name="occupation_lattes">
                        @if($errors->has('occupation_lattes'))
                        <div class="invalid-feedback">
                            {{ $errors->first('occupation_lattes') }}
                        </div>
                        @endif

                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="required" for="curriculo lattes">Link Curriculo lattes:</label>
                        <input type="text" class="form-control form-control-sm {{ $errors->has('lattes_link') ? 'is-invalid' : '' }}" value="{{ $profile->lattes_link ?? old('lattes_link') ?? '' }}" name=" lattes_link">
                        @if($errors->has('lattes_link'))
                        <div class="invalid-feedback">
                            {{ $errors->first('lattes_link') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="required" for="cpf">CPF:</label>
                        <input type="text" class="cpf form-control form-control-sm {{ $errors->has('cpf') ? 'is-invalid' : '' }}" value="{{ $profile->cpf ?? old('cpf') ?? '' }}" name="cpf" placeholder="000.000.000-00">
                        @if($errors->has('cpf'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cpf') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="required" for="celular">Celular:</label>
                        <input type="text" class="mobile form-control form-control-sm {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ $profile->phone ?? old('phone') ?? '' }}" name="phone" placeholder="(DDD) 99999-9999">
                        @if($errors->has('phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="whatsapp">Whatsapp:</label>
                        <input type="text" class="mobile form-control form-control-sm {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}" value="{{ $profile->whatsapp ?? old('whatsapp') ?? '' }}" name="whatsapp" placeholder="(DDD) 99999-9999">
                        @if($errors->has('whatsapp'))
                        <div class="invalid-feedback">
                            {{ $errors->first('whatsapp') }}
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
                        <!-- <label for="Bairro">Bairro:</label> -->
                        <input type="hidden" id="bairro" class="form-control form-control-sm {{ $errors->has('district') ? 'is-invalid' : '' }}" name="district" value="{{ $profile->district ?? old('district', '') }}">
                        @if($errors->has('district'))
                        <div class="invalid-feedback">
                            {{ $errors->first('district') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-10">
                        <!-- <label for="Endereco" class="required">Endereço:</label> -->
                        <input type="hidden" id="rua" class="form-control form-control-sm {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" value="{{ $profile->address ?? old('address', '') }}">
                        @if($errors->has('address'))
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-2">
                        <!-- <label for="Numero">Número:</label> -->
                        <input type="hidden" class="form-control form-control-sm {{ $errors->has('address_number') ? 'is-invalid' : '' }}" name="address_number" value="{{ $profile->address_number ?? old('address_number', '') }}">
                        @if($errors->has('address_number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('address_number') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="required" for="pais">País:</label>
                        <select name="country" id="" class="form-control form-control-sm">
                                <option value="">Selecione...</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->name }}" {{ $profile->country == $country->name ? 'selected' : ''}}>{{ $country->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('country'))
                        <div class="invalid-feedback">
                            {{ $errors->first('country') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label class="required" for="estado">UF:</label>
                        <input type="text" id="uf" class="form-control form-control-sm {{ $errors->has('uf') ? 'is-invalid' : '' }}" value="{{ $profile->uf ?? old('uf') ?? '' }}" name=" uf">
                        @if($errors->has('uf'))
                        <div class="invalid-feedback">
                            {{ $errors->first('uf') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label class="required" for="cidade">Cidade:</label>
                        <input type="text" id="cidade" class="form-control form-control-sm {{ $errors->has('city') ? 'is-invalid' : '' }}" value="{{ $profile->city ?? old('city') ?? '' }}" name=" city">
                        @if($errors->has('city'))
                        <div class="invalid-feedback">
                            {{ $errors->first('city') }}
                        </div>
                        @endif
                    </div>
                    <button type="submit" class="btn text-black border rounded">Atualizar Dados</button>
                </div>
                </div>                
            </div>
        </form>
    </div>

    <div class="col-lg-5 col-sm-12">
        <div class="links-wrapper">
            <form action="{{ route('profile.password.update') }}?redirect=painel" method="post">
                @csrf

                <div class="card-header">
                    <label for="">Atualizar Senha</label>
                </div>
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
                    <button type="submit" class="btn text-black border rounded">Atualizar Senha</button>
                </div>                
            </form>
        </div>

        <div class="links-wrapper mt-3">
            <form method="POST" action="{{ route('students.profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-header">
                    <label for="">Foto</label>
                </div>
                <div class="card-body">
                    <div class="form-group {{ $errors->has('logo') ? 'has-error' : '' }}">
                        <div class="needsclick dropzone" id="logo-dropzone">
                        </div>
                        @if($errors->has('logo'))
                            <span class="help-block" role="alert">{{ $errors->first('logo') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn text-black border rounded">Atualizar Logo</button>
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
