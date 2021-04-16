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
            <div class="card-header bg-dark">
                <h5 class="cart-title text-white">Cadastre-se como Estudante</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="required" for="nome">Nome Completo:</label>
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
                            <input type="date" class=" form-control {{ $errors->has('birth_date') ? 'is-invalid' : '' }}" value="{{ old('birth_date') ?? '' }}" name="birth_date">
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
                        <input type="text" class="form-control {{ $errors->has('course_name') ? 'is-invalid' : '' }}" value="{{ old('course_name') ?? '' }}" name="course_name">
                        @if($errors->has('course_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('course_name') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="specialization">Pós-graduação:</label>
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
                        <input type="text" class="form-control {{ $errors->has('university_name') ? 'is-invalid' : '' }}" value="{{ old('university_name') ?? '' }}" name="university_name">
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
                        <input type="text" class="form-control {{ $errors->has('occupation_lattes') ? 'is-invalid' : '' }}" value="{{ old('occupation_lattes') ?? '' }}" name="occupation_lattes">
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
                        <input type="text" class="form-control {{ $errors->has('lattes_link') ? 'is-invalid' : '' }}" value="{{ old('lattes_link') ?? '' }}" name="lattes_link" placeholder="Link do seu curriculo lattes">
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
                        <input type="text" class="cpf form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }}" value="{{ old('cpf') ?? '' }}" name="cpf" placeholder="000.000.000-00">
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
                        <input type="text" class="mobile form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ old('phone') ?? '' }}" name="phone" placeholder="(DDD) 99999-9999">
                        @if($errors->has('phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="whatsapp">Whatsapp:</label>
                        <input type="text" class="mobile form-control {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}" value="{{ old('whatsapp') ?? '' }}" name="whatsapp" placeholder="(DDD) 99999-9999">
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
                        <input type="text" id="cep" class="cep form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" name="postal_code" value="{{ old('postal_code', '') }}" placeholder="58.000-000">
                        @if($errors->has('postal_code'))
                        <div class="invalid-feedback">
                            {{ $errors->first('postal_code') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-8">
                        <label for="Bairro">Bairro:</label>
                        <input type="text" id="bairro" class="form-control {{ $errors->has('district') ? 'is-invalid' : '' }}" name="district" value="{{ old('district', '') }}">
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
                        <input type="text" id="rua" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" value="{{ old('address', '') }}">
                        @if($errors->has('address'))
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-2">
                        <label for="Numero">Número:</label>
                        <input type="number" class="form-control {{ $errors->has('address_number') ? 'is-invalid' : '' }}" name="address_number" value="{{ old('address_number', '') }}">
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
                        <select name="country" id="" class="form-control">
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
                    <div class="form-group col-md-4">
                        <label class="required" for="estado">UF:</label>
                        <input type="text" id="uf" class="form-control {{ $errors->has('uf') ? 'is-invalid' : '' }}" value="{{ old('uf') ?? '' }}" name=" uf">
                        @if($errors->has('uf'))
                        <div class="invalid-feedback">
                            {{ $errors->first('uf') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label class="required" for="cidade">Cidade:</label>
                        <input type="text" id="cidade" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" value="{{ old('city') ?? '' }}" name=" city">
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
            <div class="card-header bg-dark">
                <h5 class="cart-title text-white">Dados de Acesso</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="required" for="razao">Email</label>
                    <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') ?? '' }}" name="email">
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="required" for="razao">Senha</label>
                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" value="{{ old('password') ?? '' }}" name="password" placeholder="Deve ter no minimo 8 caracteres">
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
