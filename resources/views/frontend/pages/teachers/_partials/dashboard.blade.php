<div class="links-wrapper p-2">
    <h6 class="text-dark">Olá, {{Auth::user()->name ?? 'Professor'}}</h6>
    @if($teacher)
    <div class="data d-flex flex-column">
        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong text-black">Instituição</span>
            <span class="small">{{ $teacher->institution_works ?? 'nao informado' }}</span>
        </div>
        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong text-black">Email</span>
            <span class="small">{{$teacher->email ?? 'nao informado'}}
        </div>
        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong text-blak">Curriculo Lattes</span>
            <span class="small"><a href="{{ $teacher->resume_link ?? '#' }}" target="_blank">{{ $teacher->resume_link ?? 'nao informado' }}</a></span>
        </div>
        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong text-black">Midias Sociais</span>
            <div class="socials">
                @if ($teacher->facebook)
                    <a target="_blank" href="{{$teacher->facebook}}">
                        <img src="{{asset('images/social_media/facebook.png')}}" width="30px" alt="Facebook">
                    </a>
                @endif
                @if ($teacher->twitter)
                    <a target="_blank" href="{{$teacher->twitter}}">
                        <img src="{{asset('images/social_media/twitter.png')}}" width="30px" alt="Twitter">
                    </a>
                @endif
                @if ($teacher->instagram)
                    <a target="_blank" href="{{$teacher->instagram}}">
                        <img src="{{asset('images/social_media/instagram.png')}}" width="30px" alt="Instagram">
                    </a>
                @endif
                @if ($teacher->linkedin)
                    <a target="_blank" href="{{$teacher->linkedin}}">
                        <img src="{{asset('images/social_media/linkedin.png')}}" width="30px" alt="Linkedin">
                    </a>
                @endif
                @if ($teacher->youtube)
                    <a target="_blank" href="{{$teacher->youtube}}">
                        <img src="{{asset('images/social_media/youtube.png')}}" width="30px" alt="Youtube">
                    </a>
                @endif
                @if ($teacher->whatsapp)
                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{$teacher->whatsapp}}">
                        <img src="{{asset('images/social_media/whatsapp.png')}}" width="30px" alt="Whatsapp">
                    </a>
                @endif
            </div>
            
        </div>
    </div>
    <a href="{{route('teachers.profile')}}" class="btn btn-transparent text-black btn-sm pull-right">Meu Cadastro</a>
    @endif
    
</div>
