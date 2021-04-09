@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-lg-12 m-2">
        <img src="https://via.placeholder.com/1200x200" alt="" class="img-rounded" width="100%" height="200">
    </div>
</div>

<div class="col-lg-8 offset-2 mb-2">
    <form method="POST" action="{{ route("site.companies.store") }}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="razao" class="required">Razão social:</label>
                    <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name', '') }}">
                    @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="Nome fantasia" class="required">Nome fantasia:</label>
                            <input type="text" name="fantasy-name" class="form-control {{ $errors->has('fantasy-name') ? 'is-invalid' : '' }} " value="{{ old('fantasy-name', '') }}">
                            @if($errors->has('fantasy-name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('fantasy-name') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="CPNJ" class="required">CNPJ:</label>
                            <input type="text" name="cnpj" class="form-control {{ $errors->has('cnpj') ? 'is-invalid' : '' }}" value="{{ old('cnpj', '') }}">
                            @if($errors->has('cnpj'))
                            <div class="invalid-feedback">
                                {{ $errors->first('cnpj') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="Endereco" class="required">Endereço:</label>
                        <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" value="{{ old('address', '') }}">
                        @if($errors->has('address'))
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-2">
                        <label for="Numero">Numero:</label>
                        <input type="number" class="form-control {{ $errors->has('address-number') ? 'is-invalid' : '' }}" name="address-number" value="{{ old('address-number', '') }}">
                        @if($errors->has('address-number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('address-number') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="CEP" class="required">CEP:</label>
                        <input type="text" class="form-control {{ $errors->has('postal-code') ? 'is-invalid' : '' }}" name="postal-code" value="{{ old('postal-code', '') }}">
                        @if($errors->has('postal-code'))
                        <div class="invalid-feedback">
                            {{ $errors->first('postal-code') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-8">
                        <label for="Bairro">Bairro:</label>
                        <input type="text" class="form-control {{ $errors->has('district') ? 'is-invalid' : '' }}" name="district" value="{{ old('district', '') }}">
                        @if($errors->has('district'))
                        <div class="invalid-feedback">
                            {{ $errors->first('district') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="Cidade">Cidade:</label>
                        <input type="text" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city" value="{{ old('city', '') }}">
                        @if($errors->has('city'))
                        <div class="invalid-feedback">
                            {{ $errors->first('city') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-2">
                        <label for="Estado">UF:</label>
                        <input type="text" class="form-control {{ $errors->has('uf') ? 'is-invalid' : '' }}" name="uf" value="{{ old('uf', '') }}">
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
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" value="{{ old('phone', '') }}">
                        @if($errors->has('phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Celular" class="required">Celular:</label>
                        <input type="text" class="form-control {{ $errors->has('cell-number') ? 'is-invalid' : '' }}" name="cell-number" value="{{ old('cell-number', '') }}">
                        @if($errors->has('cell-number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cell-number') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="Site">Site:</label>
                    <input type="text" name="site" class="form-control {{ $errors->has('site') ? 'is-invalid' : '' }}" value="{{ old('site', '') }}">
                    @if($errors->has('site'))
                    <div class="invalid-feedback">
                        {{ $errors->first('site') }}
                    </div>
                    @endif
                </div>

                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="Fone">Midias sociais:</label>
                        <input type="text" class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" name="linkedin" placeholder="Link do Likedin" value="{{ old('linkedin', '') }}">
                        <input type="text" class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" name="facebook" placeholder="Link do Facebook" value="{{ old('facebook', '') }}">
                        <input type="text" class="form-control {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}" name="whatsapp" placeholder="Link do WhatsApp" value="{{ old('whatsapp', '') }}">
                        <input type="text" class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}" name="instagram" placeholder="Link do Instagram" value="{{ old('instagram', '') }}">
                        <input type="text" class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" name="twitter" placeholder="Link do Twitter" value="{{ old('twitter', '') }}">
                        <input type="text" class="form-control {{ $errors->has('youtube') ? 'is-invalid' : '' }}" name="youtube" placeholder="Link do YouTube" value="{{ old('youtube', '') }}">
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
                    <input type="text" name="requester-name" class="form-control {{ $errors->has('requester-name') ? 'is-invalid' : '' }} " value="{{ old('requester-name', '') }}">
                    @if($errors->has('requester-name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('requester-name') }}
                    </div>
                    @endif
                </div>

                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="Cidade" class="required">CPF:</label>
                        <input type="text" class="form-control {{ $errors->has('requester-cpf') ? 'is-invalid' : '' }}" name="requester-cpf" value="{{ old('requester-cpf', '') }}">
                        @if($errors->has('requester-cpf'))
                        <div class="invalid-feedback">
                            {{ $errors->first('requester-cpf') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Estado">Data:</label>
                        <input type="date" class="form-control {{ $errors->has('requester-date') ? 'is-invalid' : '' }}" name="request-date" value="{{ date('Y-m-d') }}" readonly>
                        @if($errors->has('requester-date'))
                        <div class="invalid-feedback">
                            {{ $errors->first('requester-date') }}
                        </div>
                        @endif
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col">
                        <label for="Nome fantasia">Assinatura:</label>
                        <input type="text" name="signature" style="height:120px" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}">
                    </div>
                    <div class="col">
                        <label for="CPNJ">Carimbo da empresa:</label>
                        <input type="text" name="stamp" style="height:120px" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}">
                    </div>
                </div> -->

            </div>
        </div>

        <div class="card">
            <div class="card-header">Dados de Acesso</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="razao" class="required">Email</label>
                    <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email', '') }}">
                </div>
                <div class="form-group">
                    <label for="razao" class="required">Senha</label>
                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password">
                </div>
                <div class="form-group">
                    <label for="razao">Repetir Senha</label>
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
