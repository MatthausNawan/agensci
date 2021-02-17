<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="form-group input-sm">
        <div class="label">E-mail</div>
        <input type="text" name="email" class="form-control input-small">
    </div>

    <div class="form-group">
        <div class="label">Senha</div>
        <input type="password" name="email" class="form-control input-small">
    </div>

    <div class="d-flex flex-column">
        <button type="submit" class="btn btn-sm p-1 btn-dark">Entrar</button>
        <a href="#" class="btn btn-sm btn-outline-secondary text-dark">Recuperar senha</a>
    </div>
</form>

<hr>

<a href="{{ route('register') }}" class="btn btn-primary btn-block btn-sm">Cadastre-se</a>
