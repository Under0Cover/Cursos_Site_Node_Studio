<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Boa Forma - Seu espaço de saúde</title>
    <link rel="icon" href="img/fav.png">
    <!-- GOOGLE ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anônimo">
    <!-- MATERIALIZE CDN CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <!-- MENU MOBILE -->
        <ul class="sidenav" id="menu-mobile">
            <li><a href="#home" class="sidenav-close">Home</a></li>
            <li><a href="#sobre" class="sidenav-close">Sobre o Boa Forma</a></li>
            <li><a href="#servicos" class="sidenav-close">Serviços</a></li>
            <li><a href="#unidades" class="sidenav-close">Unidades</a></li>
            <li><a href="#contato" class="sidenav-close">Contato</a></li>
        </ul>
        <!-- FIM DO MENU MOBILE -->
        <!-- MENU DESKTOP -->
        <div class="navbar-fixed">
            <nav class="navbar z-depth-0">
                <div class="nav-wrapper container">
                    <!-- TÍTULO ESCONDIDO -->
                    <h1 class="logo_text">Centro Boa Forma - Se espaço de saúde</h1>
                    <!-- FIM DO TÍTULO ESCONDIDO -->
                    <!-- LOGO -->
                    <a href=""><img class="logo_img" src="img/logo.png" alt="logo da empresa"></a>
                    <!-- FIM DA LOGO -->
                    <ul class="ul_menu right light hide-on-med-and-down">
                        <!-- ITENS DO MENU -->
                        <li><a href="#home">Home</a></li>
                        <li><a href="#sobre">Sobre o Boa Forma</a></li>
                        <li><a href="#servicos">Serviços</a></li>
                        <li><a href="#unidades">Unidades</a></li>
                        <li><a href="#contato">Contato</a></li>
                        <!-- FIM DOS ITENS -->
                    </ul>
        <!-- FIM DO MENU DESKTOP -->
                    <!-- ÍCONE MENU -->
                    <a href="#" data-target="menu-mobile" class="hide-on-large-only right sidenav-trigger button-collapse"><i class="material-icons">menu</i></a>
                    <!-- FIM DO ÍCONE MENU -->
                </div>
            </nav>
        </div>
    </header>
    <!-- FIM DO HEADER -->
    <!-- SECTION HOME -->
    <section class="home bloco scrollSpy" id="home">
        <div class="row container banner">
            <div class="col s12 center">
                <!-- TÍTULO EXIBIDO -->
                <h2 class="white-text">O melhor treinamento funcional da região</h2>
                <!-- PARAGRAFO EXIBIDO -->
                <p class="white-text light">Um novo conceito em prevenção, promoção e reabilitação da saúde para quem busca melhora do condicionamento e emagrecimento, além de ser divertido e desafiado. Quer experimentar?</p>
                <!-- FIM DO PARAGRAFO -->
                <div class="row">
                    <a href="#sobre" class="btn btn-large blue-color">Sobre nós</a>
                    <a href="#contato" class="btn btn-large white black-text">Contato</a>
                </div>
            </div>
        </div>
    </section>
    <!-- FIM DO SECTION HOME -->
    <!-- SECTION SOBRE -->
    <section class="sobre bloco scrollSpy" id="sobre">
        <div class="row container">
            <div class="col s12 center">
                <!-- TÍTULO DO SOBRE -->
                <h2 class="light titulo">Sobre o Boa Forma</h2>
            </div>
            <div class="col s12 l6">
                <!-- TEXTO DO SOBRE -->
                <p class="light">O Centro Boa Forma chegou a Uberaba e região trazendo um novo conceito em prevenção, promoção e reabilitação da saúde localizada no centro da cidade, conta com fácil estacionamento, salas amplas e climatizadas, ambiente confortável e seguro aos seus usuários. Suas instalações foram projetadas e equipadas sob medida, dentro dos padrões de acessibilidade para acolher principalmente pessoas com limitações funcionais. O centro dispõe de uma equipe profissional qualificada e com experiência no mercado, prezando sempre por tratamentos individualizados e baseados em evidências científicas.</p>
            </div>
            <!-- FIM DO TEXTO DO SOBRE -->
            <!-- INÍCIO DO SLIDER DO SOBRE -->
            <div class="col s12 l6">
                <div class="carousel carousel-slider">
                    <a href="#" class="carousel-item"><img src="img/banner-01.jpg" alt="exterior loja"></a>
                    <a href="#" class="carousel-item"><img src="img/banner-02.jpg" alt="interior loja clientes exercitando"></a>
                    <a href="#" class="carousel-item"><img src="img/banner-03.jpg" alt="interior loja área musculação"></a>
                </div>
            </div>
            <!-- FIM DO SLIDER DO SOBRE -->
        </div>
        <!-- MISSÃO - VISÃO - VALORES -->
        <div class="row blue-logo missao">
            <div class="container">
                <!-- MISSÃO -->
                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">directions_run</i></span>
                    <h3 class="light">Missão</h3>
                    <p class="light">Promover a saúde e bem estar dos clientes com ações de prevenção, promoção e reabilitação, através de tratamentos eficazes e humanizados em Fisioterapia e suas vertentes.</p>
                </article>
                <!-- FIM DO MISSÃO -->
                <!-- VISÃO -->
                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">visibility</i></span>
                    <h3 class="light">Visão</h3>
                    <p class="light">Tornar-se referência no cenário estadual, buscando a excelência dos serviços prestados, além de promover o desenvolvimento técnico-científico de sua equipe e da sociedade.</p>
                </article>
                <!-- FIM DO VISÃO -->
                <!-- VALORES -->
                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">grade</i></span>
                    <h3 class="light">Valores</h3>
                    <ul class="light">
                        <li>- Agir com ética frente aos clientes e colaboradores</li>
                        <li>- Tornar o ambiente de trabalho o mais familiar possível</li>
                        <li>- Priorizar a qualidade e excelência do atendimento, valorizando e qualificando a equipe.</li>
                    </ul>
                </article>
                <!-- FIM DO VALORES -->
            </div>
        </div>
        <!-- FIM DO MISSÃO - VISÃO - VALORES -->
    </section>
    <!-- FIM DO SECTION SOBRE -->
    <!-- INÍCIO DA SECTION SERVIÇOS -->
    <section class="servicos bloco scrollSpy" id="servicos">
        <div class="row container">
            <div class="col s12 center">
                <!-- TÍTULO SERVIÇOS -->
                <h2 class="light titulo white-text">Serviços</h2>
                <!-- TEXTO DOS SERVIÇOS -->
                <p class="light paragrafo white-text">Suas instalações foram projetadas e equipadas sob medida, dentro dos padrões de acessibilidade, para acolher principalmente pessoas com limitações funcionais. A clínica dispõe de uma equipe profissional qualificada e com experiência comprovada no mercado, prezando sempre por tratamentos individualizados e baseados em evidências científicas.</p>
                <!-- FIM DO TEXTO DOS SERVIÇOS -->
            </div>
        </div>
        <!-- ESPAÇO DOS CARDS -->
        <div class="row container">
        <!-- CARD DO PRIMEIRO SERVIÇO -->
            <article class="col s12 m6 l3">
                <div class="card">
                    <!-- IMAGEM DO CARD -->
                    <div class="card-image">
                        <img src="img/pilates.jpg" alt="Exercício de Pilates">
                        <!-- BOTÃO DO CARD -->
                        <a href="#pilates-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger"><i class="material-icons">more_horiz</i></a>
                    </div>
                    <!-- CONTEÚDO DO CARD -->
                    <div class="card-content">
                        <h3 class="card-title">Pilates</h3>
                        <p class="p_card light">Pilates é um método de controle muscular desenvolvido por Joseph Pilates...</p>
                    </div>
                </div>
            </article>
            <!-- FIM DO PRIMEIRO CARD DO SERVIÇO -->
            <!-- MODAL DO PRIMEIRO CARD -->
            <div class="modal" id="pilates-modal">
                <div class="modal-content">
                    <h5 class="light">O que é Pilates?</h5>
                    <p class="light black-text">O Pilates é um método de exercício físico e alongamento que utiliza o peso do próprio corpo na sua execução. É uma técnica de reeducação do movimento que visa trabalhar o corpo todo, trazendo equilíbrio muscular e mental.</p>
                    <h5 class="light">Quais os benefícios do Pilates?</h5>
                    <ul class="collection">
                        <li class="collection-item">Alongar, tonificar e definir a musculatura sem exageros;</li>
                        <li class="collection-item">Melhorar a postura;</li>
                        <li class="collection-item">Tonificar a musculatura profunda do abdômen;</li>
                        <li class="collection-item">Prevenir e recuperar lesões;</li>
                        <li class="collection-item">Reduzir o "stress" e aliviar as tensões;</li>
                        <li class="collection-item">Deixar sua coluna mais forte e flexível;</li>
                        <li class="collection-item">Melhorar a área de movimento das articulações;</li>
                        <li class="collection-item">Melhorar a circulação sanguínea;</li>
                        <li class="collection-item">Aumentar a coordenação e o equilíbrio;</li>
                        <li class="collection-item">Corrigir sobrecargas e alinhar os músculos;</li>
                        <li class="collection-item">Melhorar a mobilidade e a agilidade;</li>
                        <li class="collection-item">Complementar o seu treino esportivo;</li>
                        <li class="collection-item">Melhorar o visual de seu corpo e a sua auto-estima.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a class="btn blue-logo modal-action modal-close">Sair</a>
                </div>
            </div>
            <!-- FIM DO MODAL DO PRIMEIRO CARD -->
            <!-- CARD DO SEGUNDO SERVIÇO -->
            <article class="col s12 m6 l3">
                <div class="card">
                    <!-- IMAGEM DO CARD -->
                    <div class="card-image">
                        <img src="img/nutricao.jpg" alt="Exercício de Nutrição">
                        <!-- BOTÃO DO CARD -->
                        <a href="#nutricao-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger"><i class="material-icons">more_horiz</i></a>
                    </div>
                    <!-- CONTEÚDO DO CARD -->
                    <div class="card-content">
                        <h3 class="card-title">Nutrição</h3>
                        <p class="p_card light">Ele planeja, administra e coordena programas de alimentação e nutrição em empresas, escolas...</p>
                    </div>
                </div>
            </article>
            <!-- FIM DO SEGUNDO CARD DO SERVIÇO -->
            <!-- MODAL DO SEGUNDO CARD -->
            <div class="modal" id="nutricao-modal">
                <div class="modal-content">
                    <h5 class="light">Qual é a importância da Nutrição?</h5>
                    <p class="light black-text">Seja por um estilo de vida saudável ou para eliminar peso, a preocupação com os alimentos é constante na rotina das pessoas. Por isso é importante saber comer e dar relevância ao que se come. Uma nutrição adequada pode prevenir doenças e tornar a vida mais saudável.</p>
                    <h5 class="light">Quais os benefícios da Nutrição?</h5>
                    <ul class="collection">
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a class="btn blue-logo modal-action modal-close">Sair</a>
                </div>
            </div>
            <!-- FIM DO MODAL DO SEGUNDO CARD -->
            <!-- CARD DO TERCEIRO SERVIÇO -->
            <article class="col s12 m6 l3">
                <div class="card">
                    <!-- IMAGEM DO CARD -->
                    <div class="card-image">
                        <img src="img/fisioterapia.jpg" alt="Exercício de Fisioterapia">
                        <!-- BOTÃO DO CARD -->
                        <a href="#fisioterapia-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger"><i class="material-icons">more_horiz</i></a>
                    </div>
                    <!-- CONTEÚDO DO CARD -->
                    <div class="card-content">
                        <h3 class="card-title">Fisioterapia</h3>
                        <p class="p_card light">O fisioterapeuta trata e previne doenças e lesões, empregando técnicas...</p>
                    </div>
                </div>
            </article>
            <!-- FIM DO TERCEIRO CARD DO SERVIÇO -->
            <!-- MODAL DO TERCEIRO CARD -->
            <div class="modal" id="fisioterapia-modal">
                <div class="modal-content">
                    <h5 class="light">Qual é a importância da Fisioterapia?</h5>
                    <p class="light black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis neque turpis, eu sagittis sapien porta at. Proin sed gravida ligula. Sed lacus massa, dictum in rhoncus ut, dapibus vitae ex. Vivamus dapibus porttitor urna at consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed ornare ipsum. Praesent consequat euismod quam id pellentesque. Aliquam ut turpis ac leo mollis ornare non ut massa. Pellentesque malesuada, purus ut viverra tincidunt, ante sapien gravida arcu, quis euismod felis augue ut purus.</p>
                    <h5 class="light">Quais os benefícios da Fisioterapia?</h5>
                    <ul class="collection">
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                    </ul>          
                </div>
                <div class="modal-footer">
                    <a class="btn blue-logo modal-action modal-close">Sair</a>
                </div>
            </div>
            <!-- FIM DO MODAL DO TERCEIRO CARD -->
            <!-- CARD DO QUARTO SERVIÇO -->
            <article class="col s12 m6 l3">
                <div class="card">
                    <!-- IMAGEM DO CARD -->
                    <div class="card-image">
                        <img src="img/funcional.jpg" alt="Exercício Funcionais">
                        <!-- BOTÃO DO CARD -->
                        <a href="#funcional-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger"><i class="material-icons">more_horiz</i></a>
                    </div>
                    <!-- CONTEÚDO DO CARD -->
                    <div class="card-content">
                        <h3 class="card-title">Funcional</h3>
                        <p class="p_card light">O treinamento funcional é um método de trabalho ainda mais dinâmico...</p>
                    </div>
                </div>
            </article>
            <!-- FIM DO QUARTO CARD DO SERVIÇO -->
            <!-- MODAL DO QUARTO CARD -->
            <div class="modal" id="funcional-modal">
                <div class="modal-content">
                    <h5 class="light">Qual é a importância dos Exercícios Funcionais?</h5>
                    <p class="light black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis neque turpis, eu sagittis sapien porta at. Proin sed gravida ligula. Sed lacus massa, dictum in rhoncus ut, dapibus vitae ex. Vivamus dapibus porttitor urna at consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed ornare ipsum. Praesent consequat euismod quam id pellentesque. Aliquam ut turpis ac leo mollis ornare non ut massa. Pellentesque malesuada, purus ut viverra tincidunt, ante sapien gravida arcu, quis euismod felis augue ut purus.</p>
                    <h5 class="light">Quais os benefícios dos Exercícios Funcionais?</h5>
                    <ul class="collection">
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                        <li class="collection-item">Maecenas gravida eleifend lectus, vel tempus sapien dignissim euismod. Fusce nec lobortis diam;</li>
                    </ul>          
                </div>
                <div class="modal-footer">
                    <a class="btn blue-logo modal-action modal-close">Sair</a>
                </div>
            </div>
            <!-- FIM DO MODAL DO QUARTO CARD -->
            <!-- FIM DOS ESPAÇOS DOS CARDS -->
            <!-- BOTÃO QUADRO DE HORÁRIOS -->
            <div class="row center">
                <a href="#horario-modal" class="btn btn-large blue-logo btn-horario modal-trigger"><i class="material-icons left">timer</i>Quadro de Horários</a>
            </div>
            <!-- MODAL QUADRO DE HORÁRIOS -->
            <div class="modal" id="horario-modal">
                <div class="modal-content">
                    <h5 class="light">Quadro de horários</h5>
                    <ul class="tabs">
                        <li class="tab col s3"><a href="#tabela-pilates">Pilates</a></li>
                        <li class="tab col s3"><a href="#tabela-musculacao">Musculação</a></li>
                        <li class="tab col s3"><a href="#tabela-fitness">Fitness</a></li>
                        <li class="tab col s3"><a href="#tabela-artes-marciais">Artes Marciais</a></li>
                    </ul>
                    <!-- TABELA PILATES -->
                    <table class="striped responsive-table" id="tabela-pilates">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Segunda - Feira</th>
                                <th>Terça - Feira</th>
                                <th>Quarta - Feira</th>
                                <th>Quinta - Feira</th>
                                <th>Sexta - Feira</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>09:00 - 11:00</td>
                                <td>Pilates</td>
                                <td></td>
                                <td>Pilates</td>
                                <td></td>
                                <td>Pilates</td>
                                <td></td>
                                <td>Pilates</td>
                            </tr>
                            <tr>
                                <td>14:00 - 16:00</td>
                                <td></td>
                                <td>Pilates</td>
                                <td></td>
                                <td>Pilates</td>
                                <td></td>
                                <td>Pilates</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>19:00 - 21:00</td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- FIM DA TABELA PILATES -->
                    <!-- INÍCIO DA TABELA MUSCULAÇÃO -->
                    <table class="striped responsive-table" id="tabela-musculacao">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Segunda - Feira</th>
                                <th>Terça - Feira</th>
                                <th>Quarta - Feira</th>
                                <th>Quinta - Feira</th>
                                <th>Sexta - Feira</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>05:00 - 23:00</td>
                                <td>Musculação</td>
                                <td>Musculação</td>
                                <td>Musculação</td>
                                <td>Musculação</td>
                                <td>Musculação</td>
                                <td>Musculação</td>
                            </tr>
                            <tr>
                                <td>05:00 - 13:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Musculação</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- FIM DA TABELA MUSCULAÇÃO -->
                    <!-- INÍCIO DA TABELA FITNESS -->
                    <table class="striped responsive-table" id="tabela-fitness">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Segunda - Feira</th>
                                <th>Terça - Feira</th>
                                <th>Quarta - Feira</th>
                                <th>Quinta - Feira</th>
                                <th>Sexta - Feira</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>07:00 - 09:00</td>
                                <td></td>
                                <td>Fitness</td>
                                <td></td>
                                <td>Fitness</td>
                                <td></td>
                                <td>Fitness</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>17:00 - 19:00</td>
                                <td>Fitness</td>
                                <td></td>
                                <td>Fitness</td>
                                <td></td>
                                <td>Fitness</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- FIM DA TABELA FITNESS -->
                    <!-- INÍCIO DA TABELA ARTES MARCIAIS -->
                    <table class="striped responsive-table" id="tabela-artes-marciais">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Segunda - Feira</th>
                                <th>Terça - Feira</th>
                                <th>Quarta - Feira</th>
                                <th>Quinta - Feira</th>
                                <th>Sexta - Feira</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>05:00 - 07:00</td>
                                <td>Artes Marciais</td>
                                <td></td>
                                <td>Artes Marciais</td>
                                <td></td>
                                <td>Artes Marciais</td>
                                <td></td>
                                <td>Artes Marciais</td>
                            </tr>
                            <tr>
                                <td>12:00 - 14:00</td>
                                <td></td>
                                <td>Artes Marciais</td>
                                <td></td>
                                <td>Artes Marciais</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>21:00 - 23:00</td>
                                <td>Artes Marciais</td>
                                <td>Artes Marciais</td>
                                <td>Artes Marciais</td>
                                <td>Artes Marciais</td>
                                <td>Artes Marciais</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- FIM DA TABELA ARTES MARCIAIS -->
                </div>
                <div class="modal-footer">
                    <a class="btn blue-logo modal-action modal-close">Sair</a>
                </div>
            </div>
        </div>
    </section>
    <!-- FIM DA SECTION SERVIÇOS -->
    <!-- INÍCIO DA SECTION UNIDADES -->
    <section class="unidades bloco scrollspy" id="unidades">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="light titulo white-text">Unidades</h2>
                <p class="light paragrafo white-text">Para oferecer serviços de acordo com a realidade e necessidade de cada região do Brasil, o centro Boa Forma possui unidades em quatro estados. Com atividades permanentes os espaços físicos buscam oferecer facilidade de acesso e atendimento de qualidade.</p>
            </div>
        </div>
        <!-- INÍCIO DOS CARDS -->
        <div class="row container">
            <!-- INÍCIO DO CARD DA 1ª UNIDADE -->
            <article class="col s12 l6">
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="img/bh.jpg" alt="Unidade de Belo Horizonte">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h3 class="card-title light">Belo Horizonte</h3>
                            <p class="light black-text">
                                <i class="material-icons left">phone</i>(31) 3399 4433 <br>
                                <i class="material-icons left">email</i>bh@boaforma.com <br>
                                <i class="material-icons left">location_on</i>Av Cristiano, 100    
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            <!-- FIM DO CARD DA 1ª UNIDADE -->
            <!-- INÍCIO DO CARD DA 2ª UNIDADE -->
            <article class="col s12 l6">
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="img/salvador.jpg" alt="Unidade de Salvador">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h3 class="card-title light">Salvador</h3>
                            <p class="light black-text">
                                <i class="material-icons left">phone</i>(41) 4499 8811 <br>
                                <i class="material-icons left">email</i>ba@boaforma.com <br>
                                <i class="material-icons left">location_on</i>Av Salvador, 100    
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            <!-- FIM DO CARD DA 2ª UNIDADE -->
            <!-- INÍCIO DO CARD DA 3ª UNIDADE -->
            <article class="col s12 l6">
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="img/sp.jpg" alt="Unidade de São Paulo">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h3 class="card-title light">São Paulo</h3>
                            <p class="light black-text">
                                <i class="material-icons left">phone</i>(11) 4119 4811 <br>
                                <i class="material-icons left">email</i>sp@boaforma.com <br>
                                <i class="material-icons left">location_on</i>Av Paulista, 100    
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            <!-- FIM DO CARD DA 3ª UNIDADE -->
            <!-- INÍCIO DO CARD DA 4ª UNIDADE -->
            <article class="col s12 l6">
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="img/rj.jpg" alt="Unidade do Rio de Janeiro">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h3 class="card-title light">Rio de Janeiro</h3>
                            <p class="light black-text">
                                <i class="material-icons left">phone</i>(21) 2299 2211 <br>
                                <i class="material-icons left">email</i>rj@boaforma.com <br>
                                <i class="material-icons left">location_on</i>Av Ipanema, 100    
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            <!-- FIM DO CARD DA 4ª UNIDADE -->
        </div>
    </section>
    <!-- FIM DA SECTION UNIDADES -->
    <!-- INÍCIO DA SECTION CONTATO -->
    <section class="contato bloco scrollspy" id="contato">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="titulo light">Contato</h2>
            </div>
            <div class="col s12 l4 hide-on-med-only">
                <div class="mapa transparent">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120161.30401140783!2d-47.949532950000005!3d-19.753423199999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bad03162627637%3A0x8e83d9edb0f8e15c!2sUberaba%2C%20MG!5e0!3m2!1spt-BR!2sbr!4v1605153251824!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="informacoes white-text">
                    <h4>Redes Sociais</h4>
                    <p class="light">Fique por dentro das novidades, receba dicas, ou simplesmente mostre ao mundo que você faz parte desse projeto sensacional!!</p>
                    <a href="https://www.facebook.com" class="btn-floating blue-logo"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.twitter.com" class="btn-floating blue-logo"><i class="fa fa-twitter"></i></a>
                    <h4>Endereço</h4>
                    <p class="light">Av Leopoldino de Oliveira, 2300 <br>
                    Centro, Uberaba - Minas Gerais</p>
                    <h4>Contatos</h4>
                    <p class="light">(34) 3313 - 3313 <br>
                    (34) 3322 - 9900 <br>
                    (34) 3338 - 0099</p>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="formulario white black-text">
                    <h4>Fale Conosco</h4>
                    <p class="light">Dúvidas, criticas ou sujestões? Entre em contato conosco, seu feedback é muito importante!</p>
                    <form action="enviar-email.php" method="post">
                        <div class="input-field">
                            <input type="text" id="nome" name="nome">
                            <label for="nome">Seu nome:</label>
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" id="email">
                            <label for="email">Seu E-mail:</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="assunto" id="assunto">
                            <label for="assunto">Assunto:</label>
                        </div>
                        <div class="input-field">
                            <textarea name="menssagem" id="menssagem" cols="30" rows="10" class="materialize-textarea"></textarea>
                            <label for="menssagem">Menssagem:</label>
                        </div>
                        <button type="submit" class="btn blue-logo">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- FIM DA SECTION CONTATO -->
    <!-- INÍCIO DA SECTION DEPOIMENTOS -->
    <section>
        <div class="depoimentos blue-logo">
            <div class="row container">
                <div class="col s12 center">
                    <h2 class="titulo white-text light">Depoimentos</h2>
                </div>
                <div class="col s12 m4 center">
                    <img src="img/depo1.jpg" alt="Foto usuário Felipe Souza depoimento número um" class="circle responsive-img">
                    <p class="light white-text">"Conheci o treinamento funcional e a metodologia do Centro Boa Forma por indicação de um amigo. Excelentes profissionais e super atenciosos!"</p>
                    <h4 class="light white-text">Felipe Souza</h4>
                    <p class="white-text"><i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i></p>
                </div>
                <div class="col s12 m4 center">
                    <img src="img/depo2.jpg" alt="Foto usuário Pedro Gonçalves depoimento número dois" class="circle responsive-img">
                    <p class="light white-text">"Treinar com motivação e satisfação pelos resultados obtidos são os motivos que me conquistaram e me mantém no Centro Boa Forma!"</p>
                    <h4 class="light white-text">Pedro Gonçalves</h4>
                    <p class="white-text"><i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i></p>
                </div>
                <div class="col s12 m4 center">
                    <img src="img/depo3.jpg" alt="Foto usuário Bruna Valéria depoimento número três" class="circle responsive-img">
                    <p class="light white-text">"Gostei muito da oficina e das aulas, superou minhas expectativas. A empresa e os treinamentos foram ótimos!"</p>
                    <h4 class="light white-text">Bruna Valéria</h4>
                    <p class="white-text"><i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i></p>
                </div>
            </div>
        </div>
    </section>
    <!-- FIM DA SECTION DEPOIMENTOS -->
    <!-- INÍCIO DO RODAPÉ -->
    <footer class="rodape">
        <div class="row container center">
            <img src="img/logo.png" alt="Logo Institucional Empresa Boa Forma" class="logo_img">
            <p class="light white-text">&copy; Centro Boa Forma 2020 - Todos os direitos reservados</p>
        </div>
    </footer>
    <!-- FIM DO RODAPÉ -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- JAVASCRIPT MATERIALIZE CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- JAVASCRIPT CUSTOM -->
    <script src="js/custom.js"></script>
    <!-- RETORNO DE MENSAGEM DE ENVIO DE CONTATO (VIA FORMULÁRIO) -->
    <?php
    if (isset($_GET['status'])):
        if ($_GET['status'] == "sucesso"):
            echo "<script>Materialize.toast('Enviado com sucesso!', 4000);</script>";
        else:
            echo "<script>Materialize.toast('Erroa ao enviar!', 4000); <script>";
        endif;
    endif;
    ?>
</body> 
</html>