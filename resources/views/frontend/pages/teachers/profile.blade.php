@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.teachers._partials.menu')
</div>

<div class="row">
    <div class="col-lg-7 col-sm-12">
        <form method="POST" action="{{ route('teachers.profile.update') }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card">
                <div class="card-header bg-dark">
                    <span class="text-white">Minha Conta</span>
                </div>
                <div class="card-body">

                <div class="form-group">
                    <label class="required" for="nome">Nome:</label>
                    <input type="text" name="name" class="form-control form-control-sm {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ $profile->name ?? old('name') ?? '' }}">
                    @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="sexo">Sexo:</label>
                        <select class="form-control form-control-sm" name="genre">
                            <option value="M" {{ $profile->genre == 'M' ? 'selected' : ''}}>Masculino</option>
                            <option value="F" {{ $profile->genre == 'F' ? 'selected' : ''}}>Feminino</option>
                            <option value="OTHER" {{ $profile->genre == 'OTHER' ? 'selected' : ''}}>Outro</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="Data de nascimento">Data de nascimento:</label>
                        <input type="date" class="form-control form-control-sm" name="birth_date" value="{{ $profile->birth_date ?? date('Y-m-d') }}" s>
                    </div>
                </div>


                <div class="form-group">
                    <label class="required" for="formacao">Formação:</label>
                    <input type="text" name="formation" class="form-control form-control-sm {{ $errors->has('formation') ? 'is-invalid' : '' }}" value="{{ $profile->formation ?? old('formation') ?? '' }}">
                    @if($errors->has('formation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('formation') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="pos graduacao">Pós-graduação:</label>
                    <input type="text" name="speciality" class="form-control form-control-sm {{ $errors->has('speciality') ? 'is-invalid' : '' }}" value="{{ $profile->speciality ?? old('speciality') ?? '' }}">
                    @if($errors->has('speciality'))
                    <div class="invalid-feedback">
                        {{ $errors->first('speciality') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="Área de atuação">Área de atuação(Lattes):</label>
                    <input type="text" name="occupation_lattes" class="form-control form-control-sm {{ $errors->has('occupation_lattes') ? 'is-invalid' : '' }}" value="{{ $profile->occupation_lattes ?? old('occupation_lattes') ?? '' }}">
                    @if($errors->has('occupation_lattes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('occupation_lattes') }}
                    </div>
                    @endif
                </div>


                <div class="form-group">
                    <label class="required" for="curriculo lattes">Curriculo lattes:</label>
                    <input type="text" name="resume_link" class="form-control form-control-sm {{ $errors->has('resume_link') ? 'is-invalid' : '' }}" value="{{ $profile->resume_link ?? old('resume_link') ?? '' }}">
                    @if($errors->has('resume_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('resume_link') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="profissao">Profissão:</label>
                    <input type="text" name="profession" class="form-control form-control-sm {{ $errors->has('profession') ? 'is-invalid' : '' }}" value="{{ $profile->profession ?? old('profession') ?? '' }}">
                    @if($errors->has('profession'))
                    <div class="invalid-feedback">
                        {{ $errors->first('profession') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="conselho de classes">Conselho de classe:</label>
                    <input type="text" name="class_council" class="form-control form-control-sm {{ $errors->has('class_council') ? 'is-invalid' : '' }}" value="{{ $profile->class_council ?? old('class_council') ?? '' }}">
                    @if($errors->has('class_council'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_council') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="instituição">Instituição trabalha:</label>
                            <input type="text" name="institution_works" class="form-control form-control-sm {{ $errors->has('institution_works') ? 'is-invalid' : '' }}" value="{{ $profile->institution_works ?? old('institution_works') ?? '' }}">
                    @if($errors->has('institution_works'))
                    <div class="invalid-feedback">
                        {{ $errors->first('institution_works') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="cargo">Cargo/função:</label>
                    <input type="text" name="office" class="form-control form-control-sm {{ $errors->has('office') ? 'is-invalid' : '' }}" value="{{ $profile->office ?? old('office') ?? '' }}">
                    @if($errors->has('office'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office') }}
                    </div>
                    @endif
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label class="required" for="matricula">Matricula:</label>
                        <input type="text" name="enrollment_number" class="form-control form-control-sm {{ $errors->has('enrollment_number') ? 'is-invalid' : '' }}" value="{{ $profile->enrollment_number ?? old('enrollment_number') ?? '' }}">
                        @if($errors->has('enrollment_number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('enrollment_number') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group col-6">
                        <label class="required" for="cpf">CPF:</label>
                        <input type="text" name="cpf" class="cpf form-control form-control-sm {{ $errors->has('cpf') ? 'is-invalid' : '' }}" value="{{ $profile->cpf ??  old('cpf') ?? '' }}" placeholder="000.000.000-99">
                        @if($errors->has('cpf'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cpf') }}
                        </div>
                        @endif
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="required" for="celular">Celular:</label>
                        <input type="text" name="cell_number" class="mobile form-control form-control-sm {{ $errors->has('cell_number') ? 'is-invalid' : '' }}" value="{{ $profile->cell_number ?? old('cell_number') ?? '' }}" placeholder="(DDD)99999-9999">
                        @if($errors->has('cell_number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cell_number') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="whatsapp">Whatsapp:</label>
                        <input type="text" name="whatsapp" class="mobile form-control form-control-sm {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}" value="{{ $profile->whatsapp ?? old('whatsapp') ?? '' }}" placeholder="(DDD)99999-9999">
                        @if($errors->has('whatsapp'))
                        <div class="invalid-feedback">
                            {{ $errors->first('whatsapp') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="required" for="nome">CEP:</label>
                        <input type="text" id="cep" name="postal_code" class="cep form-control form-control-sm {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" value="{{ $profile->postal_code ?? old('postal_code') ?? '' }}" placeholder="00.000-000">
                        @if($errors->has('postal_code'))
                        <div class="invalid-feedback">
                            {{ $errors->first('postal_code') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="bairro">Bairro:</label>
                        <input type="text" id="bairro" name="district" class="form-control form-control-sm {{ $errors->has('district') ? 'is-invalid' : '' }}" value="{{ $profile->district ??  old('district') ?? '' }}">
                        @if($errors->has('district'))
                        <div class="invalid-feedback">
                            {{ $errors->first('district') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="row">
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
                    <div class="form-group  col-md-4">
                        <label class="required" for="uf">UF:</label>
                        <input type="text" id="uf" name="uf" class="form-control form-control-sm {{ $errors->has('uf') ? 'is-invalid' : '' }}" value="{{ $profile->uf ?? old('uf') ?? '' }}">
                        @if($errors->has('uf'))
                        <div class="invalid-feedback">
                            {{ $errors->first('uf') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group  col-md-4">
                        <label class="required" for="cidade">Cidade:</label>
                        <input type="text" id="cidade" name="city" class="form-control form-control-sm {{ $errors->has('city') ? 'is-invalid' : '' }}" value="{{ $profile->city ?? old('city') ?? '' }}">
                        @if($errors->has('city'))
                        <div class="invalid-feedback">
                            {{ $errors->first('city') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control form-control-sm" name="linkedin" placeholder="Link do Likedin" value="{{ $profile->linkedin ?? old('linkedin') }}">
                        <input type="text" class="form-control form-control-sm" name="facebook" placeholder="Link do Facebook" value="{{ $profile->facebook ?? old('facebook') }}">
                        <input type="text" class="form-control form-control-sm" name="instagram" placeholder="Link do Instagram" value="{{$profile->instagram ??  old('instagram') }}">
                        <input type="text" class="form-control form-control-sm" name="twitter" placeholder="Link do Twitter" value="{{ $profile->twitter ?? old('twitter') }}">
                        <input type="text" class="form-control form-control-sm" name="youtube" placeholder="Link do Canal do YouTube" value="{{ $profile->youtube ?? old('youtube') }}">
                    </div>
                </div>

            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark btn-block">Atualizar Dados</button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-lg-5 col-sm-12">
        <div class="card">
            <form action="{{ route('profile.password.update') }}?redirect=painel" method="post">
                @csrf

                <div class="card-header bg-dark">
                    <span class="text-white">Atualizar Senha</span>
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
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark btn-block">Atualizar Senha</button>
                </div>
            </form>
        </div>

        <div class="card mt-3">
            <form method="POST" action="{{ route('teachers.profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-header bg-dark">
                    <span class="text-white">Avatar</span>
                </div>
                <div class="card-body">
                    <div class="form-group {{ $errors->has('logo') ? 'has-error' : '' }}">
                        <div class="needsclick dropzone" id="logo-dropzone">
                        </div>
                        @if($errors->has('logo'))
                            <span class="help-block" role="alert">{{ $errors->first('logo') }}</span>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary btn-block">Atualizar Logo</button>
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
