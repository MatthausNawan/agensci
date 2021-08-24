<div class="row">
    <div class="col-lg-12 py-2">
        <ul class="links-wrapper nav">
            <li class="nav-item py-0">
                <a class="nav-link text-black py-0 px-1 px-2 text-capitalize" href="{{route('teachers.home')}}">Home</a>
            </li>
            <li class="nav-item py-0">
                <a class="nav-link text-black py-0 px-2 text-capitalize" href="{{route('teachers.events.create')}}">Cadastrar Evento</a>
            </li>
            <li class="nav-item py-0">
                <a class="nav-link text-black py-0 px-2 text-capitalize" href="{{route('teachers.posts.create')}}">Cadastrar Noticias</a>
            </li>
            <li class="nav-item py-0">
                <a class="nav-link text-black py-0 px-2 text-capitalize" href="{{ route('teachers.speakers.create') }}">Palestrante</a>
            </li>
            <li class="nav-item py-0">
                <a class="nav-link text-black py-0 px-2 text-capitalize" href="{{ route('teachers.event-calls.index')}}">Chamada de Eventos</a>
            </li>        
            <li class="nav-item py-0">
                <a class="nav-link text-black py-0 px-2 text-capitalize" href="{{ route('teachers.personal-links.index') }}">Links Importantes</a>
            </li> 
            <li class="nav-item py-0">
                <a class="nav-link text-black py-0 px-2 text-capitalize" href="{{route('teachers.events.index')}}">Meus Eventos</a>
            </li>  
            <li class="nav-item py-0">
                <a class="nav-link text-black py-0 px-2 text-capitalize" href="{{ route('teachers.events.index',['colaborados'=>true]) }}">Eventos Colaborados</a>
            </li>                 
        </ul>
    </div>
</div>