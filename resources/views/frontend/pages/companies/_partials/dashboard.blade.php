<div class="links-wrapper p-2">
    <h6>Olá, {{Auth::user()->name ?? 'Empresa'}}</h6>
    <div class="data d-flex flex-column">
        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong">CNPJ</span>
            <span class="small">0.000.000/0001-00</span>
        </div>
        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong">Email</span>
            <span class="small">Universidade Tal</span>
        </div>
        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong">Site</span>
            <span class="small">Universidade Tal</span>
        </div>

        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong">Midias Sociais</span>
            <div class="socials">

            </div>
        </div>
    </div>
    <a href="#" class="btn btn-secondary btn-block btn-sm">Meu Cadastro</a>
</div>
