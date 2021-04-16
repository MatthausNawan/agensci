<div class="links-wrapper p-2">
    <h6>Olá, {{Auth::user()->name ?? 'Developer'}}</h6>
    <div class="data d-flex flex-column">
        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong">Instituição</span>
            <span class="small">{{$student->university_name ?? ''}}</span>
        </div>
        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong">Email</span>
            <span class="small">{{$student->email ?? ''}}</span>
        </div>
        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong">Curriculo Lattes</span>
            <span class="small"><a href="{{ $student->lattes_link ?? '' }}">{{ $student->lattes_link ?? '' }}</a></span>
        </div>

        <div class="border-bottom d-flex flex-column my-2">
            <span class="text-strong">Midias Sociais</span>
            <div class="socials">
                @if ($student->facebook)
                    <a target="_blank" href="{{$student->facebook}}">
                        <img src="{{asset('images/social_media/facebook.png')}}" width="30px" alt="Facebook">
                    </a>
                @endif
                @if ($student->twitter)
                    <a target="_blank" href="{{$student->twitter}}">
                        <img src="{{asset('images/social_media/twitter.png')}}" width="30px" alt="Twitter">
                    </a>
                @endif
                @if ($student->instagram)
                    <a target="_blank" href="{{$student->instagram}}">
                        <img src="{{asset('images/social_media/instagram.png')}}" width="30px" alt="Instagram">
                    </a>
                @endif
                @if ($student->linkedin)
                    <a target="_blank" href="{{$student->linkedin}}">
                        <img src="{{asset('images/social_media/linkedin.png')}}" width="30px" alt="Linkedin">
                    </a>
                @endif
                @if ($student->youtube)
                    <a target="_blank" href="{{$student->youtube}}">
                        <img src="{{asset('images/social_media/youtube.png')}}" width="30px" alt="Youtube">
                    </a>
                @endif
                @if ($student->whatsapp)
                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{$student->whatsapp}}">
                        <img src="{{asset('images/social_media/whatsapp.png')}}" width="30px" alt="Whatsapp">
                    </a>
                @endif
            </div>
        </div>
    </div>
    <a href="{{route('students.profile.update')}}" class="btn btn-secondary btn-block btn-sm">Meu Cadastro</a>
</div>
