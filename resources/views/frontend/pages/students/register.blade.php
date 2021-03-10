@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-lg-12 m-2">
        <img src="https://via.placeholder.com/1200x200" alt="" class="img-rounded" width="100%" height="200">
    </div>
</div>

<div class="col-lg-8 offset-2 mb-2">
    <form method="POST" action="{{ route('site.students.register') }}" enctype="multipart/form-data">
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

                <div class=" row">
                    <div class="col">
                        <div class="form-group">
                            <label class="required" for="sexo">Sexo:</label>
                            <select class="form-control {{ $errors->has('genre') ? 'is-invalid' : '' }}" value="{{ old('genre') ?? '' }}"" name=" genre">
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
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label class="required" for="Data de nascimento">Data de nascimento:</label>
                            <input type="date" class="form-control {{ $errors->has('birth-date') ? 'is-invalid' : '' }}" value="{{ old('birth-date') ?? '' }}" name="birth-date">
                            @if($errors->has('birth-date'))
                            <div class="invalid-feedback">
                                {{ $errors->first('birth-date') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="required" for="curso">Curso:</label>
                        <input type="text" class="form-control {{ $errors->has('course-name') ? 'is-invalid' : '' }}" value="{{ old('course-name') ?? '' }}" name="course-name">
                        @if($errors->has('course-name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('course-name') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="required" for="pos graduacao">Pós-graduação:</label>
                        <input type="text" class="form-control {{ $errors->has('specialization') ? 'is-invalid' : '' }}" value="{{ old('specialization') ?? '' }}" name="specialization">
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
                        <input type="text" class="form-control {{ $errors->has('university-name') ? 'is-invalid' : '' }}" value="{{ old('university-name') ?? '' }}" name="university-name">
                        @if($errors->has('university-name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('university-name') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="required" for="matricula">Matricula:</label>
                        <input type="text" class="form-control {{ $errors->has('matriculation') ? 'is-invalid' : '' }}" value="{{ old('matriculation') ?? '' }}" name="matriculation">
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
                        <input type="text" class="form-control {{ $errors->has('occupation-lattes') ? 'is-invalid' : '' }}" value="{{ old('occupation-lattes') ?? '' }}" name="occupation-lattes">
                        @if($errors->has('occupation-lattes'))
                        <div class="invalid-feedback">
                            {{ $errors->first('occupation-lattes') }}
                        </div>
                        @endif

                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="required" for="curriculo lattes">Curriculo lattes:</label>
                        <input type="text" class="form-control {{ $errors->has('lattes-link') ? 'is-invalid' : '' }}" value="{{ old('lattes-link') ?? '' }}" name=" lattes-link">
                        @if($errors->has('lattes-link'))
                        <div class="invalid-feedback">
                            {{ $errors->first('lattes-link') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="required" for="cpf">CPF:</label>
                        <input type="text" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }}" value="{{ old('cpf') ?? '' }}" name=" cpf">
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
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ old('phone') ?? '' }}" name="phone">
                        @if($errors->has('phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="whatsapp">Whatsapp:</label>
                        <input type="text" class="form-control {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}" value="{{ old('whatsapp') ?? '' }}" name="whatsapp">
                        @if($errors->has('whatsapp'))
                        <div class="invalid-feedback">
                            {{ $errors->first('whatsapp') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="required" for="pais">País:</label>
                        <input type="text" class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" value="{{ old('country') ?? '' }}" name="country">
                        @if($errors->has('country'))
                        <div class="invalid-feedback">
                            {{ $errors->first('country') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label class="required" for="estado">UF:</label>
                        <input type="text" class="form-control {{ $errors->has('uf') ? 'is-invalid' : '' }}" value="{{ old('uf') ?? '' }}" name=" uf">
                        @if($errors->has('uf'))
                        <div class="invalid-feedback">
                            {{ $errors->first('uf') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label class="required" for="cidade">Cidade:</label>
                        <input type="text" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" value="{{ old('city') ?? '' }}" name=" city">
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
                        <input type="text" class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" value="{{ old('linkedin') ?? '' }}" name="linkedin" placeholder="Link do Likedin">
                        <input type="text" class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" value="{{ old('facebook') ?? '' }}" name="facebook" placeholder="Link do Facebook">
                        <input type="text" class="form-control {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}" value="{{ old('whatsapp') ?? '' }}" name="whatsapp" placeholder="Link do WhatsApp">
                        <input type="text" class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}" value="{{ old('instagram') ?? '' }}" name="instagram" placeholder="Link do Instagram">
                        <input type="text" class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" value="{{ old('twitter') ?? '' }}" name="twitter" placeholder="Link do Twitter">
                        <input type="text" class="form-control {{ $errors->has('youtube') ? 'is-invalid' : '' }}" value="{{ old('youtube') ?? '' }}" name="youtube" placeholder="Link do YouTube">
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Dados de Acesso</div>
            <div class="card-body">
                <div class="form-group">
                    <label class="required" for="razao">Email</label>
                    <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') ?? '' }}" name="email">
                </div>
                <div class="form-group">
                    <label class="required" for="razao">Senha</label>
                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" value="{{ old('password') ?? '' }}" name="password">
                </div>
                <div class="form-group">
                    <label class="required" for="razao">Repetir Senha</label>
                    <input type="password" class="form-control" value="" name="password_confirmation">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-dark btn-block">Cadastrar</button>
            </div>
        </div>
    </form>
</div>
@endsection
