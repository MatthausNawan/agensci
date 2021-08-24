@extends('layouts.default')

@section('page_content')



    <form method="POST" action="{{ route('site.teacher.register.form') }}" enctype="multipart/form-data">
        @csrf
        <div class="links-wrapper">            
            <div class="card-body">
                <label for="">Cadastro de Professor</label>
                <div class="form-group">
                    <label class="required" for="nome">Nome:</label>
                    <input type="text" name="name" class="form-control form-control-sm form-control form-control-sm-sm {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') ?? '' }}">
                    @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="sexo">Sexo:</label>
                        <select class="form-control form-control-sm form-control form-control-sm-sm" name="genre">
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="OTHER">Outro</option>
                        </select>
                        @if($errors->has('genre'))
                            <div class="invalid-feedback">
                                {{ $errors->first('genre') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for="Data de nascimento">Data de nascimento:</label>
                        <input type="date" class="form-control form-control-sm form-control form-control-sm-sm" name="birth_date" value="{{ old('birth_date') }}">
                        @if($errors->has('birth_date'))
                            <div class="invalid-feedback">
                                {{ $errors->first('birth_date') }}
                            </div>
                        @endif
                    </div>
                </div>


                <div class="form-group">
                    <label class="required" for="formacao">Formação:</label>
                    <input type="text" name="formation" class="form-control form-control-sm {{ $errors->has('formation') ? 'is-invalid' : '' }}" value="{{ old('formation') ?? '' }}">
                    @if($errors->has('formation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('formation') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="pos graduacao">Pós-graduação:</label>
                    <input type="text" name="speciality" class="form-control form-control-sm {{ $errors->has('speciality') ? 'is-invalid' : '' }}" value="{{ old('speciality') ?? '' }}">
                    @if($errors->has('speciality'))
                    <div class="invalid-feedback">
                        {{ $errors->first('speciality') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="Área de atuação">Área de atuação(Lattes):</label>
                    <input type="text" name="occupation_lattes" class="form-control form-control-sm {{ $errors->has('occupation_lattes') ? 'is-invalid' : '' }}" value="{{ old('occupation_lattes') ?? '' }}">
                    @if($errors->has('occupation_lattes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('occupation_lattes') }}
                    </div>
                    @endif
                </div>


                <div class="form-group">
                    <label class="required" for="curriculo lattes">Curriculo lattes:</label>
                    <input type="text" name="resume_link" class="form-control form-control-sm {{ $errors->has('resume_link') ? 'is-invalid' : '' }}" value="{{ old('resume_link') ?? '' }}" placeholder="Link do seu curriculo lattes.">
                    @if($errors->has('resume_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('resume_link') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="job">Profissão:</label>
                    <input type="text" name="job" class="form-control form-control-sm {{ $errors->has('job') ? 'is-invalid' : '' }}" value="{{ old('job') ?? '' }}">
                    @if($errors->has('job'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="conselho de classes">Conselho de classe:</label>
                    <input type="text" name="class_council" class="form-control form-control-sm {{ $errors->has('class_council') ? 'is-invalid' : '' }}" value="{{ old('class_council') ?? '' }}">
                    @if($errors->has('class_council'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_council') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="instituição">Instituição trabalha:</label>
                    <input type="text" name="institution_works" class="form-control form-control-sm {{ $errors->has('institution_works') ? 'is-invalid' : '' }}" value="{{ old('institution_works') ?? '' }}">
                    @if($errors->has('institution_works'))
                    <div class="invalid-feedback">
                        {{ $errors->first('institution_works') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="cargo">Cargo/função:</label>
                    <input type="text" name="office" class="form-control form-control-sm {{ $errors->has('office') ? 'is-invalid' : '' }}" value="{{ old('office') ?? '' }}">
                    @if($errors->has('office'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office') }}
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label class="required" for="matricula">Matricula:</label>
                        <input type="text" name="enrollment_number" class="form-control form-control-sm {{ $errors->has('enrollment_number') ? 'is-invalid' : '' }}" value="{{ old('enrollment_number') ?? '' }}">
                        @if($errors->has('enrollment_number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('enrollment_number') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group col-6">
                        <label class="required" for="cpf">CPF:</label>
                        <input type="text" name="cpf" class="cpf form-control form-control-sm {{ $errors->has('cpf') ? 'is-invalid' : '' }}" value="{{ old('cpf') ?? '' }}" placeholder="000.000.000-99">
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
                        <input type="text" name="cell_number" class="mobile form-control form-control-sm {{ $errors->has('cell_number') ? 'is-invalid' : '' }}" value="{{ old('cell_number') ?? '' }}" placeholder="(DDD)99999-9999">
                        @if($errors->has('cell_number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cell_number') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="whatsapp">Whatsapp:</label>
                        <input type="text" name="whatsapp" class="mobile form-control form-control-sm {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}" value="{{ old('whatsapp') ?? '' }}" placeholder="(DDD)99999-9999">
                        @if($errors->has('whatsapp'))
                        <div class="invalid-feedback">
                            {{ $errors->first('whatsapp') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="required" for="nome">CEP:</label>
                        <input type="text" id="cep" name="postal_code" class="cep form-control form-control-sm {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" value="{{ old('postal_code') ?? '' }}" placeholder="00.000-000">
                        @if($errors->has('postal_code'))
                        <div class="invalid-feedback">
                            {{ $errors->first('postal_code') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="bairro">Bairro:</label>
                        <input type="text" id="bairro" name="district" class="form-control form-control-sm {{ $errors->has('district') ? 'is-invalid' : '' }}" value="{{ old('district') ?? '' }}">
                        @if($errors->has('district'))
                        <div class="invalid-feedback">
                            {{ $errors->first('district') }}
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
                                <option value="{{ $country->name }}">{{ $country->name}}</option>
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
                        <input type="text" id="uf" name="uf" class="form-control form-control-sm {{ $errors->has('uf') ? 'is-invalid' : '' }}" value="{{ old('uf') ?? '' }}">
                        @if($errors->has('uf'))
                        <div class="invalid-feedback">
                            {{ $errors->first('uf') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group  col-md-4">
                        <label class="required" for="cidade">Cidade:</label>
                        <input type="text" id="cidade" name="city" class="form-control form-control-sm {{ $errors->has('city') ? 'is-invalid' : '' }}" value="{{ old('city') ?? '' }}">
                        @if($errors->has('city'))
                        <div class="invalid-feedback">
                            {{ $errors->first('city') }}
                        </div>
                        @endif
                    </div>
                </div>

                <label for="">Redes Sociais</label>
            
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control form-control-sm" name="linkedin" placeholder="Link do Likedin" value="{{ old('linkedin') }}">
                        <input type="text" class="form-control form-control-sm" name="facebook" placeholder="Link do Facebook" value="{{ old('facebook') }}">
                        <input type="text" class="form-control form-control-sm" name="instagram" placeholder="Link do Instagram" value="{{ old('instagram') }}">
                        <input type="text" class="form-control form-control-sm" name="twitter" placeholder="Link do Twitter" value="{{ old('twitter') }}">
                        <input type="text" class="form-control form-control-sm" name="youtube" placeholder="Link do YouTube" value="{{ old('youtube') }}">
                    </div>
                </div>  

       
                <div class="form-group">
                    <label for="Redes sociais">Redes sociais</label>
                    <label class="required" for="email">Email:</label>
                    <input type="text" name="email" class="form-control form-control-sm {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') ?? '' }}">
                    @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control form-control-sm" name="password" placeholder="Deve ter no mínimo 8 caracteres">
                </div>
                <div class="form-group">
                    <label for="senha">Repetir Senha</label>
                    <input type="password" class="form-control form-control-sm" name="password_confirmation">
                </div>
                <button type="submit" class="btn text-black rounded border">Cadastrar</button>            
        </div>
    </form>
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

@endsection
