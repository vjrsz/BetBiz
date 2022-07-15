@extends('DashboardClient.templates.master')
@section('title', 'Tabela de Premiação')
@section('content')
<section>
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-12 table_v1">
          @include('DashboardClient.includes.header')

          <div class="row table_one">
            <div class="col-lg">
              <p>Tabela de Premiação</p>
            </div>

            <div class="col-lg">
              <p>Rodada <button><i class="fas fa-chevron-left"></i> 0000 <i class="fas fa-chevron-right"></i></button></p>
            </div>

            <div class="col-lg">
              <p>Bilhetes: 85458</p>
            </div>

            <div class="col-lg">
              <p>Encerramento: 25/07/2022</p>
            </div>

            <div class="table_one_inter">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Pontos</th>
                    <th scope="col">Premiação</th>
                    <th scope="col">Acertadores</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">12 Pontos</th>
                    <td>R$25,00</td>
                    <td>8558 Bilhete</td>
                    <td><span>Em andamento</span></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="infos_v1">
              <p>Valor acumulado próximo sorteio (para 12 acertos)</p>
            </div>

          </div>

          <div class="col-lg-12 login_footer">
            <p>Copyright ©2022 betfair </p>
          </div>

        </div>

      </div>
    </div>
</section>
@endsection