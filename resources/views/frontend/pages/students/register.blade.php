@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-lg-12 m-2">
        <img src="https://via.placeholder.com/1200x200" alt="" class="img-rounded" width="100%" height="200">
    </div>
</div>

<div class="col-lg-8 offset-2 mb-2">
    <form method="POST" action="{{ route("site.students.register.form") }}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="name" class="form-control">
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

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="curso">Curso:</label>
                        <input type="text" class="form-control" name="course-name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="pos graduacao">Pós-graduação:</label>
                        <input type="text" class="form-control" name="specialization">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="instituicao estuda">Instituição estuda:</label>
                        <input type="text" class="form-control" name="university-name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="matricula">Matricula:</label>
                        <input type="text" class="form-control" name="matriculation">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="area de atuacao">Área de atuação(Lattes):</label>
                        <input type="text" class="form-control" name="occupation-lattes">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="curriculo lattes">Curriculo lattes:</label>
                        <input type="text" class="form-control" name="lattes-link">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" name="cpf">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="e-mail">E-mail:</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="celular">Celular:</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="whatsapp">Whatsapp:</label>
                        <input type="text" class="form-control" name="whatsapp">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="pais">País:</label>
                        <input type="text" class="form-control" name="country">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="estado">UF:</label>
                        <input type="text" class="form-control" name="uf">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" name="city">
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
                        <input type="text" class="form-control" name="whatsapp" placeholder="Link do WhatsApp">
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