@extends('layouts.frontend')


@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2>TERMOS E CONDIÇÕES DE USO</h2>
        <h4>1. Aceitação dos Termos e Condições de Uso</h4>
        <p class="text-justify">A utilização do site <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a> está condicionada à aceitação na totalidade dos termos e condições de uso abaixo descritos. Portanto, é necessário a sua leitura e aceitação para o registro no site e cadastro de eventos.</p>

        <h4>2. Descrição do serviço</h4>
        <p class="text-justify">O <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a> é um serviço gratuito de divulgação eventos acadêmico-científicos (encontros, congressos, simpósios, conferencias, fórum, workshops, painéis, debates, semanas, convenções, palestras, mesas-redondas, feiras, exposições) das mais diversas Áreas do conhecimento, tanto de âmbito nacional quanto internacional; Publicação de notícias acadêmicas (pelos professores) e artigos científicos de sites e revistas nacionais e internacionais; Chamadas de fomento (para pesquisa e extensão) e de publicação de revistas; Divulgação de palestrantes (professores) e portifólio de estudantes, de vagas de estágio, trainee, emprego (pelas empresas); Comunicação de cursos e concursos; Servir como uma plataforma de mediação entre academia e empresas para o fomento de pesquisas e eventos científicos; Disponibilização de diversos recursos para o público acadêmico. Tudo de forma gratuita e permitido pelas leis vigentes no país.</p>

        <h4>3. Obrigações cadastrais:</h4>
        <p class="text-justify">Ao se inscrever no site, você concorda em fornecer informações verdadeiras, exatas, atuais e completas sobre si e sobre os eventos e notícias a serem divulgadas. Caso contrário, se você fornecer qualquer informação que seja falsa, inexata, não atual ou incompleta, ou se tivermos razões para suspeitar que tais informações sejam falsas (Fake news) ou incorretas, poderemos bloquear temporariamente, suspender ou encerrar sua conta e recusar toda e qualquer futura solicitação para utilizar nossos serviços.
        Os serviços de difusão disponíveis neste site se limitam aos citados acima. Não é permitido, portanto, utilizar os serviços de maneira que viole leis federais, estaduais, ou do direito internacional, ou para qualquer propósito ilegal, bem como é terminantemente proibido aos cadastrados utilizá-los para conduzir negócios e outros meios afins de benefício próprio ou de terceiros (salvo, previa e expressamente permitidos pelo site AgenSci).</p>

        <h4>4. Especificidades do cadastro de eventos e notícias:</h4>
        <p class="text-justify">Apenas o organizador do evento e autor das notícias devidamente vinculado a uma instituição e cadastrado em nosso site pode divulgar eventos científicos, notícias científicas (sem cunho político). Exige-se somente que verifique se o evento e/ou notícia em questão já foi publicado no site (somente eventos científicos (nunca cursos) e notícias que estiverem em consonância com os termos e condições deste texto poderão ser publicados sob pena de serem deletados e o organizador bloqueado do site).</p>

        <h4>5. Veracidade das informações</h4>
        <p class="text-justify">É de inteira responsabilidade do usuário cadastrado a veracidade do evento e/ou notícias, informações, seu acontecimento e confirmação além das informações divulgadas no site <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a>.</p>

        <h4>6. Direitos Reservados</h4>
        <p class="text-justify">O <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a> reserva-se o direito de não publicar e/ou deletar, bloquear eventos, notícias, ou outras informações que:</p>
        <ul>
            <li>Não se enquadrem ou que não tenham compatibilidade ao conteúdo do site;</li>
            <li>Apresentem conteúdo ilícito ou incompleto, dados incorretos e não confirmados;</li>
            <li>Apresentem links que contenham arquivos maliciosos, falsos e de outra natureza que não atendam os padrões do <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a>.</li>
        </ul>

        <p class="text-justify">Além disso, o <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a> reserva-se ao direito de modificar a estrutura do site e ajustar a sua interface conforme achar necessário, sem qualquer informe, aviso e a qualquer momento.
        O <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a>, por ser um indexador de conteúdo poderá, se achar necessário, cadastrar informações de eventos e notícias científicas e outras informações disponíveis ou não na internet desde que estas sejam informações públicas.</p>

        <h4>7. Responsabilidade</h4>
        <p class="text-justify">O usuário assume a inteira responsabilidade pelas informações divulgadas e suas consequências para os participantes e inscritos em seus eventos, ou das notícias divulgadas, sendo estes de caráter jurídico e financeiro. Isentando assim, de qualquer ônus, prejuízos e responsabilidades o site <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a>.</p>

        <h4>8. Dados do Usuário</h4>
        <p class="text-justify">O <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a> não divulga os dados pessoais dos usuários, além de mantê-las em sigilo. É de obrigação do usuário, adotar meios de navegação segura e manter as informações de contato atualizadas. O <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a> não divulgará de forma alguma os dados pessoais dos seus usuários, mesmo que estes sejam solicitados por outros usuários cadastrados.</p>

        <h4>9. Divulgação</h4>
        <p class="text-justify">O usuário deve redigir corretamente os dados do evento e notícias a ser publicado, não cabendo ao <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a> corrigir, atualizar, cancelar dados e datas que foram divulgadas no <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a>.
        Caso você seja organizador de algum evento em divulgação no <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a> e não tenha sido o responsável pelo cadastro, solicite a transferência para a sua conta de usuário através do agensci@hotmail.com.</p>

        <h4>10. Conteúdo</h4>
        <p class="text-justify">O <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a> preza por conteúdos de caráter acadêmico e científico, podendo restringir áreas que não atendam aos fatores de seleção do <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a>. Caso alguma área em específico não esteja descrita no campo “Área do conhecimento”, poderá ser solicitado ao agensci@hotmail.com a sua inclusão no site, respeitando-se o direito do <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a> adicionar ou não a mesma e os tempos necessários para a modificação no sistema. A seleção das áreas do conhecimento, poderá ser feita sob a justificativa da facilidade da navegação, desempenho do mecanismo e na pesquisa das informações.</p>

        <h4>11. Denúncia</h4>
        <p class="text-justify">O Usuário compromete-se a denunciar quaisquer violações dos Termos e Condições de Uso que observar ou sentir-se vítima de qualquer divulgação que esteja sob a sua responsabilidade. Nesse caso, o usuário deverá utilizar o canal de atendimento agensci@hotmail.com para solicitar a exclusão e o cancelamento da informação em questão.</p>

        <h4>12. Uso da Imagem da Logomarca, vídeos e notícias</h4>
        <p class="text-justify">O organizador ou usuário libera e cede os direitos de uso da imagem da marca, vídeos, notícias para fins de divulgação e para a utilização no <a href="{{ env("APP_URL") }}">Equipe AgenSci.com</a> ou em suas mídias sociais, sendo estes aplicáveis somente a divulgação em destaque.</p>

        <h4>13. Legislação</h4>
        <p class="text-justify">As informações divulgadas deverão respeitar as legislações vigentes no país de acordo com os seus códigos, agentes e órgãos responsáveis.</p>

        <p class="text-justify">Muito Obrigado.</p>
        <p class="text-justify">Equipe<strong><a href="{{ env("APP_URL") }}"> AgenSci.com</a></strong></p>
    </div>
</div>
@endsection
