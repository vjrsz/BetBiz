@extends('DashboardAdmin.templates.master')
@section('title', 'Validar Agente')
@section('content')

    @include('DashboardAdmin.includes.header')
    <section>
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-8 table_v1">
                    <div class="row table_one">

                        <div class="col-lg-12">
                            <p>Busque Por Agente / Geral</p>
                        </div>

                        <div class="row seach_table">
                            <div class="col-lg-4">
                                <input type="" placeholder="Filtro pesquisa..." name="">
                            </div>

                            <div class="col-lg-6"></div>

                            <div class="col-lg-2">
                                <button>Agentes <i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <p>Listas de Clientes</p>
                        </div>

                        <div class="table_one_inter table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Agente</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Código</th>
                                        <th scope="col">Telefone</th>
                                        <th scope="col">Pix</th>
                                        <th scope="col">X bilhetes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">A001</th>
                                        <td>Wanderson Lima</td>
                                        <td>C0000</td>
                                        <td>(62) 9 9999-9999</td>
                                        <td>(62) 9 9999-9999</td>
                                        <td>8758</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="col-lg-12 table-v1">
                            <p>Listas de Agentes</p>
                        </div>

                        <div class="table_one_inter table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Agente</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Telefone</th>
                                        <th scope="col">Pix</th>
                                        <th scope="col">#Código</th>
                                        <th scope="col">X bilhetes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">A001</th>
                                        <td>Wanderson Lima</td>
                                        <td>(62) 9 9999-9999</td>
                                        <td>(62) 9 9999-9999</td>
                                        <td>50</td>
                                        <td>8758</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-12 login_footer">
                        <p>Copyright ©2022 betfair </p>
                    </div>
                </div>


                <div class="col-lg-4 coluna_table">
                    <h3>Evolução de Bilhetes Ativos</h3>

                    <div class="row">
                        <div class="col-lg-12 perfil">
                            <div class="row">
                                <img src="{{ asset('assets_admin/img/grafico.svg') }}">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- MODAL V1 -->
    <div class="modal fade" id="modal_v2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal_v2">
                    <h2>Valor que deseja resgatar?</h2>
                    <input type="" placeholder="R$25,00" name="">
                    <button>Solicitar resgate</button>
                    <p>*Em até 24hrs nosso time irá altorizar sua solicitação</p>
                </div>
            </div>
        </div>
    </div>



    <!-- MODAL V2 -->
    <div class="modal fade" id="modal_v3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4 modal_v3">
                            <img src="{{ asset('assets_admin/img/perfil.png') }}">
                            <h3>Rafael (C0000)</h3>
                            <p>Seu agente, Roberto (A0000)</p>
                        </div>
                        <div class="col-lg-8 modal_v4">
                            <h2>Alterar Informações</h2>
                            <input type="" placeholder="Rafael Cunha" name="">
                            <input type="" placeholder="E-mail" name="">
                            <input type="" placeholder="Chave PIX" name="">
                            <input type="" placeholder="Senha" name="">
                            <button>Salvar perfil</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
