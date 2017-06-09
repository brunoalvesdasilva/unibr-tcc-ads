<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Autenticação</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css?{{time()}}" rel="stylesheet" type="text/css">        
    </head>
    <body>
        
        <div class="layout-logon">
        
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <div class="layout-conteudo">
                <div class="component-title">
                    <h1>Olá! Para continuar, digite o seu e-mail e senha</h1>
                </div>
            
                @if(Session::has('message'))
                    <div class="alert alert-warning">
                        {{ Session::get('message') }}
                    </div>
                @endif
                
                <form class="form-horizontal" action="/" method="POST">
                    <div class="form-group">
                        <label for="nm_email" class="col-md-4 control-label">E-mail</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control"  name="nm_email" placeholder="E-mail" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nm_senha" class="col-md-4 control-label">Senha</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control"  name="nm_senha" placeholder="Senha" required />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Autenticar</button>
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                        </div>
                    </div>
                </form>
                
            </div>
        
        </div>
        
        
        <script src="/js/app.js?{{time()}}" type="text/javascript"></script>
        <script src="/js/intro.js?{{time()}}" type="text/javascript"></script>
    </body>
</html>
