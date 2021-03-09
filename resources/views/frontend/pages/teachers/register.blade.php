@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-lg-12 m-2">
        <img src="https://via.placeholder.com/1200x200" alt="" class="img-rounded" width="100%" height="200">
    </div>
</div>

<div class="col-lg-8 offset-2 mb-2">
    <form method="POST" action="{{ route("site.teacher.register.form") }}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label class="required" for="nome">Nome:</label>
                    <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') ?? '' }}">
                    @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col">
                        <label for="sexo">Sexo:</label>
                        <select class="form-control" name="genre">
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="OTHER">Outro</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="Data de nascimento">Data de nascimento:</label>
                        <input type="date" class="form-control" name="birth-date" value="{{ date('Y-m-d') }}" s>
                    </div>
                </div>


                <div class="form-group">
                    <label class="required" for="formacao">Formação:</label>
                    <input type="text" name="formation" class="form-control {{ $errors->has('formation') ? 'is-invalid' : '' }}" value="{{ old('formation') ?? '' }}">
                    @if($errors->has('formation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('formation') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="pos graduacao">Pós-graduação:</label>
                    <input type="text" name="speciality" class="form-control {{ $errors->has('speciality') ? 'is-invalid' : '' }}" value="{{ old('speciality') ?? '' }}">
                    @if($errors->has('speciality'))
                    <div class="invalid-feedback">
                        {{ $errors->first('speciality') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="Área de atuação">Área de atuação(Lattes):</label>
                    <input type="text" name="occupation-lattes" class="form-control {{ $errors->has('occupation-lattes') ? 'is-invalid' : '' }}" value="{{ old('occupation-lattes') ?? '' }}">
                    @if($errors->has('occupation-lattes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('occupation-lattes') }}
                    </div>
                    @endif
                </div>


                <div class="form-group">
                    <label class="required" for="curriculo lattes">Curriculo lattes:</label>
                    <input type="text" name="resume-link" class="form-control {{ $errors->has('resume-link') ? 'is-invalid' : '' }}" value="{{ old('resume-link') ?? '' }}">
                    @if($errors->has('resume-link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('resume-link') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="profissao">Profissão:</label>
                    <input type="text" name="job" class="form-control {{ $errors->has('job') ? 'is-invalid' : '' }}" value="{{ old('job') ?? '' }}">
                    @if($errors->has('job'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="conselho de classes">Conselho de classe:</label>
                    <input type="text" name="class-council" class="form-control {{ $errors->has('class-council') ? 'is-invalid' : '' }}" value="{{ old('class-council') ?? '' }}">
                    @if($errors->has('class-council'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class-council') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="instituição">Instituição trabalha:</label>
                    <input type="text" name="institution-works" class="form-control {{ $errors->has('institution-works') ? 'is-invalid' : '' }}" value="{{ old('institution-works') ?? '' }}">
                    @if($errors->has('institution-works'))
                    <div class="invalid-feedback">
                        {{ $errors->first('institution-works') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="cargo">Cargo/função:</label>
                    <input type="text" name="office" class="form-control {{ $errors->has('office') ? 'is-invalid' : '' }}" value="{{ old('office') ?? '' }}">
                    @if($errors->has('office'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="matricula">Matricula:</label>
                    <input type="text" name="enrollment-number" class="form-control {{ $errors->has('enrollment-number') ? 'is-invalid' : '' }}" value="{{ old('enrollment-number') ?? '' }}">
                    @if($errors->has('enrollment-number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('enrollment-number') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="cpf">CPF:</label>
                    <input type="text" name="cpf" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }}" value="{{ old('cpf') ?? '' }}">
                    @if($errors->has('cpf'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cpf') }}
                    </div>
                    @endif
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="required" for="celular">Celular:</label>
                        <input type="text" name="cell-number" class="form-control {{ $errors->has('cell-number') ? 'is-invalid' : '' }}" value="{{ old('cell-number') ?? '' }}">
                        @if($errors->has('cell-number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cell-number') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="whatsapp">Whatsapp:</label>
                        <input type="text" name="whatsapp" class="form-control {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}" value="{{ old('whatsapp') ?? '' }}">
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
                        <input type="text" name="postal-code" class="form-control {{ $errors->has('postal-code') ? 'is-invalid' : '' }}" value="{{ old('postal-code') ?? '' }}">
                        @if($errors->has('postal-code'))
                        <div class="invalid-feedback">
                            {{ $errors->first('postal-code') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="bairro">Bairro:</label>
                        <input type="text" name="district" class="form-control {{ $errors->has('district') ? 'is-invalid' : '' }}" value="{{ old('district') ?? '' }}">
                        @if($errors->has('district'))
                        <div class="invalid-feedback">
                            {{ $errors->first('district') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group  col-md-4">
                        <label class="required" for="pais">País:</label>
                        <input type="text" name="country" class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" value="{{ old('country') ?? '' }}">
                        @if($errors->has('country'))
                        <div class="invalid-feedback">
                            {{ $errors->first('country') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group  col-md-4">
                        <label class="required" for="uf">UF:</label>
                        <input type="text" name="uf" class="form-control {{ $errors->has('uf') ? 'is-invalid' : '' }}" value="{{ old('uf') ?? '' }}">
                        @if($errors->has('uf'))
                        <div class="invalid-feedback">
                            {{ $errors->first('uf') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group  col-md-4">
                        <label class="required" for="cidade">Cidade:</label>
                        <input type="text" name="city" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" value="{{ old('city') ?? '' }}">
                        @if($errors->has('city'))
                        <div class="invalid-feedback">
                            {{ $errors->first('city') }}
                        </div>
                        @endif
                    </div>
                </div>


            </div>
        </div>

        <div class="card">
            <div class="card-header">Redes sociais</div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" name="linkedin" placeholder="Link do Likedin">
                        <input type="text" class="form-control" name="facebook" placeholder="Link do Facebook">
                        <input type="text" class="form-control" name="instagram" placeholder="Link do Instagram">
                        <input type="text" class="form-control" name="twitter" placeholder="Link do Twitter">
                        <input type="text" class="form-control" name="youtube" placeholder="Link do YouTube">
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Dados de Acesso</div>
            <div class="card-body">
                <div class="form-group">
                    <label class="required" for="email">Email:</label>
                    <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') ?? '' }}">
                    @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="senha">Repetir Senha</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-dark btn-block">Cadastrar</button>
            </div>
        </div>
    </form>
</div>
@endsection