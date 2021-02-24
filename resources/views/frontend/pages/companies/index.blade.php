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
                    <label for="razao">Razão social:</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="row">
                    <div class="col">
                        <label for="Nome fantasia">Nome fantasia:</label>
                        <input type="text" name="fantasy-name" class="form-control">
                    </div>
                    <div class="col">
                        <label for="CPNJ">CNPJ:</label>
                        <input type="text" name="cnpj" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="Endereco">Endereço:</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="Numero">Numero:</label>
                        <input type="number" class="form-control" name="address-number">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="CEP">CEP:</label>
                        <input type="text" class="form-control" name="postal-code">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="Bairro">Bairro:</label>
                        <input type="text" class="form-control" name="district">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-11">
                        <label for="Cidade">Cidade:</label>
                        <input type="text" class="form-control" name="city">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="Estado">UF:</label>
                        <input type="text" class="form-control" name="uf">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Fone">Fone:</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Celular">Celular:</label>
                        <input type="text" class="form-control" name="cell-number">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="Email">Email:</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Site">Site:</label>
                    <input type="text" name="site" class="form-control">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="Fone">Midias sociais:</label>
                        <input type="text" class="form-control" name="linkedin" placeholder="Link do Likedin">
                        <input type="text" class="form-control" name="facebook" placeholder="Link do Facebook">
                        <input type="text" class="form-control" name="whatsapp" placeholder="Link do WhatsApp">
                        <input type="text" class="form-control" name="instagram" placeholder="Link do Instagram">
                        <input type="text" class="form-control" name="twitter" placeholder="Link do Twitter">
                        <input type="text" class="form-control" name="youtube" placeholder="Link do YouTube">
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
                    <label for="Site">Responsável pela solicitação:</label>
                    <input type="text" name="requester-name" class="form-control">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="Cidade">CPF:</label>
                        <input type="text" class="form-control" name="requester-cpf">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Estado">Data:</label>
                        <input type="date" class="form-control" name="request-date" value="{{ date('Y-m-d') }}" s>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col">
                        <label for="Nome fantasia">Assinatura:</label>
                        <input type="text" name="signature" style="height:120px" class="form-control">
                    </div>
                    <div class="col">
                        <label for="CPNJ">Carimbo da empresa:</label>
                        <input type="text" name="stamp" style="height:120px" class="form-control">
                    </div>
                </div> -->

            </div>
        </div>

        <div class="card">
            <div class="card-header">Dados de Acesso</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="razao">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="razao">Senha</label>
                    <input type="password" class="form-control" name="password">
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
