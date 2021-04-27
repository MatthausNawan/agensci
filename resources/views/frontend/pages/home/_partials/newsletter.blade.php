<div class="links-wrapper p-2">
    <h6>Newsletter</h6>
    <form method="post">
        @csrf
        <div class="form-group input-sm">
            <div class="label">Nome</div>
            <input type="text" name="name" class="form-control input-sm" placeholder="seu nome">
        </div>

        <div class="form-group input-sm">
            <div class="label">E-mail</div>
            <input type="text" name="email" class="form-control input-sm" placeholder="seu email">
        </div>


        <div class="form-group input-sm">
            <div class="label">Whatsapp</div>
            <input type="text" name="whatsapp" class="form-control input-sm" placeholder="seu whatsapp">
        </div>

        <div class="d-flex flex-column">
            <button type="submit" class="btn btn-sm p-1 mb-1 btn-dark">Enviar</button>
        </div>
    </form>
</div>
