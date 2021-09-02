<div>
    <div class="links-wrapper p-2">
        <h6 class="newsletter-title">Newsletter</h6>
        <form method="post" wire:submit.prevent="storeNewsLetter">
            @csrf
            <div class="form-group">
                <div class="label">Nome</div>
                <input type="text" name="name" wire:model="name" class="form-control form-control-sm" placeholder="seu nome">
                @error('name') <small><span class="text-danger">{{ $message }}</span></small> @enderror
            </div>

            <div class="form-group">
                <div class="label">E-mail</div>
                <input type="text" name="email" wire:model="email" class="form-control form-control-sm" placeholder="seu email">
                @error('email') <small><span class="text-danger">{{ $message }}</span></small> @enderror
            </div>


            <div class="form-group">
                <div class="label">Whatsapp</div>
                <input type="text" name="whatsapp" wire:model="whatsapp" class="form-control form-control-sm" placeholder="seu whatsapp">
                @error('whatsapp') <small><span class="text-danger">{{ $message }}</span></small> @enderror
            </div>


            <button type="submit" class="btn btn-sm p-1 mb-1 btn-dark">Enviar
                <div wire:loading>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>
                </div>
            </button>

        </form>
    </div>

</div>