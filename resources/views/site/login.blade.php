@extends('layout/site')
@section('content')
    <div class="py-5 bg-light">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                    @endif
                    
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-5">
                    <p class="lead">Já tem usuário&nbsp;</p>
                    <form class="form" action="/orcamento/login/autenticar" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Digite o seu e-mail">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="senha" placeholder="Digite o sua senha">
                        </div>
                        <button type="submit" class="btn btn-primary-site">Entrar</button>
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                    </form>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-5 offset-md-2">
                    <p class="lead">Não tem usuário&nbsp;</p>
                    <form class="form" action="/orcamento/login/cadastrar" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Digite o seu e-mail">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="senha" placeholder="Digite a sua senha">
                        </div>
                        <button type="submit" class="btn btn-primary-site">Cadastrar</button>
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop