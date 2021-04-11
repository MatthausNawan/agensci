<div class="links-wrapper p-2">
    <h6>Olá, {{Auth::user()->name}} <small>{{Auth::user()->company->name ?? 'Empresa'}}</small></h6>
    <div class="data d-flex flex-column">
        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong">CNPJ</span>
            <span class="small">{{Auth::user()->company->cnpj}}</span>
        </div>
        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong">Email</span>
            <span class="small">{{Auth::user()->company->email}}</span>
        </div>
        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong">Site</span>
            <span class="small">
                <a target="_blank" href="{{Auth::user()->company->site}}">{{Auth::user()->company->site}}</a>
            </span>
        </div>

        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong">Midias Sociais</span>
            <div class="socials">
                @if (Auth::user()->company->facebook)
                    <a target="_blank" href="{{Auth::user()->company->facebook}}">
                        <img src="{{asset('images/social_media/facebook.png')}}" width="30px" alt="Facebook">
                    </a>
                @endif
                @if (Auth::user()->company->twitter)
                    <a target="_blank" href="{{Auth::user()->company->twitter}}">
                        <img src="{{asset('images/social_media/twitter.png')}}" width="30px" alt="Twitter">
                    </a>
                @endif
                @if (Auth::user()->company->instagram)
                    <a target="_blank" href="{{Auth::user()->company->instagram}}">
                        <img src="{{asset('images/social_media/instagram.png')}}" width="30px" alt="Instagram">
                    </a>
                @endif
                @if (Auth::user()->company->linkedin)
                    <a target="_blank" href="{{Auth::user()->company->linkedin}}">
                        <img src="{{asset('images/social_media/linkedin.png')}}" width="30px" alt="Linkedin">
                    </a>
                @endif
                @if (Auth::user()->company->youtube)
                    <a target="_blank" href="{{Auth::user()->company->youtube}}">
                        <img src="{{asset('images/social_media/youtube.png')}}" width="30px" alt="Youtube">
                    </a>
                @endif
                @if (Auth::user()->company->whatsapp)
                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{Auth::user()->company->whatsapp}}">
                        <img src="{{asset('images/social_media/whatsapp.png')}}" width="30px" alt="Whatsapp">
                    </a>
                @endif
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-secondary btn-block btn-sm">Meu Cadastro</a>
</div>
