<div class="links-wrapper p-2">
    <h6 class="font-weight-lighter">{{$title ?? 'Fazer Login'}}</h6>
    <div class="border rounded p-2">
        <form action="{{ route('login') }}" method="post" autocomplete="off">
            @csrf
            <div class="form-group">
                <div class="label font-weight-bold">E-mail</div>
                <input type="text" name="email" class="form-control form-control-sm">
            </div>

            <div class="form-group">
                <div class="label font-weight-bold">Senha</div>
                <input type="password" name="password" class="form-control form-control-sm">
            </div>

            <div class="d-flex flex-row justify-content-around">
                <button type="submit" class="btn btn-sm p-1 mb-1 btn-primary">Entrar</button>
                <a href="{{ route('password.request') }}" class="btn btn-sm p-1 mb-1 btn-primary">Recuperar Senha</a>
            </div>
        </form>
    </div>

    @if(!isset($showBtn))    
        <a href="{{ route($route) }}" class="external-button text-uppercase font-weight-bold">Cadastre-se</a>
    @endif
</div>
