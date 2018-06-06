<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="/css/bootstrap-4.0.0-beta.1.css?{{time()}}" type="text/css">
        <link rel="stylesheet" href="/css/theme.css?{{time()}}" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary" style="">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <i class="fa d-inline fa-lg fa-street-view"></i>
                    <b>SIG</b>
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
                    <ul class="navbar-nav" style="">
                        <li class="nav-item">
                            <a class="nav-link" href="/entrar-contato">
                                <i class="fa d-inline fa-lg fa-envelope-o"></i> Contato
                            </a>
                        </li>
                        <li class="nav-item d-block d-sm-none">
                            <a class="nav-link" href="/entrar-contato">
                                <i class="fa d-inline fa-lg fa-envelope-o"></i> Solicite um orçamento
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="/orcamento" class="btn navbar-btn ml-2 text-white btn-secondary-site d-none d-lg-block d-xl-block">
                <i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp; Solicite um orçamento
            </a>
        </nav>
        
        <div class="d-none d-lg-block d-xl-block">
        @if( rand(0,1) == 1 )
        <div class="py-5 gradient-overlay" style="background-image: url('/img/0/site-tecnico.png');">
            <div class="container py-5">
                <div class="row align-center">
                    <div class="col-md-12 text-white align-self-center">
                        <h1 class="display-3 mb-4">Projeto e Instalação</h1>
                        <p class="lead mb-5">Contamos com uma equipe de engenharia qualificada para seu projeto de climatização </p>
                        <a href="/projeto-e-instalacao" class="btn btn-lg mx-1 btn-secondary-site">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="py-5 gradient-overlay" style="background-image: url('/img/0/site-higiene.png');">
            <div class="container py-5">
                <div class="row align-center">
                    <div class="col-md-12 text-white align-self-center">
                        <h1 class="display-3 mb-4">A Melhor Higienização de Ar Condicionado</h1>
                        <p class="lead mb-5">Detalhes sobre a melhor higienização de ar condicionado</p>
                        <a href="/higienizacao" class="btn btn-lg mx-1 btn-secondary-site">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        </div>
        
        @yield('content')
        
        <!-- Rodapé -->
        <div class="py-5 bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-3 text-center">
                        <p>© SIG - All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="/js/jquery-3.2.1.slim.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>