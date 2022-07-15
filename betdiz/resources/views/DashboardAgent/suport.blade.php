@extends('DashboardAgent.templates.master')
@section('title', 'Suporte Cliente')
@section('content')
<section>
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-8 table_v1">
          @include('DashboardAgent.includes.header')


          <div class="row table_one table_two ">
            <div class="table_one_inter table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Data</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Fernandes Lima</th>
                    <td>25/05/2022</td>
                    <td>Não sei como funciona?</td>
                    <td type="button" data-bs-toggle="modal" data-bs-target="#modal_v2">Responder</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="col-lg-12 login_footer">
            <p>Copyright ©2022 betfair </p>
          </div>


        </div>


        <div class="col-lg-4 perfil">
          <div class="row perfil_v1">
            <div class="col-lg-2">
              <img type="button" data-bs-toggle="modal" data-bs-target="#modal_v3" src="{{asset('assets_agent/img/perfil.png')}}">
            </div>

            <div class="col-lg-10 mauto">
              <h2 type="button" data-bs-toggle="modal" data-bs-target="#modal_v3">Bem vindo, Rafael (A0000)</h2>
              <p>rafaeloficial@gmail.com</p>
            </div>
          </div>

          <div class="row perfil_v8">
            <div class="col-lg-8 mauto">
              <p>Limite de Crédito:</p>
            </div>

            <div class="col-lg-4">
              <p><b>R$650,00</b></p>
            </div>

            <div class="col-lg-8 mauto">
              <p>Limite Utilizado:</p>
            </div>

            <div class="col-lg-4">
              <p><b>00,00</b></p>
            </div>
          </div>


          <div class="row perfil_v7">
            <div class="col-lg-8 mauto">
              <p>Status atual do meu Perfil: <b>Bronze</b></p>
            </div>

            <div class="col-lg-4">
              <img src="{{asset('assets_agent/img/dourado.png')}}">
            </div>
          </div>


          <div class="row perfil_v6">

            <!-- COLUNA 01 -->
            <div class="col-lg-1">
              <img src="{{asset('assets_agent/img/msg.png')}}">
            </div>

            <div class="col-lg-11">
              <p>Cliente: Mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada.</p>
            </div>

          </div>

          <div class="row perfil_v6">

            <!-- COLUNA 01 -->
            <div class="col-lg-1">
              <img src="{{asset('assets_agent/img/msg.png')}}">
            </div>

            <div class="col-lg-11">
              <p>Cliente: Mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada.</p>
            </div>

          </div>

          <div class="row perfil_v6">

            <!-- COLUNA 01 -->
            <div class="col-lg-1">
              <img src="{{asset('assets_agent/img/msg.png')}}">
            </div>

            <div class="col-lg-11">
              <p>Cliente: Mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada.</p>
            </div>

          </div>


            <div class="row perfil_v5">
              <div class="col-lg-12">
                <img src="{{asset('assets_agent/img/banner.png')}}">
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
        <div class="modal-body modal_v5">
          <h2>Resposta ao cliente</h2>
          <p>Dúvida: Não consegui encontrar onde selecionar os bilhetes gostaria da sua ajuda para resoolver essa solução?</p>
          <textarea placeholder="Responder..."></textarea>
          <button>Responder</button>
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
              <img src="{{asset('assets_agent/img/perfil.png')}}">
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