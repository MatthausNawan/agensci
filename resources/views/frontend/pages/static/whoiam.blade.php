@extends('layouts.default')


@section('page_content')
<div class="row">
    <div class="col-lg-12">

    <div class="links-wrapper p-2">
        <h4>QUEM SOMOS</h4>

        <p class="text-justify">AgenSci (Agenda Científica) é um site autônomo que objetiva ser uma alternativa inovadora para facilitar a difusão e  popularização da ciência e dos eventos e conhecimentos científicos de diversos meios de comunicação nacional e internacional, principalmente para o público acadêmico (alunos, professores, pesquisadores, instituições e entidades diversas), ainda facilitar a comunicação  colaboração entre as universidades e empresas, além de disponibilizar vários recursos, tudo de forma gratuita, para público acadêmico de todas as instituições brasileiras ou estrangeiras de ensino superior.</p>

        <p class="text-justify">Dentre os serviços fornecidos pelo site AgenSci, destacamos:</p>
        <ul>
            <li>A difusão e disseminação de eventos acadêmico-científicos (encontros, congressos, simpósios, conferencias, fórum, workshops, painéis, debates, convenções, palestras, mesas-redondas, feiras, exposições) das mais diversas Áreas do conhecimento, tanto de âmbito nacional quanto internacional;</li>
            <li>Publicação de notícias acadêmicas (pelos professores) e artigos científicos de sites e revistas nacionais e internacionais;</li>
            <li>Chamadas de fomento (para pesquisa e extensão) e de publicação de revistas;</li>
            <li>Divulgação de palestrantes (professores) e portifólio de estudantes, de vagas de estágio, trainee, emprego (pelas empresas);</li>
            <li>Comunicação de cursos e concursos;</li>
            <li>Servir como uma plataforma de mediação entre academia e empresas para o fomento de pesquisas e eventos científicos</li>
            <li>Disponibilização de diversos recursos para o público acadêmico.</li>
        </ul>
        <p class="text-justify">Muito Obrigado e sejam bem vindos ao site<strong><a href="{{ env("APP_URL") }}"> AgenSci.com</a></strong></p>
        </div>
    </div>
</div>
@endsection
