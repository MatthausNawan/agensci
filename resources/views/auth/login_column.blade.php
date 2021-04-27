<div class="links-wrapper p-2">
    <h6>{{$title ?? 'Fazer Login'}}</h6>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group input-sm">
            <div class="label">E-mail</div>
            <input type="text" name="email" class="form-control input-sm">
        </div>

        <div class="form-group">
            <div class="label">Senha</div>
            <input type="password" name="password" class="form-control input-sm">
        </div>

        <div class="d-flex flex-column">
            <button type="submit" class="btn btn-sm p-1 mb-1 btn-dark">Entrar</button>
            <a href="{{ route('password.request') }}" class="btn btn-sm p-0 btn-outline-secondary">Esqueci senha</a>
        </div>
    </form>

    <hr>

    <a href="{{ route($route) }}" class="btn btn-secondary btn-block btn-sm">Cadastre-se</a>

</div>
