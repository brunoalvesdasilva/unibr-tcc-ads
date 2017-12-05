@extends('layout/site')
@section('content')
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="lead">Entre em contato conosco&nbsp;</p>
        
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
                    <form class="form" action="/entrar-contato" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nm_contato" placeholder="Digite o seu nome">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="nm_email_contato" placeholder="Digite o seu e-mail">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="ds_contato" placeholder="Digite sua mensagem"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary-site">Enviar</button>
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                    </form>
                </div>
                <div class="col-12 col-md-4 align-self-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2161.3942077898137!2d-46.39124043713969!3d-23.964772036863533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1spt-BR!2sbr!4v1512439888375" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@stop