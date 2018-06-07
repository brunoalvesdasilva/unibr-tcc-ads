@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Edição de clientes</h1>
    </div>
<div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/clientes/{{$clientes->cd_pessoa}}" class="btn btn-default">Voltar</a>
            <a href="/clientes/help" class="btn btn-default">Ajuda</a>
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
        <form class="form-horizontal" action="/clientes/{{$clientes->cd_pessoa}}" method="POST">
            <div class="form-group">
                <label for="ic_tipo_pessoa_fisica_juridica" class="col-md-4 control-label">Tipo</label>
                <div class="col-md-6">
                    <label class="radio-inline">
                        <input type="radio"  name="ic_tipo_pessoa_fisica_juridica" value="fisica" required {{checkSe('fisica', $clientes->ic_tipo_pessoa_fisica_juridica)}} /> Fisica
                    </label>
                    <label class="radio-inline">
                        <input type="radio"  name="ic_tipo_pessoa_fisica_juridica" value="juridica" required {{checkSe('juridica', $clientes->ic_tipo_pessoa_fisica_juridica)}} /> Juridica
                    </label>
                </div>
            <div class="form-group">
                <label for="nm_pessoa" class="col-md-4 control-label">Nome :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="nm_pessoa" value="{{$clientes->nm_pessoa}}" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_razao_social" class="col-md-4 control-label">Razão Social :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_razao_social" name="nm_razao_social" value="{{$clientes->nm_razao_social}}" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_email" class="col-md-4 control-label">E-mail :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_email" name="nm_email" value= "{{$clientes->nm_email}}" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_senha" class="col-md-4 control-label">Senha :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_senha" name="nm_senha" value=="{{$clientes->nm_senha}}" />
                </div>
            </div>
            <div class="form-group">
                <label for="ic_cliente_fornecedor" class="col-md-4 control-label">Tipo</label>
                <div class="col-md-6">
                    <label class="radio-inline">
                        <input type="radio"  name="ic_cliente_fornecedor" value="cliente" required {{checkSe('cliente', $clientes->ic_cliente_fornecedor)}} /> Cliente
                    </label>
                    <label class="radio-inline">
                        <input type="radio"  name="ic_cliente_fornecedor" value="fornecedor" required {{checkSe('fornecedor', $clientes->ic_cliente_fornecedor)}} /> Fornecedor
                    </label>
                </div>
            <div class="form-group">
                <label for="cd_cnpj" class="col-md-4 control-label">Nº Cnpj :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_cnpj" name="cd_cnpj" value="{{$clientes->cd_cnpj}}" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_cpf" class="col-md-4 control-label">Nº CPF :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_cpf" name="cd_cpf" value="{{$clientes->cd_cpf}}" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_inscricao" class="col-md-4 control-label">Nº Inscrição Estadual :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_inscricao" name="cd_inscricao" value="{{$clientes->cd_inscricao}}" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_endereco" class="col-md-4 control-label">Endereço :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_endereco" name="nm_endereco" value="{{$clientes->nm_endereco}}" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_complemento" class="col-md-4 control-label">Complemento :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_complemento" name="nm_complemento" value="{{$clientes->nm_complemento}}" />
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
                    <input type="text" class="form-control" id="cd_cidade_endereco" name="nm_cidade" value="{{$clientes->nm_cidade}}" />
                </div>
            </div>
            <div class="form-group">
                <label for="sg_estado" class="col-md-4 control-label">Estado :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" maxlength="2" id="sg_estado" name="sg_estado" value="{{$clientes->sg_estado}}" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_situacao_cadastral" class="col-md-4 control-label">Situação Cadastral :</label>
                <div class="col-md-6">
                    <label class="radio-inline">
                        <input type="radio"  name="nm_situacao_cadastral" value="Ativo" required {{checkSe('ativo', $clientes->nm_situacao_cadastral)}} /> Ativo
                    </label>
                    <label class="radio-inline">
                        <input type="radio"  name="nm_situacao_cadastral" value="Inativo" required {{checkSe('inativo', $clientes->nm_situacao_cadastral)}} /> Inativo
                    </label>
                </div>
            <div class="form-group">
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn btn-info">Editar</button>
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                </div>
            </div>
        </form>
        </div>
        </div>
    </div>
@stop