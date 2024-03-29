@extends('layouts.frontend')

@section('content')

<div class="col-lg-10 offset-1 py-3">
    @include('frontend.pages.companies._partials.painel')
</div>

<div class="row">    
    <div class="col-lg-8 offset-lg-2">
        <form method="POST" action="{{ route('site.companies.store') }}" enctype="multipart/form-data" class="form-register">
            @csrf
            <div class="links-wrapper">                
                <div class="card-body">
                    <span class="card-title">Cadastre sua Empresa</span>
                    <small>Campos com <span class="text-danger">*</span> são obrigatórios</small>
                    <div class="form-group">
                        <label for="razao" class="required">Razão social:</label>
                        <input type="text" name="name" class="form-control form-control-sm {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name', '') }}">
                        @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="form-group col-8 col-sm-6">
                            <label for="Nome fantasia" class="required">Nome fantasia:</label>
                            <input type="text" name="fantasy_name" class="form-control form-control-sm {{ $errors->has('fantasy_name') ? 'is-invalid' : '' }} " value="{{ old('fantasy_name', '') }}">
                            @if($errors->has('fantasy_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('fantasy_name') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group col-4 col-sm-6">
                            <label for="CPNJ" class="required">CNPJ:</label>
                            <input type="text"  name="cnpj" class="cnpj form-control form-control-sm {{ $errors->has('cnpj') ? 'is-invalid' : '' }}" value="{{ old('cnpj', '') }}" placeholder="00.000.000/0000-00">
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
                            <input type="text" id="cep" class="cep form-control form-control-sm {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" name="postal_code" value="{{ old('postal_code', '') }}" placeholder="58.000-000">
                            @if($errors->has('postal_code'))
                            <div class="invalid-feedback">
                                {{ $errors->first('postal_code') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-md-8">
                            <label for="Bairro">Bairro:</label>
                            <input type="text" id="bairro" class="form-control form-control-sm {{ $errors->has('district') ? 'is-invalid' : '' }}" name="district" value="{{ old('district', '') }}">
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
                            <input type="text" id="rua" class="form-control form-control-sm {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" value="{{ old('address', '') }}">
                            @if($errors->has('address'))
                            <div class="invalid-feedback">
                                {{ $errors->first('address') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-md-2">
                            <label for="Numero" class="required">Numero:</label>
                            <input type="number" class="form-control form-control-sm {{ $errors->has('address_number') ? 'is-invalid' : '' }}" name="address_number" value="{{ old('address_number', '') }}">
                            @if($errors->has('address_number'))
                            <div class="invalid-feedback">
                                {{ $errors->first('address_number') }}
                            </div>
                            @endif
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="Cidade" class="required">Cidade:</label>
                            <input type="text" id="cidade" class="form-control form-control-sm {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city" value="{{ old('city', '') }}">
                            @if($errors->has('city'))
                            <div class="invalid-feedback">
                                {{ $errors->first('city') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-md-2">
                            <label for="Estado" class="required">UF:</label>
                            <input type="text" id="uf" class="form-control form-control-sm {{ $errors->has('uf') ? 'is-invalid' : '' }}" name="uf" value="{{ old('uf', '') }}">
                            @if($errors->has('uf'))
                            <div class="invalid-feedback">
                                {{ $errors->first('uf') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="Fone" class="required">Fone:</label>
                            <input type="text" class="phone form-control form-control-sm {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" value="{{ old('phone', '') }}" placeholder="(DD) 9999-9999">
                            @if($errors->has('phone'))
                            <div class="invalid-feedback">
                                {{ $errors->first('phone') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Celular" class="required">Celular:</label>
                            <input type="text" class="mobile form-control form-control-sm {{ $errors->has('cell_number') ? 'is-invalid' : '' }}" name="cell_number" value="{{ old('cell_number', '') }}" placeholder="(DD) 99999-9999">
                            @if($errors->has('cell_number'))
                            <div class="invalid-feedback">
                                {{ $errors->first('cell_number') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Site">Site:</label>
                        <input type="text" name="site" class="form-control form-control-sm {{ $errors->has('site') ? 'is-invalid' : '' }}" value="{{ old('site', '') }}">
                        @if($errors->has('site'))
                        <div class="invalid-feedback">
                            {{ $errors->first('site') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="Fone">Midias sociais:</label>
                            <input type="text" class="form-control form-control-sm {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" name="linkedin" placeholder="Link do Likedin" value="{{ old('linkedin', '') }}">
                            <input type="text" class="form-control form-control-sm {{ $errors->has('facebook') ? 'is-invalid' : '' }}" name="facebook" placeholder="Link do Facebook" value="{{ old('facebook', '') }}">
                            <input type="text" class="form-control form-control-sm {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}" name="whatsapp" placeholder="Link do WhatsApp" value="{{ old('whatsapp', '') }}">
                            <input type="text" class="form-control form-control-sm {{ $errors->has('instagram') ? 'is-invalid' : '' }}" name="instagram" placeholder="Link do Instagram" value="{{ old('instagram', '') }}">
                            <input type="text" class="form-control form-control-sm {{ $errors->has('twitter') ? 'is-invalid' : '' }}" name="twitter" placeholder="Link do Twitter" value="{{ old('twitter', '') }}">
                            <input type="text" class="form-control form-control-sm {{ $errors->has('youtube') ? 'is-invalid' : '' }}" name="youtube" placeholder="Link do YouTube" value="{{ old('youtube', '') }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Fone">Logomarca:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="logomarca" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Site" class="required">Responsável pela solicitação:</label>
                        <input type="text" name="requester_name" class="form-control form-control-sm {{ $errors->has('requester_name') ? 'is-invalid' : '' }} " value="{{ old('requester_name', '') }}">
                        @if($errors->has('requester_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('requester_name') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="Cidade" class="required">CPF:</label>
                            <input type="text" class="cpf form-control form-control-sm {{ $errors->has('requester_cpf') ? 'is-invalid' : '' }}" name="requester_cpf" value="{{ old('requester_cpf', '') }}" placeholder="123.456.123-99">
                            @if($errors->has('requester_cpf'))
                            <div class="invalid-feedback">
                                {{ $errors->first('requester_cpf') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Estado">Data:</label>
                            <input type="date" class="form-control form-control-sm {{ $errors->has('requester_date') ? 'is-invalid' : '' }}" name="request-date" value="{{ date('Y-m-d') }}" readonly>
                            @if($errors->has('requester_date'))
                            <div class="invalid-feedback">
                                {{ $errors->first('requester_date') }}
                            </div>
                            @endif
                        </div>
                    </div>

            <h5>Dados de Acesso</h5>
                    <div class="form-group">
                <label for="razao" class="required">Email</label>
                <input type="text" class="form-control form-control-sm {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email', '') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
                <div class="form-group">
                    <label for="razao" class="required">Senha</label>
                    <input type="password" class="form-control form-control-sm {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" placeholder="deve ter no mínino 8 caracteres">
                </div>
                <div class="form-group">
                    <label for="razao">Repetir Senha</label>
                    <input type="password" class="form-control form-control-sm" name="password_confirmation">
                </div>
                <button type="submit" class="btn text-black border rounded">Cadastrar</button>
            </div>
        </form>
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

@endsection
