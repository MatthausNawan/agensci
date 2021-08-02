<div>
<div class="links-wrapper p-2">
    <h6>Newsletter</h6>
    <form method="post" wire:submit.prevent="storeNewsLetter">
        @csrf
        <div class="form-group input-sm">
            <div class="label">Nome</div>
            <input type="text" name="name" wire:model="name" class="form-control input-sm" placeholder="seu nome">
            @error('name') <small><span class="text-danger">{{ $message }}</span></small> @enderror
        </div>

        <div class="form-group input-sm">
            <div class="label">E-mail</div>
            <input type="text" name="email" wire:model="email" class="form-control input-sm" placeholder="seu email">
            @error('email') <small><span class="text-danger">{{ $message }}</span></small> @enderror
        </div>


        <div class="form-group input-sm">
            <div class="label">Whatsapp</div>
            <input type="text" name="whatsapp" wire:model="whatsapp" class="form-control input-sm " placeholder="seu whatsapp">
            @error('whatsapp') <small><span class="text-danger">{{ $message }}</span></small> @enderror
        </div>

        <div class="d-flex flex-column">
            <button type="submit" class="btn btn-sm p-1 mb-1 btn-dark">Enviar
                <div wire:loading>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>
                </div>
            </button>
        </div>
    </form>
</div>

</div>
