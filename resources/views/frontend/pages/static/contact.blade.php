@extends('layouts.default')

@section('page_content')
    <div class="links-wrapper contact-border p-4">
        @if(session('contact_flash'))
            <span class="text-danger col-12">{{ session('contact_flash') }}</span>
        @endif
        <div class="section-header">
            <div class="section mb-5">
                <span class="contact-label">Endereço:</span>
                <div class="d-flex flex-column">
                    <span class="contact-small">Rua Fulano de tall</span>
                    <span class="contact-small">Rua Fulano de tall</span>
                    <span class="contact-small">Rua Fulano de tall</span>
                </div>
            </div>

            <div class="section mb-5">
                <span class="contact-label">Telefone:</span>
                <div class="d-flex flex-column">
                    <span class="contact-small">Rua Fulano de tall</span>
                    <span class="contact-small">Rua Fulano de tall</span>
                    <span class="contact-small">Rua Fulano de tall</span>
                </div>
            </div>

            <div class="section mb-5">
                <span class="contact-label">Email(s):</span>
                <div class="d-flex flex-column">
                    <span class="contact-small">Rua Fulano de tall</span>
                    <span class="contact-small">Rua Fulano de tall</span>
                    <span class="contact-small">Rua Fulano de tall</span>
                </div>
            </div>
        </div>

        <div class="contact-label">Envie-nos uma mensagem:</div>
        <form action="{{ route('site.contact') }}" method="post"">
            @csrf
            <div class="form-group">
                <input type="text" placeholder="Nome" class="form-control form-control-sm" required name="name">
            </div>

            <div class="form-group">
                <input type="email" placeholder="Email" class="form-control form-control-sm" required name="email">
            </div>

            <div class="form-group">
                <input type="text" placeholder="Telefone" class="form-control form-control-sm" required name="phone">
            </div>

            <div class="form-group">
                <input type="text" placeholder="Assunto" class="form-control form-control-sm" required name="subject">
            </div>

            <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="10" class="form-control form-control-sm" required></textarea>
            </div>
            
            <button type="submit" class="btn">Enviar</button>
        </form>        
    </div>
@endsection