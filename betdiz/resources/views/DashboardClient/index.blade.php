@extends('DashboardClient.templates.master')
@section('title', 'Dashboard')
@section('content')
<section>
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-8 table_v1">
          @include('DashboardClient.includes.header')

          <div class="row table_one">
            <div class="col-lg">
              <p>Bilhetes Rodada</p>
            </div>

            <div class="col-lg">
              <p>Status: Em andamento</p>
            </div>

            <div class="col-lg">
              <p>000</p>
            </div>

            <div class="col-lg">
              <button>Proxima Rodada <i class="fas fa-arrow-right"></i></button>
            </div>

            <div class="table_one_inter table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th class="text-center" scope="col">
                      <span><a href="">C</a></span> 
                      <span class="space_table"><a href="">E</a></span> 
                      <span><a href="">F</a></span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">25/09/2022</th>
                    <td>18:25</td>
                    <td class="text-center">
                      <button>Flamengo</button>
                      <a href=""><img src="{{asset('assets_client/img/positive.png')}}"></a>
                      <a href=""><img src="{{asset('assets_client/img/negative.png')}}"></a>
                      <a href=""><img src="{{asset('assets_client/img/negative.png')}}"></a>
                      <button>Corithians</button>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">25/09/2022</th>
                    <td>18:25</td>
                    <td class="text-center">
                      <button>Flamengo</button>
                      <a href=""><img src="{{asset('assets_client/img/positive.png')}}"></a>
                      <a href=""><img src="{{asset('assets_client/img/negative.png')}}"></a>
                      <a href=""><img src="{{asset('assets_client/img/negative.png')}}"></a>
                      <button>Corithians</button>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">25/09/2022</th>
                    <td>18:25</td>
                    <td class="text-center">
                      <button>Flamengo</button>
                      <a href=""><img src="assets_client/img/positive.png"></a>
                      <a href=""><img src="assets_client/img/negative.png"></a>
                      <a href=""><img src="assets_client/img/negative.png"></a>
                      <button>Corithians</button>
                    </td>
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
              <img type="button" data-bs-toggle="modal" data-bs-target="#modal_v3" src="{{asset('assets_client/img/perfil.png')}}">
            </div>

            <div class="col-lg-10 mauto">
              <h2 type="button" data-bs-toggle="modal" data-bs-target="#modal_v3">Bem vindo, Rafael (C0000)</h2>
              <p>Seu agente, Roberto (A0000)</p>
            </div>
          </div>

          <div class="row perfil_v2">
            <div class="col-lg-8 mauto">
              <p>Saldo atual: <b>R$2.000,00</b></p>
            </div>

            <div class="col-lg-4">
              <button type="button" data-bs-toggle="modal" data-bs-target="#modal_v2">Resgatar</button>
            </div>
          </div>


          <div class="row perfil_v3">
            <div class="col-lg-12">
              <p>Premiação Próxima Rodada</p>
            </div>
          </div>


          <div class="row perfil_v4">

            <!-- COLUNA 01 -->
            <div class="col-lg-8">
              <p>Expectativa</p>
            </div>

            <div class="col-lg-4">
              <p><b>R$00,00</b></p>
            </div>

            <hr>

            <!-- COLUNA 02 -->
            <div class="col-lg-8">
              <p>Lider (7 ou mais Pt)</p>
            </div>

            <div class="col-lg-4">
              <p><b>1.000,00</b></p>
            </div>

            <hr>

            <!-- COLUNA 03 -->
            <div class="col-lg-8">
              <p>Vice Lider (7 ou mais Pt)</p>
            </div>

            <div class="col-lg-4">
              <p><b>425,00</b></p>
            </div>

            <hr>

            <!-- COLUNA 04 -->
            <div class="col-lg-8">
              <p>Zero Pontos</p>
            </div>

            <div class="col-lg-4">
              <p><b>175,00</b></p>
            </div>

            <hr>

            <!-- COLUNA 05 -->
            <div class="col-lg-8">
              <p>Jackpot (12 Pt)</p>
            </div>

            <div class="col-lg-4">
              <p><b>10.000,00</b></p>
            </div>

            </div>


            <div class="row perfil_v5">
              <div class="col-lg-12">
                <p>Para realizar seu jogo, enviar Pix para (11) 9999-999. Verificar data/horário limite desta rodada.</p>
                <img src="{{asset('assets_client/img/banner.png')}}">
              </div>
            </div>

        </div>
      </div>
    </div>
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
              <img src="assets_client/img/perfil.png">
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
</section>
@endsection