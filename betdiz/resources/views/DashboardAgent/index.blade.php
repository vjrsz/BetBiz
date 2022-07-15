@extends('DashboardAgent.templates.master')
@section('title', 'Dashboard')
@section('content')
<section>
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-8 table_v1">
          @include('DashboardAgent.includes.header')

          <div class="row">
            <div class="col-sm-12 col-lg">
              <div class="row box_v1">
                <div class="col-lg-12 box_v2">
                  <img src="{{asset('assets_agent/img/icon01.png')}}">
                  <h3>100</h3>
                  <p>Clientes Cadastrados</p>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-lg">
              <div class="row box_v1">
                <div class="col-lg-12 box_v2">
                  <img src="{{asset('assets_agent/img/icon02.png')}}">
                  <h3>30</h3>
                  <p>Clientes Ativos (15d)</p>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-lg">
              <div class="row box_v1">
                <div class="col-lg-12 box_v2">
                  <img src="{{asset('assets_agent/img/icon03.png')}}">
                  <h3>60</h3>
                  <p>Clientes Ativos (30d)</p>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-lg">
              <div class="row box_v1">
                <div class="col-lg-12 box_v2">
                  <img src="{{asset('assets_agent/img/icon04.png')}}">
                  <h3>87</h3>
                  <p>Bilhetes Validos</p>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-lg">
              <div class="row box_v1">
                <div class="col-lg-12 box_v2">
                  <img src="{{asset('assets_agent/img/icon05.png')}}">
                  <h3>18</h3>
                  <p>Bilhetes Ativos</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row table_one table_two">
            <div class="col-lg">
              <p>Pendencias rodada atual</p>
            </div>

            <div class="col-lg">
              <p class="ftrigth">Rodada <button><i class="fas fa-chevron-left"></i> 0000 <i class="fas fa-chevron-right"></i></button></p>
            </div>

            <div class="table_one_inter table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Status</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Código</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Pix</th>
                    <th scope="col">Dta Nasc</th>
                    <th scope="col">X bilhetes</th>
                    <th scope="col">Ação</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Pedente</th>
                    <td>Wanderson Lima</td>
                    <td>C0000</td>
                    <td>(62) 9 9999-9999</td>
                    <td>(62) 9 9999-9999</td>
                    <td>25/09/1997</td>
                    <td>8758</td>
                    <td>Aprovar / Negar</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="infos_v1">
              <p>Pendencias rodada(s) anteriores</p>
            </div>
          </div>

          <div class="row table_one table_two">
            <div class="col-lg">
              <p>Quadro Resumo (Rodada)</p>
            </div>

            <div class="col-lg">
              <p class="ftrigth">Rodada <button><i class="fas fa-chevron-left"></i> 0000 <i class="fas fa-chevron-right"></i></button></p>
            </div>

            <div class="table_one_inter table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Agente</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Comissão</th>
                    <th scope="col">Bilhetes Ativios</th>
                    <th scope="col">Bilhetes Totais</th>
                    <th scope="col">Cms Bilhete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">A1059</th>
                    <td>Ouro</td>
                    <td>5,00%</td>
                    <td>18</td>
                    <td>23</td>
                    <td>R$87,00</td>
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
            <div class="col-lg-8 col-8 mauto">
              <p>Limite de Crédito:</p>
            </div>

            <div class="col-lg-4 col-4">
              <p><b>R$650,00</b></p>
            </div>

            <div class="col-lg-8 col-8 mauto">
              <p>Limite Utilizado:</p>
            </div>

            <div class="col-lg-4 col-4">
              <p><b>00,00</b></p>
            </div>
          </div>


          <div class="row perfil_v7">
            <div class="col-10 col-lg-8 mauto">
              <p>Status atual do meu Perfil: <b>Bronze</b></p>
            </div>

            <div class="col-2 col-lg-4">
              <img src="{{asset('assets_agent/img/dourado.png')}}">
            </div>
          </div>


          <div class="row perfil_v6">

            <!-- COLUNA 01 -->
            <div class="col-lg-1 col-1">
              <img src="{{asset('assets_agent/img/msg.png')}}">
            </div>

            <div class="col-lg-11 col-11">
              <p>Cliente: Mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada.</p>
            </div>

          </div>

          <div class="row perfil_v6">

            <!-- COLUNA 01 -->
            <div class="col-lg-1 col-1">
              <img src="{{asset('assets_agent/img/msg.png')}}">
            </div>

            <div class="col-lg-11 col-11">
              <p>Cliente: Mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada.</p>
            </div>

          </div>

          <div class="row perfil_v6">

            <!-- COLUNA 01 -->
            <div class="col-lg-1 col-1">
              <img src="{{asset('assets_agent/img/msg.png')}}">
            </div>

            <div class="col-lg-11 col-11">
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
        <div class="modal-body modal_v2">
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