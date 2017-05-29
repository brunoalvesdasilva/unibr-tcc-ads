<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css?{{time()}}" rel="stylesheet" type="text/css">        
    </head>
    <body>
        
        <div class="layout-geral">
            
            <div class="layout-barra">
                
                <div class="component-perfil">
                    
                    <div class="media">
                        <div class="media-left">
                            <a href="#"  class="">
                                <img class="media-object img-circle" src="/img/1/avatar.png" alt="Clique para mudar a sua foto">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Pedro pedroso</h4>
                            pedro@pedroso.com.br
                        </div>
                    </div>
                    
                </div>
                
                <nav class="component-menu">
                <ul>
                    <li><a href="/"><i class="icon icon-home"></i> Home</a></li>
                    <li><a href="/chamado"><i class="icon icon-bubbles4"></i> Chamados</a></li>
                    <li><a href="/movimentacao"><i class="icon icon-files-empty"></i> Movimentações</a></li>
                    <li><a href="/contratos"><i class="icon icon-folder"></i> Contratos</a></li>
                    <li><a href="/conta"><i class="icon icon-file-text"></i> Contas</a></li>
                    <li><a href="/clientes"><i class="icon icon-users"></i> Clientes</a></li>
                    <li><a href="/fornecedores"><i class="icon icon-users"></i> Fornecedores</a></li>
                    <li><a href="/produto"><i class="icon icon-box-add"></i> Estoque</a></li>
                    <li><a href="/servico"><i class="icon icon-hammer"></i> Serviços</a></li>
                    <li><a href="/departamento"><i class="icon icon-office"></i> Departamentos</a></li>
                    <li><a href="/usuario"><i class="icon icon-user-plus"></i> Usuários</a></li>

                </ul>
                </nav>
            
            </div>
            
            <div class="layout-conteudo">
                @yield('content')
            </div>
        
        </div>
        
        
        <script src="/js/app.js?{{time()}}" type="text/javascript"></script>
        <script src="/js/intro.js?{{time()}}" type="text/javascript"></script>
    </body>
</html>
