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
                        <li class="nav-item d-none d-lg-block d-xl-block">
                            <a class="nav-link" href="/entrar-contato">
                                <i class="fa d-inline fa-lg fa-envelope-o"></i> Contato
                            </a>
                        </li>
                        <li class="nav-item d-block d-sm-none text-left">
                            <a class="nav-link" href="/entrar-contato">
                                <i class="fa d-inline fa-lg fa-envelope-o"></i> Contato
                            </a>

                            <a class="nav-link" href="/orcamento">
                                <i class="fa d-inline fa-lg fa-folder"></i> Meus orçamento
                            </a>
                            
                            <a class="nav-link" href="/ordemservico">
                                <i class="fa d-inline fa-lg fa-comments-o"></i> Meus chamado
                            </a>
                            
                            @if(Session::has('client_name')))
                            <a class="nav-link" href="/cliente/logout">
                                <i class="fa d-inline fa-lg fa-lock"></i> Sair
                            </a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
            <a href="/orcamento" class="btn navbar-btn ml-2 text-white btn-secondary-site d-none d-lg-block d-xl-block">
                <i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp; Solicite um orçamento
            </a>
        </nav>
        
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