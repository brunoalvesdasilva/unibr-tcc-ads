@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de fornecedoreses</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
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
                <label for="ic_tipo_pessoa" class="col-md-4 control-label">Tipo pessoa :</label>
                <label class="radio-inline">
                    <input type="radio" id="ic_tipo_pessoa" name="ic_tipo_pessoa" value="FISICA"> Fisica
                </label>
                <label class="radio-inline">
                    <input type="radio"  id="ic_tipo_pessoa" name="ic_tipo_pessoa" value="JURIDICA"> Juridica
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
                <label for="cd_cnpj_pessoa" class="col-md-4 control-label">Nº Cnpj :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_cnpj_pessoa" name="cd_cnpj_pessoa" placeholder="Nº Cnpj" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_cpf_pessoa" class="col-md-4 control-label">Nº CPF :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_cpf_pessoa" name="cd_cpf_pessoa" placeholder="Nº CPF" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_cpf_pessoa" class="col-md-4 control-label">Nº Inscrição Estadual :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_inscricao" name="cd_inscricao" placeholder="Nº I.E" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_endereco_pessoa" class="col-md-4 control-label">Endereço :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_endereco_pessoa" name="cd_cpf_pnm_endereco_pessoaessoa" placeholder="Endereço, nº" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_complemento_endereco" class="col-md-4 control-label">Complemento :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_complemento_endereco" name="nm_complemento_endereco" placeholder="Complemento" />
                </div>
            </div>
            <div class="form-group">
                <label for="nm_bairro_endereco" class="col-md-4 control-label">Bairro :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_bairro_endereco" name="nm_bairro_endereco" placeholder="Bairro" />
                </div>
            </div>
            <div class="form-group">
                <label for="cd_cidade_endereco" class="col-md-4 control-label">Cidade :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cd_cidade_endereco" name="cd_cidade_endereco" placeholder="Cidade" />
                </div>
            </div>
            <div class="form-group">
                <label for="sg_estado_endereco" class="col-md-4 control-label">Estado :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" maxlength="2" id="sg_estado_endereco" name="sg_estado_endereco" placeholder="Estado" />
                </div>
            </div>
            <div class="form-group">
                <label for="ic_situacao_cadastral" class="col-md-4 control-label">Situação Cadastral :</label>
                <label class="radio-inline">
                    <input type="radio" id="ic_situacao_cadastral" name="ic_situacao_cadastral" value="ATIVO"> Ativo
                </label>
                <label class="radio-inline">
                    <input type="radio"  id="ic_situacao_cadastral" name="ic_situacao_cadastral" value="INATIVO"> Inativo
                </label>
            </div>
            <div class="form-group">
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn btn-default">Cadastrar</button>
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                </div>

            </div>
        </form>
        </div>
        </div>
    </div>
@stop