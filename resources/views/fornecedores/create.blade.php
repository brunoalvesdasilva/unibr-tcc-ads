@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de fornecedores</h1>
    </div>
<div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/fornecedores" class="btn btn-default">Listagem</a>
            <a href="/fornecedores/help" class="btn btn-default">Ajuda</a>
        </div>
    </div>
    
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" action="/fornecedores" method="POST">
            <div class="form-group">
                <label for="ic_cliente_fornecedor" class="col-md-4 control-label">Tipo pessoa :</label>
                <label class="radio-inline">
                    <input type="radio" id="ic_cliente_fornecedor" name="ic_cliente_fornecedor" value="cliente"> Cliente
                </label>
                <label class="radio-inline">
                    <input type="radio"  id="ic_cliente_fornecedor" name="ic_cliente_fornecedor" value="fornecedor"> Fornecedor
                </label>
            </div>
            <div class="form-group">
                <label for="nm_pessoa" class="col-md-4 control-label">Nome :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_pessoa" name="nm_pessoa" placeholder="Nome fantasia" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_razao_social" class="col-md-4 control-label">Razão Social :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_razao_social" name="nm_razao_social" placeholder="Nome razão social" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_email" class="col-md-4 control-label">E-mail :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_email" name="nm_email" placeholder="E-mail" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_senha" class="col-md-4 control-label">Senha :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_senha" name="nm_senha" placeholder="Senha" />
                </div>
            </div>
            <div class="form-group">
                <label for="ic_tipo_pessoa_fisica_juridica" class="col-md-4 control-label">Tipo pessoa :</label>
                <label class="radio-inline">
                    <input type="radio" id="ic_tipo_pessoa_fisica_juridica" name="ic_tipo_pessoa_fisica_juridica" value="fisica"> Fisica
                </label>
                <label class="radio-inline">
                    <input type="radio"  id="ic_tipo_pessoa_fisica_juridica" name="ic_tipo_pessoa_fisica_juridica" value="juridica"> Juridica
                </label>
            </div>
            <div class="form-group">
                <label for="cd_cnpj" class="col-md-4 control-label">Nº Cnpj :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_cnpj" name="cd_cnpj" placeholder="Nº Cnpj" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_cpf" class="col-md-4 control-label">Nº CPF :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_cpf" name="cd_cpf" placeholder="Nº CPF" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_inscricao" class="col-md-4 control-label">Nº Inscrição Estadual :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_inscricao" name="cd_inscricao" placeholder="Nº I.E" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_endereco" class="col-md-4 control-label">Endereço :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_endereco" name="nm_endereco" placeholder="Endereço, nº" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_complemento" class="col-md-4 control-label">Complemento :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_complemento" name="nm_complemento" placeholder="Complemento" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_bairro" class="col-md-4 control-label">Bairro :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_bairro" name="nm_bairro" placeholder="Bairro" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_cidade" class="col-md-4 control-label">Cidade :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_cidade_endereco" name="nm_cidade" placeholder="Cidade" />
                </div>
            </div>
            <div class="form-group">
                <label for="sg_estado" class="col-md-4 control-label">Estado :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" maxlength="2" id="sg_estado" name="sg_estado" placeholder="Estado" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_situacao_cadastral" class="col-md-4 control-label">Situação Cadastral :</label>
                <label class="radio-inline">
                    <input type="radio" id="nm_situacao_cadastral" name="nm_situacao_cadastral" value="ATIVO"> Ativo
                </label>
                <label class="radio-inline">
                    <input type="radio"  id="nm_situacao_cadastral" name="nm_situacao_cadastral" value="INATIVO"> Inativo
                </label>
            </div>
            <div class="form-group">
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn btn-info">Cadastrar</button>
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                </div>
            </div>
        </form>
        </div>
        </div>
    </div>
@stop